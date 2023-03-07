<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LugarStoreRequest extends FormRequest
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
            //
            'categoria_id' => 'required|string|exists:categorias,id',
            'nome' => 'required|string',
            'pais' => 'required|string',
            'provincia' => 'required|string',
            'regiao' => 'string|nullable',
            'descricao' => 'string|nullable',
            'coordenadas' => 'required|array',
            'coordenadas.longitude' => 'required|string',
            'coordenadas.latitude' => 'required|string',
            'file' => 'required|array',
            'file.*' => 'image|mimes:png,jpg,jpeg|max:2000'
        ];
    }
}
