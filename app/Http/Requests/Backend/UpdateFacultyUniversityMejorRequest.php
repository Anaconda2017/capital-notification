<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFacultyUniversityMejorRequest extends FormRequest
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
            'en_title_condition' => '',
            'ar_title_condition' => '',
            'en_text_condition' => '',
            'ar_text_condition' => '',
            'en_title_document' => 'required',
            'ar_title_document' => 'required',
            'en_text_document' => 'required',
            'ar_text_document' => 'required',
        ];
    }
}
