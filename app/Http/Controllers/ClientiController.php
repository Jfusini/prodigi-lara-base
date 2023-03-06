<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientiController extends Controller
{
    public function clienti(){
        return view('pagina-clienti');
    }
}