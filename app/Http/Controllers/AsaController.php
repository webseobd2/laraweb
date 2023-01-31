<?php

namespace App\Http\Controllers;

use App\Models\Asa;
use Illuminate\Http\Request;

class AsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $input=$request->all();
        // Student::create($input);
        // return ('Your Student Added Successfully');
        $asas = Asa::latest()->paginate(20);
        // dd($students);
        return view('asa.asa_index', compact('asas'))
        ->with('i',(request()->input('page',1)-1)*20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asa.create_asa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Asa::create($input);
        return ('Your Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asa  $asa
     * @return \Illuminate\Http\Response
     */
    public function show(Asa $asa)
    {
        return view('asa.show_asa', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asa  $asa
     * @return \Illuminate\Http\Response
     */
    public function edit(Asa $asa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asa  $asa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asa $asa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asa  $asa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asa $asa)
    {
        $asa->delete();
        return ('Your Student delete Successfully');
    }
}
