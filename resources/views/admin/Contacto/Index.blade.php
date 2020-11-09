@extends('layouts_admin.app')
@section ('title', 'Contacto')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Información de contacto</h1>
        </div>
        <a class="text-right" href="{{route('contacto.Create')}}">Agregar nueva información de contacto</a>
    </div>
    <div class="row">
        @foreach($contacts as $contact)
            <div class="card col-sm-4">
                <div class="card-body">
                <h5 class="card-title text-center"><strong>Local {{ $contact->local }}</strong></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Ubicación:</strong> {{ $contact->address }}</li>
                    <li class="list-group-item"><strong>C.P.</strong> {{ $contact->cp }}, {{$contact->region}}</li>
                </ul>
                <div class="card-body">
                    <a href="{{route('contacto.Show', $contact)}}" class="card-link">Detalles</a>
                    <a href="{{route('contacto.Edit', $contact)}}" class="card-link">Editar</a>
                    <a href="{{route('contacto.Delete', $contact)}}" class="card-link">Eliminar</a>
                </div>
            </div>
        @endforeach  
    </div>
</div>
@endsection