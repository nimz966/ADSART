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
           // return redirect('/home');
           $user = auth()->user(); 
           $user_type = $user->user_type;
           if($user_type == 'customer'){
            return view('customer.customerhome');
           

           }
           else{
            return redirect('/home');
           }
          // dd($user->user_type);
        } else {
            return back()->with('error', 'Wrong loging details');
        }
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
        // 
       // function succussLogin()
    
       // $user = auth()->user();
     //dd($user->user_type)
    //  $user_type = $user->user_type;
     
     
    //  if($user_type == 'customer'){
    //     return "hi";
    //  }
    //  else{
    //     return view('/home');
    //  }
     
         
     
 
    

    function succussLogin()
    {
        //return view('/home');
    //     $user = auth()->user(); 
	// dd($user->user_type);
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
