@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD de usuarios</h2>
        </div>
        <div>
            <a href="{{route('usuarios.create')}}" class="btn btn-primary">Añadir un usuario</a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            <strong>{{session('success')}}</strong><br>
        </div>
    @endif
    
    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Correo</th>
                <th>Numero</th>
                <th>Fecha de nacimiento</th>
                <th>Acción</th>
            </tr>
            @foreach($usuarios as $usuario)
                <tr>
                    <td class="fw-bold">{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellido_p}}</td>
                    <td>
                        {{$usuario->apellido_m}}
                    </td>
                    <td>
                        {{$usuario->correo}}
                    </td>
                    <td>
                        {{$usuario->numero}}
                    </td>
                    <td>
                        {{$usuario->fecha_nacimiento}}
                    </td>

                    <td>
                        <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning">Editar</a>

                        <form action="{{ route('usuarios.destroy', $usuario) }}" method="post" class="d-inline">
                            @csrf <!-- Aquí se incluye el token CSRF -->
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
           
        </table>
        {{$usuarios->links()}}
    </div>
</div>
@endsection
