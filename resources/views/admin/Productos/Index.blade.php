@extends('adminlte::page')
@section('title', 'Productos')
    
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap4.min.css">
@endsection

@section('content')
    <h1>Productos</h1>
    <a href="{{route('Productos.Create')}}" type="button" class="btn btn-success">Agregar nuevo producto</a>
    <br>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="productos">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Cantidad</th>
                        <th>Categoría</th>
                        <th>Precio Venta</th>
                        <th>Precio Compra</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->nombre}}</td>
                        <td>{{$product->marca}}</td>
                        <td>{{$product->cantidad}}</td>
                        <td>{{$product->categoria}}</td>
                        <td>${{$product->precio_venta}}</td>
                        <td>${{$product->precio_compra}}</td>
                        <td>
                            <a href="{{route('Productos.Show', $product)}}" type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
                            <a href="{{route('Productos.Edit', $product)}}" type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="{{route('Productos.Delete', $product)}}" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src='https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js'></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src='https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js'></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready(function() {
        var table = $('#productos').DataTable( {
            responsive: true,
            autoWidth: false,
            "language": {
            "lengthMenu": "Mostrar " + 
            `<select class="custom-select custom-select-sm form-control form-control-sm">
                <option value='5'>5</option>
                <option value='10'>10</option>
                <option value='25'>25</option>
                <option value='50'>50</option>
                <option value='100'>100</option>
                <option value='-1'>Todo</option>
            </select>`
            + " registros por página",
            "zeroRecords": "Sin resultados",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "Sin registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            "search": "Buscar",
            "paginate": {
                'next': 'Siguiente',
                'previous': 'Anterior'
                }
            },
            
            buttons: [ 
                {
                    extend: 'copy',
                    text: '<i class="fas fa-copy"></i>',
                    titleAttr: 'Copiar',
                    className: 'btn btn-secondary',
                    exportOptions: {
                    columns: ':visible'
                    },
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i>',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success',
                    exportOptions: {
                    columns: ':visible'
                    },
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i>',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-success',
                    exportOptions: {
                    columns: ':visible'
                    },
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="fas fa-file-csv"></i>',
                    titleAttr: 'Exportar a CSV',
                    className: 'btn btn-success',
                    exportOptions: {
                    columns: ':visible'
                    },
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print"></i>',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-info',
                    exportOptions: {
                    columns: ':visible'
                    },
                },
                {
                    extend: 'colvis',
                    text: '<i class="fas fa-eye-slash"></i>',
                    titleAttr: 'Ocultar',
                    className: 'btn btn-primary',
                }
            ]
        } );
    
        table.buttons().container()
            .appendTo( '#productos_wrapper .col-md-6:eq(0)' );
        } );
    </script>
@endsection
