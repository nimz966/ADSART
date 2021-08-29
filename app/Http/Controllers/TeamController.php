<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Positions;
use App\Models\Event;

class TeamController extends Controller
{

    function createTeam(Request $request)
    {
        $event = Event::find($request->id);

        $userEvents = $event->user_events()->get();

        $userPosition = [];
        foreach ($userEvents as $event) {
            $userPosition[$event->position_id][] = $event->user_id;
        }

        $positions = Positions::All();

        return view('admin/team-details', compact('positions', 'event', 'userPosition'));
    }


    function assignUsers(Request $request)
    {

        $event = Event::find($request->event_id);
        if ($event) {

            $event->users()->detach();

            if ($request->position) {
                foreach ($request->position as $posId => $userIds) {
                    foreach ($userIds as $id) {
                        // $pivotData[$id] = ['position_id' => $posId];
                        $event->users()->attach([$id => ['position_id' => $posId]]);
                    }
                }
            }
        } else {
            return redirect()->back()->with('errors', "Team assigned successfully");
        }

        return redirect()->back()->with('success', "Team assigned successfully");
    }
}
