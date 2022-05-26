@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h3>Editar Cliente</h3>
    </div>
</div>

<form action="{{route('clientes.update', $info->id)}}" method="POST" id="formulario" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="box">
        <div class="box-body">
            @include('Admin.clientes._form')
        </div>
    </div>
    
    <div class="box">
        <div class="box-footer">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Atualizar">    
        </div>
    </div>
</form>
@endsection