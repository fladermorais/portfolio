@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h3>Atualizar Usuário</h3>
    </div>
</div>
<div class="box">
    <form action="{{route('usuarios.update', $user->id)}}" method="post" id="formulario">
        {{csrf_field()}}
        
        <div class="box-body">
            @include('Admin.user._form')
        </div>
        
        <div class="box-footer">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Atualizar">    
        </div>
    </form>
</div>
@endsection