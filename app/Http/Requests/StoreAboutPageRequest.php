<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutPageRequest extends FormRequest
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
            'about_image' => 'required|mimes:jpg,jpeg,png,svg',
            
            'en_about_title' => 'required',
            'en_about_text' => 'required',
            
            'user_id' => 'required',
            
        ];
    }
}
