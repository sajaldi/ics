@extends('layouts.admin')
@section('contenido')
<style media="screen">
.amarillo{ background-color:yellow;}
.color-etiquetas{ background-color:green;}
</style>

<div class="row">
<div class="col-lg-3">
  <a href=""data-target="#modal-create-tarjeta" data-toggle="modal"> <button class="btn btn-danger">Nueva</button></a>
</div>
<div class="col-lg-3">
  <p>Fecha: <input type="text" id="datepicker"></p>
</div>
<div class="col-lg-3">
  <a href="{{URL::action('TarjetasController@pdf',1)}}"> <button class="btn btn-info">pdf</button></a>
</div>
</div>
<div class="col-lg-3 col-xs-12">
  <div class="form-group">
    <label for="nombre">Planta</label>
    <select class="form-control" name="planta_id" class="form-control">
      <option value="">Seleccione Planta</option>
      @foreach($plantas as $p)
      <option value="{{$p->id}}">{{$p->nombre}}</option>
      @endforeach
    </select>
  </div>
</div>
<br>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Listado de Tarjetas</div>
    <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered text-center table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <th>Numero</th>
          <th>Area</th>
          <th>Planta</th>
          <th>Fecha</th>
          <th>Nombre</th>
          <th>Equipo</th>
          {{--<th>Turno</th>--}}
          <th>Prioridad</th>
          <th>Categoria</th>
          {{--<th>Evento</th>
          <th>Causa</th>--}}
          <th>Descripcion</th>
          {{--<th>Solucion</th>
          <th>Fecha cierre</th>--}}
          <th>Finalizado</th>
          <th>Estatus</th>
          <th>Opciones</th>
        </thead>

        @foreach ($tarjetas as $t)
        <tr>
          <td>{{$t->id}}</td>
          <td>{{$t->area->nombre}}</td>
          <td>{{$t->planta->nombre}}</td>
          <td>{{$t->created_at}}</td>
          <td>{{$t->empleado->nombre}}</td>
          <td>{{$t->equipo->nombre}}</td>
          {{--<td>{{$t->turno}}</td>--}}
          <td>{{$t->prioridad}}</td>
          <td>{{$t->categoria->nombre}}</td>
          {{--<td>{{$t->evento->nombre}}</td>
          <td>{{$t->causa->nombre}}</td>--}}
          <td>{{$t->descripcion_reporte}}</td>
          {{--<td>{{$t->solucion_implementada}}</td>
          <td>{{$t->fecha_cierre}}</td>--}}
          <td>{{$t->finalizado}}</td>
          <td>{{$t->status}}</td>
          <td>
            <a href="{{URL::action('TarjetasController@show',$t->id)}}"> <button class="btn btn-info">Ver</button></a>
            <a href="{{URL::action('TarjetasController@edit',$t->id)}}"> <button class="btn btn-info">Editar</button></a>
            <a href=""data-target="#modal-delete-{{$t->id}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
          </td>
        </tr>
        @include('tarjetas.modal')
        @endforeach
      </table>
    </div>
  </div>
</div>
@include('tarjetas.create')
@endsection

@section('scripts')
<script src="{{asset('js/combox.js')}}"></script>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
    //format: "dd/mm/yyyy",
  } );
  </script>
@endsection
