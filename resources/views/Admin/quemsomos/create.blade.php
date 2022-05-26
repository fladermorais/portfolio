@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h3>Cadastrar Quem Somos</h3>
    </div>
</div>
<form action="{{route('quemsomos.store')}}" method="POST" id="formulario" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="box">
        <div class="box-body"> 
            @include('Admin.quemsomos._form')
        </div>
    </div>
    
    <div class="box">
        <div class="box-body">
            <h3>Informações de SEO</h3>
            @include('Admin._formSeo')
        </div>
    </div>
    
    <div class="box">
        <div class="box-footer">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Cadastrar">    
        </div>
    </div>
</form>
</div>
@endsection