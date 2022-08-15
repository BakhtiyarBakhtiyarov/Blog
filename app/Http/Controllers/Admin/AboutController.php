<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUpdateRequest;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Support\Str;


class AboutController extends Controller
{
    public function index()
    {
        $abouts   = About::first();
        $contacts = Contact::first();
        return view('admin.about.index',compact('abouts','contacts'));
    }

    public function update(AboutUpdateRequest $request)
    {
        $about   = About::where('id',1)->first();
        @unlink(public_path('img/about_images/'. $about->image));

        if($request->hasFile('abouts_image'))
        {
            $image = $request->file('abouts_image');
            $name = Str::random(16) . '.' . $image->getClientOriginalExtension();
            $directory = public_path('img/about_images/');
            $image->move($directory, $name);
        }

        
        $abouts = About::where('id',1)->update([
            'name'             => $request->abouts_name,
            'birthday'         => $request->abouts_birthday,
            'city'             => $request->abouts_city,
            'study'            => $request->abouts_study,
            'website'          => $request->abouts_website,
            'interests'        => $request->abouts_interests,
            'degree'           => $request->abouts_degree,
            'description'      => $request->abouts_description
        ]);

        $contacts = Contact::where('id',1)->update([
            'phone'       => $request->contacts_phone,
            'email'       => $request->contacts_email,
            'address'     => $request->contacts_address,
            'facebook'    => $request->contacts_facebook,
            'linkedin'    => $request->contacts_linkedin,
            'github'      => $request->contacts_github,
            'instagram'   => $request->contacts_instagram,
        ]);

        
        
        if ($abouts && $contacts)
        {
            return redirect()->route('about.index')->with('success','Melumat ugurla redakte olundu!!!');
        }
        else{
            return redirect()->route('about.index')->with('errors','Xeta bas verdi!!!');
        }
    }

    



}
