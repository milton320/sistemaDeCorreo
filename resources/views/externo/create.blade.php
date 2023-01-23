@extends('adminlte::page')

@section('title', 'Dashboard')

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
               
        <form method="POST" action="{{ route('externo.store')}}">
        @csrf
            <div class="mb-3">
                <label for="nro" class="form-label">Nro</label>
                <input type="text" class="form-control" id="nro" name="nro" aria-descr>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" aria-descr>
            </div>
            <div class="mb-3">
                <label for="institucion" class="form-label">Institucion Remitente</label>
                <input type="text" class="form-control" id="institucion" name="institucion" aria-descr>
            </div>
            <div class="mb-3">
                <label for="persona_firmante" class="form-label">Persona Firmante</label>
                <input type="text" class="form-control" id="persona_firmante" name="persona_firmante" aria-descr>
            </div>

            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" aria-descr>
            </div>

            <div class="mb-3">
                <label for="fecha_documento" class="form-label">Fecha de Documento</label>
                <input type="date" class="form-control" id="fecha_documento" name="fecha_documento" aria-descr>
            </div>

            <div class="mb-3">
                <label for="tipo_documento" class="form-label">Tipo de Documento</label>
                <input type="text" class="form-control" id="tipo_documento" name="tipo_documento" aria-descr>
            </div>
            <div class="mb-3">
                <label for="cite" class="form-label">Cite</label>
                <input type="text" class="form-control" id="cite" name="cite" aria-descr>
            </div>
            <div class="mb-3">
                <label for="via" class="form-label">Via</label>
                <input type="text" class="form-control" id="via" name="via" aria-descr>
            </div>
            <div class="mb-3">
                <label for="responsable" class="form-label">Responsable</label>
                <input type="text" class="form-control" id="responsable" name="responsable" aria-descr>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="imagen" name="imagen" aria-descr>
            </div>

            <div class="mb-3">
                <label for="fecha_ingreso" class="form-label">Fecha Ingreso</label>
                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" aria-descr>
            </div>
            <div class="mb-3">
                <label for="usuario_id" class="form-label">Personal</label>
                <input type="text" class="form-control" id="usuario_id" name="usuario_id" value="1" aria-descr>
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