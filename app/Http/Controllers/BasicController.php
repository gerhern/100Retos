<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Challenges;

use App\Classes\Vowel;
use App\Classes\VowelReplace;

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

    public function day4(){
        return view('day4.index');
    }

    public function day5(Request $request){
        $replace = new VowelReplace();
        if($request->text != null){
            $text = $replace->deleteVowels($request->text);
        }else{
            $text = '';
        }
        return view('day5.index', [
            'text' => $text
        ]);
    }
}
