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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('legajo')->nullable();
            $table->string('apellido',50);
            $table->string('nombres',80);
            $table->unsignedTinyInteger('documento_tipo_id');
            $table->string('documento_nro',8);
            $table->string('cuil',11)->nullable();
            $table->string('celular',11)->nullable();
            $table->string('correo')->unique()->nullable();
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
        Schema::dropIfExists('docentes');
    }
};
