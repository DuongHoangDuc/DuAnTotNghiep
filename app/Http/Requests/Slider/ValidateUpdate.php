<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUpdate extends FormRequest
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
            'slider_name' => 'required',
            'slider_image' => 'required',
            'slider_desc' => 'required'
          
        ];
    }
    public function messages(){
        return [
            'slider_name.required' => 'Tên Slider không được để trống',
            'slider_image.required' => 'hình ảnh không được để trống',
            'slider_desc.required' => 'mô tả Slider không được để trống'
                      
        ];
    }
}
