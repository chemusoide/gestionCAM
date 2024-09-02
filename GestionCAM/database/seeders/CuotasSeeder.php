<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cuotas = [
            ['fk_dojo' => 1, 'nombre' => 'cuota adulto', 'cantidad' => 55],
            ['fk_dojo' => 1, 'nombre' => 'cuota infantil', 'cantidad' => 45],
            ['fk_dojo' => 2, 'nombre' => 'cuota adulto', 'cantidad' => 50],
        ];

        DB::table('cuotas')->insert($cuotas);
    }
}