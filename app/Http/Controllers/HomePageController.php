<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\About;
use App\Models\UserMessages;
use App\Models\Resume;
use App\Models\Services;
use App\Http\Requests\UserMessagesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;




class HomePageController extends Controller
{
    public function index(){
        $contact     = Contact::where('id', 1)->first();
        $about       = About::where('id', 1)->first();
        $birthdate   = $about->birthday;
        $age         = Carbon::parse($birthdate)->age;
        $educations  = Resume::where('is_deleted', 0)->where('resume_type', 1)->get();
        $experiences = Resume::where('is_deleted', 0)->where('resume_type', 2)->get();  
        return view('homepage', compact('contact','about','age','educations','experiences'));
    }

    public function user_messages(UserMessagesRequest $request)
    {
        // dd($request->all());
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
 