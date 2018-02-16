@extends('layouts.admin')
@section('contenido')


  <div class="row">
    <div class="col-lg-6 col-xs-12">
    <a href="empleados/create"><button class="btn btn-success">Nuevo</button></a>
    </div>
  </div>


<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Listado de Empleados</div>
    <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <th>Id</th>
          <th>Nombre</th>
          <th>Codigo</th>
          <th>Puesto</th>
          <th>Rol</th>
          <th>Opciones</th>
        </thead>

        @foreach ($empleados as $empleado)
        <tr>
          <td>{{$empleado->id}}</td>
          <td>{{$empleado->nombre}}</td>
          <td>{{$empleado->codigoempleado}}</td>
          <td>{{$empleado->puesto->nombre}}</td>
            <td>{{$empleado->rol->nombre}}</td>
          <td>
            <a href="{{URL::action('EmpleadosController@edit',$empleado->id)}}"> <button class="btn btn-info">Editar</button></a>
              <a href=""data-target="#modal-delete-{{$empleado->id}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
          </td>
        </tr>
@include('empleados.modal')
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
