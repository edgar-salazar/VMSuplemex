@extends('adminlte::page')
@section('title', 'Detalles de la ubicación')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Detalles de ubicación</h1>
            </div>
        </div>
        <div class="row">
                <div class="card col-md-12">                        
                    <ul class="list-group list-group-flush">
                        <h3 class="card-title text-center"><strong>{{ $contact->local}}</strong></h3>
                        <li class="list-group-item">
                            <p><strong>Dirección: </strong>{{ $contact->address }} </p>
                            <p><strong>C.P.: </strong>{{ $contact->cp }}, {{ $contact->region }}</p>
                        </li>
                        <li class="list-group-item">
                            <p><strong>Horario Abierto: </strong>{{ $contact->ope }}</p>
                            <p><strong>Horario Cerrado: </strong>{{ $contact->clo }}</p>
                        </li>
                        <li class="list-group-item"><b>Mapa: </b> 
                            <br> 
                            <iframe src="{{ $contact->map }}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </li>
                        <li class="list-group-item"><b>Creado: </b>{{ $contact->created_at }} <strong>|</strong> <b>Actualizado: </b>{{ $contact->updated_at }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{route('contacto.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                        <a href="{{route('contacto.Edit', $contact)}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Editar</a>
                        <a href="{{route('contacto.Delete', $contact)}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection