@extends('layout/admin')

@extends('layout/subadmin')

@section('title', 'Stand')

@section('subcontent')
<div class="card-body">
    @if ( session('statusStand') )
    <p class="alert alert-success">
        {{ session('statusStand') }}
    </p>
    @endif

    <a href="{{ url('/stand/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Penjual</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stands as $stand)
                <tr>
                    <td>{{ $stand->nama_penjual }}</td>
                    <td>
                        <a href="/stand/{{ $stand->id }}/edit" class="badge badge-primary">Edit</a> |
                        <form action="/stand/{{ $stand->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="badge btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection