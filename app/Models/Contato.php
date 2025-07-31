<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = ['nome', 'telefone', 'whatsapp', 'email', 'assunto', 'mensagem'];

    protected $table = "contatos";

    public function newInfo($data)
    {
        $data['whatsapp'] = $data['telefone'];
        $info = $this->create($data);
        return $info;
    }

    public function deleteInfo()
    {
        $this->delete();
        return;
    }
}