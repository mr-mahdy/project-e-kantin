<!-- <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet"> -->

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Tabel Data @yield('title')</h6>
    </div>
    @yield('subcontent')
</div>
@endsection

<!-- <script src="{{ url('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('js/datatables-demo.js')}}"></script> -->