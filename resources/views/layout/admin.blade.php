<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') | Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('dist/bootstrap-clockpicker.min.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/github.min.css"> -->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-2">eKantin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Daftar Data
            </div>

            <!-- Nav Item - Kategori Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/category') }}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Kategori Menu</span></a>
            </li>

            <!-- Nav Item - Meja -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/table') }}">
                    <i class="fas fa-fw fa-chair"></i>
                    <span>Meja</span></a>
            </li>

            <!-- Nav Item - Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/menu') }}">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Menu</span></a>
            </li>

            <!-- Nav Item - Stand -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/stand') }}">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Stand</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Transaksi
            </div>

            <!-- Nav Item - Reservasi -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/reservation') }}">
                    <i class="fas fa-fw fa-clipboard-check"></i>
                    <span>Reservasi</span></a>
            </li>

            <!-- Nav Item - Pemesanan -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/order') }}">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Pemesanan</span></a>
            </li>

            <!-- Nav Item - Pembayaran -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/payment') }}">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Pembayaran</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Report
            </div>

            <!-- Nav Item - Pelaporan -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-poll"></i>
                    <span>Pelaporan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <div class="d-none d-sm-inline-block" style="color: #1cc88a;font-weight:800; font-size:20px;margin-left:50px;">
                        Administrator | @yield('title')
                    </div>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-user fa-lg" style="color: #1cc88a;"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2" style="color: #1cc88a;"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2" style="color: #1cc88a;"></i>
                                    Logout
                                </a>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg mb-4">
                            @yield('content')
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda akan melakukan logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <script>
        $(document).ready(function() {

        });
    </script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ url('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ url('js/datatables-demo.js')}}"></script>

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

</body>

</html>