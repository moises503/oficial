<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciacooperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistenciacooperaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asistencia');
            $table->timestamps();
            $table->integer('ciudadano_id')->unsigned();
            $table->integer('cooperacion_id')->unsigned();
            
            $table->foreign('ciudadano_id')->references('id')->on('ciudadanos');
            $table->foreign('cooperacion_id')->references('id')->on('cooperaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistenciacooperaciones');
    }
}
