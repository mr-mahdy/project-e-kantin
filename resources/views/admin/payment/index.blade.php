@extends('layout/admin')

@extends('layout/subadmin')

@section('title', 'Pembayaran')

@section('subcontent')
<div class="card-body">
    @if ( session('statusPayment') )
    <p class="alert alert-success">
        {{ session('statusPayment') }}
    </p>
    @endif

    <!-- <a href="{{ url('/order/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a> -->

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Kode Reservasi</th>
                    <th>Nama Customer</th>
                    <th>Total Pembayaran</th>
                    <th>Tanggal Bayar</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = '';
                $total = 0 ?>
                @foreach($payments as $payment)
                @if($payment->order->id_res != $i)
                <?php $i = $payment->order->id_res ?>
                <tr>
                    <td>{{ $payment->order->reservation->kode_res }}</td>
                    <td>{{ $payment->order->reservation->customer->nama_cus }}</td>
                    <?php $orders = App\Order::where('id_res', '=', $payment->order->id_res)->get() ?>
                    @foreach($orders as $row)
                    <?php $total += $row->sub_total ?>
                    @endforeach
                    <td>Rp. {{ $total }}</td>
                    <td>{{ Carbon\Carbon::createFromFormat('Y-m-d',$payment->tgl_bayar)->format('d M Y')  }}</td>
                    <?php $total = 0 ?>
                    @if($payment->status == 1)
                    <td>Sudah Bayar</td>
                    @else
                    <td>Belum Bayar</td>
                    @endif
                </tr>
                @endif

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection