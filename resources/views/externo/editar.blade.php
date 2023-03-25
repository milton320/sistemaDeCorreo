@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>EDITAR CORRESPONDENCIA</strong>
        </div>
    </div>

@stop

@section('content')
<div class="card">
    <div class="card-body">
               
        <form method="POST" action="{{ route('externo.update', $externo) }}">
        @csrf
        @method('PUT')
        <div class="col col-12">
            <div class="row">
                <div class="col col-6">
                    <label for="nro" class="form-label">Nro</label>
                    <input type="text" class="form-control" id="nro" name="nro" value="{{ $externo->nro }}"   aria-descr>
                </div>
                <div class="col col-6">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $externo->titulo }}"   aria-descr>
                </div>
            </div>
        </div>
        <div class="col col-12">
            <div class="row">
                <div class="col col-6">
                    <label for="institucion_remitente" class="form-label">Institucion Remitente</label>
                    <input type="text" class="form-control" id="institucion_remitente" name="institucion_remitente" value="{{ $externo->institucion_remitente }}"   aria-descr>
                </div>
                <div class="col col-6">
                    <label for="persona_firmante" class="form-label">Persona Firmante</label>
                    <input type="text" class="form-control" id="persona_firmante" name="persona_firmante" value="{{ $externo->persona_firmante }}"   aria-descr>
                </div>
            </div>
        </div>
        <div class="col col-12">
            <div class="row">
                <div class="col col-6">
                    <label for="asunto" class="form-label">Asunto</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" value="{{ $externo->asunto }}"   aria-descr>
                </div>
                <div class="col col-6">
                    <label for="fecha_documento" class="form-label">Fecha de Documento</label>
                    <input type="date" class="form-control" id="fecha_documento" name="fecha_documento" value="{{ $externo->fecha_documento }}"   aria-descr>
                </div>
            </div>
        </div>
        <div class="col col-12">
            <div class="row">
                <div class="col col-6">
                    <label for="tipo_documento" class="form-label">Tipo de Documento</label>
                    <input type="text" class="form-control" id="tipo_documento" name="tipo_documento" value="{{ $externo->tipo_documento }}"  disabled aria-descr>
                </div>
                <div class="col col-6">
                    <label for="cite" class="form-label">Cite</label>
                    <input type="text" class="form-control" id="cite" name="cite" value="{{ $externo->cite }}"   aria-descr>
                </div>
            </div>
        </div>
        <div class="col col-12">
            <div class="row">
                <div class="col col-6">
                    <label for="via" class="form-label">Via</label>
                    <input type="text" class="form-control" id="via" name="via" value="{{ $externo->via }}"  disabled aria-descr>
                </div>
                <div class="col col-6">
                    <label for="responsable" class="form-label">Responsable</label>
                    <input type="text" class="form-control" id="responsable" name="responsable" value="{{ $externo->responsable }}"  disabled aria-descr>
                </div>
            </div>
        </div>
        <div class="col col-12">
            <div class="row">
                <div class="col col-6">
                    <label for="imagen" class="form-label">Imagen</label>
                    
                    <input type="file" class="form-control-file" id="imagen" name="imagen"  accept="image/*" aria-descr>
                </div>
                <div class="col col-6">
                <label for="fecha_ingreso" class="form-label">Fecha Ingreso</label>
                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{ $externo->fecha_ingreso }}"  disabled aria-descr>
                </div>
            </div>
        </div>
        <div class="col col-12">
            <div class="row">
                <div class="col col-6">
                    
                    <input type="text" class="form-control" id="usuario_id" name="usuario_id" value="{{ $externo->usuario_id }}"  disabled aria-descr hidden>
                </div>
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
@stop