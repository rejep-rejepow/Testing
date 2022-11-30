<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', '----') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('icon.png')}}" />
    <link href="{{asset('asset/bootstrap/fontawesome5/css/all.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('asset/bootstrap/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/datatables.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{asset('asset/css/simple-sidebar.css') }}" rel="stylesheet"/>
    <link href="{{asset('asset/css/style.css') }}" rel="stylesheet"/>
    <link href="{{asset('asset/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('asset/bootstrap/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/flatpickr.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('asset/js/flatpickr.js')}}"></script>
    <script src="{{asset('asset/js/core.js')}}"></script>
    <script src="{{asset('asset/js/amcharts.js')}}"></script>
    <script src="{{asset('asset/js/animated.js')}}"></script>
    <script src="{{asset('asset/js/jquery-3.6.1.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('asset/css/preloader.css') }}"/>
    <link rel="stylesheet" href="{{asset('asset/css/datatables.mark.css')}}"/>

</head>
<body class="font-sans antialiased">

<div class="d-flex toggled" id="wrapper">

    @include('partitions.sidebar')
    <div id="page-content-wrapper">
        <!-- navbar -->
    @include('partitions.navbar')
    <!-- navbar -->
        <br>
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<script src="{{asset('asset/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/select2.min.js')}}"></script>
<script src="{{asset('asset/js/datatables.js')}}"></script>
<script src="{{asset('asset/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.mark.min.js')}}"></script>
<script src="{{asset('asset/js/datatables.mark.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.magnific-popup.js')}}"></script>

<script>
    $(window).on('load', function () {
        $('#before-load').find('section').fadeOut().end().delay(1).fadeOut('slow');
    });
</script>
</body>
</html>
