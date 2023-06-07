<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Estimacion;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class EstimacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estimacion = Estimacion::all();
        $cata = Catalogo::all();
        return view('estimacion.estimacion',compact('estimacion','cata'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \App\Models\Catalogo  $cata
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cata = Catalogo::all();
        return view('estimacion.create',compact('cata'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \App\Models\Estimacion  $estimacion
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'Concepto' => 'required|max:50',
            'Actual' => 'required|max:10',
        ]);

        $estimaciones = new Estimacion();
        $estimaciones->id = $request->input('id');
        $estimaciones->Concepto = $request->input('Concepto');
        $estimaciones->Actual = $request->input('Actual');     
        $estimaciones->id_catalogo = $request->input('Concepto');
        $estimaciones->save();

        return view("estimacion.message",['msg'=>"Registro Guardado"]);
    }

     /**
     * @param  \App\Models\Estimacion  $estimacion
     * @return \Illuminate\Http\Response
     */

    public function preEdit($id, $id_catalogo){
        $estimaciones = Estimacion::find($id);
        $buscata = Catalogo::find($id_catalogo);
        return view('estimacion.preEdit',['estimacion' => $estimaciones, 'buscata' => $buscata]);
    }

    public function editActual($id, $id_catalogo){
        $estimaciones = Estimacion::find($id);
        $buscata = Catalogo::find($id_catalogo);
        return view('estimacion.editActual',['estimacion' => $estimaciones, 'buscata' => $buscata]);
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
     * @param  \App\Models\Estimacion  $estimacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_catalogo)
    {
        $estimaciones = Estimacion::find($id);
        $buscata = Catalogo::find($id_catalogo);
        return view('estimacion.edit',['estimacion' => $estimaciones, 'buscata' => $buscata]);
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
            'id'  => 'required',
            'Concepto' => 'required|max:50',
            'Cantidad' => 'required|max:10',
            'Anterior' => 'required|max:10',
            'Actual' => 'required|max:10',
            'Total' => 'required|max:10',
            'Faltante' => 'required|max:10',
            'Unitario' => 'required|max:10',
            'Importe' => 'required|max:15',
        ]);

        $estimaciones = Estimacion::find($id);
        $estimaciones->id = $request->input('id');
        $estimaciones->Concepto = $request->input('Concepto');
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