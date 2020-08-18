@extends('layout/main')

@section('banner')
<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Expensive but the best</h5>
                        <h1>Canteen Unpas Deliciousness jumping into the mouth</h1>
                        <p>&nbsp;e-canteen Unpas adalah sebuah Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt aspernatur, odit doloremque nisi neque iusto dicta fugiat libero fuga quo atque! Architecto praesentium, expedita. Fuga esse, provident. Obcaecati modi, aliquid.</p>
                        <div class="banner_btn">
                            <div class="banner_btn_iner">
                                <a href="#reservation" class="btn_2">Reservation <img src="img/icon/left_1.svg" alt=""></a>
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
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="img/food_item/food_item_1.png" alt="">
                    </div>
                    <div class="single_blog_text">
                        <h3>Indian Burger</h3>
                        <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                        <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="img/food_item/food_item_2.png" alt="">
                    </div>
                    <div class="single_blog_text">
                        <h3>Cremy Noodles</h3>
                        <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                        <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="img/food_item/food_item_3.png" alt="">
                    </div>
                    <div class="single_blog_text">
                        <h3>Honey Meat</h3>
                        <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                        <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="img/food_item/food_item_3.png" alt="">
                    </div>
                    <div class="single_blog_text">
                        <h3>Honey Meat</h3>
                        <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                        <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="img/food_item/food_item_3.png" alt="">
                    </div>
                    <div class="single_blog_text">
                        <h3>Honey Meat</h3>
                        <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                        <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="img/food_item/food_item_3.png" alt="">
                    </div>
                    <div class="single_blog_text">
                        <h3>Honey Meat</h3>
                        <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                        <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                    </div>
                </div>
            </div>

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
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Name *">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Email address *">
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control" id="Select">
                                    <option value="1" selected>Persons *</option>
                                    <option value="2">Number of guests 1</option>
                                    <option value="3">Number of guests 2</option>
                                    <option value="4">Number of guests 3</option>
                                    <option value="5">Number of guests 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="pnone" placeholder="Phone number *">
                            </div>
                            <div class="form-group col-md-6">
                                <div class="input-group date">
                                    <input id="datepicker" type="text" class="form-control" placeholder="Date *" />
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control" id="Select2">
                                    <option value="" selected>Time *</option>
                                    <option value="1">8 AM TO 10AM</option>
                                    <option value="1">10 AM TO 12PM</option>
                                    <option value="1">12PM TO 2PM</option>
                                    <option value="1">2PM TO 4PM</option>
                                    <option value="1">4PM TO 6PM</option>
                                    <option value="1">6PM TO 8PM</option>
                                    <option value="1">4PM TO 10PM</option>
                                    <option value="1">10PM TO 12PM</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" id="Textarea" rows="4" placeholder="Your Note *"></textarea>
                            </div>
                        </div>


                        <div class="regerv_btn">
                            <a href="#" class="btn_4">Book A Table</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::regervation_part end::-->
@endsection