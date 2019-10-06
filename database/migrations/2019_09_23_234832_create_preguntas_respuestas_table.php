<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas_respuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedInteger('caso_id');
            $table->unsignedInteger('pregunta_id');
            $table->unsignedInteger('respuesta_id');

            $table->foreign('caso_id')->references('id')->on('casos');
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
            $table->foreign('respuesta_id')->references('id')->on('respuestas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas_respuestas');
    }
}
