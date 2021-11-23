<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invitadoController extends Controller
{
    public function index()
    {
        return view('invitado.index');
    }
    
}
