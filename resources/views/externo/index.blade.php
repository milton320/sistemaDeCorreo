@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>Personal <h4>Bienvenido Administrador</h4></strong>
            <a href="{{ route('externo.create') }}" class="btn btn-outline-success float-right">
                Nueva Correspondencia
            </a>
        </div>
    </div>
@stop

@section('content')
<div class="card">
        <div class="card-body">
            <table class="table table-striped" id="externo">
                <thead>
                    <tr>
                        <th scope="col">NRO</th>
                        <th scope="col">TITULO </th>
                        <th scope="col">INSTITUCION</th>
                        <th scope="col">PERSONA</th>
                        <th scope="col">ASUNTO</th>
                        <th scope="col">FEHCA DOC</th>
                        <th scope="col">TIPO DOC</th>
                        <th scope="col">CITE</th>
                        <th scope="col">VIA</th>
                        <th scope="col">RESPONSABLE</th>
                        <th scope="col">IMAGEN</th>
                        <th scope="col">FECHA INNGRESO</th>
                        <th scope="col">PERSONA_ID</th>
                        <th scope="col">ACCIONES</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($externo as $item)
                    <tr>
                        <td>{{ $item->nro }}</td>
                        <td>{{ $item->titulo }}</td>
                        <td>{{ $item->institucion_remitente }}</td>
                        <td>{{ $item->persona_firmante }}</td>
                        <td>{{ $item->asunto }}</td>
                        <td>{{ $item->fecha_documento }}</td>
                        <td>{{ $item->tipo_documento }}</td>
                        <td>{{ $item->cite }}</td>
                        <td>{{ $item->via }}</td>
                        <td>{{ $item->responsable }}</td>
                        <td>{{ $item->imagen }}</td>
                        <td>{{ $item->fecha_ingreso }}</td>
                        <td>{{ $item->usuario_id }}</td>

                        
                        <td>
                        
                            <a href="{{ route('externo.edit', $item) }}"  class="btn btn-outline-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn btn-outline-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <a href="{{ route('externo.edit', $item) }}"  class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="top" title="derivar">
                                <i class="fas fa-reply"></i>
                            </a>
                            
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    {{--Datatable css--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
@stop

@section('js')

    <script> console.log('Hi!'); </script>
    {{--Datatables--}}
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
            $('#externo').DataTable({
            responsive: true,
            autowidth: false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "El registro no existe - disculpe",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate":{
                    "next":"Siguiente",
                    "previous":"Anterior"
                }
            }
        });
    </script>
@stop