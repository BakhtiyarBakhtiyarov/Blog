<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;
use App\Http\Requests\ResumeUpdateRequest;

class ResumeController extends Controller
{
    public function index(){
        $resume = Resume::where('is_deleted', 0)->get();
        return view('admin.resume.index',compact('resume'));
    }

    public function create()
    {
        return view('admin.resume.create');
    }


    public function store(ResumeUpdateRequest $request)
    {
        
        $resume = new Resume();

        $resume->resume_type = $request->resume_resume_type;
        $resume->start_date = $request->resume_start_date;
        $resume->end_date = $request->resume_end_date;
        $resume->title = $request->resume_title;
        $resume->description = $request->resume_description;
        
        // dd($resume);
       if ($resume->save())
       {
           return redirect()->route('resume.index')->with('success','Resume added successfully!!!');
       }
       else{
           return redirect()->route('resume.create')->with('errors','Error happened!!!');
       }
    }

    public function edit($id)
    {
        $resume = Resume::where('id',$id)->first();
        return view('admin.resume.edit',compact('resume'));
    }

    public function update(ResumeUpdateRequest $request)
    {
        $resume = Resume::where('id',$request->resume_id )->update([
            'resume_type'             => $request->resume_resume_type,
            'start_date'              => $request->resume_start_date,
            'end_date'                => $request->resume_end_date,
            'title'                   => $request->resume_title,
            'description'             => $request->resume_description
        ]);

        // dd($resume);
        if ($resume)
        {
            return redirect()->route('resume.index')->with('success','Resume updated successfully!!!');
        }
        else{
            return redirect()->route('resume.index')->with('errors','Error happened!!!');
        }  
    }

    public function delete(Request $request){

        $resume = Resume::where('id',$request->id)->update([
            'is_deleted'      => 1
        ]);
                if($resume){
                    return "ok";
                }
                else{
                    return "no";
                }
            }

}
