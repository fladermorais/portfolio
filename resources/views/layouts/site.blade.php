@php
$route = Request::route()->getName();
$rota = explode('.', $route);

@endphp
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  
  <!-- Google Tag Manager -->
  {{-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-T97P2R6');</script> --}}
  <!-- End Google Tag Manager -->
  
  {!! SEO::generate() !!}
  {!! JsonLd::generate() !!}
  {!! ReCaptcha::htmlScriptTagJsApi() !!}
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'Laravel') }}</title>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  {{-- <script src="https://kit.fontawesome.com/ec7ed4a0a7.js"></script> --}}
  
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }} ">
  
  {{-- <link href="{{ asset('css/estiloSite.css') }}" rel="stylesheet"> --}}
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-1TY5D3LBF2"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-19GVT7297D"></script> --}}
  {{-- <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-1TY5D3LBF2');
    gtag('config', 'G-19GVT7297D');
  </script> --}}
  
</head>
<body>
  
  @include('layouts.site.header')
  
  @yield('content')
  
  {{-- Footer --}}
  @include('layouts.site.footer')
  
  
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/createjs.min.js') }}"></script>
  <script src="{{ asset('js/handanimation.js') }}"></script>
  <script src="{{ asset('js/animation-start.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  
</body>
</html>