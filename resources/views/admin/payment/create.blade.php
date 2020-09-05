@extends('layout/admin')

@section('title', 'Reservasi')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Tambah Data @yield('title')</h6>
    </div>
    <div class="card-body">
        <form action="{{ url('/reservation') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kode_res">Kode Reservasi</label>
                <input type="number" name="kode_res" class="form-control @error('kode_res') is-invalid @enderror " id="kode_res">
                @error('kode_res')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_kategori">Kategori</label>
                <select name="nama_kategori" id="nama_kategori" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_penjual">Penjual</label>
                <select name="nama_penjual" id="nama_penjual" class="form-control">
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