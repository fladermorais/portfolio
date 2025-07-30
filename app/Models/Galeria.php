<?php

namespace App\Models;

use App\Helper\Arquivos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;
    
    protected $table = "galerias";
    protected $fillable = ["name", "image", 'alias'];
    
    public function newInfo($data)
    {   
        $data['alias']  = Arquivos::getAlias($data['nome'] . '_' . date('dmYHis'));
        $data['image']  = Arquivos::uploadArquivo($data['arquivo'], $data['alias'], 'galeria');
        $data['name']   = $data['nome'];

        $info = $this->create($data);

        return $info;
    }
    
    public function deleteInfo()
    {
        $remove = Arquivos::unlinkArquivo($this->image, 'galeria');
        $info = $this->delete();
        return $info;
    }
}