<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del curso',
            'description' => 'descripción del curso',
            'category' => 'categoría del curso'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del curso es obligatorio',
            'description.required' => 'La descripción del curso es obligatoria',
            'category.required' => 'La categoria de curso es obligatoria',
            'name.max' => 'El nombre del curso no debe ser mayor que 10 caracteres.',
            'description.min' => 'La descripción del curso debe contener al menos 10 caracteres.'
        ];
    }
}
