<?php

use App\Permission;
use Illuminate\Database\Seeder;

class RecursoPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::firstOrCreate([
            "name"  =>  "recursos.create",
            "description"   =>  "Recursos - Criar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "recursos.index",
            "description"   =>  "Recursos - Listar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "recursos.edit",
            "description"   =>  "Recursos - Editar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "recursos.delete",
            "description"   =>  "Recursos - Deletar",
            ]
        );
    }
}
