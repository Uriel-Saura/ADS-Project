<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Mensual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

class MensualController extends Controller
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
        $mensual = new Mensual();
        
        $mensual -> titulo = $request->post('titulo');
        $mensual -> inicio = $request->post('inicio');
        $mensual -> termino = $request->post('termino');
        $mensual -> actividad = $request->post('actividad');
        $mensual -> porcentaje = $request->post('porcentaje');
        $mensual -> evidencia = $request->post('evidencia');
        $mensual -> autor = $request->post('autor');
        $mensual -> save();

        return redirect()->route("mensual.print")->with("success","Guardado exitosamente");

    }

    public function print()
    {
        $pdf = PDF::loadView('PDF/pdfmensual');
        return $pdf -> stream();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mensual  $mensual
     * @return \Illuminate\Http\Response
     */
    public function show(Mensual $mensual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mensual  $mensual
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensual $mensual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mensual  $mensual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensual $mensual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mensual  $mensual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensual $mensual)
    {
        //
    }
}
