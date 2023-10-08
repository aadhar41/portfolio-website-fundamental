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
            'email' => ['required', 'email'],
            'password' => 'required',
        ];
    }


    public function messages(): array
    {
        return [
            'email.required' => 'Email field can not be empty!',
            'email.email' => 'Please enter a valid email address!',
            'password.required' => 'Password field cannot be empty!',
            'password.*' => ":attribute should contain only letters and numbers",
        ];
    }
}
