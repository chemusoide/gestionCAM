<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumnos = [
            ['fk_usuario' => 2, 'fk_dojo' => 1, 'fecha_alta' => now(), 'fecha_baja' => null, 'obs' => ''],
            ['fk_usuario' => 3, 'fk_dojo' => 1, 'fecha_alta' => now(), 'fecha_baja' => null, 'obs' => ''],
            ['fk_usuario' => 4, 'fk_dojo' => 2, 'fecha_alta' => now(), 'fecha_baja' => null, 'obs' => ''],
            ['fk_usuario' => 5, 'fk_dojo' => 2, 'fecha_alta' => now(), 'fecha_baja' => null, 'obs' => ''],
        ];

        DB::table('alumnos')->insert($alumnos);
    }
}