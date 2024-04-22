<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // This allows any user to make this request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required', // Ensures email is unique in 'users' table
            'email' => 'required|email|unique:users,email', // Ensures email is unique in 'users' table
            'password' => [
                'required',
                'string',
                'min:8', // Minimum 8 characters
                'regex:/[a-z]/',      // Must contain at least one lowercase letter
                'regex:/[A-Z]/',      // Must contain at least one uppercase letter
                'regex:/[0-9]/',      // Must contain at least one digit
                'regex:/[@$!%*#?&]/', // Must contain a special character
            ],
            'phone_number' => 'sometimes|string|max:255',
            'country' => 'sometimes|string|max:255',
            'type' => 'sometimes|in:merchant,customer',
            'about_us' => 'sometimes|string|max:1000',
            'whatsapp' => 'sometimes|string|max:255',
            'instagram' => 'sometimes|string|max:255',
            // Include other fields validation as needed
        ];
    }
}
