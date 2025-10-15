<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeCounterRequest extends FormRequest
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
            'ar_title' => 'required',
            'counter_number' => 'required',
            'counter_icon' =>'mimes:jpg,jpeg,png,svg,webp',
            'status' => 'required'
        ];
    }
}
