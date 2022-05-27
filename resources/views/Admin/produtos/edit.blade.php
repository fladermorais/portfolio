@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h3>Editar Produto</h3>
    </div>
</div>

<form action="{{route('produtos.update', $info->id)}}" method="POST" id="formulario" enctype="multipart/form-data">
    {{csrf_field()}}
    @method('PUT')
    <div class="box">
        <div class="box-body">
            @include('Admin.produtos._form')
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
            <input class="btn btn-primary btn-cadastro" type="submit" value="Atualizar">    
        </div>
    </div>
</form>
@endsection