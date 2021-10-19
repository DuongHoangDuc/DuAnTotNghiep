<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUpdateRole extends FormRequest
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
            'display_name' => 'required|max:225',      
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên Vai Trò không được để trống',
            'display_name.required' => 'Mô tả vai trò không được để trống',
        ];
    }
}
