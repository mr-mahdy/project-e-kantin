@extends('layout/main')

@section('banner')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>@yield('title')</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection