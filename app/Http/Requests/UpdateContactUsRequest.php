<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactUsRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required' ,
            'phone' => 'required' ,
            'ar_address' => 'required' ,
            'map_link' => 'required' ,
            'facebook' => 'required' ,
            'linkedIn' => 'required' ,
            'snapChat' => 'required' ,
            'instagram' => 'required' ,
            'tiktok' => '' ,
            'youtube' => '' ,
            'tweet' => '' ,

            'contact_text' => 'required' ,
        ];
    }
}
