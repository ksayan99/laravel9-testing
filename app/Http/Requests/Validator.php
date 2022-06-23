<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validator extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:50',
            'mail' => 'required|email',
            'mobile' => 'required|numeric|min:10|max:10',
            'passwd' => 'required|min:8|max:12',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name can not be empty',
            'mail.required' => 'You must provide email',
            'mobile.required' => 'Please enter your number',
            'passwd.required' => 'Enter any valid password'
        ];
    }
}
