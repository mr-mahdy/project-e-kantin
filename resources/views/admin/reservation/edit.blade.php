@extends('layout/admin')

@section('title', 'Reservasi')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Ubah Data @yield('title')</h6>
    </div>
    <div class="card-body">
        <form action="/reservation/{{ $reservation->id }}" method="POST">
            @method('patch')
            @csrf

            <div class="form-group">
                <label for="no_meja">No Meja</label>
                <select name="id_meja" id="no_meja" class="form-control">
                    @foreach($tables as $table)
                    @if($table->id == $reservation->id_meja)
                    <option value="{{ $table->id }}" selected>{{ $table->no_meja }}</option>
                    @else
                    <option value="{{ $table->id }}">{{ $table->no_meja }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="waktu">Waktu</label>
                <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                    <input name="waktu" id="waktu" type="text" class="form-control @error('waktu') is-invalid @enderror" value="{{ Carbon\Carbon::createFromFormat('H:i:s',$reservation->waktu)->format('H:i')  }}">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                    @error('waktu')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <script type="text/javascript">
                    $('.clockpicker').clockpicker();
                </script>

            </div>

            <button type="submit" class="btn btn-success">Ubah Data</button>
            <a href="{{ url('/reservation') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>


@endsection