<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
        $user = new user_new;
        $user->user_name = $request->input('user_name');
        $user->address = $request->input('address');
        $user->phone_no = $request->input('phone_no');
        $user->user_type = ("customer");
        $user->email = $request->input('email');
        $user->save();
        $data = user_new::all();
        return view('admin\customers')->with('tasks', $data);
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
        $event = new Event;
        $event->event_date = $request->input('event_date');
        $event->standby_date = $request->input('Standby_Date');
        $event->event_name = $request->input('event_name');
        $event->location = $request->input('location');
        $event->starting_time = $request->input('starting_time');
        $event->standby_time = $request->input('standby_time');
        $event->no_of_cams = $request->input('no_of_cams');
        $event->special_requirements = $request->input('special_requirements');
        $event->save();
    }
}
