@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>REGISTRAR PERSONAL</strong>
        </div>
    </div>

@stop

@section('content')
<div class="card">
    <div class="card-body">
               
        <form method="POST" action="">
        
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-descr>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-descr>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-descr>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" aria-descr>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Password</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-descr>
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
@stop