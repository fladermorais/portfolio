<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redes extends Model
{
    protected $table = "redes";
    protected $fillable = ['titulo', 'icone', 'link' ];
    
    public function rules()
    {
        return [
            "titulo"    =>  "required",
            "icone"     =>  "required",
            "link"      =>  "required",
        ];
    }
    
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
    
    public function getIcons()
    {
        $icones = [
            "Facebook" => "fab fa-facebook-f",
            "Instagram" => "fab fa-instagram",
            "Linkedin" => "fab fa-linkedin-in",
            "Pinterest" => "fab fa-pinterest-p",
            "Twitter" => "fab fa-twitter",
        ];
        return $icones;
    }
}
