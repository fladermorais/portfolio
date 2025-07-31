@extends('layouts.site')
@section('content')

@include('Site._sobre')

{{-- @include('Site._portfolio') --}}

@if(config('app.empresas.ativaBlog') == "sim")
@include('Site._noticias')
@endif

@include('Site._galeria')

@include('Site._contato')


@endsection

