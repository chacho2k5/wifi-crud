<?php

namespace Database\Seeders;

use App\Models\Nivel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $niveles = [
            ['descripcion' => 'INICIAL'],
            ['descripcion' => 'PRIMARIO'],
            ['descripcion' => 'MEDIO'],
            ['descripcion' => 'ESPECIAL'],
            ['descripcion' => 'ADMINISTRACION'],
        ];

        foreach ($niveles as $nivel) {
            Nivel::create($nivel);
        }

    }
}
