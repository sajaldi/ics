@extends('layouts.admin')
@section('contenido')

<div class="row">
<div class="col-lg-6 col-xs-12">
  <a href="status/create"><button class="btn btn-success">Nuevo</button></a>
</div>
</div>

<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Listado de Status</div>
    <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <th>Id</th>
          <th>Nombre</th>
          <th>Opciones</th>
        </thead>

        @foreach ($status as $stat)
        <tr>
          <td>{{$stat->id}}</td>
          <td>{{$stat->nombre}}</td>
          <td>
            <a href="{{URL::action('StatusController@edit',$stat->id)}}"> <button class="btn btn-info">Editar</button></a>
              <a href=""data-target="#modal-delete-{{$stat->id}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
          </td>
        </tr>
@include('status.modal')
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
