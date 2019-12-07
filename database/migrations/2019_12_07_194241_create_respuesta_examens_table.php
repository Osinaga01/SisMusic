<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestaExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta_examens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('texto_respuesta');
            $table->string('ruta_archivo');
            $table->string('estado');

            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('pregunta_examen_id');
            //relations
            $table->foreign('estudiante_id')->references('user_id')->on('estudiantes');
            $table->foreign('pregunta_examen_id')->references('id')->on('pregunta_examens');
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
        Schema::dropIfExists('respuesta_examens');
    }
}
