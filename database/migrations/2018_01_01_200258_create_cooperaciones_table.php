<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCooperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooperaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('descripcion')->nullable();
            $table->string('organiza')->nullable();
            $table->string('cantidad')->nullable();
            $table->date('fechacooperacion');

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
        Schema::dropIfExists('cooperaciones');
    }
}
