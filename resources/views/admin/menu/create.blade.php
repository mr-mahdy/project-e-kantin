@extends('layout/admin')

@section('title', 'Menu')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Tambah Data @yield('title')</h6>
    </div>
    <div class="card-body">
        <form action="{{ url('/menu') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror " id="gambar">
                @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_menu">Nama Menu</label>
                <input type="text" name="nama_menu" class="form-control @error('nama_menu') is-invalid @enderror " id="nama_menu">
                @error('nama_menu')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_kategori">Kategori</label>
                <select name="id_kategori" id="nama_kategori" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_penjual">Penjual</label>
                <select name="id_stand" id="nama_penjual" class="form-control">
                    @foreach($stands as $stand)
                    <option value="{{ $stand->id }}">{{ $stand->nama_penjual }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror " id="harga">
                @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Tambah Data</button>
            <a href="{{ url('/menu') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>
@endsection