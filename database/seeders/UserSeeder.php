<?php

namespace Database\Seeders;

use App\Models\User;
use App\TableInfo\UserTableInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            UserTableInfo::NAME => 'Raúl Escobedo',
            UserTableInfo::USERNAME => 'raul',
            UserTableInfo::PASSWORD => Hash::make('raul123'),
        ])->assignRole('Master');

        User::create([
            UserTableInfo::NAME => 'Eduardo Mantilla',
            UserTableInfo::USERNAME => 'eduardo',
            UserTableInfo::PASSWORD => Hash::make('eduardo123'),
        ])->assignRole('Administrador');

        User::create([
            UserTableInfo::NAME => 'Victor Zamudio',
            UserTableInfo::USERNAME => 'victor',
            UserTableInfo::PASSWORD => Hash::make('victor123'),
        ])->assignRole('Administrador');
    }
}
