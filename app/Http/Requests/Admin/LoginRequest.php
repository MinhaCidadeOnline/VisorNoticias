<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Opss, informe seu email!',
            'email.email' => 'Opss, informe um email com formato válido',
            'password.required' => 'Opss, informe sua senha'
        ];
    }
}
