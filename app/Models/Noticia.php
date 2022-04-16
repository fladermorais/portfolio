<?php

namespace App\Models;

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
        $data['alias']      = $this->getAlias($data['nome']);
        $data['user_id']    = auth()->user()->id;
        $data['imagem']     = $this->uploadArquivo($data['arquivo'], $data['alias']);
        $data['views']      = 0;
        $data['seo_canonical'] = route('noticia', $data['alias']);
        
        $info = $this->create($data);
        return $info;
    }
    
    public function updateInfo($data)
    {
        $data['alias']      = $this->getAlias($data['nome']);
        if(isset($data['arquivo'])){
            if(isset($this->imagem) && $this->imagem != ""){
                $this->unlinkArquivo($this->imagem);
            }
            $data['imagem'] = $this->uploadArquivo($data['arquivo'], $data['alias']);
        }
        $data['seo_canonical'] = route('noticia', $data['alias']);
        $info = $this->update($data);
        return $info;
    }
    
    public function uploadArquivo($arquivo, $alias)
    {
        $file = $arquivo;
        $extensao = $arquivo->getClientOriginalExtension();
        $nomeArquivo =  $alias. "." .$extensao;
        $path = public_path('/storage/noticias/');
        
        $file->move($path, $nomeArquivo);
        
        if(!$file){
            flash('Falha ao fazer o upload do Arquivo')->warning();
            return redirect()
            ->back()
            ->with('error', 'Falha ao fazer upload do Arquivo')
            ->withInput();
        }
        return $nomeArquivo;
    }
    
    public function unlinkArquivo($arquivo)
    {
        $path = public_path('/storage/noticias/');
        $file = $arquivo;
        $arquivo = $path.$file;
        if(file_exists($arquivo)){
            unlink($arquivo);
            return true;
        }
    }
    
    public function getAlias($string)
    {
        $string = str_replace("?", "_", $string);
        $string = str_replace("!", "_", $string);
        $string = str_replace(",", "_", $string);
        $string = str_replace(' ', "_", $string);
        $string = strtolower($string);
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/", "/(ç|Ç)/"),explode(" ","a A e E i I o O u U n N c"),$string);    
    }
}
