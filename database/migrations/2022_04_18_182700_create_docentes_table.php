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
            $table->unsignedSmallInteger('legajo')->unique();
            $table->string('apellido',50);
            $table->string('nombres',80);
            $table->unsignedSmallInteger('documento_tipo_id');
            $table->string('documento_numero',8);
            $table->string('cuil',13);
            $table->string('celular',20);
            $table->string('email',80);
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
