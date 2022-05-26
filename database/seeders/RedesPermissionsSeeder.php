<?php

namespace Database\Seeders;

use App\Permission;
use Illuminate\Database\Seeder;

class RedesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::firstOrCreate([
            "name"  =>  "redes.create",
            "description"   =>  "Redes Sociais - Criar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "redes.index",
            "description"   =>  "Redes Sociais - Listar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "redes.edit",
            "description"   =>  "Redes Sociais - Editar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "redes.delete",
            "description"   =>  "Redes Sociais - Deletar",
            ]
        );
    }
}
