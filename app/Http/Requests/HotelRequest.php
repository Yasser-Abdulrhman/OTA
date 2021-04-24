<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'hot_name'=>'required|string|max:100',
            'hot_price'=>'required|numeric',
            'hot_image' =>'required_without:id|mimes:jpg,png,PNG,jpeg',
            'hot_details'=>'required|string|max:10000',
            'hot_type'=>'required|string',
//            'admin_id '=>'required|exists:admins,id',
            'hot_address'=>'required|string',
        ];
    }
    public function messages()
    {
        return [
             'hot_name.required'=>'This Field Is Required',
             'hot_name.string'=>'This Field Should Be String',
             'hot_name.max'=>'This field must be no more than 100 characters long',
             'hot_price.required'=>'This Field Is Required',
             'hot_price.numeric'=>'This Field Should Be numeric',
             'hot_image.required_without'=>'This Field Is Required',
             'hot_details.required'=>'This Field Is Required',
             'hot_details.string'=>'This Field Should Be String',
             'hot_details.max'=>'This field must be no more than 10000 characters long',
             'hot_type.required'=>'This Field Is Required',
             'hot_type.string'=>'This Field Should Be String',
//             'admin_id.required'=>'This Field Is Required',
             'hot_address.required'=>'This Field Is Required',
             'hot_address.string'=>'This Field Should Be String'
        ];
    }
}
