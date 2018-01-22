<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudadanos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('lugarnacimiento')->nullable();
            $table->date('fechanacimiento');
            $table->string('calledomicilio')->nullable();
            $table->string('numerodomicilio')->nullable();
            $table->string('residencia')->nullable();
            $table->string('sexo')->nullable();
            $table->string('lenguamaterna')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('gradoestudios')->nullable();
            $table->string('estadocivil')->nullable();
            $table->date('fechacasado')->nullable();
            $table->date('fechaciudadano')->nullable();
            $table->date('fechapredio')->nullable();    
            $table->string('servicioagua')->nullable();
            $table->string('nombretomaagua')->nullable();
            $table->string('serviciosalud')->nullable();
            $table->string('serviciopanteon')->nullable();
            $table->string('nombreresponsable')->nullable();
            $table->string('serviciodrenaje')->nullable();
            $table->string('servicioenergia')->nullable();


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
        Schema::dropIfExists('ciudadanos');
    }
}
