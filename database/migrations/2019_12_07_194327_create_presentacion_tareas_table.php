<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentacionTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentacion_tareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('fecha_hota');
            $table->string('contenido');
            $table->string('ruta_archivo');
            $table->string('estado');

            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('tarea_id');
            //relations
            $table->foreign('tarea_id')->references('id')->on('tareas');
            $table->foreign('estudiante_id')->references('user_id')->on('estudiantes');
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
        Schema::dropIfExists('presentacion_tareas');
    }
}
