<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeSliderRequest extends FormRequest
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

            'ar_title' => 'required' ,
            'ar_text' => 'required' ,
            'slider_image' => 'mimes:jpg,jpeg,png,svg,webp' ,
            
            
        ];
    }
}
