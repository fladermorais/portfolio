<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->insert(array(
            array(
                'permission_id' =>  15,
                'role_id'       =>  2,
            )
        ));
        DB::table('permission_role')->insert(array(
            array(
                'permission_id' =>  16,
                'role_id'       =>  2,
            )
        ));
        DB::table('permission_role')->insert(array(
            array(
                'permission_id' =>  17,
                'role_id'       =>  2,
            )
        ));
        DB::table('permission_role')->insert(array(
            array(
                'permission_id' =>  13,
                'role_id'       =>  2,
            )
        ));

    }
}
