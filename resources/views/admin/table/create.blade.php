@extends('layout/admin')

@section('title', 'Kategori Menu')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Tambah Data @yield('title')</h6>
    </div>
    <div class="card-body">
        <form action="{{ url('/table') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="no_meja">Nomor Meja</label>
                <input type="text" name="no_meja" class="form-control @error('no_meja') is-invalid @enderror " id="no_meja">
                @error('no_meja')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="0">Kosong</option>
                    <option value="1">Penuh</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Tambah Data</button>
            <a href="{{ url('/table') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>
@endsection