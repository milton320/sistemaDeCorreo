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
            <div class="row">
                <div class="col col-md-12">
                    <h4 style="text-align: center;">HOJA DE TRANSMISION</h4>
                </div>
            </div>
            <div class="row">
                <table class="table" border="1">
                    <thead>                 
                    </thead>
                    <tbody>
                        <tr>
                            <td>PARA</td>
                            <td>HORA</td>
                            <td>FECHA</td>
                            <!-- <img with="60" height="60" src="{{ Storage::url($externo->imagen ) }}"  class="gallery-item"> -->
                        </tr>
                        <tr>
                            <td colspan="3">DE:
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">Tipo de Documento:</td>
                        </tr>
                        <tr>
                            <td colspan="3">CITE:  {{$externo->cite}}</td>
                        </tr>
                        <tr>
                            <td colspan="3">Via</td>
                        </tr>
                        <tr>
                            <td colspan="3">Asunto</td>
                        </tr>
                        <tr>
                            <td colspan="3">Comentarios/instruciones</td>
                        </tr>
                        
                        
                    </tbody>
                </table>
                <table class="table" border="1">
                    <thead>                 
                    </thead>
                    <tbody>
                        <tr>
                            <td>PARA</td>
                            <td>HORA</td>
                            <td>FECHA</td>
                            <!-- <img with="60" height="60" src="{{ Storage::url($externo->imagen ) }}"  class="gallery-item"> -->
                        </tr>
                        <tr>
                            <td colspan="3">DE:
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">Tipo de Documento:</td>
                        </tr>
                        <tr>
                            <td colspan="3">CITE</td>
                        </tr>
                        <tr>
                            <td colspan="3">Via</td>
                        </tr>
                        <tr>
                            <td colspan="3">Asunto</td>
                        </tr>
                        <tr>
                            <td colspan="3">Comentarios/instruciones</td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
            
            
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