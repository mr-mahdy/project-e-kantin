@extends('layout/admin')

@extends('layout/subadmin')

@section('title', 'Meja')

@section('subcontent')
<div class="card-body">
    @if ( session('statusTable') )
    <p class="alert alert-success">
        {{ session('statusTable') }}
    </p>
    @endif

    <a href="{{ url('/table/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nomor Meja</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tables as $table)
                <tr>
                    <td>{{ $table->no_meja }}</td>
                    @if($table->status == 0)
                    <td>Kosong</td>
                    @else
                    <td>Penuh</td>
                    @endif
                    <td>
                        <a href="/table/{{ $table->id }}/edit" class="badge badge-primary">Edit</a> |
                        <form action="/table/{{ $table->id }}" method="post" class="d-inline">
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