@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h3>Cadastrar Categoria</h3>
    </div>
</div>

<div class="box">
    <form action="{{route('categorias.store')}}" method="post" id="formulario" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="box-body">
            @include('Admin.categorias._form')
        </div>
        <div class="box-footer">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Cadastrar">    
        </div>
    </form>
</div>
@endsection