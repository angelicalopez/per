<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EgresadoRequest extends FormRequest
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
        $this->generos = array('M', 'F');
        switch($this->method()) {
            case 'POST':
                $rules = [
                    'name' => 'required|min:3|max:100',
                    'apellidos' => 'required|min:3|max:100',
                    'email' => 'required|email|unique:users',
                    'dni' => 'required|min:8|max:50|unique:administradores',
                    'edad' => 'numeric|min:14',
                    'genero' => Rule::in($this->generos),
                    'direccion' => 'nullable|min:8|max:50',
                    'telefono' => 'nullable|min:7|max:50',
                    'pais_id' => 'integer|exists:paises,id',
                    'password' => 'required|min:6|max:20'
                ];
            break;
            case 'PUT':
            $rules = [
                'name' => 'required|min:3|max:100',
                'apellidos' => 'required|min:3|max:100',
                'email' => 'required|email|unique:users',
                'dni' => 'required|min:8|max:50|unique:administradores',
                'edad' => 'numeric|min:14',
                'genero' => Rule::in(generos),
                'direccion' => 'nullable|min:8|max:50',
                'telefono' => 'nullable|min:7|max:50',
                'pais_id' => 'integer|exists:paises,id',
                'password' => 'required|min:6|max:20'
            ];
            break;
        }
        return $rules;
    }
}
