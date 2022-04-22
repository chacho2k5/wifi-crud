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
<<<<<<< HEAD
=======
            $table->unsignedSmallInteger('legajo')->nullable();
            $table->string('apellido',50);
            $table->string('nombres',80);
            $table->unsignedTinyInteger('documento_tipo_id');
            $table->string('documento_nro',8);
            $table->string('cuil',11)->nullable();
            $table->string('celular',11)->nullable();
            $table->string('correo')->unique()->nullable();
>>>>>>> 3683407b04d20f616864c4ba7679da2431160586
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
