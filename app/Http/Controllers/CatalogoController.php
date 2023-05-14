<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

use function GuzzleHttp\Promise\all;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogos = Catalogo::all();
        return view('catalogo.catalogo',['catalogo'=> $catalogos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogo.create');
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
            'Clave' => 'required|unique:catalogos|max:10',
            'Tipo' => 'required|max:50',
            'Area' => 'required|max:50',
            'Caracteristicas' => 'required|max:50',
            'Costo' => 'required|max:10'
        ]);

        $catalogos = new Catalogo();
        $catalogos->Clave = $request->input('Clave');
        $catalogos->Tipo = $request->input('Tipo');
        $catalogos->Area = $request->input('Area');
        $catalogos->Caracteristicas = $request->input('Caracteristicas');
        $catalogos->Costo = $request->input('Costo');        
        $catalogos->save();

        return view("catalogo.message",['msg'=>"Registro Guardado"]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function show(Catalogo $catalogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalogo = Catalogo::find($id);
        return view('catalogo.edit',['catalogo'=> $catalogo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Clave' => 'required|max:10|Unique:catalogos,Clave,'.$id,
            'Tipo' => 'required|max:50',
            'Area' => 'required|max:50',
            'Caracteristicas' => 'required|max:50',
            'Costo' => 'required|max:10'
        ]);

        $catalogos = Catalogo::find($id);
        $catalogos->Clave = $request->input('Clave');
        $catalogos->Tipo = $request->input('Tipo');
        $catalogos->Area = $request->input('Area');
        $catalogos->Caracteristicas = $request->input('Caracteristicas');
        $catalogos->Costo = $request->input('Costo');        
        $catalogos->save();

        return view("catalogo.message",['msg'=>"Registro Modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalogo = Catalogo::find($id);
        $catalogo->delete();
        return redirect("catalogo");
    }
}
