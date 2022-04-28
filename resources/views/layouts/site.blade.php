@php
$route = Request::route()->getName();
$rota = explode('.', $route);

@endphp
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  
  {!! SEO::generate() !!}
  {!! JsonLd::generate() !!}
  {!! ReCaptcha::htmlScriptTagJsApi() !!}
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'Laravel') }}</title>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  
  
  <script src="{{ asset('Front/js/jquery.min.js') }}"></script>
  <script src="{{ asset('Front/js/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('Front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('Front/js/createjs.min.js') }}"></script>
  <script src="{{ asset('Front/js/handanimation.js') }}"></script>
  <script src="{{ asset('Front/js/animation-start.js') }}"></script>
  <script src="{{ asset('Front/js/main.js') }}"></script>
  
  <!-- Master CSS -->
  <link href="{{ asset('Front/css/master.css') }}" rel="stylesheet">
  
  <!-- jQuery-->
  <script src="{{ asset('Front/js/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ asset('Front/js/jquery-migrate-1.2.1.min.js') }}"></script>
  <script src="{{ asset('Front/js/jquery-ui.min.js') }}"></script>
  
  <!-- Bootstrap Core JavaScript -->
  <script src="{{ asset('Front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('Front/js/modernizr.js') }}"></script>
  
  <!-- Switcher Only -->
  
  <link rel="stylesheet" id="switcher-css" type="text/css" href="{{ asset('Front/plugins/switcher/css/switcher.css') }}" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="{{ asset('Front/plugins/switcher/css/pink.css') }}" title="pink" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="{{ asset('Front/plugins/switcher/css/purple.css') }}" title="purple" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="{{ asset('Front/plugins/switcher/css/blue.css') }}" title="blue" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="{{ asset('Front/plugins/switcher/css/green.css') }}" title="green" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="{{ asset('Front/plugins/switcher/css/red.css') }}" title="red" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="{{ asset('Front/plugins/switcher/css/yellow.css') }}" title="yellow" media="all" />
  
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css/geral.css') }}" title="Geral" media="all" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
  <!-- Switcher Only -->
</head>
<body>
  
  {{-- @include('layouts.site.header')
  @yield('content')
  @include('layouts.site.footer') --}}
  
  
  <body class="animated-all">

    {{-- @include('layouts.site.header') --}}
    
    @include('layouts.site.menu_superior')
    <div class="header header-home">
      
      @include('layouts.site.banner')
      
      <!-- SECTION -->
      @include('layouts.site.sobre')
      
      
      <!-- SECTION -->
      
      @include('layouts.site.parceiros')
      
      <!-- SECTION --> 
      
      <!-- SECTION -->
      
      @include('layouts.site.esportes')
      
      <!-- SECTION -->
      
      @include('layouts.site.redes_sociais')
      
      <!-- SECTION -->
      
      {{-- @include('layouts.site.galeria') --}}
      
      <!-- SECTION -->
      
      @include('layouts.site.eventos')
      
      <!-- SECTION --> 
      
      <!-- SECTION -->
      
      {{-- @include('layouts.site.depoimentos') --}}
      
      <!-- SECTION -->
      
      @include('layouts.site.produtos')
      
      <!-- SECTION -->
      
      
      
      <!-- SECTION -->
      
      @include('layouts.site.contato')
      
      
      <!-- SECTION -->
      @include('layouts.site.divisoria')
      
      @include('layouts.site.footer')
    </body>
  </body>
  </html>