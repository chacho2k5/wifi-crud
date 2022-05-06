<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();


            $table->unsignedSmallInteger('legajo')->unique();
            $table->string('apellido',50);
            $table->string('nombres',80);
            $table->unsignedSmallInteger('documento_identidad_id');
            $table->string('documento_numero',8);
            $table->string('cuil',13);
            $table->string('telefono1',20);
            $table->string('telefono2',20);
            $table->string('correo',80);
            $table->unsignedTinyInteger('ninicial');
            $table->unsignedTinyInteger('nprimario');
            $table->unsignedTinyInteger('nmedio');
            $table->unsignedTinyInteger('nespecial');
            $table->unsignedTinyInteger('nadmin');
            $table->date('fecha_nacimiento');
            $table->date('fecha_alta');
            $table->date('fecha_baja');

            $table->timestamps();




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personals');
    }
};
