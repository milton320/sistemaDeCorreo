@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>DERIVAR CORRESPONDENCIA</strong>
        </div>
    </div>

@stop

@section('content')
<div class="card">
    <div class="card-body">
               
        <form method="POST" action="{{ route('externo.update', $datos ) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nro" class="form-label">Nro</label>
                <input type="text" class="form-control" id="nro" name="nro" value="{{ $datos->nro }}"   aria-descr>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $datos->titulo }}"   aria-descr>
            </div>
            <div class="mb-3">
                <label for="institucion" class="form-label">Institucion Remitente</label>
                <input type="text" class="form-control" id="institucion" name="institucion" value="{{ $datos->institucion_remitente }}"   aria-descr>
            </div>
            <div class="mb-3">
                <label for="persona_firmante" class="form-label">Persona Firmante</label>
                <input type="text" class="form-control" id="persona_firmante" name="persona_firmante" value="{{ $datos->persona_firmante }}"   aria-descr>
            </div>

            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" value="{{ $datos->asunto }}"   aria-descr>
            </div>

            <div class="mb-3">
                <label for="fecha_documento" class="form-label">Fecha de Documento</label>
                <input type="date" class="form-control" id="fecha_documento" name="fecha_documento" value="{{ $datos->fecha_documento }}"   aria-descr>
            </div>

            <div class="mb-3">
                <label for="tipo_documento" class="form-label">Tipo de Documento</label>
                <input type="text" class="form-control" id="tipo_documento" name="tipo_documento" value="{{ $datos->tipo_documento }}"   aria-descr>
            </div>
            <div class="mb-3">
                <label for="cite" class="form-label">Cite</label>
                <input type="text" class="form-control" id="cite" name="cite" value="{{ $datos->cite }}"   aria-descr>
            </div>
            <div class="mb-3">
                <label for="via" class="form-label">Via</label>
                <input type="text" class="form-control" id="via" name="via" value="{{ $datos->via }}"   aria-descr>
            </div>
            <div class="mb-3">
                <label for="responsable" class="form-label">Responsable</label>
                <input type="text" class="form-control" id="responsable" name="responsable" value="{{ $datos->responsable }}"   aria-descr>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="imagen" name="imagen" value="{{ $datos->imagen }}"   aria-descr>
            </div>

            <div class="mb-3">
                <label for="fecha_ingreso" class="form-label">Fecha Ingreso</label>
                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{ $datos->fecha_ingreso }}"   aria-descr>
            </div>
            
            <div class="mb-3">
                <label for="observaciones" class="form-label">observaciones</label>
                <input type="text" class="form-control" id="observaciones" name="observaciones" value="{{ $datos->observaciones }}"  aria-descr>
            </div>
            <div class="mb-3">
                <label for="derivado" class="form-label">Derivar</label>
                <input type="number" class="form-control" id="derivado" name="derivado" value="{{ $datos->derivado }}"  aria-descr>
            </div>
            <div class="mb-3">
                <label for="usuario_id" class="form-label">Personal</label>
                <input type="text" class="form-control" id="usuario_id" name="usuario_id" value="{{ $datos->usuario_id }}"   aria-descr>
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