<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourGuideRequest extends FormRequest
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
            'name'=>'required|string|max:100',
            'phone'=>'required|numeric',
            'image' =>'required_without:id|mimes:jpg,png,PNG,jpeg',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'This Field Is Required',
            'name.string'=>'This Field Should Be String',
            'name.max'=>'This field must be no more than 100 characters long',
            'phone.required'=>'This Field Is Required',
            'phone.numeric'=>'This Field Should Be numeric',
            'image.required_without'=>'This Field Is Required',

        ];
    }
}
