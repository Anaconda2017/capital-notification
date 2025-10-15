<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'blog_sub_category_id' => 'required',
            'ar_title' => 'required',
            'ar_text' => '',
            'main_image' => 'required|mimes:jpg,jpeg,png,svg,webp',
            'status' => 'required'
        ];
    }
}
