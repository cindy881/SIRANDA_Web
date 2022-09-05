<?php

namespace App\Http\Controllers;

use App\Models\Desakel;
use App\Models\Pelanggaran;
use App\Models\Peraturan;
use App\Models\TindakLanjut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $pelanggaran = Pelanggaran::all();
        $jumlah_pelanggaran = Pelanggaran::where('fk_user_pelanggaran', auth()->user()->id)->count();
        $desakel = Desakel::all();
        return view('dashboard.index')->with([
            'pelanggarans' => $pelanggaran,
            'jumlah_pelanggaran' => $jumlah_pelanggaran,
            'desakel' => $desakel,
        ]);
    }

    public function indexAdmin()
    {
        $pelanggaran = Pelanggaran::all();
        $jumlah_pelanggaran = Pelanggaran::all()->count();
        $jumlah_peraturan = Peraturan::all()->count();
        return view('admin.dashboard.index')->with([
            'pelanggarans' => $pelanggaran,
            'jumlah_pelanggaran' => $jumlah_pelanggaran,
            'jumlah_peraturan' => $jumlah_peraturan,
        ]);
    }

    public function tindaklanjut()
    {
        $tindaklanjut = TindakLanjut::all();
        $pelanggaran = Pelanggaran::where('fk_user_pelanggaran', auth()->user()->id)->first();
        return view('dashboard.tindaklanjut.index')->with([
            'tindaklanjuts' => $tindaklanjut->sortBy('fk_pelanggaran'),
            'pelanggaran' => $pelanggaran,
            'tindaklanjut' => $tindaklanjut,
        ]);
    }

    public function tindaklanjutAdmin()
    {
        $tindaklanjut = TindakLanjut::all();
        $pelanggaran = Pelanggaran::where('fk_user_pelanggaran', auth()->user()->id)->first();
        return view('admin.dashboard.tindaklanjut.index')->with([
            'tindaklanjuts' => $tindaklanjut->sortBy('fk_pelanggaran'),
            'pelanggaran' => $pelanggaran,
            'tindaklanjut' => $tindaklanjut,
        ]);
    }

    public function show(Desakel $desakel)
    {
        $pelanggarans = Desakel::findOrFail($desakel)->pelanggarans()->get();
        return view('dashboard.desakel', compact('desakel'))
            ->with('pelanggarans', $pelanggarans);
    }
}
