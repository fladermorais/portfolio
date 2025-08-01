@php
$route = Request::route()->getName();
$rota = explode('.', $route);

@endphp
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    
    {!! SEO::generate() !!}
    {!! JsonLd::generate() !!}
    {{-- {!! ReCaptcha::htmlScriptTagJsApi() !!} --}}
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
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
<body class="construcao">
    <body class="animated-all">
        
        <div class="row">
            <div class="container-fluid">
                <div class="construcao-bloco">
                    
                    <h1>Site em construção</h1>
                    <div class="construcao-logo">
                        <img width="292" height="150" alt="logo" src="{{ asset('storage/logo/' . config('app.empresas.logo')) }}">
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
    </body>
</body>
</html>