@extends('layout/admin')

@extends('layout/subadmin')

@section('title', 'Reservasi')

@section('subcontent')
<div class="card-body">
    @if ( session('statusReservation') )
    <p class="alert alert-success">
        {{ session('statusReservation') }}
    </p>
    @endif

    <!-- <a href="{{ url('/reservation/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a> -->

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Kode Reservasi</th>
                    <th>Nama Customer</th>
                    <th>Nomor Meja</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->kode_res }}</td>
                    <td>{{ $reservation->customer->nama_cus }}</td>
                    <td>{{ $reservation->table->no_meja }}</td>
                    <td>Pukul {{ Carbon\Carbon::createFromFormat('H:i:s',$reservation->waktu)->format('H.i')  }}</td>
                    <td>
                        <a href="/reservation/{{ $reservation->id }}/edit" class="badge badge-primary">Edit</a> |
                        <form action="/reservation/{{ $reservation->id }}" method="post" class="d-inline">
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