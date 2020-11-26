@extends('adminlte::page')
@section('title', 'Eliminar usuario')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Eliminar usuario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('Usuarios.Destroy', $user)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('delete')
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{$user->name}}" disabled>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="email">Correo</label>
                        <input class="form-control" type="text" name="email" id="email" value="{{$user->email}}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="password">Contraseña</label>
                        <input class="form-control" type="password" name="password" id="password" value="{{$user->password}}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="role_id">Rol</label>
                        <input class="form-control" type="number" name="role_id" id="role_id" value="{{$user->role_id}}" disabled>
                    </div>
                </div>
                    <a href="{{route('Usuarios.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                    <a href="{{route('Usuarios.Edit', $user)}}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Editar</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Borrar</>
                </form>
            </div>
        </div>
    </div>
@endsection