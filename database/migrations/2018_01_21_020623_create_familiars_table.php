<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('parentesco');
            $table->date('fechanacimiento')->nullable();
            $table->string('estadocivil')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('resideenpoblacion')->nullable();
            $table->date('fechadenoresidir')->nullable();
            $table->integer('ciudadano_id')->unsigned();
            $table->timestamps();

           
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
        Schema::dropIfExists('familiars');
    }
}
