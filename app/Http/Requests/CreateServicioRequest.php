<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required',
            'descripcion' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'Se necesita un titulo para el servicio',
            'descripcion.required' => 'Ingresa una descripcion, es necesaria',
        ];
    }
}
