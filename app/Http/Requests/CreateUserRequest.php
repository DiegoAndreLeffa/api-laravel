<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'cpf' => ['required'],
            'password' => ['required', 'min:7'],
            'type' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nome é obrigatório',
            'cpf.required' => 'CPF é obrigatório',
            'password.required' => 'Senha é obrigatório',
            'password.min' => 'Senha deve conter no mínimo 7 caracteres',
            'email.required' => 'Email é obrigatório',
            'email.email' => 'Email deve ser um endereço válido',
            'type.required' => 'Tipo é obrigatório',
        ];
    }
}
