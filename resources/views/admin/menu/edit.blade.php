@extends('layout/admin')

@section('title', 'Menu')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Ubah Data @yield('title')</h6>
    </div>
    <div class="card-body">
        <form action="/menu/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
            @method('patch')
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
                <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}" class="form-control @error('nama_menu') is-invalid @enderror " id="nama_menu">
                @error('nama_menu')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-control">
                    @foreach($categories as $category)
                    @if($category->id == $menu->id_kategori)
                    <option value="{{ $category->id }}" selected>{{ $category->nama_kategori }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="stand">Penjual</label>
                <select name="stand" id="stand" class="form-control">
                    @foreach($stands as $stand)
                    @if($stand->id == $menu->id_stand)
                    <option value="{{ $stand->id }}" selected>{{ $stand->nama_penjual }}</option>
                    @else
                    <option value="{{ $stand->id }}">{{ $stand->nama_penjual }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" value="{{ $menu->harga }}" class="form-control @error('harga') is-invalid @enderror " id="harga">
                @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Ubah Data</button>
            <a href="{{ url('/menu') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>


@endsection