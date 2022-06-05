<?php

namespace Database\Seeders;

use App\Models\DocumentoTipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dnis = [
            ['codigo' => 'DNI','descripcion' => 'Documento Nacional de Identidad'],
            ['codigo' => 'LC','descripcion' => 'Libreta Cívica'],
            ['codigo' => 'LE','descripcion' => 'Libreta de Enrolamiento'],
            ['codigo' => 'CI','descripcion' => 'Cédula de Identidad'],
            ['codigo' => 'DE','descripcion' => 'Documento extranjero o pasaporte'],
            ['codigo' => 'DNIF','descripcion' => 'Documento Nacional de Identidad Femenino'],
            ['codigo' => 'DNIM','descripcion' => 'Documento Nacional de Identidad Masculino'],
            ['codigo' => 'CM','descripcion' => 'Cédula migratoria o documento transitorio'],
            ['codigo' => 'IND','descripcion' => 'Indocumentado'],
        ];

        foreach ($dnis as $dni) {
            DocumentoTipo::create($dni);
        }
    }
}
