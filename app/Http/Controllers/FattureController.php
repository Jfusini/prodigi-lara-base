<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FattureController extends Controller
{
    public function fatture(){
        return view('pagina-fatture');
    }
}