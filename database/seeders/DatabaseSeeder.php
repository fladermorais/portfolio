<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\UserController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ConfigTableSeeder::class);
        $this->call(RolePermissionTable::class);
    }
}