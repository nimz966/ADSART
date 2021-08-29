<?php

namespace App\Http\Controllers;



use App\Models\Event;

use App\Models\Notice;
use App\Models\Positions;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

//use App\models\user;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // inserting data into the user table when reg: 

        $user = new User;
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

        $user = new User;
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
        $user = new User;
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
        $user = new User();

        $user->user_name = $request->input('user_name');
        $user->address = $request->input('address');
        $user->phone_no = $request->input('phone_no');
        $user->user_type = ("employee");
        $user->email = $request->input('email');

        if ($user->save()) {
            $user->positions()->sync($request->positions);
        } else {
            return redirect()->back()->with('errors', 'Error occurred while creating new employee.');
        }
        return redirect()->back()->with('success', 'Employee has been added successfully.');
    }

    //delete user (employees,customers)
    public function deleteUser($user_id)
    {
        $data = User::find($user_id);
        $data->delete();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $update = [
            'user_name' => $request->user_name,
            'address' => $request->address,
            'phone_no' => $request->phone_no,
            'email' => $request->email

        ];
        $res = DB::table('users')->where('user_id', $request->user_id)->update($update);
        return redirect()->back()->with('success', 'Has been updated successfully');
    }
}
