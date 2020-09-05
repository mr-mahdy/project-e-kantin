@extends('layout/admin')

@section('title', 'Meja')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Ubah Data @yield('title')</h6>
    </div>
    <div class="card-body">
        <form action="/table/{{ $table->id }}" method="POST">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="no_meja">Nomor Meja</label>
                <input type="text" name="no_meja" value="{{ $table->no_meja }}" class="form-control @error('no_meja') is-invalid @enderror " id="no_meja">
                @error('no_meja')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    @if($table->status == 0)
                    <option value="0" selected>Kosong</option>
                    <option value="1">Penuh</option>
                    @else
                    <option value="1" selected>Penuh</option>
                    <option value="0">Kosong</option>
                    @endif
                </select>
            </div>

            <button type="submit" class="btn btn-success">Ubah Data</button>
            <a href="{{ url('/table') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>


@endsection