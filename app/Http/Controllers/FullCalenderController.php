<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class FullCalenderController extends Controller
{
	public function index(Request $request)
	{
		if ($request->ajax()) {
			// $data = Event::where('event_date', '>=',  date("Y-m-d", strtotime($request->start)));
			$data = Event::whereDate('event_date', '>=', $request->start)
				->whereDate('event_date',   '<=', $request->end)
				->get(['event_id', 'event_name', 'event_date', 'starting_time', 'ending_time']);

			foreach ($data as $event) {
				$mappedData[] = [
					'title' => $event->event_name,
					'start' => $event->event_date . $event->starting_time,
					'end' => $event->event_date . $event->ending_time,
				];
			}

			return response()->json($mappedData);
		}

		return redirect('/home');
	}

	public function action(Request $request)
	{
		if ($request->ajax()) {
			if ($request->type == 'add') {
				$event = Event::create([
					'event_name'		=>	$request->event_name,
					'starting_time'		=>	$request->starting_time,
					'ending_time'		=>	$request->ending_time
				]);

				return response()->json($event);
			}

			if ($request->type == 'update') {
				$event = Event::find($request->event_id)->update([
					'event_name'		=>	$request->event_name,
					'starting_time'		=>	$request->starting_time,
					'ending_time'		=>	$request->ending_time
				]);

				return response()->json($event);
			}

			if ($request->type == 'delete') {
				$event = Event::find($request->event_id)->delete();

				return response()->json($event);
			}
		}
	}
}
