<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Challenges;

use App\Classes\{GeneratePass, VowelReplace, PigLatin};

class BasicController extends Controller
{
    public function day1(){
        return view('day1.index');
    }

    public function day4()
    {
        return view('day4.index');
    }

    public function day5(Request $request)
    {

        $replace = new VowelReplace();
        $text = $replace->getText($request);

        return view('day5.index', [
            'text' => $text
        ]);
    }

    public function day7()
    {
        return view('day7.index');
    }

    public function day9()
    {
        return view('day9.index');
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
