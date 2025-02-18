<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstitutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('institutos')->insert([
            [
                'nombre' => 'Instituto de Investigaciones Geológicas y del Medio Ambiente ',
                'facultad_id' => 1,
                'carrera_id' => null,
                'direccion' => 'Calle 27.  Andrés Bello S/N . Cota Cota, Campus Universitario ',
                'telefono' => '2793392 - 2793124',
                'email' => 'igema@umsa.bo - igemaumsa@gmail.com',
                'web' => 'igema.umsa.bo',
                'enlace_facebook' => 'https://www.facebook.com/faumsabolivia/?locale=es_LA',
                'enlace_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30597.880373003045!2d-68.08532236044918!3d-16.539468499999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2146263ba623%3A0x737da742a3cd0b3f!2sInstituto%20de%20Investigaciones%20Geograficas%20UMSA!5e0!3m2!1ses!2sbo!4v1670263114499!5m2!1ses!2sbo',
                'estado' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}