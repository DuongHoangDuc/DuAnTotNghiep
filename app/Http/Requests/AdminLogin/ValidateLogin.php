<?php

namespace App\Http\Requests\AdminLogin;

use Illuminate\Foundation\Http\FormRequest;

class ValidateLogin extends FormRequest
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
            'email' => 'required|max:225',
            'password' => 'required|max:225'
        ];
    }
    public function messages(){
        return [
            'brand_name.required' => 'email không được để trống',
            'brand_slug.required' => 'Mật Khẩu không được để trống'          
        ];
    }
}
