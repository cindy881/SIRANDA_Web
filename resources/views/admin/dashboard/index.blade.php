@extends('admin.dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat Datang, {{ Auth::user()->name }}</h1>
</div>

{{-- CARD --}}
<div class="row">
    <div class="col-3">
        <div class="card mb-2">
            <div class="card-body">
                <span><h5>Jumlah Pelanggaran</h5></span>
                <div class="row mt-3">
                    <div class="col">
                        <i class="bi bi-bar-chart-fill" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col">
                        <h3 class="ms-5 pt-2">{{ $jumlah_pelanggaran }}</h3>
                    </div>
                </div>
            </div>
            <a href="{{ url('/dashboard/pelanggaran') }}" style="text-decoration: none;">
                <div class="card-footer py-0 text-end">
                    <small>view details</small>
                    <i class="bi bi-chevron-right"></i>
                </div>
            </a>
        </div>
    </div>
    <div class="col-3">
        <div class="card mb-2">
            <div class="card-body">
                <span><h5>Jumlah Peraturan</h5></span>
                <div class="row mt-3">
                    <div class="col">
                        <i class="bi bi-bar-chart-fill" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col">
                        <h3 class="ms-5 pt-2">{{ $jumlah_peraturan }}</h3>
                    </div>
                </div>
            </div>
            <a href="{{ url('/admin/dashboard/peraturan') }}" style="text-decoration: none;">
                <div class="card-footer py-0 text-end">
                    <small>view details</small>
                    <i class="bi bi-chevron-right"></i>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- Table -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <div class="d-md-flex">
                    <div>
                        <h4 class="card-title">Data Pelanggaran</h4>
                        {{-- <h5 class="card-subtitle">Overview of Top Selling Items</h5> --}}
                    </div>
                    {{-- <div class="ms-auto">
                        <div class="dl">
                            <select class="form-select shadow-none">
                                <option value="0" selected>Monthly</option>
                                <option value="1">Daily</option>
                                <option value="2">Weekly</option>
                                <option value="3">Yearly</option>
                            </select>
                        </div>
                    </div> --}}
                </div>
                <!-- title -->
            </div>
            <div class="table-responsive mx-2 mb-4">
                <table class="table v-middle table-sm" id="example">
                    <thead>
                        <tr class="bg-light">
                            <th class="text-center">ID</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Uraian</th>
                            <th class="text-center">Bukti</th>
                            <th class="text-center">Lokasi</th>
                            <th class="text-center">Pelaku</th>
                            <th class="text-center">Bentuk</th>
                            <th class="text-center">Tindak Lanjut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pelanggarans as $pelanggaran)

                        <tr class="text-center">
                            <td>{{ $pelanggaran->id_pelanggaran }}</td>
                            <td>{{ $pelanggaran->tgl_pelanggaran }}</td>
                            <td>{{ $pelanggaran->uraian_pelanggaran }}</td>
                            <td>
                                <img src="{{ asset('storage/'.$pelanggaran->filefoto_pelanggaran) }}" alt="" style="height: 4rem; width:4rem;">
                                {{-- {{ $pelanggaran->filefoto_pelanggaran }} --}}
                            </td>
                            <td>{{ $pelanggaran->desakel->nama_desakel }}</td>
                            <td>{{ $pelanggaran->pelaku_pelanggaran }}</td>
                            <td>{{ $pelanggaran->bentuk_pelanggaran }}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ url('/admin/dashboard/tindaklanjut') }}"><i class="bi bi-eye" style="font-size: .75rem;"></i></a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Table -->
<!-- ============================================================== -->


@endsection