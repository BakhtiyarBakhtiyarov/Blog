<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUpdateRequest;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;


class AboutController extends Controller
{
    public function index($id)
    {
        $abouts   = About::first();
        $contacts = Contact::first();
        return view('admin.about.index',compact('abouts','contacts'));
    }

    public function update(AboutUpdateRequest $request)
    {
        // $contacts = Contact::first();

        // @unlink(public_path('admin/img/category_images/'. $contacts->image));
        
        $abouts = About::where('id',$request->id_abouts)->update([
            'name'             => $request->abouts_name,
            'birthday'         => $request->abouts_birthday,
            'city'             => $request->abouts_city,
            'study'            => $request->abouts_study,
            'website'          => $request->abouts_website,
            'interests'        => $request->abouts_interests,
            'degree'           => $request->abouts_degree,
            'description'      => $request->abouts_description,
        ]);

        $contacts = Contact::where('id',$request->id_contacts)->update([
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
            return redirect()->route('about.index',$abouts->id)->with('success','Melumat ugurla redakte olundu!!!');
        }
        else{
            return redirect()->route('about.index',$abouts->id)->with('errors','Xeta bas verdi!!!');
        }
    }


}
