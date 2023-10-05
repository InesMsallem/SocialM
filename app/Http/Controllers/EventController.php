<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Display all events
    public function index()
    {
        $events = Event::all();
        return view('events.event', compact('events'));
    }

    // Display the event creation form
    public function create()
    {
        $users = User::all();
        return view('events.add', compact('users'));
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
        return view('events.edit', compact('event'));
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
