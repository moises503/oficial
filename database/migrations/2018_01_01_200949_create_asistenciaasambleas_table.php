<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciaasambleasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistenciaasambleas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asistencia');
            
            $table->timestamps();

            $table->integer('ciudadano_id')->unsigned();
            $table->integer('asamblea_id')->unsigned();
            
            $table->foreign('ciudadano_id')->references('id')->on('ciudadanos');
            $table->foreign('asamblea_id')->references('id')->on('asambleas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistenciaasambleas');
    }
}
