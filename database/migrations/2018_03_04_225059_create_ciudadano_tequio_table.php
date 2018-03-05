<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadanoTequioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudadano_tequio', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ciudadano_id');
            $table->unsignedInteger('tequio_id');
            $table->boolean('asistio')->default(false);
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
        Schema::dropIfExists('ciudadano_tequio');
    }
}
