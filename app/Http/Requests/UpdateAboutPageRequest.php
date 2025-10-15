<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutPageRequest extends FormRequest
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
            'about_image' => 'mimes:jpg,jpeg,png,svg,webp',
            'ar_about_small_title' => 'required',
            'ar_about_title' => 'required',
            'ar_about_text' => 'required',

            'vision_image' => 'mimes:jpg,jpeg,png,svg,webp',
            'ar_vision_title' => 'required',
            'ar_vision_text' => 'required',

            'mission_image' => 'mimes:jpg,jpeg,png,svg,webp',
            'ar_mission_title' => 'required',
            'ar_mission_text' => 'required',

            'goal_image' => 'mimes:jpg,jpeg,png,svg,webp',
            'ar_goal_title' => 'required',
            'ar_goal_text' => 'required',
            
            
        ];
    }
}
