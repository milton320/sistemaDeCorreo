<?php

namespace App\Http\Controllers;

use App\Models\Externo;
use App\Http\Requests\StoreExternoRequest;
use App\Http\Requests\UpdateExternoRequest;

class ExternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $externo = Externo::all();
        return view('externo.index', compact('externo')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $externo = Externo::all();
        return view('externo.create', compact('externo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExternoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExternoRequest $request)
    {
        //
        
        $externo = new Externo;
        $externo->nro = $request->nro;
        $externo->titulo = $request->titulo;
        $externo->institucion_remitente = $request->institucion;
        $externo->persona_firmante = $request->persona_firmante;
        $externo->asunto = $request->asunto;
        $externo->fecha_documento = $request->fecha_documento;
        $externo->tipo_documento = $request->tipo_documento;
        $externo->cite = $request->cite;
        $externo->via = $request->via;
        $externo->responsable = $request->responsable;
        $externo->imagen = $request->imagen;
        $externo->derivado = 0;
        $externo->observaciones = "Ninguno";
        $externo->fecha_ingreso = $request->fecha_ingreso;
        $externo->usuario_id = $request->usuario_id;
        $externo->save();
        return redirect('externo');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Externo  $externo
     * @return \Illuminate\Http\Response
     */
    public function show(Externo $externo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Externo  $externo
     * @return \Illuminate\Http\Response
     */
    public function edit(Externo $externo)
    {
        //
        if($externo->observaciones === "Ninguno" ){
            dd($externo->observaciones);
        }
        
        return view('externo.editar', compact('externo')); 
    }
    public function derivar(Externo $externo)
    {
        //
        dd($externo);
        $destructuracion = $externo->all();
        $datos = $destructuracion[0];
        //dd($datos);
        return view('externo.derivar', compact('datos')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExternoRequest  $request
     * @param  \App\Models\Externo  $externo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExternoRequest $request, Externo $externo)
    {
        //
        
        $validated = $request->validated();
        if($request->input('observaciones') == "Ninguno"){
            $externo->update($request->all());
            return redirect('/externo');    
        }else{
            $externo->update($request->all());
            return redirect('/externo.derivados');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Externo  $externo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Externo $externo)
    {
        //
    }
}
