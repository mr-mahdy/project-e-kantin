@extends('layout/admin')

@section('title', 'Stand')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Ubah Data @yield('title')</h6>
    </div>
    <div class="card-body">
        <form action="/stand/{{ $stand->id }}" method="POST">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="nama_penjual">Nama Penjual</label>
                <input type="text" name="nama_penjual" value="{{ $stand->nama_penjual }}" class="form-control @error('nama_penjual') is-invalid @enderror " id="nama_penjual">
                @error('nama_penjual')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Ubah Data</button>
            <a href="{{ url('/stand') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>


@endsection