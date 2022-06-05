<?php

namespace Database\Seeders;

use App\Models\Articulo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $articulo = new Articulo();
        // $articulo->codigo = "1900";
        // $articulo->descripcion = "Seeder aticulo";
        // $articulo->cantidad = "50";
        // $articulo->precio = "1110";
        // $articulo->save();

        Articulo::factory(10000)->create();
    }
}
