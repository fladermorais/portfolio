<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table = 'recursos';
    protected $fillable = ['titulo', 'descricao', 'icone'];

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
