<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Usuarios - Resultados</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #4caf50;
      color: #fff;
    }
    .btn {
      background-color: #4caf50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
      margin-bottom: 10px;
    }

    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
<a href="{{ route('usuariosbc') }}" class="btn">Agregar otro registro</a>

@if ($usuarios->count() > 0)
    <h2>Registros de Usuarios</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Correo Electrónico</th>
            <th>Número de Teléfono</th>
            <th>Fecha de Nacimiento</th>
        </tr>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->apellido_p }}</td>
                <td>{{ $usuario->apellido_m }}</td>
                <td>{{ $usuario->correo }}</td>
                <td>{{ $usuario->numero }}</td>
                <td>{{ $usuario->fecha_nacimiento }}</td>
            </tr>
        @endforeach
    </table>
@else
    <p>No hay registros de usuarios.</p>
@endif

</body>
</html>
