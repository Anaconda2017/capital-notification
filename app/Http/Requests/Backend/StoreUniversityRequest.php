<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StoreUniversityRequest extends FormRequest
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
            
            'en_name' => 'required', 
            'ar_name' => 'required', 
            
            'en_about_the_university' => 'required', 
            'ar_about_the_university' => 'required',
            
            'en_why_title' => '',
            'ar_why_title' => '',
            'en_why_text' => '',
            'ar_why_text' => '',
            
            'en_rank_title' => '',
            'ar_rank_title' => '',
            'en_rank_text' => '',
            'ar_rank_text' => '',
            
            'en_program_title' => '',
            'ar_program_title' => '',
            'en_program_text' => '',
            'ar_program_text' => '',
            
            'en_graduated_title' => '',
            'ar_graduated_title' => '',
            'en_graduated_text' => '',
            'ar_graduated_text' => '',
            
            
            
            'en_university_type' => 'required',
            'university_site' => 'required|url',
            'en_governorate' => 'required',
            'ar_governorate' => 'required',
            'en_address' => 'required',
            'ar_address' => 'required',
            'destination_id' => 'required|integer',
            'faculties' => 'array',
            'logo' => 'required|mimes:jpg,jpeg,png,svg,webp',
        ];
    }
}
