<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUpdateeUser extends FormRequest
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
            'name' => 'required|max:225',
            'email' => 'required|max:225',
            'password' => 'required|max:225',
            
                 
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên Tài khoảnkhông được để trống',
            'email.required' => 'email Tài khoản không được để trống',
            'password.required' => 'Mật Khẩu Tài khoảnkhông được để trống',
            
            
        ];
    }
}
