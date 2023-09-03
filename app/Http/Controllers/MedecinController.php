<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedecinController extends Controller
{
    public function listeMedecin(){
        return view('medecin.liste');
    }
}
