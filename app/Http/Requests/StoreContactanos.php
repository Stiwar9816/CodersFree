<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function PHPSTORM_META\map;

class StoreContactanos extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre',
            'email' => 'correo',
            'message' => 'categoría del curso'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'email.required' => 'El correo es obligatorio',
            'message.required' => 'El mensaje es obligatorio',
            'email.email' => 'Correo invalido por favor reviselo nuevamente'
        ];
    }
}
