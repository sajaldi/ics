<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example 2</title>

  </head>
  <body>

    <main>
      <div id="details" class="clearfix">

          <p>Reporte de Roles</p>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="">ID</th>
            <th class="">Nombre</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($data as $d)
            <td class="no">{{ $d->id }}</td>
            <td class="desc">{{ $d->nombre }}</td>
            @endforeach
          </tr>

        </tbody>
      </table>
  </body>
</html>
