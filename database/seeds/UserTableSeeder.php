<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $adminRole = Role::where('name', 'Administrador')->first();
        
        $admin = User::firstOrCreate([
            "name"  =>  "Administrador",
            "email" =>  "contato@fladermorais.com.br",
            "password"  =>  bcrypt("Mudar123@"),
            ]
        );
        
        $admin->roles()->attach($adminRole);
    }
}
