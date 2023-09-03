<?php

use App\Http\Controllers\MedecinController;
use App\Http\Controllers\RVController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/medecin/liste');
});
Route::get("/listeMedecin", [MedecinController::class, "listeMedecin"]);
Route::get("/listeRV", [RVController::class, "listeRV"]);