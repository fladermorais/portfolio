<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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
            'nome'      => 'required',
            'email'     => 'required',
            'assunto'   => 'required',
            'mensagem'  => 'required',
            
            // 'g-recaptcha-response' => 'required|recaptcha',
        ];
    }

    public function messages()
    {
        return [
            'nome.required'      => 'O campo nome é obrigatório',
            'nome.max'      => 'O limite de caracteres do campo nome foi excedido',
            'assunto.required'   => 'O campo Assunto é obrigatório',
            'assunto.max'   => 'O limite de caracteres do campo assunto foi excedido',
            'email.required'     => 'o campo email é obrigatório',
            'email.email'     => 'formato de email inválido',
            'telefone'  => 'o campo telefone é obrigatório',
            'telefone'  => 'o limite de caracteres do campo telefone foi excedido',
            'mensagem'  => 'O campo mensagem é obrigatório',
            'mensagem'  => 'o limite de caracteres da mensagem foi excedido',
            'whatsapp.max'  => 'Limite de caracteres do campo whatsapp foi excedido',            
            'g-recaptcha-response.required' => 'Você deve marcar o captcha!',
            'g-recaptcha-response.recaptcha' => 'Você deve marcar o captcha!',
        ];
    }
}
