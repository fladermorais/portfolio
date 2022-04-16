<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table = 'recursos';
    protected $fillable = ['produto_id', 'titulo', 'descricao', 'icone'];

    public function produtos()
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }

    public function rules()
    {
        return [
            'produto_id'    => "required",
            'titulo'        => "required",
            'descricao'     => "required",
            'icone'         => "required",
        ];
    }

    public function newInfo($data)
    {
        $info = $this->create($data);
        return $info;
    }

    public function updateInfo($data)
    {
        $info = $this->update($data);
        return $info;
    }
}
