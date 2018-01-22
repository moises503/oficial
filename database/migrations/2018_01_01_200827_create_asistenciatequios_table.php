<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciatequiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistenciatequios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asistencia');
            $table->timestamps();
            
            $table->integer('ciudadano_id')->unsigned();
            $table->integer('tequio_id')->unsigned();
            
            $table->foreign('ciudadano_id')->references('id')->on('ciudadanos');
            $table->foreign('tequio_id')->references('id')->on('tequios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistenciatequios');
    }
}
