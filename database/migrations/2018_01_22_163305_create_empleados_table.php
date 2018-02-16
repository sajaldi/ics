<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigoempleado')->unsigned();
            $table->string('nombre',50);
            $table->integer('rol_id')->unsigned()->nullable();
            $table->integer('puesto_id')->unsigned()->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
//relacion con otras tablas
            $table->foreign('rol_id')->references('id')->on('roles');//->onDelete('cascade');
            $table->foreign('puesto_id')->references('id')->on('puestos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
