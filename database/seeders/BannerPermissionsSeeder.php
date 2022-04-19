<?php

namespace Database\Seeders;

use App\Permission;
use Illuminate\Database\Seeder;

class BannerPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::firstOrCreate([
            "name"  =>  "banners.create",
            "description"   =>  "Banners - Criar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "banners.index",
            "description"   =>  "Banners - Listar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "banners.edit",
            "description"   =>  "Banners - Editar",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "banners.delete",
            "description"   =>  "Banners - Deletar",
            ]
        );
    }
}
