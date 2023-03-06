<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdiniController extends Controller
{
    public function ordini(){
        return view('pagina-ordini');
    }
}