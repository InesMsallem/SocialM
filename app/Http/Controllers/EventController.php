<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Comment;

use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Display all events
    public function index()
    {
        $commentCount = Comment::count();
        $events = Event::all();
        return view('events.event', compact('events', 'commentCount'));
    }

    // Display the event creation form
    public function create()
    {
        $commentCount = Comment::count();
        $users = User::all();
        return view('events.add', compact('users', 'commentCount'));
    }


    // Store a new event in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        Event::create($validatedData);
        return redirect('dashboard/events');
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
}
