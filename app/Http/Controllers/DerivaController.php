<?php

namespace App\Http\Controllers;

use App\Models\Deriva;
use App\Http\Requests\StoreDerivaRequest;
use App\Http\Requests\UpdateDerivaRequest;
use App\Models\Externo;
use App\Models\User;

class DerivaController extends Controller
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
        $deriva = Deriva::all();
        return view('derivar.index', compact('deriva', 'externo')) ;
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

        dd($deriva->all());
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
    }
}
