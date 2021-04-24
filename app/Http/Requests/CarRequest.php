<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'car_model'=>'required|string|max:100',
            'car_price'=>'required|numeric',
            'car_image' =>'required_without:id|mimes:jpg,png,PNG,jpeg',
            'car_details'=>'required|string|max:10000',
//            'admin_id '=>'required|exists:admins,id',
        ];
    }
    public function messages()
    {
        return [
            'car_model.required'=>'This Field Is Required',
            'car_model.string'=>'This Field Should Be String',
            'car_model.max'=>'This field must be no more than 100 characters long',
            'car_price.required'=>'This Field Is Required',
            'car_price.numeric'=>'This Field Should Be numeric',
            'car_image.required_without'=>'This Field Is Required',
            'car_details.required'=>'This Field Is Required',
            'car_details.string'=>'This Field Should Be String',
            'car_details.max'=>'This field must be no more than 10000 characters long',
        ];
    }
}
