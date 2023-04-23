@extends('adminlte::page')

@section('title', 'Dashboard')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .select2-container .select2-selection--single{
            height: 40px !important;
            width: 57% !important;
        }
    </style>
@stop

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>REGISTRAR CORRESPONDENCIA</strong>
        </div>
    </div>

@stop

@section('content')
<div class="card">
    <div class="card-body">
               
        <form method="POST" action="{{ route('derivado.store')}}" >
        @csrf
            <div class="mb-3">
                <label for="externo_id" class="form-label">Coorrespondencia</label>
                <select class="js-example-basic-single js-states form-control" name="externo_id">
                    @foreach ($externo as $item)
                        <option value="{{ $item->id }}"  selected> {{ $item->nro }} {{ $item->titulo }} {{$item->institucion_remitente}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="derivado" class="form-label">Derivar a: </label>
                <select class="js-example-basic-single js-states form-control" style="width: 75%" name="derivado">
                    @foreach ($usuario as $item)
                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="row">
                <div class="col col-md-8 mb-3">
                    <label for="observaciones" class="form-label">Comentarios e instrucciones</label>
                    <input type="text" class="form-control" id="observaciones" name="observaciones" aria-descr>
                </div>
            </div>
                   
            <br>
            
            <button type="submit" class="btn btn-success">REGISTRAR</button>
            <button type="submit" class="btn btn-primary">CANCELAR</button>
            
        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
    /* TODO: jquery para integrar multiples selecciones 
    $(document).ready(function() {
        console.log('hola mundo')
        $('.js-example-basic-multiple').select2();
    }); */
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@stop