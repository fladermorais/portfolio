@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h3>Editar Banner</h3>
    </div>
</div>

<form action="{{route('banners.update', $info->id)}}" method="POST" id="formulario" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="box">
        <div class="box-body">
            @include('Admin.banners._form')
        </div>
    </div>
    
    <div class="box">
        <div class="box-footer">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Atualizar">    
        </div>
    </div>
</form>
@endsection