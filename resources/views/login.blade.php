@extends('layout/submain')

@section('title', 'Login Admin')

@section('container')
<!-- login part start-->
<section class="about_part about_bg">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-4 col-lg-5 offset-lg-1">
                <div class="about_img">
                    <img src="img/about.png" alt="">
                </div>
            </div>
            <div class="col-sm-8 col-lg-4">
                <div class="middle" style="padding:40px; border:1px solid rgba(146,236,184,1.00); margin:0px auto; width:400px;">
                    <ul class="nav nav-tabs nabbar_inverse btn" id="myTab" role="tablist">
                        <li class="login" id="profile-tab" style="color:white;" aria-controls="profile">Login Admin</li>

                    </ul>
                    <br><br>
                    <div class="tab-content" id="myTabContent">
                        <!--login Section-- starts-->
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="home-tab">
                            @if ( session('status') )
                            <p class="alert alert-danger">
                                {{ session('status') }}
                            </p>
                            @endif
                            <form method="post" action="{{ url('/login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="user">Username:</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="user" />
                                    @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="pwd" />
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" name="login" class="btn">{{__('Login')}}</button>
                            </form>
                        </div>
                        <!--login Section-- ends-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login part end-->
@endsection