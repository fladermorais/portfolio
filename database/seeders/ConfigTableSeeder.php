<?php

namespace Database\Seeders;

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
            "nome"      =>  "Flader Morais",
            "endereco"  =>  "Rua do endereço",
            "numero"    =>  1234,
            "bairro"    =>  "Centro",
            "cidade"    =>  "Itamonte",
            "estado"    =>  "MG",
            "telefone"  =>  "35 98401-2190",
            "whatsapp"  =>  "35 98401-2190",
            "email"     =>  "contato@fladermorais.com.br",
            "descricao" =>  "Essa é a descrição",
            "seo_titulo"    =>  "Sistema",
            "seo_descricao" =>  "Meu Sistema",
            "seo_keywords"  =>  "sistema",
            ]
          );
    }
}
