<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'abouts_name'             => 'required',
                'abouts_birthday'         => 'required',
                'abouts_city'             => 'required',
                'abouts_study'            => 'required',
                'abouts_website'          => 'required',
                'abouts_interests'        => 'required',
                'abouts_degree'           => 'required',
                'abouts_description'      => 'required',
                'contacts_phone'          => 'required',
                'contacts_email'          => 'required',
                'contacts_address'        => 'required',
                'contacts_facebook'       => 'required',
                'contacts_linkedin'       => 'required',
                'contacts_github'         => 'required',
                'contacts_instagram'      => 'required'
        ];
    }

    public function messages()
        {
            return [
                'name.required'           => 'Name is required',
                'birthday.required'       => 'Birthday is required',
                'city.required'           => 'City is required',
                'study.required'          => 'Study is required',
                'website.required'        => 'Website is required',
                'interests.required'      => 'Interests is required',
                'degree.required'         => 'Degree is required',
                'description.required'    => 'Description is required',
                'phone.required'          => 'Phone is required',
                'email.required'          => 'Email is required',
                'address.required'        => 'Address is required',
                'facebook.required'       => 'Facebook is required',
                'linkedin.required'       => 'Linkedin is required',
                'github.required'         => 'Github is required',
                'instagram.required'      => 'Instagram is required',
            ];
        }
}
