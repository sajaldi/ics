@extends('layouts.admin')
@section('contenido')
<div class="row">
  <div class="col-lg-6 col-xs-12">
    {{--<h3>Editar Categorias: {{$categorias->Nombre}}</h3>--}}

    @if (count($errors)>0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif

    {!!Form::model($categorias,['method'=>'PATCH','route'=>['categorias.update',$categorias->id]])!!}
    {{Form::token()}}
    <h3 class="header smaller lighter blue">Editar Categoria</h3>

    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" class="form-control" value="{{$categorias->nombre}}">
    </div>

    <div class="form-group">
      <button class="btn btn-primary" type="submit">Guardar<i class="fa fa-check"></i></button>
      <button class="btn btn-danger" type="reset">Cancelar<i class="fa fa-times"></button>
    </div>

    {!!Form::close()!!}
  </div>
</div>
@stop
