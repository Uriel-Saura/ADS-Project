<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Estimacion;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\HttpCache\Esi;

class EstimacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estimaciones = Estimacion::all();
        return view('estimacion.estimacion',['estimacion'=> $estimaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estimacion.create',['catalogos' => Catalogo::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Concepto' => 'required|max:50',
            'Cantidad' => 'required|max:10',
            'Anterior' => 'required|max:10',
            'Actual' => 'required|max:10',
            'Total' => 'required|max:10',
            'Faltante' => 'required|max:10',
            'Unitario' => 'required|max:10',
            'Cantidad' => 'required|max:15',
        ]);

        $estimaciones = new Estimacion();
        $estimaciones->id_catalogo = $request->input('Concepto');
        $estimaciones->Cantidad = $request->input('Cantidad');
        $estimaciones->Anterior = $request->input('Anterior');  
        $estimaciones->Actual = $request->input('Actual');  
        $estimaciones->Total = $request->input('Total');  
        $estimaciones->Faltante = $request->input('Faltante');
        $estimaciones->Unitario = $request->input('Unitario');
        $estimaciones->Importe = $request->input('Importe');           
        $estimaciones->save();

        return view("estimacion.message",['msg'=>"Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estimacion  $estimacion
     * @return \Illuminate\Http\Response
     */
    public function show(Estimacion $estimacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estimacion  $estimacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estimaciones = Estimacion::find($id);
        return view('estimacion.edit',['estimacion' => $estimaciones, 'catalogos' => Catalogo::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estimacion  $estimacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Concepto' => 'required|max:50',
            'Cantidad' => 'required|max:10',
            'Anterior' => 'required|max:10',
            'Actual' => 'required|max:10',
            'Total' => 'required|max:10',
            'Faltante' => 'required|max:10',
            'Unitario' => 'required|max:10',
            'Cantidad' => 'required|max:15',
        ]);

        $estimaciones = Estimacion::find($id);
        $estimaciones->id_catalogo = $request->input('Concepto');
        $estimaciones->Cantidad = $request->input('Cantidad');
        $estimaciones->Anterior = $request->input('Anterior');  
        $estimaciones->Actual = $request->input('Actual');  
        $estimaciones->Total = $request->input('Total');  
        $estimaciones->Faltante = $request->input('Faltante');
        $estimaciones->Unitario = $request->input('Unitario');
        $estimaciones->Importe = $request->input('Importe');           
        $estimaciones->save();

        return view("estimacion.message",['msg'=>"Registro Modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estimacion  $estimacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estimacion = Estimacion::find($id);
        $estimacion->delete();
        return redirect("estimacion");
    }
}