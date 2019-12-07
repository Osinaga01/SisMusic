<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntaExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta_examens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('enunciado');
            $table->smallInteger('ponderacion');
            $table->boolean('requiere_archivo');
            $table->string('estado');

            $table->unsignedBigInteger('examen_id');
            //relations
            $table->foreign('examen_id')->references('id')->on('examens');
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
        Schema::dropIfExists('pregunta_examens');
    }
}
