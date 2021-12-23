<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\challenge;

use App\Classes\{GeneratePass, VowelReplace, PigLatin};

class BasicController extends Controller
{
    public function day1(){
        $day = new challenge();
        return view('day1.index',[
            'data' => $day->find(1)
        ]);
    }

    public function day4(){

        $data = new challenge();
        return view('day4.index',[
            'data' => $data->find(4)
        ]);
    }

    public function day5(Request $request){

        $data = new challenge();
        $replace = new VowelReplace();
        $text = $replace->getText($request);

        return view('day5.index', [
            'text' => $text,
            'data' => $data->find(5)
        ]);
    }

    public function day7(){

        $data = new challenge();
        return view('day7.index',[
            'data' => $data->find(7)
        ]);
    }

    public function day9()
    {
        $data = new challenge();
        return view('day9.index',[
            'data' => $data->find(9)
        ]);
    }

    public function day10(Request $request)
    {
        $words = new PigLatin();
        $data = $words->getData($request);
        return view('day10.index', [
            'text' => $data
        ]);
    }

    public function day11(Request $request)
    {
        $data = GeneratePass::generatePass($request);
        return view('day11.index', ['result' => $data]);
    }
}
