@extends('adminlte::page')
@section('title', 'Eliminar ubicación')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Eliminar ubicación</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('contacto.Destroy', $contact)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('delete')
                    <div class="form-group">
                        <label for="local">Nombre del local</label>
                        <input class="form-control" type="text" name="local" id="local" value="{{$contact->local}}" disabled>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="address">Dirección</label>
                            <input class="form-control" type="text" name="address" id="address" value="{{ $contact->address }}" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cp">C.P.</label>
                            <input class="form-control" type="text" name="cp" id="cp" value="{{ $contact->cp }}" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="region">Región</label>
                            <input class="form-control" type="text" name="region" id="region" value="{{ $contact->region }}" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ope">Horario Abierto</label>
                            <input class="form-control" type="text" name="ope" id="ope" value="{{ $contact->ope }}" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="clo">Horario Cerrado</label>
                            <input class="form-control" type="text" name="clo" id="clo" value="{{ $contact->clo }}" disabled>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="map">Map</label>
                        <textarea name="map" id="map" cols="30" rows="3" class="form-control" disabled>{{ $contact->map }}</textarea>
                    </div>
                    <a href="{{route('contacto.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                    <a href="{{route('contacto.Edit', $contact)}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Editar</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Eliminar</>
                </form>
            </div>
        </div>
    </div>
@endsection