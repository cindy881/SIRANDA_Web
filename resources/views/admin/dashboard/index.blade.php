@extends('admin.dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat Datang, {{ Auth::user()->name }}</h1>
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
                        <tr class="text-center">
                            <td>id_pelanggaran</td>
                            <td>tgl_pelanggaran</td>
                            <td>uraian_pelanggaran</td>
                            <td>filefoto_pelanggaran</td>
                            <td>nama_desakel</td>
                            <td>pelaku_pelanggaran</td>
                            <td>bentuk_pelanggaran</td>
                            <td>
                                <a class="btn btn-success btn-sm"><i class="bi bi-eye" style="font-size: .75rem;"></i></a>
                            </td>
                        </tr>
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