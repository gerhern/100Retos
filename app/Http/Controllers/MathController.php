<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    //Retos basados en matematicas

    public function day2(){
        return view('day2.index');
    }

    public function day3(){
        return view('day3.index');
    }

    public function day6(){
        return view('day6.index');
    }
}
