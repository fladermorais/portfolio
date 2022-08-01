<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerUpdateRequest extends FormRequest
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
            "link"      =>  "required",
            "descricao" =>  "required",
        ];
    }

    public function messages()
    {
        return [
            "nome.required"     =>  "o Campo nome é obrigatório",
            "link.required"     =>  "O Campo Link é obrigatório",
            "descricao.required"    =>  "O Campo Descrição é obrigatório",
        ];
    }
}
