<?php

namespace Database\Seeders;

use App\Permission;
use Illuminate\Database\Seeder;

class ClientePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::firstOrCreate([
            "name"  =>  "clientes.create",
            "description"   =>  "Cliente - Criar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "clientes.index",
            "description"   =>  "Cliente - Listar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "clientes.edit",
            "description"   =>  "Cliente - Editar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "clientes.delete",
            "description"   =>  "Cliente - Deletar",
            ]
        );
    }
}
