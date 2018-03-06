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
            $table->unsignedInteger('asamblea_id');
            $table->unsignedInteger('ciudadano_id');
            $table->boolean('asistio');
            $table->timestamps();
            $table->foreign('asamblea_id')->references('id')->on('asambleas')->onUpdate('cascade');
            $table->foreign('ciudadano_id')->references('id')->on('ciudadanos')->onUpdate('cascade');
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
