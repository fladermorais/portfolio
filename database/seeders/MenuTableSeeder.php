<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::firstOrCreate([
            "nome"      =>  "sobre",
            "alias"     =>  "Sobre Mim",
            ]
        );
        
        Menu::firstOrCreate([
            "nome"      =>  "radio",
            "alias"     =>  "Rádio UFRJ",
            ]
        );

        Menu::firstOrCreate([
            "nome"      =>  "pitacos",
            "alias"     =>  "Pitacos",
            ]
        );

        Menu::firstOrCreate([
            "nome"      =>  "observatorio",
            "alias"     =>  "Observatório",
            ]
        );

        Menu::firstOrCreate([
            "nome"      =>  "noticias",
            "alias"     =>  "Reportagens",
            ]
        );

        Menu::firstOrCreate([
            "nome"      =>  "galeria",
            "alias"     =>  "Galeria",
            ]
        );

        Menu::firstOrCreate([
            "nome"      =>  "contato",
            "alias"     =>  "Contato",
            ]
        );
    }
}
