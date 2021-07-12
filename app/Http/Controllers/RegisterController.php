<?php

namespace App\Http\Controllers;

use App\Models\user_new;
use App\Models\Notice;
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
        return redirect('login')->with('status', 'register has done successfully ');
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
        $data=user_new::all();
        return view('admin\customers')->with('tasks',$data);
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
    $data=user_new::all();
    return view('admin\employees')->with('tasks',$data);
}

//delete user (employees,customers)
public function deleteUser($user_id)
{
  $data=user_new::find($user_id); 
  $data->delete();
  return redirect()->back();
}

//Publish Notice
public function addNotice(Request $request){
    $notice = new Notice;
    $notice->description = $request->input('description');
    $notice->user_id = $request->input('user_id');
    $notice->save();
    $data=Notice::all();
    return view('admin\notices')->with('tasks',$data);
}

//delete Notice
public function deleteNotice($notice_id)
{
  $data=Notice::find($notice_id); 
  $data->delete();
  return redirect()->back();
}

}