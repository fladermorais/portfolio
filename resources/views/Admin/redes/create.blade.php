@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h3>Cadastrar Rede Social</h3>
    </div>
</div>
<div class="box">
    <form action="{{route('redes.store')}}" method="POST" id="formulario" enctype="multipart/form-data">
        @csrf
        
        <div class="box-body">
            @include('Admin.redes._form')
        </div>
        
        <div class="box-footer">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Cadastrar">    
        </div>
    </form>
</div>

@include('Admin.redes._icones')

@endsection