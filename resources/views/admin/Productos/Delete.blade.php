@extends('adminlte::page')
@section('title', 'Eliminar producto')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Eliminar Producto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('Productos.Destroy', $product)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('delete')
                <div class="form-group">
                    <label for="nombre">Nombre del Producto</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" value="{{$product->nombre}}" disabled>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="codigo_barra">Código de Barras</label>
                        <input class="form-control" type="text" name="codigo_barra" id="codigo_barra" value="{{$product->codigo_barra}}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="marca">Marca</label>
                        <input class="form-control" type="text" name="marca" id="marca" value="{{$product->marca}}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="categoria">Categoría</label>
                        <input class="form-control" type="text" name="categoria" id="categoria" value="{{$product->categoria}}" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="precio_compra">Precio Compra</label>
                        <input class="form-control" type="number" step="any" name="precio_compra" id="precio_compra" value="{{$product->precio_compra}}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="precio_venta">Precio Venta</label>
                        <input class="form-control" type="number" step="any" name="precio_venta" id="precio_venta" value="{{$product->precio_venta}}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cantidad">Cantidad</label>
                        <input class="form-control" type="number" name="cantidad" id="cantidad" value="{{$product->cantidad}}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="3" disabled>{{$product->descripcion}}</textarea>
                </div>
                    <a href="{{route('Productos.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                    <a href="{{route('Productos.Edit', $product)}}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Editar</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Borrar</>
                </form>
            </div>
        </div>
    </div>
@endsection