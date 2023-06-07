<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\CatalogoEstimacion;
use App\Models\Estimacion;
use Illuminate\Http\Request;


class RelacionController extends Controller
{
    public function index(){
        $cata2 = CatalogoEstimacion::find(1);
        $cata = Catalogo::find(1);
        $esti = Estimacion::find(1);
        return view('pruebas.prueba',compact('cata','esti'));
    }
}
