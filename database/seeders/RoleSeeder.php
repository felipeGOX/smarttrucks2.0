<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Administrador'])->syncPermissions(Permission::pluck('id','id')->all());
        Role::create(['name' => 'Conductor']);
        Role::create(['name' => 'Recogedor']);
        Role::create(['name' => 'Ayudante']);
    }
}
