<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Comment;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    // Display events backOffice
    public function index()
    {
        $commentCount = Comment::count();
        $events = Event::with('creator')->get();
        return view('events.event', compact('events', 'commentCount'));
    }
    // Display event frontOffice
    public function displayEvents(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');
        $events = Event::join('users', 'events.user_id', '=', 'users.id')
            ->select('events.*', 'users.name as username')
            ->when($search, function ($query) use ($search) {
                return $query->where('events.title', 'like', "%$search%")
                    ->orWhere('events.description', 'like', "%$search%")
                    ->orWhere('users.name', 'like', "%$search%");
            })
            ->when($category, function ($query) use ($category) {
                return $query->where('events.category', $category);
            })
            ->paginate(3); 
        return view('events.frontOffice.eventFrontOffice', compact('events'));
    }


    // Display the event creation form
    public function create()
    {
        $commentCount = Comment::count();
        $users = User::all();

        return view('events.add', compact('users', 'commentCount'));
    }

    // Create event
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'image' => 'required',
            'category' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath;
        }
        $user = Auth::user();
        $event = new Event($validatedData);
        $event->user_id = $user->id;
        $event->save();
        return back();
    }



    //delete event
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('showEvent');
    }



    //edit events
    public function edit(Event $event)
    {
        $commentCount = Comment::count();
        return view('events.edit', compact('event', 'commentCount'));
    }



    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $event->update($validatedData);
        return redirect()->route('showEvent');
    }

    public function participateInEvent(Event $event)
    {
        if (auth()->check()) {
            $user = auth()->user();
            if (!$event->participants->contains($user)) {
                $event->participants()->attach($user);
            } else {
                // User is already a participant
            }
            return redirect()->route('events', $event->id);
        } else {
        }
    }
}
