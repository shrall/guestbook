<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = "event";
        $attends = Auth::user()->attends;
        $events = Event::whereDoesntHave('guests', function (Builder $query) {
            $query->where('user_id', Auth::user()->id);
        })->get();
        // dd($events);
        return view('user.event.index', compact('pages', 'attends', 'events'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateData($request);
        $attend = Auth::user()->attends()->syncWithoutDetaching($request->event_id, ['is_approved' => '0']);
        return empty($attend) ? redirect()->back()->with('Fail', "Failed to submit request")
            : redirect()->back()->with('Success', 'Request Submitted');
    }

    private function validateData(Request $request)
    {
        return $request->validate([
            'event_id' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Auth::user()->attends()->detach($id);
        return redirect()->back()->with('Success', 'Request #('.$id.') canceled');
    }
}
