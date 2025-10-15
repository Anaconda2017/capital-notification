<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactMapRequest extends FormRequest
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
            'email' => 'required|email',
            'en_address' => 'required',
            'ar_address' => 'required',
            'phone' => 'required',
            'working_days_in_en' => 'required', 
            'working_days_in_ar' => 'required', 
            'instagram' => 'required',
            'facebook' => 'required',
            'tweeter' => 'required',
            'watus_num' => 'required',
            'flag_img' => 'mimes:jpg,jpeg,png,svg,webp',
            'map_link' => 'required',
        ];
    }
}
