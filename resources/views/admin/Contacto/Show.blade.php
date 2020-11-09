@extends('layouts_admin.app')
@section('title', 'Contact'. $contact->local)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Detalles de contacto</h1>
            </div>
        </div>
        <div class="row">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <h3 class="card-title text-center"><strong>{{ $contact->local}}</strong></h3>
                    </ul>
                    <img class="card-img-top" src="images/{{$contact->avatar}}" alt="">
                    <div class="card-body">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p><strong>Ubicación: </strong>{{ $contact->address }} </p>
                            <p><strong>C.P. </strong>{{ $contact->cp }}, {{ $contact->region }}</p>
                        </li>
                        <li class="list-group-item">
                            <p><strong>Horario Abierto: </strong>{{ $contact->ope }}</p>
                            <p><strong>Horario Cerrado: </strong>{{ $contact->clo }}</p>
                        </li>
                        <li class="list-group-item"><b>Telefono: </b> {{ $contact->phone }}</li>
                        <li class="list-group-item"><b>Celular: </b> {{ $contact->cellphone }}</li>
                        <li class="list-group-item"><b>Correo: </b> 
                            <a href="mailto:{{$contact->mail}}">{{$contact->mail}}</a>
                        </li>
                        <li class="list-group-item"><b>Facebook: </b> 
                            <a href="{{$contact->facebook}}">{{$contact->facebook}}</a>
                        </li>
                        <li class="list-group-item"><b>Mapa: </b> {{ $contact->map }} 
                            <iframe style="width: 100%; height: 430px; border: 0;" 
                            src="{{$contact->map}}" 
                            width="800" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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