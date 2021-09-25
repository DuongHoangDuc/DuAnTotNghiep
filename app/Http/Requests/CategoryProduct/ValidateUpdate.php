<?php

namespace App\Http\Requests\CategoryProduct;

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
            'category_name' => 'required|max:225',
            'category_slug' => 'required|max:225'
        ];
    }
    public function messages(){
        return [
            'category_name.required' => '',
            'category_slug.required' => ''  
        ];
    }
}
