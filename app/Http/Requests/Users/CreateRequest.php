<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => ['required', 'integer','min:1'],
            'name' => ['required', 'string', 'min:3', 'max:250'],
            'email' => ['required', 'email', 'min:3'],
            'email_verified_at' => ['nullable', 'email', 'min:3'],
        ];
    }
}
