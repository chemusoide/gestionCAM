<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' => 1, 'nombre' => 'Administrador', 'obs' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nombre' => 'Dojo-Cho', 'obs' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'nombre' => 'Aikidoka', 'obs' => '', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'nombre' => 'Shihan', 'obs' => '', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}