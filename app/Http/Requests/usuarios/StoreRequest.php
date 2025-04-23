<?php

namespace App\Http\Requests\usuarios;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'age' => ['required', 'integer', 'min:18'],
            'position' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ];
    }

    /**
     * Get custom error messages for the validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección válida.',
            'email.unique' => 'El correo electrónico ya está en uso.',
            'age.required' => 'La edad es obligatoria.',
            'age.min' => 'La edad mínima es 18 años.',
            'position.required' => 'El cargo laboral es obligatoria.',
            'position.max' => 'El cargo laboral no puede tener más de 255 caracteres.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.'
        ];
    }
}
