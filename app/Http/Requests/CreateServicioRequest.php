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
            'image' => [
                $this->route('servicio') ? 'nullable' : 'required',
            'mimes:jpeg,png']
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'Se necesita un titulo para el servicio',
            'descripcion.required' => 'Ingresa una descripcion, es necesaria',
            'image.required' => 'Debes seleccionar una imagen'
        ];
    }
}
