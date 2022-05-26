<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    protected $table = "categoria_produtos";
    
    protected $fillable = ['nome', 'alias', 'icone', 'previa', 'descricao'];
    
    public function produtos()
    {
        return $this->hasMany(Produto::class, 'categoria_id');
    }
    
    public function rules()
    {
        return [
            "nome"  =>  "required",
        ];
    }
    
    public function newInfo($data)
    {
        $data['alias']  = $this->getAlias($data['nome']);
        $data['icone']  =   1;
        $info = $this->create($data);
        return $info;
    }
    
    public function updateInfo($data)
    {
        $data['alias'] = $this->getAlias($data['nome']);
        $info = $this->update($data);
        return $info;
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
