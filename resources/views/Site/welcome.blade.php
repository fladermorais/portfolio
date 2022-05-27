@extends('layouts.site')
@section('content')

@include('layouts.site.banner')


@include('layouts.site.parceiros')


@include('layouts.site.esportes')

@if(config('app.empresas.ativaProdutos') == "sim")
@include('layouts.site.produtos')
@endif

@if(isset($eventos) && count($eventos) >0)
@include('layouts.site.eventos')
@endif

@if(config('app.empresas.ativaBlog') == "sim")
@include('layouts.site.noticias')
@else
@include('layouts.site.divisoria')
@endif

@include('layouts.site.contato')


@include('layouts.site.footer')

@endsection

