<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['id'=>1,'rol'=>'ADMINISTRADOR']);
        Role::create(['id'=>2,'rol'=>'SUPERVISOR']);
        Role::create(['id'=>3,'rol'=>'INVITADO']);
    }
}
