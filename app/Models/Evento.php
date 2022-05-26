<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    
    protected $table = "eventos";
    protected $fillable = ["titulo", "dia", "descricao", "link", "status"];
    
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