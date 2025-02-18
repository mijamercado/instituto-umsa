<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('facultades')->insert([
            [
                'nombre' => 'Facultad de Ingeniería',
                'direccion' => 'Av. Siempre Viva 123',
                'telefono' => '78945612',
                'email' => 'ingenieria@universidad.edu',
                'web' => 'https://ingenieria.universidad.edu',
                'logo' => 'logos/ingenieria.png',
                'enlace_facebook' => 'https://facebook.com/facultad.ingenieria',
                'enlace_maps' => 'https://maps.google.com/ingenieria',
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Facultad de Medicina',
                'direccion' => 'Calle Salud 456',
                'telefono' => '78541236',
                'email' => 'medicina@universidad.edu',
                'web' => 'https://medicina.universidad.edu',
                'logo' => 'logos/medicina.png',
                'enlace_facebook' => 'https://facebook.com/facultad.medicina',
                'enlace_maps' => 'https://maps.google.com/medicina',
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}