<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InversionistasController extends Controller
{
    public function index()
    { 
         
        return view('invitado.Inversionistas');
    }
}
