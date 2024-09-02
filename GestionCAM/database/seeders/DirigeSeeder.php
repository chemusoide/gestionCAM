<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirigeSeeder extends Seeder
{
    public function run(): void
    {
        $dirige = [
            [
                'usuario_id' => 2,
                'dojo_id' => 1,
                'fechaInicio' => now(),
                'fechaFin' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => 4,
                'dojo_id' => 2,
                'fechaInicio' => now(),
                'fechaFin' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('dirige')->insert($dirige);
    }
}