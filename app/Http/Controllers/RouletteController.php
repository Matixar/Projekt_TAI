<?php

namespace App\Http\Controllers;
use App\Roulete;
use Illuminate\Http\Request;

class RouletteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
    'car' => 'min:0',
            'speaker' => 'min:0',
            'chair' => 'min:0',
            'yerba' => 'min:0',
            'pen' => 'min:0',
    ]);
        
        
        if(\Auth::user()==null)
        {
            return view('roulette');
        }
        $roulete = new Roulete();
        $roulete->user_id = \Auth::user()->id;
        $roulete->car = $request->car;
        $roulete->speaker = $request->speaker;
        $roulete->chair = $request->chair;
        $roulete->yerba = $request->yerba;
        $roulete->pen = $request->pen;
        if($roulete->save()) {
            //xd
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $roulete = Roulete::find($id);
        if(\Auth::user()->id != $roulete->user_id)
        {
            return "wystąpił błąd";
        }
        $roulete->car = $request->car;
        $roulete->speaker = $request->speaker;
        $roulete->chair = $request->chair;
        $roulete->yerba = $request->yerba;
        $roulete->pen = $request->pen;
        $roulete->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
