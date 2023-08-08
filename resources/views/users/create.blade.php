@extends('layouts.backend')
@section('title', 'users')


@section('btn-kembali')
<a href="{{ route('users.index') }}" class="btn btn-sm btn-primary waves-effect waves-light col-3">
    <span class="tf-icons mdi mdi-arrow-left me-1"></span>Kembali
</a>
@endsection


@section('content')
<!-- Bootstrap Validation -->
<div class="col-md">
    <div class="card">
        <h5 class="card-header">Tambah User</h5>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" class="form-control
                @error('nama')
                    is-invalid
                @enderror" name="nama" placeholder="Nama" value="{{ old('nama') }}" />
                    <label>Nama</label>
                    @error('nama')
                    <div class="alert alert-danger alert-dismissible invalid-feedback" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" class="form-control
                @error('usia')
                    is-invalid
                @enderror" name="usia" placeholder="usia" value="{{ old('usia') }}" />
                    <label>usia</label>
                    @error('usia')
                    <div class="alert alert-danger alert-dismissible invalid-feedback" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" class="form-control
                @error('kota')
                    is-invalid
                @enderror" name="kota" placeholder="kota" value="{{ old('kota') }}" />
                    <label>kota</label>
                    @error('kota')
                    <div class="alert alert-danger alert-dismissible invalid-feedback" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>


                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary konfirmasi-tambah">TAMBAH</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Bootstrap Validation -->
@endsection