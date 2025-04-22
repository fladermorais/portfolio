@extends('layouts.site')
@section('content')

@if(config('app.empresas.ativaBlog') == "sim")
{{-- @include('layouts.site.noticias') --}}
@endif

@include('Site._sobre')

{{-- @include('Site._portfolio') --}}

@include('Site._noticias')

@include('Site._contato')


@endsection

