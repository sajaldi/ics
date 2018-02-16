<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCausasTable extends Migration
{

    public function up()
    {
        Schema::create('causas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
        });
    }


    public function down()
    {
        Schema::dropIfExists('causas');
    }
}
