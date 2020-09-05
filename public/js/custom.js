(function ($) {
    "use strict";

    $('#datepicker').datepicker();

    var review = $('.player_info_item');
    if (review.length) {
        review.owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            autoplay: true,
            margin: 40,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            nav: true,
            navText: [
                '<img src="img/icon/left.svg" alt="">',
                '<img src="img/icon/right.svg" alt="">'

            ],
            responsive: {
                0: {
                    margin: 15,
                },
                600: {
                    margin: 10,
                },
                1000: {
                    margin: 10,
                }
            }
        });
    }
    $('.popup-youtube, .popup-vimeo').magnificPopup({
        // disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    if (document.getElementById('default-select')) {
        $('select').niceSelect();
    }


    var review = $('.client_review_part');
    if (review.length) {
        review.owlCarousel({
            items: 1,
            loop: true,
            dots: true,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            nav: false,
        });
    }
    // menu fixed js code
    $(window).scroll(function () {
        var window_top = $(window).scrollTop() + 1;
        if (window_top > 50) {
            $('.main_menu').addClass('menu_fixed animated fadeInDown');
        } else {
            $('.main_menu').removeClass('menu_fixed animated fadeInDown');
        }
    });

    //   $(document).ready(function(){

    //     var owl_1 = $('#owl-1');
    //     var owl_2 = $('#owl-2');

    //     owl_1.owlCarousel({
    //       loop:true,
    //       margin:10,
    //       nav:false,
    //       items: 1,
    //       dots: false,
    //       navText: false,
    //       autoplay: true,

    //     });
    //  owl_2.find(".item").click(function(){
    //     var slide_index = owl_2.find(".item").index(this);
    //     owl_1.trigger('to.owl.carousel',[slide_index,300]);
    //   });

    //     owl_2.owlCarousel({
    //       margin:50,
    //       nav: true,
    //       items: 3,
    //       dots: false,
    //       center: true,
    //       loop:true,
    //       navText: false,
    //       autoplay: true,
    //       center: true
    //     });

    //   });



    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        speed: 300,
        infinite: true,
        asNavFor: '.slider-nav-thumbnails',
        // autoplay:true,
        pauseOnFocus: true,
        dots: true,
    });

    $('.slider-nav-thumbnails').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider',
        focusOnSelect: true,
        infinite: true,
        prevArrow: false,
        nextArrow: false,
        centerMode: true,
        responsive: [{
            breakpoint: 480,
            settings: {
                centerMode: false,
            }
        }]
    });

    //remove active class from all thumbnail slides
    $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');

    //set active class to first thumbnail slides
    $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');

    // On before slide change match active thumbnail to current slide
    $('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var mySlideNumber = nextSlide;
        $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
        $('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
    });

    //UPDATED 

    $('.slider').on('afterChange', function (event, slick, currentSlide) {
        $('.content').hide();
        $('.content[data-id=' + (currentSlide + 1) + ']').show();
    });

    $('.gallery_img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    function allMenu() {
        $.getJSON('/menuHome/getData', function (data) {
            let menus = data;
            $.each(menus, function (i, data) {
                $('.card-menu').append('<div class="col-sm-4 col-lg-4" style="margin-bottom:50px"><div class="single_blog_item"><div class="single_blog_img"><img src="img/food_menu/' + data.gambar + '" alt=""></div><div class = "single_blog_text"><h3>' + data.nama_menu + '</h3><p style="font-weight: bolder"> Category: <span style="color:#1cc88a">' + data.nama_kategori + '</span></p><p style="font-weight: bolder">Stand: <span style="color:#1cc88a">' + data.nama_penjual + '</span></p><h4 class="font-weight-bold" style="color:#1cc88a;"> Rp. ' + data.harga + '</h4><a href="#" class="btn_3"> Order <i class = "fas fa fa-shopping-bag"> </i></a></div></div></div>');
            })
        });
    }

    allMenu();

    $('.link-category').on('click', function () {
        let kategori = $(this).html();
        kategori = kategori.split(' <')[0];

        if (kategori == 'All Menu') {
            $('.card-menu').html("");
            allMenu();
            return;
        }
        $.getJSON('/menuHome/getData', function (data) {
            let menus = data;
            let content = '';
            $.each(menus, function (i, data) {
                if (data.nama_kategori == kategori) {
                    content += '<div class="col-sm-4 col-lg-4"><div class="single_blog_item"><div class="single_blog_img"><img src="img/food_menu/' + data.gambar + '" alt=""></div><div class = "single_blog_text"><h3>' + data.nama_menu + '</h3><p> Category: ' + data.nama_kategori + '</p><p> Rp. ' + data.harga + '</p><p><p>' + data.id + '</p></p><a href="#" class="btn_3"> Order <i class = "fas fa fa-shopping-bag"> </i></a></div></div></div>';
                }
            })

            $('.card-menu').html(content);
        })
    });

}(jQuery));
