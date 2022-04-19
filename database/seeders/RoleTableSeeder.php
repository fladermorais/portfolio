<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        Role::firstOrCreate([
            "name"  =>  "Administrador",
            "description"   =>  "Acesso total ao sistema!",
            ]
        );
        
        Role::firstOrCreate([
            "name"  =>  "Editor",
            "description"   =>  "Acesso Personalizado ao sistema!",
            ]
        );
    }
}
