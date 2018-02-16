<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <h1>Reportes</h1>
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
  <p>Reporte de Causas</p>
</div>
<p>fecha del reporte: {{$date}}</p>

          <table  border="1" cellspacing="1" cellpadding="1">
            <thead>
              <tr>
              <th>Id</th>
              <th>Nombre</th>
            </tr>
            </thead>
          <tbody>

            @foreach ($datos as $d)
            <tr>
              <td>{{$d->id}}</td>
              <td>{{$d->nombre}}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
  </body>
</html>
