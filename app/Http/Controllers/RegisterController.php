<?php

namespace App\Http\Controllers;


use App\Models\Event;


use App\Models\Notice;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\user_new;

//use App\models\user;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // inserting data into the user table when reg: 

        $user = new user_new;
        $user->user_name = $request->input('username');
        $user->address = $request->input('address');
        $user->phone_no = $request->input('phone_no');
        $user->user_type = $request->input('user_type');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        //$user->password = Hash::make($request->password);

        //validating requests

        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:10',
            'user_type' => 'required'
        ]);

        $save = $user->save();
        if ($save) {
            return back()->with('success', 'New user has been succsessfuly added');
        } else {
            return back()->with('fail', 'Something went wrong, try agin later');
        }
    }

    //add new customer in customer page
    //show customer details in the table
    public function addCustomer(Request $request)
    {
        $rules = [
            "user_name" => "required",
            'address' => "required",
            "phone_no" => "required",
            "email" => "required|email"
        ];

        $request->validate($rules);

        $user = new user_new;
        $user->user_name = $request->input('user_name');
        $user->address = $request->input('address');
        $user->phone_no = $request->input('phone_no');
        $user->user_type = "customer";
        $user->email = $request->input('email');
        $save = $user->save();
        if ($save) {
            return back()->with('success', 'New user has been succsessfuly added');
        } else {
            return back()->with('fail', 'Something went wrong, try agin later');
        }
    }

    //addd new customer in event page
    public function insertCustomer(Request $request)
    {
        $user = new user_new;
        $user->user_name = $request->input('user_name');
        $user->address = $request->input('address');
        $user->phone_no = $request->input('phone_no');
        $user->user_type = ("customer");
        $user->email = $request->input('email');
        $user->save();
        return redirect()->back();
    }

    //add new employee 
    //show employee details in the table
    public function addEmployee(Request $request)
    {
        $user = new user_new;
        $user->user_name = $request->input('user_name');
        $user->address = $request->input('address');
        $user->phone_no = $request->input('phone_no');
        $user->user_type = ("employee");
        $user->email = $request->input('email');
        $user->save();
        $data = user_new::all();
        return view('admin\employees')->with('tasks', $data);
    }

    //delete user (employees,customers)
    public function deleteUser($user_id)
    {
        $data = user_new::find($user_id);
        $data->delete();
        return redirect()->back();
    }
    // create event
    public function createEvent(Request $request)
    {
        $rules = [
            "event_date" => "required",
            "standby_Date" => "required",
            "event_name" => "required|max:200",
            "location" => "required",
            "starting_time" => "required",
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
        $event->standby_time = $request->input('standby_time');
        $event->no_of_cams = $request->input('no_of_cams');
        $event->special_requirements = $request->input('special_requirements');
        $event->save();
        return redirect()->back();
    }




    //Publish Notice
    public function addNotice(Request $request)
    {
        $notice = new Notice;
        $notice->description = $request->input('description');
        $notice->user_id = $request->input('user_id');
        $notice->save();
        $data = Notice::all();
        return view('admin\notices')->with('tasks', $data);
    }

    //delete Notice
    public function deleteNotice($notice_id)
    {
        $data = Notice::find($notice_id);
        $data->delete();
        return redirect()->back();
    }
}
