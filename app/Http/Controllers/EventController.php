<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
class EventController extends Controller
{
    // create event
    public function createEvent(Request $request)
    {
        $rules = [
            "event_date" => "required",
            "standby_Date" => "required",
            "event_name" => "required|max:200",
            "location" => "required",
            "starting_time" => "required",
            "ending_time" => "required",
            "standby_time" => "required",
            "no_of_cams" => "required"
           
        ];

        $request->validate($rules);

        $event = new Event;
        $event->event_date = $request->input('event_date');
        $event->standby_date = $request->input('standby_Date');
        $event->event_name = $request->input('event_name');
        $event->location = $request->input('location');
        $event->starting_time = $request->input('starting_time');
        $event->ending_time = $request->input('ending_time');
        $event->standby_time = $request->input('standby_time');
        $event->no_of_cams = $request->input('no_of_cams');
        $event->special_requirements = $request->input('special_requirements');
        $save = $event->save();
        if ($save) {
            return back()->with('success', 'New event has been succsessfuly added');
        } else {
            return back()->with('fail', 'Something went wrong, try agin later');
        }
    }

    public function update(Request $request)
    {
        $update = [
            'event_date' => $request->event_date,
            'standby_date' => $request->standby_date,
            'event_name' => $request->event_name,
            'location' => $request->location,
            'starting_time' => $request->starting_time,
            'ending_time' => $request->ending_time,
            'standby_time' => $request->standby_time,
            'no_of_cams' => $request->no_of_cams,

        ];
        $res = DB::table('events')->where('event_id', $request->event_id)->update($update);
        return redirect()->back()->with('success', 'Has been updated successfully');
    }

    public function deleteEvent($event_id)
    {
        $data = Event::find($event_id);
        $data->delete();
        return redirect()->back();
    }
}