<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    //Retos basados en matematicas

    public function day2(){
        return view('day2.index');
    }

    public function triangle(Request $request){
        dd($request);
    }
}
