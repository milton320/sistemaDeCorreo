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
               
        <form method="POST" action="{{ route('derivado.store')}}">
        @csrf
        @method('PUT')
        {{method_field('put')}} 
            <div class="row">
                <div class="col col-md-12 col-sm-6 mb-3">
                    <label for="externo_id" class="form-label">Correspondencia</label>
                    <select class="js-example-basic-single js-states form-control" name="externo_id" >
                        @foreach ($externo as $item)
                            <option value="{{ $item->id }}"  >{{ $item->titulo }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col col-md-12 col-sm-6 mb-3">
                    <label for="derivado" class="form-label">Derivado</label>
                    <select class="js-example-basic-single js-states form-control" name="derivado" >
                        @foreach ($usuario as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col col-md-8 mb-3">
                    <label for="observaciones" class="form-label">Observaciones</label>
                    <input type="text" class="form-control" id="observaciones" name="observaciones" aria-descr value="{{ $deriva->observaciones }}">
                </div>
            </div>
                   
            <br>
            
            <button type="submit" class="btn btn-success">ACTUALIZAR</button>
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