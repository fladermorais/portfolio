@extends('layouts.sitePages')
@section('content')
@include('layouts.site.header')

@include('layouts.site.banner2')

@include('layouts.site.parceiros')

@include('layouts.site.esportes')

@if(isset($eventos) && count($eventos) >0)
@include('layouts.site.eventos')
@endif

@if(config('app.empresas.ativaBlog') == "sim")
@include('layouts.site.noticias')
@else
@include('layouts.site.divisoria')
@endif

@include('layouts.site.contato')


{{-- @include('layouts.site.footer') --}}

@endsection

