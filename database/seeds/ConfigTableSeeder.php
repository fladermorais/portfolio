<?php

use Illuminate\Database\Seeder;
use App\Models\Config;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Config::firstOrCreate([
            "nome"      =>  "BrdSoft",
            "endereco"  =>  "Rodovia Br-354",
            "numero"    =>  1234,
            "bairro"    =>  "Centro",
            "cidade"    =>  "Itamonte",
            "estado"    =>  "MG",
            "telefone"  =>  "3512344321",
            "whatsapp"  =>  "3512344321",
            "email"     =>  "contato@brdsoft.com.br",
            "descricao" =>  "Essa é a descrição",
            "seo_titulo"    =>  "a",
            "seo_descricao" =>  "a",
            "seo_keywords"  =>  "a",
            ]
          );
    }
}
