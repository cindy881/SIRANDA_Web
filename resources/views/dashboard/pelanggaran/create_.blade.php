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
            <div class="row mb-2">
                <label for="inputTgl" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control @error('tgl_pelanggaran') is-invalid @enderror" id="tgl_pelanggaran" name="tgl_pelanggaran" value="{{ old('tgl_pelanggaran') }}" required>
                    @error('tgl_pelanggaran')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            {{-- URAIAN --}}
            <div class="row  mb-2">
                <label for="inputUraian" class="col-sm-2 col-form-label">Uraian</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('uraian_pelanggaran') is-invalid @enderror" id="uraian_pelanggaran" name="uraian_pelanggaran" value="{{ old('uraian_pelanggaran') }}" required>
                    @error('uraian_pelanggaran')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            {{-- FILEFOTO --}}
            <div class="row  mb-2">
                <label for="inputFilefoto" class="col-sm-2 col-form-label">Bukti</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control @error('filefoto_pelanggaran') is-invalid @enderror" id="filefoto_pelanggaran" name="filefoto_pelanggaran" value="{{ old('filefoto_pelanggaran') }}" required>
                    @error('filefoto_pelanggaran')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            {{-- LOKASI --}}
            <div class="row  mb-2">
                <label for="inputLokasi" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <select class="form-select" id="fk_desakel" name="fk_desakel" aria-label="Default select example" required>
                        <option selected>Pilih Lokasi Pelanggaran</option>
                        @foreach($desakels as $desakel)
                        <option value="{{ $desakel->id }}">{{ $desakel->nama_desakel }}</option>
                        @endforeach
                    </select>
                </div>
            </div>           
            {{-- LATLNG --}}
            <div class="row  mb-2">
                <label for="inputLatLng" class="col-sm-2 col-form-label">Titik Lokasi</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control @error('lat_pelanggaran') is-invalid @enderror" id="lat_pelanggaran" name="lat_pelanggaran" value="{{ old('lat_pelanggaran') }}" placeholder="Latitude" required>
                    @error('lat_pelanggaran')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control @error('lng_pelanggaran') is-invalid @enderror" id="lng_pelanggaran" name="lng_pelanggaran" value="{{ old('lng_pelanggaran') }}" placeholder="Longitude" required>
                    @error('lng_pelanggaran')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>           
            {{-- PELAKU --}}
            <div class="row  mb-2">
                <label for="inputPelaku" class="col-sm-2 col-form-label">Pelaku</label>
                <div class="col-sm-10">
                    <select class="form-select" id="pelaku_pelanggaran" name="pelaku_pelanggaran" aria-label="Default select example" required>
                        <option selected>Pilih Pelaku Pelanggaran</option>
                        <option value="Perorangan">Perorangan</option>
                        <option value="Pelaku Usaha">Pelaku Usaha</option>
                        <option value="Badan Usaha">Badan Usaha</option>
                    </select>
                </div>
            </div>
            {{-- BENTUK --}}
            <div class="row">
                <label for="inputBentuk" class="col-sm-2 col-form-label">Bentuk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('bentuk_pelanggaran') is-invalid @enderror" id="bentuk_pelanggaran" name="bentuk_pelanggaran" value="{{ old('bentuk_pelanggaran') }}" required>
                    @error('bentuk_pelanggaran')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    <br>
        
                    <button type="submit" class="btn btn-primary text-light">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection