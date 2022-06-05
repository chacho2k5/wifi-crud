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
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('legajo')->nullable();
            $table->string('apellido',50)->nullable();
            $table->string('nombres',80)->nullable();
            $table->unsignedSmallInteger('documento_tipo_id')->nullable();     //
            $table->string('documento_numero',8)->nullable();
            $table->string('cuil',13)->nullable();
            $table->string('telefono1',20)->nullable();
            $table->string('telefono2',20)->nullable();
            $table->string('correo',80)->nullable();
            $table->unsignedTinyInteger ('ninicial')->nullable();
            $table->unsignedTinyInteger('nprimario')->nullable();
            $table->unsignedTinyInteger('nmedio')->nullable();
            $table->unsignedTinyInteger('nespecial')->nullable();
            $table->unsignedTinyInteger('nadmin')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->date('fecha_alta')->nullable();
            $table->date('fecha_baja')->nullable();
            $table->string('calle_nombre',80)->nullable();
            $table->string('calle_numero',20)->nullable();
            $table->string('codigo_postal',20)->nullable();
            $table->unsignedSmallInteger('barrio_id')->nullable(); //
            $table->unsignedSmallInteger('localidad_id')->nullable();          //
            $table->unsignedSmallInteger('provincia_id')->nullable();          //
            $table->string('domicilio_emergencia',100)->nullable();          //
            $table->unsignedSmallInteger('obra_social_id')->nullable();        //
            $table->string('servicio_emergencia',50)->nullable();          //
            $table->string('telefono_servicio_emergencia',20)->nullable();          //
            // $table->unsignedInteger('status_personal_id',20);             // Planta Permanente / Fuera de Planta
            $table->enum('categoria',['DOCENTE', 'NO DOCENTE'])->nullable();
            // $table->unsignedInteger('categoria_personal_id',20); // Docente / No Docente
            $table->enum('status',['PP', 'FP'])->nullable();
           // $table->unsignedInteger('apto_medico_id',20);               // Si / No / No Apto
            $table->enum('apto',['APTO', 'NO APTO', 'SIN APTO'])->nullable();
            $table->date('apto_fecha')->nullable();
            $table->enum('seguro',['SI', 'NO'])->nullable();
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
        Schema::dropIfExists('personal');
    }
};
