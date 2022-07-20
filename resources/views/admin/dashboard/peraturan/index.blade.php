@extends('admin.dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">PERATURAN</h1>
</div>

@if(session()->has('successCreate'))
<div class="alert alert-success alert-dismissible fade show col-lg-10" role="alert">
    {{ session('successCreate') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('successEdit'))
<div class="alert alert-info alert-dismissible fade show col-lg-10" role="alert">
    {{ session('successEdit') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('successDelete'))
<div class="alert alert-danger alert-dismissible fade show col-lg-10" role="alert">
    {{ session('successDelete') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive">
    <a class="btn btn-primary text-light mb-3" href="{{ url('/admin/dashboard/peraturan/create') }}"><i class="bi bi-plus-lg"></i> Input Peraturan</a>
    <table class="table v-middle" id="example">
        <thead>
            <tr class="bg-light">
                <th class=" text-center">No.</th>
                <th class=" text-center">Nama Peraturan</th>
                <th class=" text-center">Dokumen</th>
                <th class=" text-center">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;?>
            @foreach($peraturans as $peraturan)
            <?php $no++ ;?>

            <tr class="text-center">
                <td>{{ $no }}</td>
                <td>{{ $peraturan->nama_uu }}</td>
                <td>{{ $peraturan->file_uu }}</td>
                <td>
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <a class="btn btn-danger btn-sm d-inline" type="submit"><i class="bi bi-trash-fill" style="font-size: .75rem;"></i></a>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection