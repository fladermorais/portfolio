@extends('layouts.site')
@section('content')

@include('layouts.site.banner')


@include('layouts.site.parceiros')


@include('layouts.site.esportes')


@include('layouts.site.produtos')

@include('layouts.site.eventos')

@if(config('app.empresas.ativaBlog') == "sim")
@include('layouts.site.noticias')
@else
@include('layouts.site.divisoria')
@endif

@include('layouts.site.contato')


@include('layouts.site.footer')

@endsection
