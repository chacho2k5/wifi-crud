<?php

namespace Database\Seeders;

use App\Models\ObraSocial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObraSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ObraSocial::factory(100)->create();
    }
}
