<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $pelanggaran = Pelanggaran::all();
        return view('dashboard.index')->with([
            'pelanggarans' => $pelanggaran,
        ]);
    }

    public function indexAdmin()
    {
        $pelanggaran = Pelanggaran::all();
        return view('admin.dashboard.index')->with([
            'pelanggarans' => $pelanggaran,
        ]);
    }
}
