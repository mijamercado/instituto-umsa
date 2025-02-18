<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoInvestigacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_investigacion')->insert([
            [
                'tipo' => 'Area',
                'descripcion' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipo' => 'Asesoramiento',
                'descripcion' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipo' => 'Linea',
                'descripcion' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}