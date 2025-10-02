<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDestinationRequest extends FormRequest
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
            'en_about_the_destination' => 'required',
            'ar_about_the_destination' => 'required',
            'flag' => 'mimes:jpg,jpeg,png,svg',
            'featured_image' => 'mimes:jpg,jpeg,png,svg,webp|dimensions:min_width=650,min_height=420',
            'banner_image' => 'mimes:jpg,jpeg,png,svg,webp|dimensions:min_width=1600,min_height=450',
        ];
    }
}
