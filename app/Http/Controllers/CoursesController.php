<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Teachers;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cour  = Courses::all();
        return  view('Admen.Course.index',[
           'cours' => $cour,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admen.Course.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newStd = Courses::create([
            'teachers_id' =>$request->teachers_id,
            'name' =>$request->name,
            'small_desc' =>$request->small_desc,
            'desc' =>$request->desc,
         //   'user_id' => 1
        ]);
        return redirect('cc/'.$newStd->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $courses)
    {
        return view('Admen.Course.show',[
            'cours' => $courses
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $courses)
    {
        return view('Admen.Course.Edit',[
            'cours' =>$courses
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, Courses $courses)
    {
        $courses->update([
            
            'teachers_id' =>$request->teachers_id,
            'name' =>$request->name,
            'small_desc' =>$request->small_desc,
            'desc' =>$request->desc,
            'img' =>$request->img,
        ]);
        return redirect('/cc/'.$courses->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $courses)
    {
        $courses->delete();
        return redirect('/cc');
    }
}
