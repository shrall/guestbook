<?php

namespace App\Http\Controllers\creator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'event';
        $events = Event::all();
        return view('creator.event.index', compact('events','pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'event';
        $users = User::all();
        return view('creator.event.create', compact('pages','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|unique:events',
            'description'=>'required',
            'created_by'=>'required',
            'event_date'=>'required'
        ]);

        Event::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'created_by' => $data['created_by'],
            'event_date' => $data['event_date']
        ]);

        return redirect('/event')->with('success', 'Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $events = Event::all()->except($event->id)->pluck('id');
        $guestList = User::whereNotIn('id', function ($query) use ($events) {
            $query->select('user_id')->from('event_user')
                ->whereNotIn('event_id', $events);
        })->where('role_id', 3)->get();

        return view('creator.event.detail', compact('event', 'guestList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $pages = 'event';
        return view('creator.event.edit', compact('event', 'pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->update($request->all());
        return redirect()->route('creator.event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event->delete();
        return redirect()->back();
    }
}
