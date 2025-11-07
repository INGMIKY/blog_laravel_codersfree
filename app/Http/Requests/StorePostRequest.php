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

    // public function messages()
    // {
    //     return [
    //         'title.required' => 'The :attribute field is required.',
    //         'title.min' => 'The :attribute field must have at last :min character.',
    //         'title.max' => 'The :attribute do not must more :max character.',
    //         'slug.required' => 'The :attribute field is required .',
    //         'slug.unique' => 'The :attribute is already used. please, choose another one.',
    //         'category.required' => 'The :attribute field is required.',
    //         'content.required' => 'The :attribute field is required.',
    //     ];
    // }

    // public function attributes()
    // {
    //     return [
    //         'title' => 'title',
    //         'slug' => 'slug',
    //         'category' => 'categoría',
    //         'content' => 'contenido',
    //     ];
    // }
}
