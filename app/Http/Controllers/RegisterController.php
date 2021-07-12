<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_new;

//use App\models\user;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // inserting data into the Database 

        $user = new user_new;
        $user->user_name = $request->input('username');
        $user->address = $request->input('address');
        $user->phone_no = $request->input('phone_no');
        $user->user_type = $request->input('user_type');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $save = $user->save();
        if ($save) {
            return back()->with('success', 'New user has been succsessfuly added');
        } else {
            return back()->with('fail', 'Something went wrong, try agin later');
        }


        //validating requests
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:10',
            'user_type' => 'required'
        ]);
    }
}
