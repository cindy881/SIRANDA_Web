<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
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
        $pelanggaran = Pelanggaran::where('fk_user_pelanggaran', auth()->user()->id)->first();
        return view('dashboard.tindaklanjut.index')->with([
            'tindaklanjuts' => $tindaklanjut->sortBy('fk_pelanggaran'),
            'pelanggaran' => $pelanggaran,
            // 'tindaklanjut' => $tindaklanjut,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggaran = Pelanggaran::where('fk_user_pelanggaran', auth()->user()->id)->first();
        $pelanggarans = Pelanggaran::where('fk_user_pelanggaran', auth()->user()->id)->get();
        $tindaklanjut = TindakLanjut::where('fk_user_tindaklanjut', auth()->user()->id)->first();
        return view('dashboard.tindaklanjut.create')->with([
            'pelanggaran' => $pelanggaran,
            'pelanggarans' => $pelanggarans,
            'tindaklanjut' => $tindaklanjut,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pelanggaran $pelanggaran)
    {
        $rules = [
            'fk_pelanggaran' => 'required',
            'uraian_tindaklanjut' => 'required',
            'filefoto_tindaklanjut' => 'required',
        ];
        $validatedData = $request->validate($rules);
        $validatedData['filefoto_tindaklanjut'] = $request->file('filefoto_tindaklanjut')->store('filefoto_tindaklanjut');
        $validatedData['fk_user_tindaklanjut'] = auth()->user()->id;

        TindakLanjut::create($validatedData);

        // $pelanggaran = TindakLanjut::where('fk_pelanggaran', $pelanggaran->id);
        return redirect('/dashboard/pelanggaran/' . $pelanggaran->id . '/tindaklanjut')->with('successCreate', 'Data baru berhasil disimpan!');
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
    public function destroy($id, Pelanggaran $pelanggaran)
    {
        $model = TindakLanjut::find($id);
        $model->delete();

        return redirect('/dashboard/pelanggaran/' . $pelanggaran->id . '/tindaklanjut')->with('successDelete', 'Data berhasil dihapus!');
    }
}
