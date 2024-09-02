<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagaSeeder extends Seeder
{
    public function run(): void
    {
        $pagas = [
            [
                'fk_usuario' => 3,
                'fk_cuota' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_usuario' => 5,
                'fk_cuota' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('paga')->insert($pagas);
    }
}