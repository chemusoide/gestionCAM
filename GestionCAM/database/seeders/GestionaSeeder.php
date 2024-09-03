<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GestionaSeeder extends Seeder
{
    public function run(): void
    {
        $gestiona = [
            [
                'fk_usuario' => 2,
                'fk_dojo' => 1,
                'fecha_inicio' => now(),
                'fecha_fin' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_usuario' => 2,
                'fk_dojo' => 2,
                'fecha_inicio' => now(),
                'fecha_fin' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('gestiona')->insert($gestiona);
    }
}