<?php

namespace Database\Seeders;

use App\Permission;
use Illuminate\Database\Seeder;

class CategoriaProdutosSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        Permission::firstOrCreate([
            "name"  =>  "categoriasProdutos.create",
            "description"   =>  "Categoria de Produtos - Criar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "categoriasProdutos.index",
            "description"   =>  "Categoria de Produtos - Listar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "categoriasProdutos.edit",
            "description"   =>  "Categoria de Produtos - Editar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "categoriasProdutos.delete",
            "description"   =>  "Categoria de Produtos - Deletar",
            ]
        );
    }
}
