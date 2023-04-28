<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use App\Models\Deriva;
use App\Http\Requests\StoreResponsableRequest;
use App\Http\Requests\UpdateResponsableRequest;
use App\Models\Externo;
use App\Models\User;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = auth()->id();

        if($id != 1){
            $deriva = Deriva::join("externos","externos.id", "=", "derivas.externo_id")
            ->join("users", "users.id", "=", "derivas.usuario_id")
            ->select("derivas.derivado","derivas.observaciones", "externos.titulo", "users.name","externos.id","derivas.id")
            ->where("derivas.usuario_id", "=", $id)
            ->get();    
            return view('responsable.index', compact('deriva')) ;
        }
        else{
            $deriva = Deriva::join("externos","externos.id", "=", "derivas.externo_id")
            ->join("users", "users.id", "=", "derivas.usuario_id")
            ->select("derivas.derivado","derivas.observaciones", "externos.titulo", "users.name","externos.id","derivas.id")
            //->where("derivas.usuario_id", "=", $id)
            ->get();    
            return view('responsable.index', compact('deriva')) ;
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreResponsableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResponsableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function show(Responsable $responsable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function edit(Deriva $responsable)
    {
        //Select d.derivado, s.name from derivas d INNER JOIN users s ON s.id = d.usuario_id INNER JOIN externos e ON e.id = d.externo_id WHERE d.id = 11 ;
        $cons = Deriva::join("externos","externos.id", "=", "derivas.externo_id")
            ->join("users", "users.id", "=", "derivas.usuario_id")
            ->select("derivas.derivado","derivas.observaciones", "externos.titulo", "users.name","externos.id","derivas.id")
            ->where("derivas.id", "=", $responsable->id)
            ->get();    
        return view('responsable.verificar', compact('cons')) ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResponsableRequest  $request
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResponsableRequest $request, Externo $responsable)
    {
        //
        dd($responsable);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Responsable $responsable)
    {
        //
    }
}
