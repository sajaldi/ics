<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{

    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->integer('planta_id')->unsigned();

            $table->foreign('planta_id')->references('id')->on('plantas');

        });
    }

    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
