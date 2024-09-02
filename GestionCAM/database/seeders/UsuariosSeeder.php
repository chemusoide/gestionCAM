<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    public function run(): void
    {
        $usuarios = [
            [
                'name' => 'Administrador',
                'apellido1' => 'Admin',
                'apellido2' => '',
                'email' => 'admin@example.com',
                'telefono' => '123456789',
                'fechanacimiento' => '1970-01-01',
                'dni' => '12345678A',
                'fk_rol' => 1,
                'obs' => '',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Diego',
                'apellido1' => 'Diaz',
                'apellido2' => '',
                'email' => 'diego@example.com',
                'telefono' => '123456789',
                'fechanacimiento' => '1985-01-01',
                'dni' => '12345678B',
                'fk_rol' => 2,
                'obs' => '',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Xisco',
                'apellido1' => 'Perez',
                'apellido2' => '',
                'email' => 'xisco@example.com',
                'telefono' => '123456789',
                'fechanacimiento' => '1990-01-01',
                'dni' => '12345678C',
                'fk_rol' => 3,
                'obs' => '',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fernando',
                'apellido1' => 'Martinez',
                'apellido2' => '',
                'email' => 'fernando@example.com',
                'telefono' => '123456789',
                'fechanacimiento' => '1975-01-01',
                'dni' => '12345678D',
                'fk_rol' => 2,
                'obs' => '',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Antonio',
                'apellido1' => 'Garcia',
                'apellido2' => '',
                'email' => 'antonio@example.com',
                'telefono' => '123456789',
                'fechanacimiento' => '2000-01-01',
                'dni' => '12345678E',
                'fk_rol' => 3,
                'obs' => '',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($usuarios);
    }
}