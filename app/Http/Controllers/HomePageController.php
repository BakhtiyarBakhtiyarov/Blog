<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\About;
use App\Models\UserMessages;
use App\Models\Resume;
use App\Models\Services;
use App\Http\Requests\UserMessagesRequests;




class HomePageController extends Controller
{
    public function index(){
        $contact = Contact::where('id', 1)->first();
        $about = About::where('id', 1)->first();
        return view('homepage', compact('contact','about'));
    }

    public function user_messages(UserMessagesRequests $request)
    {
        $send = UserMessages::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'subject'   => $request->subject,
            'message'   => $request->message
            
        ]);
        if ($send)
        {
            return redirect()->route('home');
        }
       
    }

 }
 