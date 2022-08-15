<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserMessages;
use Illuminate\Http\Request;

class UserMessagesController extends Controller
{
    public function index()
    {
        $messages   = UserMessages::where('is_deleted', 0)->get();
        
        
        return view('admin.user_messages.index',compact('messages'));
    }

    public function delete(Request $request){

        $user_messages = UserMessages::where('id',$request->id)->update([
            'is_deleted'      => 1
        ]);
                if($user_messages){
                    return "ok";
                }
                else{
                    return "no";
                }
            }
}
