@extends('adminlte::page')
@section('title', 'Agregar producto')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Agregar producto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('Productos.Store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre del Producto</label>
                        <input class="form-control" type="text" name="nombre" id="nombre">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="codigo_barra">Código de Barras</label>
                            <input class="form-control" type="text" name="codigo_barra" id="codigo_barra">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="marca">Marca</label>
                            <input class="form-control" type="text" name="marca" id="marca">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="categoria">Categoría</label>
                            <input class="form-control" type="text" name="categoria" id="categoria">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="precio_compra">Precio Compra</label>
                            <input class="form-control" type="number" step="any" name="precio_compra" id="precio_compra">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="precio_venta">Precio Venta</label>
                            <input class="form-control" type="number" step="any" name="precio_venta" id="precio_venta">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cantidad">Cantidad</label>
                            <input class="form-control" type="number" name="cantidad" id="cantidad">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="3"></textarea>
                    </div>
                    <a href="{{route('Productos.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Agregar</button>
                </form>
            </div>
        </div>
    </div>
@endsection