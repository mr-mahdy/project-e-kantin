@extends('layout/admin')

@extends('layout/subadmin')

@section('title', 'Kategori Menu')

@section('subcontent')
<div class="card-body">
    @if ( session('statusCategory') )
    <p class="alert alert-success">
        {{ session('statusCategory') }}
    </p>
    @endif

    <a href="{{ url('/category/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->nama_kategori }}</td>
                    <td>
                        <a href="/category/{{ $category->id }}/edit" class="badge badge-primary">Edit</a> |
                        <form action="/category/{{ $category->id }}" method="post" class="d-inline">
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

<!-- Hapus Modal-->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Data Kategori Menu</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/category" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror " id="nama">
                        @error('nama_kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Tambah Data
                </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection