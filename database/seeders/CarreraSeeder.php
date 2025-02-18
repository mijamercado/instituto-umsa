<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('carreras')->insert([
            [
                'nombre' => 'Ingenieria Agronómica',
                'facultad_id' => 1,
                'direccion' => 'Av. Landaeta esquina Héroes del Acre., La Paz, Bolivia',
                'telefono' => null,
                'email' => null,
                'web' => 'https://fa.umsa.bo/',
                'logo' => null,
                'enlace_facebook' => 'https://www.facebook.com/faumsabolivia/?locale=es_LA',
                'enlace_maps' => 'https://maps.app.goo.gl/H49HfKBtN1kFtLxy5',
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}