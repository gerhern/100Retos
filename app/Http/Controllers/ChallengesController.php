<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenge;

class ChallengesController extends Controller
{
    //Agregar retos de forma dinamica y no estatica, guardarlos en DB 

    public function index(){
        return view('challenges');
    }

    public function store(Request $request){
        
        Challenge::create([
            'title_challenge'       => $request->title,
            'description_challenge' => $request->description,
            'img_challenge'         => $request->url,
            'imgAlt_challenge'      => $request-> alt
        ]);

        return back();
    }
}
