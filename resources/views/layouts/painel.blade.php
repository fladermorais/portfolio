@php
$route = Request::route()->getName();
$rota = explode('.', $route);

@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Buda Madeiras') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('AdminLte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('AdminLte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLte/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('AdminLte/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('AdminLte/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('AdminLte/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('AdminLte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('AdminLte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('AdminLte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        
        
        <!-- Styles -->
        <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
        
        
        <!-- include summernote css/js -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        
        
    </head>
    @if($rota[0] == 'login' || $rota[0] == "password")
    <body class="hold-transition login-page">
        @else
        <body class="hold-transition skin-blue sidebar-mini">
            @endif
            
            @if($rota[0] == 'login' || $rota[0] == "password")
            @yield('content')
            @else
            <div id="app" class="wrapper">
                
                @include('layouts/painel/header')
                @include('layouts/painel/sidebar')
                <main class="py-4">
                    <div class="content-wrapper">
                        @include('flash::message')
                        @yield('content')
                    </div>
                </main>
                @include('layouts/painel/footer')
            </div>
            @endif
            
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
            
            <!-- jQuery 3 -->
            <script src="{{ asset('AdminLte/bower_components/jquery/dist/jquery.min.js')}}"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="{{ asset('AdminLte/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button);
            </script>
            <!-- Bootstrap 3.3.7 -->
            <script src="{{ asset('AdminLte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
            <!-- Morris.js charts -->
            <script src="{{ asset('AdminLte/bower_components/raphael/raphael.min.js')}}"></script>
            <script src="{{ asset('AdminLte/bower_components/morris.js/morris.min.js')}}"></script>
            <!-- Sparkline -->
            <script src="{{ asset('AdminLte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
            <!-- jvectormap -->
            <script src="{{ asset('AdminLte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
            <script src="{{ asset('AdminLte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
            <!-- jQuery Knob Chart -->
            <script src="{{ asset('AdminLte/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
            <!-- daterangepicker -->
            <script src="{{ asset('AdminLte/bower_components/moment/min/moment.min.js')}}"></script>
            <script src="{{ asset('AdminLte/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
            <!-- datepicker -->
            <script src="{{ asset('AdminLte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src="{{ asset('AdminLte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
            <!-- Slimscroll -->
            <script src="{{ asset('AdminLte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
            <!-- FastClick -->
            <script src="{{ asset('AdminLte/bower_components/fastclick/lib/fastclick.js')}}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('AdminLte/dist/js/adminlte.min.js')}}"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="{{ asset('AdminLte/dist/js/pages/dashboard.js')}}"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="{{ asset('AdminLte/dist/js/demo.js')}}"></script>
        </body>
        </html>
        