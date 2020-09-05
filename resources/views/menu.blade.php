@extends('layout/submain')

@section('title', 'Menu')

@section('container')
<!-- menu start-->
<section class="food_menu gray_bg blog_item_section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="section_tittle">
                    <p>Book Menu</p>
                    <h2>Delicious Food Menu</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist">
                    <a class="active link-category" id="Special-tab" data-toggle="tab" href="#allMenu" role="tab" aria-controls="Special" aria-selected="false">All Menu <img src="img/icon/play.svg" alt="play"></a>
                    @foreach($categories as $category)
                    <a class="link-category" id="Special-tab" data-toggle="tab" href="#{{$category->nama_kategori}}" role="tab" aria-controls="Special" aria-selected="false">{{$category->nama_kategori}} <img src="img/icon/play.svg" alt="play"></a>
                    @endforeach
                </div>
            </div>

        </div>

        <div class="row card-menu">
        </div>
    </div>
</section>
<!-- menu part end-->
@endsection