<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserMessages;
use App\Models\About;
use Illuminate\Http\Request;

class UserMessagesController extends Controller
{
    public function index()
    {
        $messages   = UserMessages::get();
        $abouts   = About::first();
        
        return view('admin.user_messages.index',compact('messages',));
    }
}
