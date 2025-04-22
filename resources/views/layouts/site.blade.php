@php
$route = Request::route()->getName();
$rota = explode('.', $route);

@endphp
<!DOCTYPE html>

{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  
  {!! SEO::generate() !!}
  {!! JsonLd::generate() !!}
  {{-- {!! ReCaptcha::htmlScriptTagJsApi() !!} --}}
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'Laravel') }}</title>
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="">
  <meta name="author" content="">
  
  
  <link rel="stylesheet" href="{{ asset('Site/css/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('Site/css/animate.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('Site/css/animations.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('Site/css/owl.carousel.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('Site/css/magnific-popup.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('Site/css/main.css') }}" type="text/css">
  
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
  <script src="{{ asset('Site/js/modernizr.custom.js') }}"></script>
  
</head>

<body>
  
  <!-- Loading animation -->
  <div class="preloader">
    <div class="preloader-animation">
      <div class="preloader-spinner">
      </div>
    </div>
  </div>
  
  <div id="page" class="page one-page-style">
    @include('layouts.site.header')
    
    <!-- Mobile Header -->
    <div class="mobile-header mobile-visible">
      <div class="mobile-logo-container">
        <div class="mobile-header-image">
          <a href="#">
            <img src="./include/img/photo.jpg" alt="image">
          </a>
        </div>
        <div class="mobile-site-title"><a href="#">Ana Beatriz Fonseca</a></div>
      </div>
      
      <a class="menu-toggle mobile-visible">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    
    <div id="main" class="site-main">
      <div class="pt-wrapper">
        <div class="subpages">
          @include('flash::message')
          @yield('content')
        </div>
      </div>
    </div>
  </div>
  @include('layouts.site.footer')
  
</body>
</html>