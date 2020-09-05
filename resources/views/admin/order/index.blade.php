@extends('layout/admin')

@extends('layout/subadmin')

@section('title', 'Pemesanan')

@section('subcontent')
<div class="card-body">
    @if ( session('statusOrder') )
    <p class="alert alert-success">
        {{ session('statusOrder') }}
    </p>
    @endif

    <!-- <a href="{{ url('/order/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a> -->

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Kode Reservasi</th>
                    <th>Nama Customer</th>
                    <th>Pesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->reservation->kode_res }}</td>
                    <td>{{ $order->reservation->customer->nama_cus }}</td>
                    <td><a href="/order/{{ $order->id_res }}" class="badge badge-success">Detail</a></td>
                    <td>
                        <form action="/order/{{ $order->id_res }}" method="post" class="d-inline">
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