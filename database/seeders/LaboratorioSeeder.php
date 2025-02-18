<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaboratorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laboratorios')->insert([
            [
                'nombre' => 'Laboratorio de analisis',
                'descripcion' => null,
                'instituto_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}