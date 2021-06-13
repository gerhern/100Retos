<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    //retos sencillos con logica minima

    public function index(){
        $challenges =Challenge::all();
        return view('index',[
            'challenges' => $challenges
        ]);
    }

    public function day1(){
        
        return view('day1.index');
    }
}
