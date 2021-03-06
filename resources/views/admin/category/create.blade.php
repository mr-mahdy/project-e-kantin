@extends('layout/admin')

@section('title', 'Kategori Menu')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Tambah Data @yield('title')</h6>
    </div>
    <div class="card-body">
        <form action="{{ url('/category') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror " id="nama">
                @error('nama_kategori')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Tambah Data</button>
            <a href="{{ url('/category') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>


@endsection