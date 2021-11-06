<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPutRequest extends FormRequest
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
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'position' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->route('id'),
            'r_password' => 'same:password',
            'business' => 'required|integer',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'El campo nombre es requerido',
            'firstname.max' => 'El campo nombre ha excedido de los 255 caracteres permitidos',
            'lastname.required' => 'El campo apellido es requerido',
            'lastname.max' => 'El campo apellido ha excedido de los 255 caracteres permitidos',
            'position.required' => 'El campo cargo es requerido',
            'email.required' => 'El campo email es requerido',
            'email.email' => 'El campo email es inválido',
            'email.unique' => 'El campo email ya existe en los registros',
            'password.required' => 'El campo password es requerido',
            'r_password.required' => 'El campo confirmar password es requerido',
            'r_password.same' => 'El campo password no coincide',
            'business.required' => 'El campo empresa es requerido',
            'business.integer' => 'El campo empresa debe ser númerico',
            'role.required' => 'El campo Rol es requerido',
            'role.integer' => 'El campo Rol debe ser númerico',
        ];
    }
}
