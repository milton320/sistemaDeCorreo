<?php

namespace App\Http\Controllers;

use App\Models\Deriva;
use App\Http\Requests\StoreDerivaRequest;
use App\Http\Requests\UpdateDerivaRequest;
use App\Models\Externo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DerivaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $id = auth()->id();

        if($id != 1){
            $deriva = Deriva::join("externos","externos.id", "=", "derivas.externo_id")
            ->join("users", "users.id", "=", "derivas.usuario_id")
            ->select("derivas.id","derivas.derivado","derivas.observaciones", "externos.titulo", "users.name","externos.id")
            ->where("derivas.usuario_id", "=", $id)
            ->get();    
            return view('derivar.derivados', compact('deriva')) ;
        }
        else{
            $deriva = Deriva::join("externos","externos.id", "=", "derivas.externo_id")
            ->join("users", "users.id", "=", "derivas.usuario_id")
            ->select("derivas.id","derivas.derivado","derivas.observaciones", "externos.titulo", "users.name","externos.id")
            //->where("derivas.usuario_id", "=", $id)
            ->get();    
            return view('derivar.index', compact('deriva')) ;
        }
        //dd($id);
        //SELECT d.id, e.titulo , d.derivado, e.id FROM derivas d INNER JOIN externos e ON d.id = e.id;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $usuario = User::all();
        
        $externo = Externo::all();
        return view('derivar.create', compact('externo', 'usuario' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDerivaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDerivaRequest $request)
    {
        //
        $deriva = new Deriva;
        $deriva->derivado = $request->derivado;
        $deriva->observaciones = $request->observaciones;
        $deriva->externo_id = $request->externo_id;
        $deriva->usuario_id = $request->derivado;
        $deriva->save();
        return redirect('/derivado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deriva  $deriva
     * @return \Illuminate\Http\Response
     */
    public function show(Deriva $deriva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deriva  $deriva
     * @return \Illuminate\Http\Response
     */
    public function edit(Deriva $deriva)
    {
        //
        
        $usuario = User::all();
        $externo = Externo::all();
        return view('derivar.editar', compact('deriva','externo', 'usuario')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDerivaRequest  $request
     * @param  \App\Models\Deriva  $deriva
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDerivaRequest $request, Deriva $deriva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deriva  $deriva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deriva $deriva)
    {
        //
        $deriva->delete();
        return redirect('/derivado')->with('eliminar','ok');
    }
}
