<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedbackRequest extends FormRequest
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
            'name' => 'required',
            'ar_name' => 'required',
            'email' => 'required',
            'message'=> 'required',
            'ar_message' => 'required',
            'user_image' => 'required|mimes:jpg,jpeg,png,svg,webp',
        ];
    }
}
