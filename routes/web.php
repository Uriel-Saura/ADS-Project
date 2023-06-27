<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\EstimacionController;
use App\Http\Controllers\MensualController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class,'show']);
Route::post('/register', [RegisterController::class,'register']);

Route::get('/login', [LoginController::class,'show']);
Route::post('/login', [LoginController::class,'login']);

Route::get('/home', [HomeController::class,'index']);

Route::get('/logout', [LogOutController::class,'logout']);

Route::resource('/catalogo', CatalogoController::class);

Route::resource('/estimacion', EstimacionController::class);

Route::post('/diario',[DiarioController::class,'store'])->name('diario.store');
Route::post('/diario',[DiarioController::class,'print'])->name('diario.print');

Route::post('/mensual',[MensualController::class,'store'])->name('mensual.store');
Route::post('/mensual', [MensualController::class,'print'])->name('mensual.print');