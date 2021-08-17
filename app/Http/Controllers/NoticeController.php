<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
     //Publish Notice
     public function addNotice(Request $request)
     {
         $notice = new Notice;
         $notice->description = $request->input('description');
         $notice->user_id = $request->input('user_id');
         $save = $notice->save();
        if ($save) {
            return back()->with('success', 'Notice has been succsessfuly published');
        } else {
            return back()->with('fail', 'Something went wrong, try agin later');
        }
         //$notice->save();
         //$data = Notice::all();
         //return view('admin\notices')->with('tasks', $data);
     }
 
     //delete Notice
     public function deleteNotice($notice_id)
     {
         $data = Notice::find($notice_id);
         $data->delete();
         return redirect()->back();
     }
}