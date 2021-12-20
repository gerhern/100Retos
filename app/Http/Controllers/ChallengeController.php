<?php

namespace App\Http\Controllers;

use App\Models\challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $model = new challenge();
        return view('index',[
            'data' => $model->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('newChallenger');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $model = new challenge();

        $model->title = $request->title;
        $model->description = $request->description;
        $model->url_img = $request->url_img;
        $model->pointer = $request->pointer;
        $model->save();
        
        return redirect('/')->with('status', "Guardado exitosamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function show(challenge $challenge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function edit(challenge $challenge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, challenge $challenge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy(challenge $challenge)
    {
        //
    }
}
