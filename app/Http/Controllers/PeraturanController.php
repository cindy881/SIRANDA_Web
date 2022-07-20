<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peraturan = Peraturan::where('fk_user_uu', auth()->user()->id)->get();
        return view('admin.dashboard.peraturan.index')->with([
            'peraturans' => $peraturan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.peraturan.create');
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
            'nama_uu' => 'required',
            'file_uu' => 'required|file|max:2000'
        ];
        $validatedData = $request->validate($rules);
        $validatedData['file_uu'] = $request->file('file_uu')->store('file_uu');
        $validatedData['fk_user_uu'] = auth()->user()->id;

        Peraturan::create($validatedData);
        return redirect('/admin/dashboard/peraturan')->with('successCreate', 'Data baru berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peraturan  $peraturan
     * @return \Illuminate\Http\Response
     */
    public function show(Peraturan $peraturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peraturan  $peraturan
     * @return \Illuminate\Http\Response
     */
    public function edit(Peraturan $peraturan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peraturan  $peraturan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peraturan $peraturan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peraturan  $peraturan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Peraturan::find($id);
        $model->delete();

        return redirect('/admin/dashboard/peraturan')->with('successDelete', 'Data berhasil dihapus!');
    }
}
