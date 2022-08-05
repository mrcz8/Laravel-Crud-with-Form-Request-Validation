<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class FormRequstValidation extends FormRequest
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
        $rules = [
            'fullname' => [
                'required',
                'string',
                'max:191',
            ],
            'age' => [
                'required',
                'digits:2',
            ],
        ];
        if($this->getMethod() == 'POST'){
            $rules += [
                'email' => [
                    'required',
                    'email',
                    'unique:cruds,email'
                ],
            ];
        }

        if($this->getMethod() == 'PUT'){
            $rules += [
                'email' => [
                    'required',
                    'email',
                    Rule::unique('cruds')->ignore($this->crud),
                ],
            ];
        }

        return $rules;
    }

    public function messages(){
        return [
            'fullname.required' => 'Please Enter Full Name',
            'email.required' => 'Please Enter Email'
        ];
    }
}
