<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsambleaCiudadanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asamblea_ciudadano', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('asamblea_id');
            $table->unsignedInteger('ciudadano_id');
            $table->boolean('asistio')->default(false);
            $table->foreign('asamblea_id')->references('id')->on('asambleas');
            $table->foreign('ciudadano_id')->references('id')->on('ciudadanos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asamblea_ciudadano');
    }
}
