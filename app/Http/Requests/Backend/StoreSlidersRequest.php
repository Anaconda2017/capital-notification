<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StoreSlidersRequest extends FormRequest
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
            'en_title' => 'required',
            'ar_title' => 'required',
            'en_paragraph' => 'required',
            'ar_paragraph' => 'required',
            'image' =>'required|mimes:jpg,jpeg,png,svg,webp'
        ];
    }
}
