<?php

namespace App\Http\Controllers;

use App\Models\Desakel;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggaran = Pelanggaran::where('fk_user_pelanggaran', Auth::user()->id)->get();
        return view('dashboard.pelanggaran.index')->with([
            'pelanggarans' => $pelanggaran,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desakel = Desakel::all();
        return view('dashboard.pelanggaran.create')->with([
            'desakels' => $desakel,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'tgl_pelanggaran' => 'required',
            'uraian_pelanggaran' => 'required',
            'filefoto_pelanggaran' => 'required|image|max:2048',
            'pelaku_pelanggaran' => 'required',
            'bentuk_pelanggaran' => 'required',
            'fk_desakel' => 'required',
            'lat_pelanggaran' => 'required',
            'lng_pelanggaran' => 'required',
        ];
        $validatedData = $request->validate($rules);
        $validatedData['id_pelanggaran'] = IdGenerator::generate([
            'table' => 'pelanggarans',
            'field' => 'id_pelanggaran',
            'length' => 10,
            'prefix' => 'PLGRN-',
        ]);
        $validatedData['filefoto_pelanggaran'] = $request->file('filefoto_pelanggaran')->store('filefoto_pelanggaran');
        $validatedData['fk_user_pelanggaran'] = Auth::user()->id;

        Pelanggaran::create($validatedData);

        return redirect('/dashboard/pelanggaran')->with('successCreate', 'Data baru berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggaran $pelanggaran)
    {
        $desakel = Desakel::all();
        return view('dashboard.pelanggaran.edit')->with([
            'pelanggaran' => $pelanggaran,
            'desakels' => $desakel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Pelanggaran::find($id);
        $model->delete();

        return redirect('/dashboard/pelanggaran')->with('successDelete', 'Data berhasil dihapus!');
    }
}
