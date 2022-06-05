<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\Barrio;
use App\Models\Calle;
use App\Models\Localidad;
use App\Models\Nivel;
use App\Models\ObraSocial;
use App\Models\Personal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([ArticuloSeeder::class,
                PersonalSeeder::class,
                UserSeeder::class,
                DocumentoTipoSeeder::class,
                ProvinciaSeeder::class,
                NivelSeeder::class,
                BarrioSeeder::class,
                CalleSeeder::class,
                LocalidadSeeder::class,
                ObraSocialSeeder::class
            ]);
    }
}
