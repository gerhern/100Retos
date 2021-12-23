<?php

namespace App\Http\Controllers;

use App\Classes\Birthday;
use Illuminate\Http\Request;

use App\Classes\Cylinder;
use App\Models\challenge;

class MathController extends Controller
{
    //Retos basados en matematicas

    public function day2(){
        $data = new challenge();
        return view('day2.index',[
            'data' => $data->find(2)
        ]);
    }

    public function day3(){
        $data = new challenge();
        return view('day3.index',[
            'data' => $data->find(3)
        ]);
    }

    public function day6(){
        return view('day6.index');
    }

    public function day8(Request $request){
        
        $data = Cylinder::getData($request); 
        
        return view('day8.index', [
            'result' => $data
        ]);
    }

    public function day12(Request $request){

        return view('day12.index', [
            'result' => Birthday::getTimeBirthday($request->date)
        ]);
    }

    public function day13(){
        return view('day13.index');
    }
}
