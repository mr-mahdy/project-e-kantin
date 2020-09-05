@extends('layout/main')

@section('title', 'Home')

@section('banner')
<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Expensive but the best</h5>
                        <h1>Ekantin Unpas Deliciousness jumping into the mouth</h1>
                        <p>&nbsp;Ekantin Unpas is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt aspernatur, odit doloremque nisi neque iusto dicta fugiat libero fuga quo atque! Architecto praesentium, expedita. Fuga esse, provident. Obcaecati modi, aliquid.</p>
                        <div class="banner_btn">
                            <div class="banner_btn_iner">
                                <a href="{{ url('/#reservation')}}" class="btn_2">Reservation <img src="img/icon/left_1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->
@endsection

@section('container')
<!--::exclusive_item_part start::-->
<section class="exclusive_item_part blog_item_section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <p class="text-capitalize"><em>&nbsp;Order Here</em></p>
                    <h2>&nbsp;Popular Menu</h2>
                </div>
            </div>
        </div>
        <div class="row card-menu">

        </div>
    </div>
</section>
<!--::exclusive_item_part end::-->

<!--::regervation_part start::-->
<section class="regervation_part section_padding" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <p>Reservation</p>
                    <h2>Book A Table</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="regervation_part_iner">
                    <form method="POST" action="{{ url('/reservation') }}">
                        <div class="form-row">
                            @csrf
                            <div class="form-group col-md-12">
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Your Name *">
                                @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Phone number *" maxlength="15">
                                @error('no_hp')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <select name="id_meja" class="form-control @error('no_meja') is-invalid @enderror" id="Select">
                                    <option selected>Table number *</option>
                                    @foreach($tables as $table)
                                    <option value="{{$table->id}}">{{$table->no_meja}}</option>
                                    @endforeach
                                </select>
                                @error('no_meja')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                <input name="waktu" id="waktu" type="text" class="form-control @error('waktu') is-invalid @enderror" autocomplete="off" placeholder="Time *">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                                @error('waktu')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="regerv_btn">
                            <button type="submit" class="btn_4">Book A Table</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 bg-white shadow-lg p-4" style="border-radius: 10px;border-bottom: 5px solid #1cc88a;border-right: 5px solid #1cc88a;">
                <h3>Reservation Schedules</h3>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nomor Meja</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->table->no_meja }}</td>
                                <td>Pukul {{ Carbon\Carbon::createFromFormat('H:i:s',$reservation->waktu)->format('H.i')  }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>
<!--::regervation_part end::-->
@endsection