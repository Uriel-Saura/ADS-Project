<?php

namespace App\Http\Controllers;

use App\Models\Estimacion;
use Illuminate\Http\Request;

class EstimacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('estimacion.estimacion');
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
        //
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
    public function edit(Estimacion $estimacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estimacion  $estimacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estimacion $estimacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estimacion  $estimacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estimacion $estimacion)
    {
        //
    }
}
