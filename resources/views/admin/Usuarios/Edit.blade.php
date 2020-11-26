@extends('adminlte::page')
@section('title', 'Editar usuario')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editar información de usuario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('Usuarios.Update', $user)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{$user->name}}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="email">Correo</label>
                        <input class="form-control" type="text" name="email" id="email" value="{{$user->email}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="password">Contraseña</label>
                        <input class="form-control" type="password" name="password" id="password" value="{{$user->password}}">
                    </div>
                </div>
                    <a href="{{route('Usuarios.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                    <button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Actualizar</button>
                    <a href="{{route('Usuarios.Delete', $user)}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Eliminar</a>
                </form>
            </div>
        </div>
    </div>
@endsection