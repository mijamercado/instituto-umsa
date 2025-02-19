<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => hash::make('admin123'),
        ]);
        $this->call(FacultadSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(InstitutoSeeder::class);
        $this->call(TipoInvestigacionSeeder::class);
        $this->call(InvestigacionSeeder::class);
        $this->call(LaboratorioSeeder::class);
        $this->call(ServicioSeeder::class);
    }
}
