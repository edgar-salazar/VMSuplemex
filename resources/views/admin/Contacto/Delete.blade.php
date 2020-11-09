@extends('layouts_Admin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Eliminar información de contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('contacto.Destroy', $contact)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('delete')
                    <div class="form-group">
                        <label for="local">Local</label>
                        <input class="form-control" type="text" name="local" id="local" value="{{$contact->local}}" disabled>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="address">Ubicación</label>
                            <input class="form-control" type="text" name="address" id="address" value="{{ $contact->address }}" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cp">C.P.</label>
                            <input class="form-control" type="number" name="cp" id="cp" value="{{ $contact->cp }}" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="region">Región</label>
                            <input class="form-control" type="text" name="region" id="region" value="{{ $contact->region }}" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ope">Horario abierto</label>
                            <input class="form-control" type="text" name="ope" id="ope" value="{{ $contact->ope }}" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="clo">Horario cerrado</label>
                            <input class="form-control" type="text" name="clo" id="clo" value="{{ $contact->clo }}" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="phone">Telefono</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ $contact->phone }}" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cellphone">Celular</label>
                            <input class="form-control" type="text" name="cellphone" id="cellphone" value="{{ $contact->cellphone }}" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="mail">Correo</label>
                            <input class="form-control" type="text" name="mail" id="mail" value="{{ $contact->mail }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input class="form-control" type="text" name="facebook" id="facebook" value="{{ $contact->facebook }}" disabled>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Nombre de la imagen</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ $contact->name }}" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="avatar">Avatar</label>
                            <input type="file" name="avatar" id="avatar" value="{{ $contact->avatar }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="map">Mapa</label>
                        <input class="form-control" type="text" name="map" id="map" value="{{ $contact->map }}" disabled>
                    </div>
                    <a href="{{route('contacto.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                    <a href="{{route('contacto.Edit', $contact)}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Editar</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Eliminar</>
                </form>
            </div>
        </div>
    </div>
@endsection