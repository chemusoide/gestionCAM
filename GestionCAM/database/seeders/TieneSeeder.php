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
            ['usuario_id' => 2, 'grado_id' => 6],
            ['usuario_id' => 3, 'grado_id' => 5],
            ['usuario_id' => 4, 'grado_id' => 4],
            ['usuario_id' => 5, 'grado_id' => 1],
        ];

        DB::table('tiene')->insert($tiene);
    }
}