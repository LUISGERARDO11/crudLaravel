@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Añadir usuario</h2>
        </div>
        <div>
            <a href="{{route('usuarios.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>

   

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error</strong> Algo fue mal..<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('usuarios.store')}}" method="POST">
        @csrf <!-- Aquí se incluye el token CSRF -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" >
                </div>
                <div class="form-group">
                    <strong>Apellido Paterno:</strong>
                    <input type="text" name="apellido_p" class="form-control" placeholder="Apellido Paterno" >
                </div>
                <div class="form-group">
                    <strong>Apellido Materno:</strong>
                    <input type="text" name="apellido_m" class="form-control" placeholder="Apellido Materno" >
                </div>
                <div class="form-group">
                    <strong>Correo Electrónico:</strong>
                    <input type="email" name="correo" class="form-control" placeholder="Correo electrónico" >
                </div>
                <div class="form-group">
                    <strong>Número de Teléfono:</strong>
                    <input type="number" name="numero" class="form-control" placeholder="Número de Teléfono" >
                </div>
                <div class="form-group">
                    <strong>Contraseña:</strong>
                    <input type="password" name="contrasenia" class="form-control" placeholder="Contraseña" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Fecha de nacimiento:</strong>
                    <input type="date" name="fecha_nacimiento" class="form-control" id="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection