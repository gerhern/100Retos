<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    //retos sencillos con logica minima

    public function day1(){
        
        return view('day1.index');
    }
}
