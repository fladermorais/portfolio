@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h3>Cadastrar Recurso</h3>
    </div>
</div>
<div class="box">
    <form action="{{ route('recursos.store') }}" method="POST" id="formulario" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
            @include('Admin.recursos._form')
        </div>
        
        <div class="box-footer">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Cadastrar">    
        </div>
    </form>
</div>



@endsection