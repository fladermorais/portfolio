@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h3>Cadastrar Usuário</h3>
    </div>
</div>

<div class="box">
    <form action="{{route('usuarios.store')}}" method="post" id="formulario">
        {{csrf_field()}}
        
        <div class="box-card">
            @include('Admin.user._form')
        </div>
        
        <div class="box-footer">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Cadastrar">    
        </div>
    </form>
</div>
@endsection