<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grados = [
            ['nombre' => '1º dan'],
            ['nombre' => '2º dan'],
            ['nombre' => '3º dan'],
            ['nombre' => '4º dan'],
            ['nombre' => '5º dan'],
            ['nombre' => '6º dan'],
        ];

        DB::table('grados')->insert($grados);
    }
}