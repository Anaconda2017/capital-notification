<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
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
            'en_story' => 'required',
            'ar_story' => 'required',
            'story_image' => 'mimes:jpeg,png,jpg,gif,svg,webp',
            'en_mission' => 'required',
            'ar_mission' => 'required',
            'mission_image' => 'mimes:jpeg,png,jpg,gif,svg,webp',
        ];
    }
}
