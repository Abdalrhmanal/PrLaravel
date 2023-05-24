<?php

namespace App\Http\Controllers;

use App\Models\Sessoins;
use Illuminate\Http\Request;

class SessoinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessoins  = Sessoins::all();
        return  view('Admen.Sessoin.Index',[
           'sessoins' => $sessoins,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admen.Sessoin.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newStd = Sessoins::create([
            'courses_id' =>$request->courses_id,
            'NameSessoin' =>$request->NameSessoin,
            'Time' =>$request->Time,
         //   'user_id' => 1
        ]);
        return redirect('sessoin/'.$newStd->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sessoins  $sessoins
     * @return \Illuminate\Http\Response
     */
    public function show(Sessoins $sessoins)
    {
        return view('Admen.Sessoin.Index',[
            'sessoins' => $sessoins
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sessoins  $sessoins
     * @return \Illuminate\Http\Response
     */
    public function edit(Sessoins $sessoins)
    {
        return view('Admen.Sessoin.Edit',[
            'session' =>$sessoins
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sessoins  $sessoins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sessoins $sessoins)
    {
        $sessoins->update([
            
            'courses_id' =>$request->courses_id,
            'NameSessoin' =>$request->NameSessoin,
            'Time' =>$request->Time,
        ]);
        return redirect('/cc/'.$sessoins->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sessoins  $sessoins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sessoins $sessoins)
    {
        $sessoins->delete();
        return redirect('/sessoin');
    }
}
