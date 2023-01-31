<?php

namespace App\Http\Controllers;

use App\Models\Monir;
use Illuminate\Http\Request;

class monirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('monir');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        Monir::create($input);
        return ('Your Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monir  $monir
     * @return \Illuminate\Http\Response
     */
    public function show(Monir $monir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monir  $monir
     * @return \Illuminate\Http\Response
     */
    public function edit(Monir $monir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monir  $monir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monir $monir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monir  $monir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monir $monir)
    {
        //
    }
}
