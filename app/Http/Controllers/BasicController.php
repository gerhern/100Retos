<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Challenges;

class BasicController extends Controller
{
    //index del sitio

    public function index(){
        $days = new Challenges();
        return view('index', [
            'days' => $days->getDays()
        ]);
    }

    public function day1(){
        return view('day1.index');
    }
}
