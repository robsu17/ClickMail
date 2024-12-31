<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'O campo email deve ser preenchido',
            'password.required' => 'O campo senha deve ser preenchido',
            'password.min' => 'O campo senha deve ter no mínimo 6 caracteres',
        ];
    }
}
