<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampaignPostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'release_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d',
            'status' => 'required|integer',
            'product_manager' => 'required|integer',
            'url' => 'required',
            'category' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre de campaña es requerido',
            'release_date.required' => 'El campo fecha de lanzamiento es requerido',
            'release_date.date_format' => 'El formato del campo fecha de lanzamiento debe ser año-mes-día',
            'end_date.required' => 'El campo fecha término es requerido',
            'end_date.date_format' => 'El formato del campo fecha término debe ser año-mes-día',
            'status.required' => 'El campo estado es requerido',
            'status.integer' => 'El campo estado debe ser númerico',
            'product_manager.required' => 'El campo product manager es requerido',
            'product_manager.integer' => 'El campo product manager debe ser númerico',
            'url.required' => 'El campo url campaña es requerido',
            'category.required' => 'El campo categoría es requerido',
            'category.integer' => 'El campo categoría debe ser númerico',
        ];
    }
}
