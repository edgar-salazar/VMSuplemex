@extends('adminlte::page')
@section('title', 'Agregar ubicación')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Agregar ubicación</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('contacto.Store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="local">Nombre del local</label>
                        <input class="form-control" type="text" name="local" id="local">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="address">Dirección</label>
                            <input class="form-control" type="text" name="address" id="address">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cp">C.P.</label>
                            <input class="form-control" type="text" name="cp" id="cp">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="region">Región</label>
                            <input class="form-control" type="text" name="region" id="region">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ope">Horario Abierto</label>
                            <input class="form-control" type="text" name="ope" id="ope">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="clo">Horario Cerrado</label>
                            <input class="form-control" type="text" name="clo" id="clo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="map">Mapa</label>
                        <textarea name="map" id="map" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <a href="{{route('contacto.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Agregar</button>
                </form>
            </div>
        </div>
    </div>
@endsection