@extends('layouts.admin')
@section('contenido')

<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Reporte de Roles</div>
    <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <th>Id</th>
          <th>Nombre</th>
          <th>Opciones</th>
        </thead>

        @foreach ($roles as $rol)
        <tr>
          <td>{{$rol->id}}</td>
          <td>{{$rol->nombre}}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@stop
