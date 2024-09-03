<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TieneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiene = [
            ['fk_usuario' => 2, 'fk_grado' => 6],
            ['fk_usuario' => 3, 'fk_grado' => 5],
            ['fk_usuario' => 4, 'fk_grado' => 4],
            ['fk_usuario' => 5, 'fk_grado' => 1],
        ];

        DB::table('tiene')->insert($tiene);
    }
}