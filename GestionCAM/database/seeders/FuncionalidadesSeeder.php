<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $funcionalidades = [
            ['nombre' => 'ver_usuarios'],
            ['nombre' => 'editar_usuarios'],
            ['nombre' => 'crear_usuarios'],
            ['nombre' => 'borrar_usuarios'],
            ['nombre' => 'ver_cuotas'],
            ['nombre' => 'editar_cuotas'],
            ['nombre' => 'crear_cuotas'],
            ['nombre' => 'borrar_cuotas'],
            ['nombre' => 'ver_dojos'],
            ['nombre' => 'editar_dojos'],
            ['nombre' => 'crear_dojos'],
            ['nombre' => 'borrar_dojos'],
            ['nombre' => 'asignar_cuotas_alumnos'],
            ['nombre' => 'asignar_grados_alumnos'],
            ['nombre' => 'pagar_cuotas'],
            ['nombre' => 'crear_cuota_dojo'],
        ];

        DB::table('funcionalidades')->insert($funcionalidades);
    }
}