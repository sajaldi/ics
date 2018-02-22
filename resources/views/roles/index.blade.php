@extends('layouts.admin')
@section('contenido')
<br>

<div class="row">
<div class="col-lg-6 col-xs-12">
  <a href="roles/create"><button class="btn btn-success">Nuevo</button></a>
</div>
</div>

<br>

<div class="row">
    <div class="col-lg-5">
    <div class="table-responsive">
      <table class="table table-bordered text-center table-striped table-hover">
        <thead>
          <th>Id</th>
          <th>Nombre</th>
          <th>Opciones</th>
        </thead>

        @foreach ($roles as $rol)
        <tr>
          <td>{{$rol->id}}</td>
          <td>{{$rol->name}}</td>
          <td>
            <a href="{{URL::action('RolesController@edit',$rol->id)}}"> <button class="btn btn-info">Editar</button></a>
              <a href=""data-target="#modal-delete-{{$rol->id}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
          </td>
        </tr>
@include('roles.modal')
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
