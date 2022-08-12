<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserMessagesRequest extends FormRequest
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
                'name'  => 'required',
                'email'  => 'required',
                'subject'  => 'required',
                'message'  => 'required|min:20',
                
    
            ];
        }
        public function messages()
        {
            return [
                'name.required' => 'User name is required',
                'email.required' => 'User email is required',
                'subject.required' => 'Message subject is required',
                'message.required' => 'Message is required'
            ];
        }
    }
    
