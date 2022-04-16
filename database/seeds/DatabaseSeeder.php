<?php

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
        
        $this->call(BannerPermissionsSeeder::class);
        $this->call(CategoriaProdutosSeeder::class);
        $this->call(ClientePermissionsSeeder::class);
        $this->call(ProdutosPermissionsSeeder::class);
        $this->call(RecursoPermissionSeeder::class);
        $this->call(RedesPermissionsSeeder::class);
    }
}
