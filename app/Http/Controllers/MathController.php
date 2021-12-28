<?php

namespace App\Http\Controllers;

use App\Classes\Birthday;
use Illuminate\Http\Request;

use App\Classes\Cylinder;
use App\Models\challenge;

class MathController extends Controller
{
    //Retos basados en matematicas

    public function day2()
    {
        $data = new challenge();
        return view('day2.index', [
            'data' => $data->find(2)
        ]);
    }

    public function day3()
    {
        $data = new challenge();
        return view('day3.index', [
            'data' => $data->find(3)
        ]);
    }

    public function day6()
    {
        $data = new challenge();
        return view('day6.index', [
            'data' => $data->find(6)
        ]);
    }

    public function day8(Request $request)
    {

        $cylinder = Cylinder::getData($request);
        $data = new challenge();

        return view('day8.index', [
            'result' => $cylinder,
            'data' => $data->find(8)
        ]);
    }

    public function day12(Request $request){

        $data = new challenge();

        if (!$request) {
            return view('day12.index', [
                'data' => $data->find(12)
            ]);
        } else {
            return view('day12.index', [
                'result' => Birthday::getTimeBirthday($request->date),
                'data' => $data->find(12)
            ]);
        }
    }

    public function day13()
    {
        $data = new challenge();
        return view('day13.index',[
            'data' => $data->find(13)
        ]);
    }
}
