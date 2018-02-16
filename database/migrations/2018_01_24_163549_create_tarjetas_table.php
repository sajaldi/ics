<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleado_id')->unsigned();
            $table->integer('area_id')->unsigned();
            $table->integer('equipo_id')->unsigned();
            $table->String('prioridad');
            $table->text('descripcion_reporte');
            $table->integer('empleado_finaliza')->unsigned()->nullable();
            $table->integer('categoria_id')->unsigned();
            $table->text('solucion_implementada')->nullable();
            $table->integer('evento_id')->unsigned();
            $table->string('turno',3);
            $table->integer('causa_id')->unsigned();
            $table->date('fecha_cierre',50)->nullable();
            $table->boolean('finalizado')->nullable();
            $table->string('status',30)->nullable();
            $table->integer('planta_id')->unsigned();
            $table->integer('empleado_asignado')->unsigned()->nullable();
            $table->timestamps();
              //relaciones
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->foreign('causa_id')->references('id')->on('causas');
            $table->foreign('planta_id')->references('id')->on('plantas');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('empleado_asignado')->references('id')->on('empleados');
            $table->foreign('empleado_finaliza')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarjetas');
    }
}
