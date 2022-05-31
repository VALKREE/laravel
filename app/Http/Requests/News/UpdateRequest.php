<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => ['required', 'integer','min:1'],
            'title' => ['required', 'string', 'min:3', 'max:250'],
            'description' => ['nullable', 'string', 'min:3', 'max:250'],
            'image' => ['nullable', 'string', 'min:3', 'max:250'],
            'author' => ['required', 'string', 'min:3', 'max:250']
        ];
    }
}
