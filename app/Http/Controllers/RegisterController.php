<?php

namespace App\Http\Controllers;

use App\Models\user_new;
use Illuminate\Http\Request;
//use App\models\user;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $user = new user_new;
        $user->user_name = $request->input('username');
        $user->address = $request->input('address');
        $user->phone_no = $request->input('phone_no');
        $user->user_type = $request->input('user_type');
        $user->email = $request->input('email');
        $user->save();
        return redirect('login')->with('status', 'register hase done successfully ');
    }
}
