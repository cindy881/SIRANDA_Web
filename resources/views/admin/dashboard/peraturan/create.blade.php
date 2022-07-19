@extends('admin.dashboard.layouts.app')

@section('content')

<div class="card card-outline mt-4 col-md-10 offset-md-1">
    <div class="card-header">
        <h3>Tambah Data</h3>
    </div>
    <div class="card-body">
        <form action="{{ url('dashboard/peraturan/create') }}" method="POST">
            @csrf
            
            {{-- NAMA UU --}}
            <div class="row mb-2">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama Peraturan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nama_uu') is-invalid @enderror" name="nama_uu" value="{{ old('nama_uu') }}">
                    @error('nama_uu')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            {{-- FILE --}}
            <div class="row  mb-2">
                <label for="inputFile" class="col-sm-2 col-form-label">Dokumen</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control @error('file_uu') is-invalid @enderror" name="file_uu" value="{{ old('file_uu') }}">
                    @error('file_uu')
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