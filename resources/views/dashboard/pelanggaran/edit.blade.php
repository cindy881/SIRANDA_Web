@extends('dashboard.layouts.app')

@section('content')

<div class="card card-outline mt-4 col-md-10 offset-md-1">
    <div class="card-header">
        <h3>Tambah Data</h3>
    </div>
    <div class="card-body">
        <form action="{{ url('dashboard/pelanggaran/create') }}" method="POST">
            @csrf
            
            {{-- TANGGAL --}}
            <div class="row mb-2">
                <label for="inputTgl" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control @error('tgl_pelanggaran') is-invalid @enderror" name="tgl_pelanggaran" value="{{ old('tgl_pelanggaran', $pelanggaran->tgl_pelanggaran) }}">
                    @error('tgl_pelanggaran')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            {{-- URAIAN --}}
            <div class="row  mb-2">
                <label for="inputUraian" class="col-sm-2 col-form-label">Uraian</label>
                <div class="col-sm-10">
                    <textarea id="exampleFormControlTextarea1" rows="2" class="form-control @error('uraian_pelanggaran') is-invalid @enderror" name="uraian_pelanggaran" value="{{ old('uraian_pelanggaran', $pelanggaran->_pelanggaran) }}"></textarea>
                    @error('uraian_pelanggaran')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            {{-- FILEFOTO --}}
            <div class="row  mb-2">
                <label for="inputFilefoto" class="col-sm-2 col-form-label">Bukti</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control @error('filefoto_pelanggaran') is-invalid @enderror" name="filefoto_pelanggaran" value="{{ old('filefoto_pelanggaran', $pelanggaran->_pelanggaran) }}">
                    @error('filefoto_pelanggaran')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            {{-- PELAKU --}}
            <div class="row  mb-2">
                <label for="inputPelaku" class="col-sm-2 col-form-label">Pelaku</label>
                <div class="col-sm-10">
                    <select class="form-select" name="pelaku_pelanggaran" aria-label="Default select example">
                        <option selected>{{ $pelanggaran->pelaku_pelanggaran }}</option>
                        <option value="1">Perorangan</option>
                        <option value="2">Pelaku Usaha</option>
                        <option value="3">Badan Usaha</option>
                    </select>
                </div>
            </div>           
            {{-- LATLNG --}}
            <div class="row  mb-2">
                <label for="inputLatLng" class="col-sm-2 col-form-label">Titik Lokasi</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control @error('lat_pelanggaran') is-invalid @enderror" name="lat_pelanggaran" value="{{ old('lat_pelanggaran', $pelanggaran->lat_pelanggaran) }}" placeholder="Latitude">
                    @error('lat_pelanggaran')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control @error('lng_pelanggaran') is-invalid @enderror" name="lng_pelanggaran" value="{{ old('lng_pelanggaran', $pelanggaran->lng_pelanggaran) }}" placeholder="Longitude">
                    @error('lng_pelanggaran')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            {{-- BENTUK --}}
            <div class="row">
                <label for="inputBentuk" class="col-sm-2 col-form-label">Bentuk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('bentuk_pelanggaran') is-invalid @enderror" name="bentuk_pelanggaran" value="{{ old('bentuk_pelanggaran', $pelanggaran->bentuk_pelanggaran) }}">
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