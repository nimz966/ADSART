<?php

namespace App\Http\Controllers;

use App\Models\user_new;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userAuth extends Controller
{
    function userLogin(Request $request)
    {
        return $request->input('username');
        return $request->input('password');

        // validate requests
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max 10'
        ]);

        $userInfo = user_new::where('email', '', $request->email)->first();
        if($userInfo){
            return back()->with('Wrong email address');
        }else {
            //check password
            if(Hash::check($request-> password,$userInfo-> password)){

            }else{
                return back()-> with('Incorrect password');
            }
        }
        
    }
}
