<?php

namespace App\Models;

use App\Helper\Arquivos;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [ 'categoria_id', 'user_id', 'nome', 'alias', 'descricao', 'imagem', 'referencia', 'status', 'views', 'seo_titulo', 'seo_descricao', 'seo_canonical', 'seo_keywords' ];
    
    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    
    public function newInfo($data)
    {
        $data['alias']      = Arquivos::getAlias($data['nome']);
        $data['user_id']    = auth()->user()->id;
        $data['imagem']     = Arquivos::uploadArquivo($data['arquivo'], $data['alias'], 'noticias');
        $data['views']      = 0;
        $data['seo_canonical'] = route('noticia', $data['alias']);
        
        $info = $this->create($data);
        return $info;
    }
    
    public function updateInfo($data)
    {
        $data['alias']      = Arquivos::getAlias($data['nome']);
        if(isset($data['arquivo'])){
            if(isset($this->imagem) && $this->imagem != ""){
                Arquivos::unlinkArquivo($this->imagem, 'noticias');
            }
            $data['imagem'] = Arquivos::uploadArquivo($data['arquivo'], $data['alias'], 'noticias');
        }
        $data['seo_canonical'] = route('noticia', $data['alias']);
        $info = $this->update($data);
        return $info;
    }
}