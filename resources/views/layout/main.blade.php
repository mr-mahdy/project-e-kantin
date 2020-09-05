<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ url('css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ url('css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ url('css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('css/gijgo.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('css/all.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('dist/bootstrap-clockpicker.min.css')}}">
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                            <div class="navbar-brand-icon">
                                <i class="fas fa-store-alt"></i>
                            </div>
                            <div class="navbar-brand-text mx-2">eKantin</div>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/menuHome') }}">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ url('/login') }}">Admin</a>
                                </li>
                            </ul>
                        </div>

                        <div class="menu_btn">
                            <a href="{{ url('/#reservation') }}" class="btn_1 d-none d-sm-block">Reservation&nbsp;</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    @yield('banner')
    <!-- breadcrumb start-->

    <!-- container part start-->
    @yield('container')
    <!--::container_part end::-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="copyright_part_text">
            <div class="row">
                <div class="col-lg-8">
                    <p class="footer-text m-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ url('js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ url('js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ url('js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ url('js/swiper.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ url('js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ url('js/owl.carousel.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ url('js/slick.min.js') }}"></script>
    <script src="{{ url('js/gijgo.min.js') }}"></script>
    <script src="{{ url('js/jquery.nice-select.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ url('js/custom.js') }}"></script>

    <script type="text/javascript" src="{{ url('dist/bootstrap-clockpicker.min.js')}}"></script>
    <script type="text/javascript">
        $('.clockpicker').clockpicker()
            .find('input').change(function() {
                console.log(this.value);
            });
        var input = $('#single-input').clockpicker({
            placement: 'bottom',
            align: 'center',
            autoclose: true,
            'default': 'now'
        });

        $('.clockpicker-with-callbacks').clockpicker({
                donetext: 'Done',
                init: function() {
                    console.log("colorpicker initiated");
                },
                beforeShow: function() {
                    console.log("before show");
                },
                afterShow: function() {
                    console.log("after show");
                },
                beforeHide: function() {
                    console.log("before hide");
                },
                afterHide: function() {
                    console.log("after hide");
                },
                beforeHourSelect: function() {
                    console.log("before hour selected");
                },
                afterHourSelect: function() {
                    console.log("after hour selected");
                },
                beforeDone: function() {
                    console.log("before done");
                },
                afterDone: function() {
                    console.log("after done");
                }
            })
            .find('input').change(function() {
                console.log(this.value);
            });

        // Manually toggle to the minutes view
        $('#check-minutes').click(function(e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show')
                .clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', true);
        }
    </script>

    <!-- Page level custom scripts -->
    <script src="{{ url('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ url('js/datatables-demo.js')}}"></script>
</body>

</html>