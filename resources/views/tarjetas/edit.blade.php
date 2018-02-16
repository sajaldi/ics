@extends('layouts.admin')
@section('contenido')
<style media="screen">
.amarillo{ background-color:yellow;}
.color-etiquetas{ background-color:green;}
</style>
{!!Form::open(array('url'=>'tarjetas','method'=>'PATCH','autocomplete'=>'off'))!!}
{{Form::token()}}

<div class="row">
  <div class="col-lg-3 col-xs-12 offset-1">
    <div class="form-group">
      <label for="nombre">Fecha</label>
      <input type="text" name="fecha" class="form-control" value={{$tarjetas->fecha}}>
    </div>
      </div>
    <div class="col-lg-3 col-xs-12">
      <div class="form-group">
        <label for="nombre">Area/Linea</label>
        <select class="form-control" name="area_id" class="form-control">
          <option value="{{$tarjetas->area_id}}">{{$tarjetas->area_id}}</option>
        </select>
      </div>
    </div>
    <div class="col-lg-3 col-xs-12">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <select class="form-control" name="empleado_id" class="form-control">

        </select>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3 col-xs-12 offset-1">
      <div class="form-group">
        <label for="nombre">Equipo</label>
        <select class="form-control" name="equipo_id" class="form-control">

        </select>
      </div>
      </div>
      <div class="col-lg-3 col-xs-12">
        <div class="form-group">
          <label for="nombre">Turno</label>
          <select class="form-control" name="turno" class="form-control" placeholder="1">
            <option value="{{$tarjetas->turno}}">{{$tarjetas->turno}}</option>
          </select>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="form-group">
          <label for="nombre">Prioridad</label>
          <select class="form-control" name="prioridad" class="form-control" placeholder="1">
            <option value="$tarjetas->turno}}">$tarjetas->turno}}</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">

    </div>
    <div class="row">
    <div class="col-lg-6 col-xs-6">
      <div class="form-group">
        <label for="nombre">Categoria</label>
        <select class="form-control" name="categoria" class="form-control" placeholder="1">
          <option value="{{$tarjetas->categoria}}">{{$tarjetas->categoria}}</option>
        </select>
      </div>
    </div>
    </div>
    <div class="row">
  <div class="col-lg-10 offset-1">
  <div class="color-etiquetas text-center">
      <p>REPORTE DE PIRAMIDE DE SEGURIDAD</p>
  </div>
    </div>
    </div>
      <div class="row">
    <div class="col-lg-6 col-xs-6">
      <div class="form-group">
        <label for="nombre">Evento</label>
        <input type="text" name="evento" class="form-control" value="{{$tarjetas->evento}}">
      </div>
    </div>
    <div class="col-lg-6 col-xs-6">
      <div class="form-group">
        <label for="nombre">Causa del evento</label>
        <input type="text" name="causa" class="form-control" value="{{$tarjetas->causa}}">
      </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-10 offset-1">
      <div class="color-etiquetas text-center">
        <p>DESCRIPCION DE LA ANOMALIA</p>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <textarea name="descripcion_reporte" rows="5" cols="100" value="{{$tarjetas->descripcion_reporte}}"></textarea>
        </div>
      </div>
        </div>
      <div class="row">
      <div class="col-lg-10 offset-1">
        <div class="color-etiquetas text-center">
          <p>SOLUCION IMPLEMENTADA</p>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <textarea name="solucion_implementada" rows="5" cols="100"></textarea>
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-lg-6 col-xs-6">
            <div class="form-group">
              <label for="nombre">Fecha de cierre</label>
              <input type="text" name="fecha_cierre" class="form-control" placeholder="Cierre...">
            </div>
              </div>
              <div class="col-lg-6 col-xs-6">
                <div class="form-group">
                  <label for="nombre">Cerrado por</label>
                  <select class="form-control" name="cerrado" class="form-control">

                  </select>
                </div>
                  </div>
                  </div>


    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
      <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
  {!!Form::close()!!}
@endsection
