<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = "configs";
    protected $fillable = ['nome', 'endereco', 'numero', 'bairro', 'cidade', 'estado', 'telefone', 'whatsapp', 'email', 'logo', 'descricao', 'telefone2', 'slogan', 'subtitulo', 'pais', 'seo_titulo', 'seo_descricao', 'seo_keywords', 'ativaBlog', 'ativaProdutos', 'emConstrucao' ];
    
    public function rules()
    {
        return [
            'nome'      => "required",
            'endereco'  => "required",
            'numero'    => "required",
            'bairro'    => "required",
            'cidade'    => "required",
            'telefone'  => "required",
            'whatsapp'  => "required",
            'email'     => "required",
            'descricao' => "required",
            'slogan'    => "required",
        ];
    }
    
    public function updateInfo($data)
    {
        if(isset($data['arquivo']) && $data['arquivo']->isValid()){
            
            if(isset($this->logo) && $this->logo != NULL){
                $path = public_path('/storage/logo/');
                $file = $this->logo;
                $arquivo = $path.$file;
                if(file_exists($arquivo)){
                    unlink($arquivo);
                }
                
                $arquivo = $this->uploadArquivo($data['arquivo']);
                $data['logo'] = $arquivo;
            } else {
                $arquivo = $this->uploadArquivo($data['arquivo']);
                $data['logo'] = $arquivo;
            }
            
        }
        $info = $this->update($data);
        return $info;
    }
    
    public function uploadArquivo($arquivo)
    {
        $file = $arquivo;
        $extensao = $arquivo->getClientOriginalExtension();
        $nomeLogo = "logo.".$extensao;
        $path = public_path('/storage/logo/');
        $file->move($path, $nomeLogo);
        
        if($file){
            return $nomeLogo;
        } else {
            return false;
        }
    }
}
