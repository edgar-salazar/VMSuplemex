@extends('adminlte::page')
@section('title', 'Editar producto')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editar información de producto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('Productos.Update', $product)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nombre">Nombre del Producto</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" value="{{$product->nombre}}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="codigo_barra">Código de Barras</label>
                        <input class="form-control" type="text" name="codigo_barra" id="codigo_barra" value="{{$product->codigo_barra}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="marca">Marca</label>
                        <input class="form-control" type="text" name="marca" id="marca" value="{{$product->marca}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="categoria">Categoría</label>
                        <input class="form-control" type="text" name="categoria" id="categoria" value="{{$product->categoria}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="precio_compra">Precio Compra</label>
                        <input class="form-control" type="number" step="any" name="precio_compra" id="precio_compra" value="{{$product->precio_compra}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="precio_venta">Precio Venta</label>
                        <input class="form-control" type="number" step="any" name="precio_venta" id="precio_venta" value="{{$product->precio_venta}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cantidad">Cantidad</label>
                        <input class="form-control" type="number" name="cantidad" id="cantidad" value="{{$product->cantidad}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="3">{{$product->descripcion}}</textarea>
                </div>
                    <a href="{{route('Productos.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                    <button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Actualizar</button>
                    <a href="{{route('Productos.Delete', $product)}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Eliminar</a>
                </form>
            </div>
        </div>
    </div>
@endsection