@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">DATA PELANGGARAN</h1>
</div>

@if(session()->has('successCreate'))
<div class="alert alert-success alert-dismissible fade show col-lg-12" role="alert">
    {{ session('successCreate') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('successEdit'))
<div class="alert alert-info alert-dismissible fade show col-lg-12" role="alert">
    {{ session('successEdit') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('successDelete'))
<div class="alert alert-danger alert-dismissible fade show col-lg-12" role="alert">
    {{ session('successDelete') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive">
    <a href="{{ url('dashboard/pelanggaran/create') }}" class="btn btn-primary text-light mb-3 mx-2"><i class="bi bi-plus-lg"></i> Input Pelanggaran</a>
    <table class="table table-sm v-middle" id="example">
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
            @foreach($pelanggarans as $pelanggaran)

            <tr class="text-center">
                <td>{{ $pelanggaran->id_pelanggaran }}</td>
                <td>{{ $pelanggaran->tgl_pelanggaran }}</td>
                <td>{{ $pelanggaran->uraian_pelanggaran }}</td>
                <td>
                    <img src="{{ asset('storage/'.$pelanggaran->filefoto_pelanggaran) }}" alt="" style="heigth: 4rem;">
                    {{-- {{ $pelanggaran->filefoto_pelanggaran }} --}}
                </td>
                <td>{{ $pelanggaran->desakel->nama_desakel }}</td>
                <td>{{ $pelanggaran->pelaku_pelanggaran }}</td>
                <td>{{ $pelanggaran->bentuk_pelanggaran }}</td>
                <td>
                    {{-- <button class="btn btn-success btn-sm" href="{{ url('/dashboard/pelanggaran/'.$pelanggaran->id.'/tindaklanjut') }}">Show</button> --}}
                    <a class="btn btn-success btn-sm" href="{{ url('/dashboard/pelanggaran/'.$pelanggaran->id.'/tindaklanjut') }}"><i class="bi bi-eye" style="font-size: .75rem;"></i></a>
                </td>
                <td class="text-center">
                    <a href="{{ url('/dashboard/pelanggaran/'.$pelanggaran->id.'/edit') }}" class="btn btn-info btn-sm text-white d-inline"><i class="bi bi-pencil-square" style="font-size: .75rem;"></i></a>
                </td>
                <td>
                    <form action="{{ url('/dashboard/pelanggaran/'.$pelanggaran->id) }}" method="POST" class="d-inline">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-sm" type="submit"><i class="bi bi-trash-fill" style="font-size: .75rem;"></i></button>
                    </form>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection