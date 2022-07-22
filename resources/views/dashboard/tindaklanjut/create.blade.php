@extends('dashboard.layouts.app')

@section('content')

<div class="card card-outline mt-4 col-md-10 offset-md-1">
    <div class="card-header">
        <h3>Tambah Data</h3>
    </div>
    <div class="card-body">
        <form action="{{ url('/dashboard/pelanggaran/'.$pelanggaran->id.'/tindaklanjut') }}" method="POST">
            @csrf
            
            {{-- ID PELANGGARAN --}}
            <div class="row  mb-2">
                <label for="inputID" class="col-sm-2 col-form-label">ID Pelanggaran</label>
                <div class="col-sm-10">
                    <select class="form-select" name="fk_pelanggaran" id="fk_pelanggaran">
                        <option selected>Pilih ID Pelanggaran</option>
                        @foreach($pelanggarans as $pelanggaran)
                        <option value="{{ $pelanggaran->id }}">{{ $pelanggaran->id_pelanggaran }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- URAIAN --}}
            <div class="row  mb-2">
                <label for="inputUraian" class="col-sm-2 col-form-label">Uraian</label>
                <div class="col-sm-10">
                    <input id="uraian_tindaklanjut" class="form-control @error('uraian_tindaklanjut') is-invalid @enderror" name="uraian_tindaklanjut" value="{{ old('uraian_tindaklanjut') }}">
                    @error('uraian_tindaklanjut')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            {{-- FILEFOTO --}}
            <div class="row  mb-2">
                <label for="inputFilefoto" class="col-sm-2 col-form-label">Bukti Penindakan</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control @error('filefoto_tindaklanjut') is-invalid @enderror" name="filefoto_tindaklanjut" value="{{ old('filefoto_tindaklanjut') }}">
                    @error('filefoto_tindaklanjut')
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