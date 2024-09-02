<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermisosSeeder extends Seeder
{
    public function run(): void
    {
        $permisos = [
            // Permisos para el Administrador (acceso completo a todas las funcionalidades)
            ['fk_rol' => 1, 'fk_funcionalidad' => 1],
            ['fk_rol' => 1, 'fk_funcionalidad' => 2],
            ['fk_rol' => 1, 'fk_funcionalidad' => 3],
            ['fk_rol' => 1, 'fk_funcionalidad' => 4],
            ['fk_rol' => 1, 'fk_funcionalidad' => 5],
            ['fk_rol' => 1, 'fk_funcionalidad' => 6],
            ['fk_rol' => 1, 'fk_funcionalidad' => 7],
            ['fk_rol' => 1, 'fk_funcionalidad' => 8],
            ['fk_rol' => 1, 'fk_funcionalidad' => 9],
            ['fk_rol' => 1, 'fk_funcionalidad' => 10],
            ['fk_rol' => 1, 'fk_funcionalidad' => 11],
            ['fk_rol' => 1, 'fk_funcionalidad' => 12],
            ['fk_rol' => 1, 'fk_funcionalidad' => 13],
            ['fk_rol' => 1, 'fk_funcionalidad' => 14],
            ['fk_rol' => 1, 'fk_funcionalidad' => 15],

            // Permisos para el Dojo-Cho (limitado a su dojo)
            ['fk_rol' => 2, 'fk_funcionalidad' => 1],
            ['fk_rol' => 2, 'fk_funcionalidad' => 2],
            ['fk_rol' => 2, 'fk_funcionalidad' => 3],
            ['fk_rol' => 2, 'fk_funcionalidad' => 4],
            ['fk_rol' => 2, 'fk_funcionalidad' => 5],
            ['fk_rol' => 2, 'fk_funcionalidad' => 6],
            ['fk_rol' => 2, 'fk_funcionalidad' => 7],
            ['fk_rol' => 2, 'fk_funcionalidad' => 8],
            ['fk_rol' => 2, 'fk_funcionalidad' => 9],
            ['fk_rol' => 2, 'fk_funcionalidad' => 10],
            ['fk_rol' => 2, 'fk_funcionalidad' => 11],
            ['fk_rol' => 2, 'fk_funcionalidad' => 12],
            ['fk_rol' => 2, 'fk_funcionalidad' => 13],
            ['fk_rol' => 2, 'fk_funcionalidad' => 14],
            ['fk_rol' => 2, 'fk_funcionalidad' => 15],

            // Permisos para el Shihan (limitado a los dojos que gestiona)
            ['fk_rol' => 4, 'fk_funcionalidad' => 1],
            ['fk_rol' => 4, 'fk_funcionalidad' => 2],
            ['fk_rol' => 4, 'fk_funcionalidad' => 3],
            ['fk_rol' => 4, 'fk_funcionalidad' => 4],
            ['fk_rol' => 4, 'fk_funcionalidad' => 5],
            ['fk_rol' => 4, 'fk_funcionalidad' => 6],
            ['fk_rol' => 4, 'fk_funcionalidad' => 7],
            ['fk_rol' => 4, 'fk_funcionalidad' => 8],
            ['fk_rol' => 4, 'fk_funcionalidad' => 9],
            ['fk_rol' => 4, 'fk_funcionalidad' => 10],
            ['fk_rol' => 4, 'fk_funcionalidad' => 11],
            ['fk_rol' => 4, 'fk_funcionalidad' => 12],
            ['fk_rol' => 4, 'fk_funcionalidad' => 13],
            ['fk_rol' => 4, 'fk_funcionalidad' => 14],
            ['fk_rol' => 4, 'fk_funcionalidad' => 15],

            // Permisos para el Aikidoka (solo ver y editar su propio usuario)
            ['fk_rol' => 3, 'fk_funcionalidad' => 1],
            ['fk_rol' => 3, 'fk_funcionalidad' => 2],
        ];

        DB::table('permisos')->insert($permisos);
    }
}