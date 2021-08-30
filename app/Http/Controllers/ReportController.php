<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Positions;
use App\Models\User;


class ReportController extends Controller
{
    public function employeeEvent(Request $request)
    {
        $employees = User::where('user_type', 'employee')->get()->toArray();
        $employeeId = $request->employeeId;

        if (!$employeeId) {
            return view('admin/employee-event-report', compact('employees'));
        }

        $user = User::where([
            'user_id' => $employeeId,
            'user_type' => 'employee'
        ])->first();

        $userEvents = $user->userEvents()->get();

        $eventData = [];
        foreach ($userEvents as $userEvent) {
            $events = $userEvent->events()->get();

            foreach ($events as $event) {
                $positions = $event->positions($employeeId)->get(['description'])->toArray();
                $posList = array_map(function ($pos) {
                    return $pos['description'];
                }, $positions);

                $eventData[$event->event_id] = [
                    'id' => $event->event_id,
                    'name' => $event->event_name,
                    'date' => $event->event_date,
                    'status' => $event->status,
                    'positions' => $posList,
                ];
            }
        }

        return view('admin/employee-event-report', compact(
            'employees',
            'user',
            'eventData'
        ));
    }
}
