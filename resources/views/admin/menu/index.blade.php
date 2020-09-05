@extends('layout/admin')

@extends('layout/subadmin')

@section('title', 'Menu')

@section('subcontent')
<div class="card-body">
    @if ( session('statusMenu') )
    <p class="alert alert-success">
        {{ session('statusMenu') }}
    </p>
    @endif

    <a href="{{ url('/menu/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Menu</th>
                    <th>Kategori</th>
                    <th>Penjual</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                <tr>
                    <td><img src="{{ asset('img/food_menu/'. $menu->gambar) }}" alt="menu" class="img-profile"></td>
                    <td>{{ $menu->nama_menu }}</td>
                    <td>{{ $menu->category->nama_kategori }}</td>
                    <td>{{ $menu->stand->nama_penjual }}</td>
                    <td>Rp. {{ $menu->harga }}</td>
                    <td>
                        <a href="/menu/{{ $menu->id }}/edit" class="badge badge-primary">Edit</a> |
                        <form action="/menu/{{ $menu->id }}" method="post" class="d-inline">
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