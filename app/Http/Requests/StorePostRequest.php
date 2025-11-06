<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:5|max:255',
            'slug' => 'required|unique:posts',
            'category' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El campo :attribute es obligatorio.',
            'title.min' => 'El campo :attribute debe tener al menos :min caracteres.',
            'title.max' => 'El campo :attribute no debe exceder de :max caracteres.',
            'slug.required' => 'El campo :attribute es obligatorio.',
            'slug.unique' => 'El :attribute ya está en uso. Por favor, elige otro.',
            'category.required' => 'El campo :attribute es obligatorio.',
            'content.required' => 'El campo :attribute es obligatorio.',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'title',
            'slug' => 'slug',
            'category' => 'categoría',
            'content' => 'contenido',
        ];
    }
}
