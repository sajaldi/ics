@extends('layouts.admin')
@section('contenido')

<div class="row">
  <div class="col-lg-8 col-xs-12">
    <h3>Listado de Prioridades <a href="prioridades/create"><button class="btn btn-success">Nuevo</button></a></h3>
  @include('prioridades.search')
  </div>
</div>

<div class="row">
  <div class="col-lg-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>Id</th>
          <th>Nombre</th>
          <th>Opciones</th>
        </thead>

        @foreach ($prioridades as $prio)
        <tr>
          <td>{{$prio->id}}</td>
          <td>{{$prio->nombre}}</td>
          <td>
            <a href="{{URL::action('PrioridadesController@edit',$prio->id)}}"> <button class="btn btn-info">Editar</button></a>
            <a href=""data-target="#modal-delete-{{$prio->id}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
          </td>
        </tr>
@include('prioridades.modal')
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
