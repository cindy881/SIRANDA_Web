@extends('dashboard.layouts.app')

@section('content')

<div class="card card-outline mt-4 col-md-10 offset-md-1">
    <div class="card-header">
        <h3>Tambah Data</h3>
    </div>

    <div class="card-body">
        <form action="{{ url('dashboard/pelanggaran') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- TANGGAL --}}
            <div class="mx-4 mb-2">
                <label for="tgl" class="form-label">Tanggal Pelanggaran</label>
                <input type="date" class="form-control @error('tgl_pelanggaran') is-invalid @enderror" id="tgl_pelanggaran" name="tgl_pelanggaran" value="{{ old('tgl_pelanggaran', $pelanggaran->tgl_pelanggaran) }}" required>
            </div>
            {{-- URAIAN --}}
            <div class="mx-4 mb-2">
                <label for="uraian" class="form-label">Uraian Pelanggaran</label>
                <input type="text" class="form-control @error('uraian_pelanggaran') is-invalid @enderror" id="uraian_pelanggaran" name="uraian_pelanggaran" value="{{ old('uraian_pelanggaran', $pelanggaran->uraian_pelanggaran) }}" required>
            </div>
            {{-- BENTUK --}}
            <div class="mx-4 mb-2">
                <label for="bentuk" class="form-label">Bentuk Pelanggaran</label>
                <input type="text" class="form-control @error('bentuk_pelanggaran') is-invalid @enderror" id="bentuk_pelanggaran" name="bentuk_pelanggaran" value="{{ old('bentuk_pelanggaran', $pelanggaran->bentuk_pelanggaran) }}" required>
            </div>
            {{-- FILEFOTO --}}
            <div class="mx-4 mb-2">
                <label for="filefoto" class="form-label">Bukti Pelanggaran</label>
                <input type="file" class="form-control @error('filefoto_pelanggaran') is-invalid @enderror" id="filefoto_pelanggaran" name="filefoto_pelanggaran" value="{{ old('filefoto_pelanggaran') }}" required>
            </div>
            {{-- LOKASI --}}
            <div class="mx-4 mb-2">
                <label for="lokasi" class="form-label">Lokasi Pelanggaran</label>
                <select class="form-select" name="fk_desakel" id="fk_desakel" value="">
                    <option selected>{{ $pelanggaran->desakel->nama_desakel }}</option>
                    @foreach($desakels as $desakel)
                    <option value="{{ $desakel->id }}">{{ $desakel->nama_desakel }}</option>
                    @endforeach
                </select>
            </div>
            {{-- LATLNG --}}
            <div class="mx-4 mb-2">
                <label for="uraian" class="form-label">Titik Pelanggaran</label>
                <div class="input-group">
                    <input type="text" class="form-control @error('lat_pelanggaran') is-invalid @enderror" id="lat_pelanggaran" name="lat_pelanggaran" value="{{ old('lat_pelanggaran', $pelanggaran->lat_pelanggaran) }}" placeholder="Latitude" required>
                    <input type="text" class="form-control @error('lng_pelanggaran') is-invalid @enderror" id="lng_pelanggaran" name="lng_pelanggaran" value="{{ old('lng_pelanggaran', $pelanggaran->lng_pelanggaran) }}" placeholder="Longitude" required>
                </div>
            </div>
            {{-- PELAKU --}}
            <div class="mx-4 mb-2">
                <label for="pelaku" class="form-label">Pelaku Pelanggaran</label>
                <select class="form-select" name="pelaku_pelanggaran" id="pelaku_pelanggaran">
                    <option selected>{{ $pelanggaran->pelaku_pelanggaran }}</option>
                    <option value="Perorangan">Perorangan</option>
                    <option value="Pelaku Usaha">Pelaku Usaha</option>
                    <option value="Badan Usaha">Badan Usaha</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary text-light mx-4">Simpan</button>
        </form>
    </div>

</div>

@endsection