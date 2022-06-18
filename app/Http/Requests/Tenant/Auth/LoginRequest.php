<?php

namespace App\Http\Requests\Tenant\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'email' => ['required_without:name', 'exists:users,email'],
            'name' => ['required_without:email', 'exists:users,name'],
            'password' => ['required'],
            'remember_me' => ['nullable', 'boolean']
        ];
    }
}
