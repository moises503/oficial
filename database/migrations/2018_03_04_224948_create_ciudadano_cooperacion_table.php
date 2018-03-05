<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadanoCooperacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudadano_cooperacion', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ciudadano_id');
            $table->unsignedInteger('cooperacion_id');
            $table->boolean('asistio')->default(false);
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
        Schema::dropIfExists('ciudadano_cooperacion');
    }
}
