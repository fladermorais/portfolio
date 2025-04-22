<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuemSomosRequest extends FormRequest
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
            "titulo"    =>  "required",
            "descricao" =>  "required",
            "arquivo"   =>  "required",
            "ordem"     =>  "required",
            "subtitulo" =>  "required",
            "menu"      =>  "required",
        ];
    }
    
    public function messages()
    {
        return [
            "titulo.required"       =>  "o Campo titulo é obrigatório",
            "arquivo.required"      =>  "O Campo Arquivo é obrigatório",
            "descricao.required"    =>  "O Campo Descrição é obrigatório",
            "menu.required"         =>  "O Campo Menu é obrigatório",
            "subtitulo.required"    =>  "O Campo subtitulo é obrigatório",
            "ordem.required"        =>  "O Campo ordem é obrigatório"
        ];
    }
}