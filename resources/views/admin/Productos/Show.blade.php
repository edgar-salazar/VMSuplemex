@extends('adminlte::page')
@section('title', 'Detalles del producto')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Detalles de Producto</h1>
            </div>
        </div>
        <div class="row">
                <div class="card col-md-12">                        
                    <ul class="list-group list-group-flush">
                        <br>
                        <h3 class="card-title text-center"><strong>{{ $product->nombre}}</strong></h3>
                        <li class="list-group-item"><b>Código: </b>{{ $product->codigo_barra }} </li>
                        <li class="list-group-item"><b>Marca: </b>{{ $product->marca }} </li>
                        <li class="list-group-item"><b>Categoría: </b>{{ $product->categoria }} </li>
                        <li class="list-group-item"><b>Precio Compra: </b>${{ $product->precio_compra }}</li>
                        <li class="list-group-item"><b>Precio Venta: </b>${{ $product->precio_venta }}</li>
                        <li class="list-group-item"><b>Cantidad en Existencia: </b>{{ $product->cantidad }}</li>
                        <li class="list-group-item"><b>Descripción: </b> {{ $product->descripcion }}</li>
                        <li class="list-group-item"><b>Creado: </b>{{ $product->created_at }} <strong>|</strong> <b>Actualizado: </b>{{ $product->updated_at }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{route('Productos.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                        <a href="{{route('Productos.Edit', $product)}}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Editar</a>
                        <a href="{{route('Productos.Delete', $product)}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection