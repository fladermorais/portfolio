@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h3>Atualizar Categoria</h3>
    </div>
</div>
<div class="box">
    <form action="{{route('categorias.update', $categoria->id)}}" method="post" id="formulario" enctype="multipart/form-data">
        @method(' PUT')
        {{csrf_field()}}
        <div class="box-body">
            @include('Admin.categorias._form')
        </div>
        <div class="box-footer">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Atualizar">    
        </div>
    </form>
</div>
@endsection