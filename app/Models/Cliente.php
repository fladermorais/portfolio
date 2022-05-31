<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $fillable = ['nome', 'imagem', 'link', 'descricao', 'status', 'home', 'paginas'];
    
    public function newInfo($data)
    {
        $alias          = $this->getAlias($data['nome']);
        $data['imagem'] = $this->uploadArquivo($data['arquivo'], $alias);
        $info = $this->create($data);
        return $info;
    }
    
    public function updateInfo($data)
    {
        $alias          = $this->getAlias($data['nome']);
        if(isset($data['arquivo'])){
            if(isset($this->imagem) && $this->imagem != ""){
                $this->unlinkArquivo($this->imagem);
            }
            $data['imagem'] = $this->uploadArquivo($data['arquivo'], $alias);
        }
        
        $info = $this->update($data);
        return $info;
        
    }
    
    public function deleteInfo()
    {
        if(isset($this->imagem) && $this->imagem != NULL){
            $path = public_path('/storage/clientes/');
            $file = $this->imagem;
            $arquivo = $path.$file;
            if(file_exists($arquivo)){
                unlink($arquivo);
            }
            
            $path2 = public_path('/storage/thumb/noticias/');
            $arquivo2 = $path2.$file;
            if(file_exists($arquivo2)){
                unlink($arquivo2);
            }
            
        }
        
        $deleta = $this->delete();
        
        return $deleta;
    }
    
    public function uploadArquivo($arquivo, $alias)
    {
        $file = $arquivo;
        $extensao = $arquivo->getClientOriginalExtension();
        $nomeArquivo =  $alias. "." .$extensao;
        $path = public_path('/storage/clientes/');
        
        $file->move($path, $nomeArquivo);
        
        $image_resize = Image::make($path . $nomeArquivo);
        $image_resize->resize(400, 250);
        $image_resize->save(public_path('/storage/thumb/clientes/' . $nomeArquivo));
        
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
        $path = public_path('/storage/clientes/');
        $file = $arquivo;
        $arquivo = $path.$file;
        
        $path2 = public_path('/storage/thumb/clientes/');
        $arquivo2 = $path2.$file;
        if(file_exists($arquivo2)){
            unlink($arquivo2);
        }
        
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
