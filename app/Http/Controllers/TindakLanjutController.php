<?php

namespace App\Http\Controllers;

use App\Models\TindakLanjut;
use Illuminate\Http\Request;

class TindakLanjutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tindaklanjut = TindakLanjut::where('fk_user_tindaklanjut', auth()->user()->id)->get();
        return view('dashboard.tindaklanjut.index')->with([
            'tindaklanjuts' => $tindaklanjut,
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TindakLanjut  $tindakLanjut
     * @return \Illuminate\Http\Response
     */
    public function show(TindakLanjut $tindakLanjut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TindakLanjut  $tindakLanjut
     * @return \Illuminate\Http\Response
     */
    public function edit(TindakLanjut $tindakLanjut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TindakLanjut  $tindakLanjut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TindakLanjut $tindakLanjut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TindakLanjut  $tindakLanjut
     * @return \Illuminate\Http\Response
     */
    public function destroy(TindakLanjut $tindakLanjut)
    {
        //
    }
}
