<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveUserRequrst extends FormRequest
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
            'username' => 'required|string|max:50|unique:users,username',
            'name' => 'string|max:50', // Display name
            'email' => 'email|unique:users,email|max:100',
            'usertype' => 'string',
            'password' => 'required|string|min:8',
            'avatar' => 'nullable|image|max:2048',
            'status' => 'required|integer',
        ];
    }
}
