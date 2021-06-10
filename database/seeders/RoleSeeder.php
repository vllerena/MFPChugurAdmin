<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $master = Role::create([
            'name' => 'Master'
        ]);

        $administrador = Role::create([
            'name' => 'Administrador'
        ]);

        Permission::create([
            'name' => 'admin.dashboard.index'
        ])->assignRole($master);

        Permission::create([
            'name' => 'admin.empresa.edit'
        ])->assignRole($master, $administrador);
    }
}
