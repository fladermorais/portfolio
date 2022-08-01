<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerStoreRequest extends FormRequest
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
            "nome"      =>  "required",
            "arquivo"    =>  "required",
            "link"      =>  "required",
            "descricao" =>  "required",
        ];
    }

    public function messages()
    {
        return [
            "nome.required"         =>  "o Campo nome é obrigatório",
            "arquivo.required"      =>  "O Campo Arquivo é obrigatório",
            "link.required"         =>  "O Campo Link é obrigatório",
            "descricao.required"    =>  "O Campo Descrição é obrigatório",
        ];
    }
}
