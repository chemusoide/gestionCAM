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
                'fk_usuario' => 2,
                'fk_dojo' => 1,
                'fecha_inicio' => now(),
                'fecha_fin' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_usuario' => 4,
                'fk_dojo' => 2,
                'fecha_inicio' => now(),
                'fecha_fin' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('dirige')->insert($dirige);
    }
}