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
                        <th scope="col">USUARIO</th>
                        <th scope="col">ACCIONES</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($externo as $item)
                    <tr>
                        
                        <td>{{ $item->titulo }}</td>
                        <td>{{ $item->institucion_remitente }}</td>
                        <td>{{ $item->persona_firmante }}</td>
                        <td>{{ $item->asunto }}</td>
                        <td>{{ $item->fecha_documento }}</td>
                        <td>{{ $item->tipo_documento }}</td>
                        <td>{{ $item->cite }}</td>
                        <td>{{ $item->via }}</td>
                        <td>{{ $item->responsable }}</td>
                        <td>
                            <img with="60" height="60" src="{{ Storage::url($item->imagen ) }}"  class="gallery-item">
                        </td>
                        <td>{{ $item->fecha_ingreso }}</td>
                        <td>{{ $item->name }}</td>                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        img{
            max-width: 100%;
        }
        .gallery{
            background-color: #dbddf1;
            padding: 80px 0;
        }
        .gallery img{
            background-color: #ffffff;
            padding: 15px;
            width: 100%;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            cursor: pointer;
        }
        #gallery-modal .modal-img{
            width: 100%;
        }
    </style>
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
            document.addEventListener("click",function (e){
                if(e.target.classList.contains("gallery-item")){
                    const src = e.target.getAttribute("src");
                    document.querySelector(".modal-img").src = src;
                    const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
                    myModal.show();
                }
            })
            $('.modal-backdrop').remove();
    </script>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('eliminar')=='ok')
<script>
    Swal.fire(
            'Eliminado!',
            'la Persona ha sido eliminada.',
            'success'
            )
</script>    
@endif
<script>
    $('.form-eliminar').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'estas seguro?',
        text: "los datos de la persona, se eliminaran!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText:'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {
            
            this.submit()
        }
        })
    })
</script>
@stop