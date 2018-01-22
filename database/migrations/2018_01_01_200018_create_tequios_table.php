<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTequiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tequios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('descripcion')->nullable();
            $table->string('organiza')->nullable();
            $table->date('fechatequio');

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
        Schema::dropIfExists('tequios');
    }
}
