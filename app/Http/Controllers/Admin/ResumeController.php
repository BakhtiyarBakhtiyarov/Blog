<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;
use App\Http\Requests\ResumeUpdateRequest;

class ResumeController extends Controller
{
    public function index($id){
        $resume = Resume::get();
        return view('admin.resume.index',compact('resume'));
    }

    public function update(ResumeUpdateRequest $request)
    {
        
        
        $resume = Resume::where('id',$request->id_resume)->update([
            'resume_type'             => $request->resume_resume_type,
            'start_date'             => $request->resume_start_date,
            'end_date'             => $request->resume_end_date,
            'title'             => $request->resume_title,
            'description'             => $request->resume_description
        ]);
        if ($resume)
        {
            return redirect()->route('resume.index',$resume->id)->with('success','Melumat ugurla redakte olundu!!!');
        }
        else{
            return redirect()->route('resume.index',$resume->id)->with('errors','Xeta bas verdi!!!');
        }  
}
}
