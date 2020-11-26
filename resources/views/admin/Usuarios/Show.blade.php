@extends('adminlte::page')
@section('title', 'Detalles de usuario')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Detalles de usuario</h1>
            </div>
        </div>
        <div class="row">
                <div class="card col-md-12">                        
                    <ul class="list-group list-group-flush">
                        <br>
                        <h3 class="card-title text-center"><strong>{{ $user->name}}</strong></h3>
                        <li class="list-group-item"><b>Correo: </b>{{ $user->email }} </li>
                        <li class="list-group-item"><b>Contraseña: </b>{{ $user->password }} </li>
                        <li class="list-group-item"><b>Creado: </b>{{ $user->created_at }} <strong>|</strong> <b>Actualizado: </b>{{ $user->updated_at }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{route('Usuarios.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                        <a href="{{route('Usuarios.Edit', $user)}}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Editar</a>
                        <a href="{{route('Usuarios.Delete', $user)}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection