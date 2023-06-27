<?php

namespace App\Http\Controllers;

use App\Models\Diario;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


class DiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diario = new Diario();

        $diario->titulo = $request->post('titulo');
        $diario->fecha = $request->post('fecha');
        $diario->actividad = $request->post('actividad');
        $diario->porcentaje = $request->post('porcentaje');
        $diario->evidencia = $request->post('evidencia');
        $diario->autor = $request->post('autor');
        $diario->save();

        return redirect()->route("diario.print")->with("Success","Guardado exitosamente");
    }

    public function print()
    {
         $pdf = PDF::loadView('PDF/pdfdiario');
         return $pdf -> stream();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diario  $diario
     * @return \Illuminate\Http\Response
     */
    public function show(Diario $diario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diario  $diario
     * @return \Illuminate\Http\Response
     */
    public function edit(Diario $diario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diario  $diario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diario $diario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diario  $diario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diario $diario)
    {
        //
    }
}
