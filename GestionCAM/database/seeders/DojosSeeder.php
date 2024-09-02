<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DojosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dojos = [
            ['id' => 1, 'nombre' => 'DojoCAM', 'direccion' => '', 'telefono' => '', 'obs' => ''],
            ['id' => 2, 'nombre' => 'BudoElche', 'direccion' => '', 'telefono' => '', 'obs' => ''],
        ];

        DB::table('dojos')->insert($dojos);
    }
}