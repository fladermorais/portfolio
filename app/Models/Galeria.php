<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;
    
    protected $table = "galerias";
    protected $fillable = ["produto_id", 'name'];
    
    public function newInfo($data, $produto, $count)
    {
        $count = $count * date('his');
        $alias          = $this->getAlias($produto->descricao);
        $data['name']   = $this->uploadArquivo($data['arquivo'], $count);
        
        if($data['name']) {
            $info = $this->create($data);
            return $info;
        } else {
            return false;
        }
        
    }
    
    public function deleteInfo()
    {
        $remove = $this->unlinkArquivo($this->name);

        $info = $this->delete();
        return $info;
    }
    
    
    public function uploadArquivo($arquivo, $counts)
    {
        $file = $arquivo;
        $extensao = $arquivo->getClientOriginalExtension();
        
        $extensionValid = array("jpg", "jpeg", 'png');
        
        if(!in_array(strtolower($extensao), $extensionValid)){
            flash('Extensão não permitida' . "(Arquivo .$extensao)")->error();
            return false;
        } else {
            $nomeArquivo =  date('dmYhis').$counts .  "." .$extensao;
            $path = public_path('/storage/galeria/');
            
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
        
        
    }
    
    public function unlinkArquivo($arquivo)
    {
        $path = public_path('/storage/galeria/');
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
    
    public function convertCommaToDot($valor){ 
        return str_replace(',','.', $valor);
    }
    
}