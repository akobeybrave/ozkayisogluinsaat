<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UserPasswordUpdateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }



    public function withValidator($validator)
    {
        // Mevcut şifre kontrolü
        $validator->after(function ($validator) {
            if (!Hash::check($this->current_password, auth()->user()->password)) {
                $validator->errors()->add('current_password', 'Mevcut parola yanlış.');
            }
        });
    }

    public function messages()
    {
        return [
            'new_password.min' => 'Yeni parola en az 8 karakter olmalıdır.',
            'new_password.confirmed' => 'Yeni parolalar eşleşmiyor.',
        ];
    }




}
