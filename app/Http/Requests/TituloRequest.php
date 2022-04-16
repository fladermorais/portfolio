<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TituloRequest extends FormRequest
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
           'titulo' => 'required|max:100', 
           'descricao' => 'required|max:300', 
           'referencia' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
           'titulo.required' => 'O campo Título é obrigatório', 
           'titulo.max' => 'O número máximo de caracteres do Título foi excedido', 
           'descricao.required' => 'O campo Descrição é obrigatório', 
           'descricao.max' => 'O número máximo de caracteres da Descrição foi excedido', 
           'referencia.required' => 'O campo Referência é obrigatório',
           'referencia.max' => 'O númereo máximo de caracteres da Referência foi execedido',
        ];
    }
}
