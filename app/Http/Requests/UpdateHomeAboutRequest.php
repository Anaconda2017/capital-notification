<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeAboutRequest extends FormRequest
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

            'ar_small_title' => 'required' ,
            'ar_main_title' => 'required' ,
            'ar_text' => 'required' ,
            'ar_meta_title' => 'required' ,
            'ar_meta_text'  => 'required' ,
            'main_image' => 'mimes:jpg,jpeg,png,svg,webp' ,
            
            
        ];
    }
}
