@extends('layouts.admin')
@section('contenido')
<style media="screen">
.amarillo{ background-color:yellow;}
.color-etiquetas{ background-color:green;}
</style>



<div class="col-lg-3">
  <a href=""data-target="#modal-create-tarjeta" data-toggle="modal"> <button class="btn btn-danger">Nueva</button></a>
</div>


<div class="row">
<div class="col-xs-12">
  <h3 class="header smaller lighter blue">Listado de Tarjetas Realizadas</h3>
  <div class="clearfix">
    <div class="pull-right tableTools-container"></div>
  </div>

  <div class="table-header">
    Listado de tarjetas realizadas"
  </div>

      <table class="table table-bordered text-center table-striped table-hover" id="table-tarjetas">
        <thead>
          <th>Numero</th>
          <th>Area</th>
          <th>Planta</th>
          <th>Fecha</th>
          {{--<th>Nombre</th>--}}
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
          </div>
        </thead>


        @foreach ($tarjetas as $t)
        <tr>
          <td>{{$t->id}}</td>
          <td>{{$t->area->nombre}}</td>
          <td>{{$t->planta->nombre}}</td>
          <td>{{$t->created_at}}</td>
          {{--<td>{{$t->empleado->nombre}}</td>--}}
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
          <td><span class="label label-sm label-success">{{$t->status}}</span>
          </td>
          <td>
            <div class="hidden-sm hidden-xs action-buttons">
              <a class="blue" href="{{URL::action('TarjetasController@show',$t->id)}}">
                <i class="ace-icon fa fa-eye bigger-200"></i>
              </a>
              <a class="green" href="#">
                <i class="ace-icon fa fa-pencil bigger-200"></i>
              </a>

              <a class="red" href="" data-target="#modal-delete-{{$t->id}}" data-toggle="modal">
                <i class="ace-icon fa fa-trash-o bigger-200"></i>
              </a>
            </div>
          </td>
        </tr>
        @include('tarjetas.modal')
        @endforeach
      </table>

</div>
</div>
@include('tarjetas.create')

@endsection

@section('scripts')
<script src="js/combox.js"></script>

<script type="text/javascript">
$('#table').datatable({
  //pageSize: 5,
  //sort: [true, true, false],
//  filters: [true, false, 'select'],
  //filterText: 'Type to filter... ',
  //pagingDivSelector: "#paging-first-datatable"
});
</script>
@endsection
