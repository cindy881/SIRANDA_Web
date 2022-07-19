@extends('dashboard.layouts.app')

@section('content')

<div class="card card-outline mt-4 col-md-10 offset-md-1">
    <div class="card-header">
        <h3>Tambah Data</h3>
    </div>
    <div class="card-body">
        <form action="{{ url('dashboard/peraturan/create') }}" method="POST">
            @csrf
            
            {{-- URAIAN --}}
            <div class="row  mb-2">
                <label for="inputUraian" class="col-sm-2 col-form-label">Uraian</label>
                <div class="col-sm-10">
                    <textarea id="exampleFormControlTextarea1" rows="2" class="form-control @error('uraian_uu') is-invalid @enderror" name="uraian_uu" value="{{ old('uraian_uu') }}"></textarea>
                    @error('uraian_uu')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            {{-- FILEFOTO --}}
            <div class="row  mb-2">
                <label for="inputFilefoto" class="col-sm-2 col-form-label">Bukti Penindakan</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control @error('filefoto_uu') is-invalid @enderror" name="filefoto_uu" value="{{ old('filefoto_uu') }}">
                    @error('filefoto_uu')
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