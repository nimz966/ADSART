<?php

namespace App\Http\Controllers;

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
    // login login copytest
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
            return back()->with('Wrong email address!');
        }else {
            //check password
            if(Hash::check($request-> password,$userInfo-> password)){

            }else{
                return back()-> with('Incorrect password!');
            }
        }
        
    }
}
