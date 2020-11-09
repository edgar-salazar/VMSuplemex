@extends('layouts.app')
@section ('title', 'Contacto')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Informacion de contacto</h1>
        </div>
    </div>
@foreach ($contacts as $contact)
    <div class="row">
        <div class="col-sm-6">
            <div class="card" style="margin: 1rem; border-radius: 1rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"><strong>Ubicación</strong><br>{{$contact->local}}</h5>
                    <iframe style="width: 100%; height: 430px; border: 0;" 
                        src="{{$contact->map}}" 
                        width="800" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" responsive>
                    </iframe>
                    <p class="card-text"><strong>Dirección: </strong>{{$contact->address}}</p> 
                    <p class="card-text"><strong>C.P. </strong>{{$contact->cp}}, {{$contact->region}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="margin: 1rem; border-radius: 1rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"><strong>Contacto</strong>
                        <br>{{$contact->local}}
                    </h5>
                    <p class="card-text text-center"><strong>Horario</strong>
                        <br>
                        {{$contact->ope}}
                        <br>
                        {{$contact->clo}}
                    </p>
                    <p class="card-text"><strong>Telefono: </strong>{{$contact->phone}}</p>
                    <p class="card-text"><strong>Celular: </strong>{{$contact->cellphone}}</p>
                    <p class="card-text"><strong>Correo: </strong>
                        <a href="mailto:{{$contact->mail}}" class="card-link">{{$contact->mail}}</a>
                    </p>
                    <p class="card-text"><strong>Facebook: </strong>
                        <a href="{{$contact->facebook}}" class="card-link">{{$contact->facebook}}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection