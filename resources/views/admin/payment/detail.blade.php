@extends('layout/admin')

@section('title', 'Detail Pesanan')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Detail Pesanan Dengan Kode Reservasi {{$kode}}</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg">
                <label class="font-weight-bold text-success">Kode Reservasi</label>
                <p>{{$kode}}</p>
                <label class="font-weight-bold text-success">Nama Customer</label>
                <p>{{$order->unique('id_res')[0]->reservation->customer->nama_cus}}</p>
                <label class="font-weight-bold text-success">Pesanan</label>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Menu</th>
                                <th>Jumlah</th>
                                <th>Sub Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0 ?>
                            @foreach($order as $row)
                            <tr>
                                <td>{{ $row->menu->nama_menu }}</td>
                                <td>{{ $row->jumlah}}</td>
                                <td>Rp. {{ $row->sub_total }}</td>
                            </tr>
                            <?php $total += $row->sub_total ?>
                            @endforeach
                        </tbody>
                    </table>
                    <label class="font-weight-bold text-success">Total Pemesanan</label>
                    <p class="font-weight-bold">Rp. {{$total}}</p>
                </div>


                <a href="{{ url('/order') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</div>


@endsection