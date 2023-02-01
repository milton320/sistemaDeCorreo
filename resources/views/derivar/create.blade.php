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
               
        <form method="POST" action="{{ route('derivado.store')}}">
        @csrf
            <div class="mb-3">
                <label for="categoria_id" class="form-label">Coorrespondencia</label>
                <select class="form-control" name="externo_id">
                    @foreach ($externo as $item)
                        <option value="{{ $item->id }}"  selected>{{ $item->titulo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="categoria_id" class="form-label">Derivado</label>
                <select class="form-control" name="derivado">
                    @foreach ($usuario as $item)
                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="observaciones" class="form-label">Observaciones</label>
                <input type="text" class="form-control" id="observaciones" name="observaciones" aria-descr>
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