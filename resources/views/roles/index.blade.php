@extends('layouts.admin')
@section('contenido')
<br>
<div class="container">
<div class="col-lg-11">
<div class="panel panel-primary">
  <div class="panel-heading">Listado de Roles y Permisos</div>


<br>
<div class="container">
<div class="row">
    <div class="col-lg-5 offset-lg-0">
      <div class="table-header">
        Lista de Roles
      </div>
      <table class="table table-bordered text-center table-striped table-hover">
        <thead>
          <th>Id</th>
          <th>Nombre</th>
          <th>Opciones  &nbsp;
            <a class="blue" href="#" data-target="#modal-rol" data-toggle="modal">
              <i class="ace-icon fa fa-search-plus bigger-200"></i>
            </a>
          </th>
        </thead>

        @foreach ($roles as $rol)
        <tr>
          <td>{{$rol->id}}</td>
          <td>{{$rol->name}}</td>
          <td>
            <div class="action-buttons">

              <a class="blue" href="#" data-target="#" data-toggle="modal">
                <i class="ace-icon fa fa-eye bigger-200"></i>
              </a>

              <a class="green" href="">
                <i class="ace-icon fa fa-pencil bigger-200"></i>
              </a>

              <a class="red" href="" data-target="#modal-delete-{{$rol->id}}" data-toggle="modal">
                <i class="ace-icon fa fa-trash-o bigger-200"></i>
              </a>
            </div>
          </td>
        </tr>
@include('roles.modal')
        @endforeach
      </table>
  </div>



  <div class="col-lg-5">
    <div class="table-header">
      Lista de Permisos
    </div>
    <table class="table table-bordered text-center table-striped table-hover">
      <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Opciones &nbsp;
          <a class="blue" href="#" data-target="#modal-permiso" data-toggle="modal">
          <i class="ace-icon fa fa-search-plus bigger-200"></i>
          </a>
        </th>
      </thead>

      @foreach ($permisos as $p)
      <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->name}}</td>
        <td>
          <div class="action-buttons">

            <a class="green" href="">
              <i class="ace-icon fa fa-pencil bigger-200"></i>
            </a>

            <a class="red" href="" data-target="#modal-delete-permission-{{$p->id}}" data-toggle="modal">
              <i class="ace-icon fa fa-trash-o bigger-200"></i>
            </a>
          </div>
        </td>
      </tr>
      @include('roles.modal-delete-permission')
      @endforeach
    </table>

  </div>
</div>
</div>

</div>
</div>
</div>

{{--modal para crear un rol--}}

{!!Form::open(array('url'=>'roles','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="modal fade" id="modal-rol" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header no-padding">
        <div class="table-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <span class="white">&times;</span>
          </button>
          Crear un nuevo Rol
        </div>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-10">

            <div class="form-group">
              <label for="nombre">Nombre del Rol</label>
              <input type="text" name="rol" class="form-control" placeholder="Rol...">
            </div>

          </div>
        </div>
      </div>

      <div class="modal-footer no-margin-top">
        <button type="submit" class="btn btn-sm btn-success pull-left">
          <i class="ace-icon fa fa-check"></i>
          Crear
        </button>
        <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
          <i class="ace-icon fa fa-times"></i>
          Cerrar
        </button>
      </div>
    </div>
  </div>
</div>
  {{Form::Close()}}


  {{--modal para crear un permiso--}}

{{Form::open(array('action'=>array('RolesController@create_permission'),'method'=>'post'))}}
  {{Form::token()}}
  <div class="modal fade" id="modal-permiso" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header no-padding">
          <div class="table-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <span class="white">&times;</span>
            </button>
            Crear un nuevo Permiso
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-10">

              <div class="form-group">
                <label for="nombre">Nombre del Permiso</label>
                <input type="text" name="permiso" class="form-control" placeholder="Rol...">
              </div>

            </div>
          </div>
        </div>

        <div class="modal-footer no-margin-top">
          <button type="submit" class="btn btn-sm btn-success pull-left">
            <i class="ace-icon fa fa-check"></i>
            Crear
          </button>
          <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
            <i class="ace-icon fa fa-times"></i>
            Cerrar
          </button>
        </div>
      </div>
    </div>
  </div>
    {{Form::Close()}}


@endsection
