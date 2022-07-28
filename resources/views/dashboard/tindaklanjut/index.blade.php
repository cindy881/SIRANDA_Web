@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">DATA TINDAK LANJUT</h1>
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
    <a href="{{ url('/dashboard/pelanggaran/'.$pelanggaran->id.'/tindaklanjut/create') }}" class="btn btn-primary text-light mb-3 mx-2"><i class="bi bi-plus-lg"></i> Input Tindak Lanjut</a>
    <table id="example" class="table table-sm v-middle">
        <thead>
            <tr class="bg-light">
                <th class="text-center">ID Pelanggaran</th>
                <th class="text-center">Uraian Tindak Lanjut</th>
                <th class="text-center">Bukti Penindakan</th>
                <th class="text-center">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tindaklanjuts as $tindaklanjut)

            <tr class="text-center">
                {{-- <td>{{ $tindaklanjut->pelanggaran->id_pelanggaran }}</td> --}}
                <td>{{ $tindaklanjut->uraian_tindaklanjut }}</td>
                <td>
                    <img src="{{ asset('storage/'.$tindaklanjut->filefoto_tindaklanjut) }}" alt="" style="heigth: 4rem; width: 4rem;">
                </td>
                <td>
                    <form action="{{ url('/dashboard/pelanggaran/'.$pelanggaran->id.'/tindaklanjut'.$tindaklanjut->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-sm d-inline" type="submit"><i class="bi bi-trash-fill" style="font-size: .75rem;"></i></button>
                    </form>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection