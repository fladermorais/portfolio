@extends('layouts.site')
@section('content')

@include('layouts.site.banner')


@include('layouts.site.parceiros')


@include('layouts.site.esportes')

@if(config('app.empresas.ativaProdutos') == "sim")
@include('layouts.site.produtos')
@endif

<<<<<<< HEAD
@include('layouts.site.eventos')
=======
@if(isset($eventos) && count($eventos) >0)
@include('layouts.site.eventos')
@endif
>>>>>>> 1b0f9f00a61affa4abfcf9446671392e6ca1de61

@if(config('app.empresas.ativaBlog') == "sim")
@include('layouts.site.noticias')
@else
@include('layouts.site.divisoria')
@endif

@include('layouts.site.contato')


@include('layouts.site.footer')

@endsection
