<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomePageRequest extends FormRequest
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
            'Home_first_section_image' => 'mimes:jpg,jpeg,png,svg',
            
            'en_Home_first_section_title' => 'required',
            'ar_Home_first_section_title' => 'required',
            'en_Home_first_section_text' => 'required',
            'ar_Home_first_section_text' => 'required',
            
            'Home_second_section_image' => 'mimes:jpg,jpeg,png,svg',
            
            'en_Home_second_section_title' => 'required',
            'ar_Home_second_section_title' => 'required',
            'en_Home_second_section_text' => 'required',
            'ar_Home_second_section_text' => 'required',
            
            'Home_third_section_image' => 'mimes:jpg,jpeg,png,svg',
            
            'en_Home_third_section_title' => 'required',
            'ar_Home_third_section_title' => 'required',
            'en_Home_third_section_text' => 'required',
            'ar_Home_third_section_text' => 'required',
            
        ];
    }
}
