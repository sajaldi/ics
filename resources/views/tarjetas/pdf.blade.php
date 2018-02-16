<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reportes</title>
  </head>
  <body>

    <style media="screen">
    .amarillo{ background-color:yellow;}
    .color-etiquetas{ background-color:green;}
    .normal {
  width: 250px;
  border: 1px solid #000;
}
    </style>


<div class="amarillo">
  <p>Reporte de Tarjetas</p>
</div>

          <table  border="1" cellspacing="1" cellpadding="1">

            </tr>
            <thead>
              <tr>


              <th>No</th>
              <th>Nombre</th>
              <th>Descripcion</th>
              </tr>
            </thead>
          <tbody>

            @foreach ($tarjetas as $t)
            <tr>
              <td>{{$t->id}}</td>
              <td>{{$t->empleado->nombre}}</td>
              <td>{{$t->descripcion_reporte}}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
  </body>
</html>
