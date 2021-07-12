<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    function userLogin(Request $request)
    {
        return $request->input();

        // validate requests
        $request-> validate([
            
        ]);
       
    }   
}
