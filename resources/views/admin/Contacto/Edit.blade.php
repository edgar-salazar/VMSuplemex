@extends('adminlte::page')
@section('title', 'Editar ubicación')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Editar información de ubicación</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('contacto.Update', $contact)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="form-group">
                        <label for="local">Nombre del local</label>
                        <input class="form-control" type="text" name="local" id="local" value="{{$contact->local}}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="address">Dirección</label>
                            <input class="form-control" type="text" name="address" id="address" value="{{ $contact->address }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cp">C.P.</label>
                            <input class="form-control" type="number" name="cp" id="cp" value="{{ $contact->cp }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="region">Región</label>
                            <input class="form-control" type="text" name="region" id="region" value="{{ $contact->region }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ope">Horario Abierto</label>
                            <input class="form-control" type="text" name="ope" id="ope" value="{{ $contact->ope }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="clo">Horario Cerrado</label>
                            <input class="form-control" type="text" name="clo" id="clo" value="{{ $contact->clo }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="map">Mapa</label>
                        <textarea name="map" id="map" cols="30" rows="3" class="form-control">{{ $contact->map }}</textarea>
                    </div>
                    <a href="{{route('contacto.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Actualizar</button>
                    <a href="{{route('contacto.Delete', $contact)}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Eliminar</a>
                </form>
            </div>
        </div>
    </div>
@endsection