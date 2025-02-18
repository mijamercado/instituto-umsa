<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvestigacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('investigacion')->insert([
            [
                'nombre' => 'Investigacion 1',
                'descripcion' => 'Descripcion de la investigacion 1',
                'instituto_id' => 1,
                'tipo_investigacion_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}