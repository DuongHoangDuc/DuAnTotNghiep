<?php

namespace App\Http\Requests\permission;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCreatePermission extends FormRequest
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
            'display_name' => 'required|max:225',        
        ];
    }
    public function messages(){
        return [
            'display_name.required' => 'Không để trống trường',    
        ];
    }
}
