@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h1>Atualizar Dicas.</h1>
    </div>
    <form action="{{route('dicas.update', $info->id)}}" method="post" id="formulario" enctype="multipart/form-data">
        @method(' PUT')
        {{csrf_field()}}
        <div class="box-body">
            @include('Admin.dicas._form')      
        </div>  
        
        <div class="box-body">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Atualizar">    
        </div>
    </form>
</div>
@endsection