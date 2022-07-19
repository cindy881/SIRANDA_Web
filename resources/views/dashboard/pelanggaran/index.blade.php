@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">DATA PELANGGARAN</h1>
</div>

<div class="table-responsive">
    <a href="{{ url('/dashboard/pelanggaran/create') }}" class="btn btn-primary text-light mb-3 mx-2"><i class="bi bi-plus-lg"></i> Input Pelanggaran</a>
    <table id="example" class="table table-sm v-middle">
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
                <th class="text-center" colspan="2">AKSI</th>
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
                    {{-- <button class="btn btn-success btn-sm" href="{{ url('/dashboard/pelanggaran/'.$pelanggaran->id.'/tindaklanjut') }}">Show</button> --}}
                    <a class="btn btn-success btn-sm" href=""><i class="bi bi-eye" style="font-size: .75rem;"></i></a>
                </td>
                <td class="text-center">
                    <a href="" class="btn btn-info btn-sm text-white d-inline"><i class="bi bi-pencil-square" style="font-size: .75rem;"></i></a>
                </td>
                <td>
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <a class="btn btn-danger btn-sm d-inline" type="submit"><i class="bi bi-trash-fill" style="font-size: .75rem;"></i></a>
                    </form>

                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection