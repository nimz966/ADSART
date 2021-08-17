<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class userAuth extends Controller
{
    function checkLogin(Request $request)
    {
        // validate requests
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(

            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );

        if (Auth::attempt($user_data)) {
            return redirect('/home');
        } else {
            return back()->with('error', 'Wrong loging details');
        }

        // $userInfo = user_new::where('email', '', $request->email)->first();
        // if (!$userInfo) {
        //     return back()->with('Wrong email address');

        // } else {
        //     //check password
        //     if (Hash::check($request->password, $userInfo->password)) {
        //         return redirect('/home');
        //     } else {
        //         return back()->with('Incorrect password');
        //     }
        // }
    }

    function succussLogin()
    {
        return view('/home');
    }

    function logout()
    {
        Auth::logout();
        return redirect('main');
    }
}
