@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h1>Atualizar Rede Social.</h1>
    </div>
    <form action="{{route('redes.update', $rede->id)}}" method="post" id="formulario" enctype="multipart/form-data">
        @method(' PUT')
        {{csrf_field()}}
        <div class="box-body">
            @include('Admin.redes._form')      
        </div>  
        
        <div class="box-body">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Atualizar">    
        </div>
    </form>
</div>
@endsection