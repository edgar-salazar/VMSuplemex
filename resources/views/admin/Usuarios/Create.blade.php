@extends('adminlte::page')
@section('title', 'Agregar usuario')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Agregar usuario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('Usuarios.Store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input class="form-control" type="text" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input class="form-control" type="number" name="password" id="password">
                    </div>
                    <a href="{{route('Usuarios.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Agregar</button>
                </form>
            </div>
        </div>
    </div>
@endsection