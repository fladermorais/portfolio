<?php

use App\Permission;
use Illuminate\Database\Seeder;

class ProdutosPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::firstOrCreate([
            "name"  =>  "produtos.create",
            "description"   =>  "Produtos - Criar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "produtos.index",
            "description"   =>  "Produtos - Listar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "produtos.edit",
            "description"   =>  "Produtos - Editar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "produtos.delete",
            "description"   =>  "Produtos - Deletar",
            ]
        );
    }
}
