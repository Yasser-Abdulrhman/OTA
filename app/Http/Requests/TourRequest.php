<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'tour_name'=>'required|string|max:100',
            'tour_price'=>'required|numeric',
            'tour_image' =>'required_without:id|mimes:jpg,PNG,png,jpeg',
            'tour_details'=>'required|string|max:10000',
            'tour_discount'=>'required|numeric',
            'start_date'=>'required',
            'end_date'=>'required',
            'tour_address'=>'required|string',
        ];
    }

    public function messages()
    {
        return [
            'required'=>'This Field Is Required',
            'tour_name.string'=>'This Field Should Be String',
            'tour_name.max'=>'This field must be no more than 100 characters long',
            'tour_price.numeric'=>'This Field Should Be numeric',
            'tour_image.required_without'=>'This Field Is Required',
            'tour_details.string'=>'This Field Should Be String',
            'tour_details.max'=>'This field must be no more than 10000 characters long',
            'tour_discount.numeric'=>'This Field Should Be numeric',
            'hot_type.string'=>'This Field Should Be String',
            'tour_address.string'=>'This Field Should Be String'
        ];
    }
}
