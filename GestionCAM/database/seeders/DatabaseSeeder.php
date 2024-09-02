<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            FuncionalidadesSeeder::class,
            PermisosSeeder::class,
            UsuariosSeeder::class,
            DojosSeeder::class,
            AlumnosSeeder::class,
            GradosSeeder::class,
            CuotasSeeder::class,
            PagaSeeder::class,
            TieneSeeder::class,
            DirigeSeeder::class,
            GestionaSeeder::class,
        ]);
    }
}