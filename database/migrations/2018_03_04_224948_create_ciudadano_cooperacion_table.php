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
            $table->unsignedInteger('ciudadano_id');
            $table->unsignedInteger('cooperacion_id');
            $table->boolean('asistio');
            $table->timestamps();
            $table->foreign('ciudadano_id')->references('id')->on('ciudadanos')->onUpdate('cascade');
            $table->foreign('cooperacion_id')->references('id')->on('cooperaciones')->onUpdate('cascade');
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
