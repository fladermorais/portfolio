<?php

namespace App\Models;

use App\Helper\Arquivos;
use Illuminate\Database\Eloquent\Model;

class QuemSomos extends Model
{
    protected $table = "quem_somos";
    protected $fillable = ['titulo', 'descricao', 'imagem', 'ordem', 'menu', 'subtitulo'];
    
    public function newInfo($data)
    {
        $data['alias']      = Arquivos::getAlias($data['titulo']);
        $data['imagem']     = Arquivos::uploadArquivo($data['arquivo'], $data['alias'], 'quemsomos');

        $info = $this->create($data);
        return $info;
    }
    
    public function updateInfo($data)
    {
        $data['alias']      = Arquivos::getAlias($data['titulo']);
        if(isset($data['arquivo'])){
            if(isset($this->imagem) && $this->imagem != ""){
                Arquivos::unlinkArquivo($this->imagem, 'quemsomos');
            }
            $data['imagem'] = Arquivos::uploadArquivo($data['arquivo'], $data['alias'], 'quemsomos');
        }
        $info = $this->update($data);
        return $info;
    }
    
    public function deleteInfo()
    {
        if(isset($this->imagem) && $this->imagem != NULL){
            $path = public_path('/storage/quemsomos/');
            $file = $this->imagem;
            $arquivo = $path.$file;
            Arquivos::unlinkArquivo($arquivo, 'quemsomos');
        }
        
        $deleta = $this->delete();
        
        return $deleta;
    }
}