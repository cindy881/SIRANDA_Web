@extends('dashboard.layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

<div class="container rounded bg-white col-10 mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ Auth::user()->name }}</span><span class="text-black-50">{{ Auth::user()->email }}</span><span> </span></div>
        </div>
        <div class="col-md-9 border-right">
            <div class="px-5 py-5">

                @if(session()->has('successEdit'))
                <div class="alert alert-info alert-dismissible fade show col-lg-12" role="alert">
                    {{ session('successEdit') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="d-flex justify-content-center align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form method="POST" action="{{ route('profile') }}">
                    @method('patch')
                    @csrf

                    <div class="row mt-2">
                        <div class="col-md-6"><label id="name" class="labels">Nama</label><input type="text" class="form-control" placeholder="Nama" name="name" value="{{ Auth::user()->name }}"></div>
                        <div class="col-md-6"><label id="email" class="labels">Email</label><input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="Email"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label id="address" class="labels">Alamat</label><input type="text" class="form-control" placeholder="Alamat" name="address" value="{{ Auth::user()->address }}">
                        </div>                 
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection