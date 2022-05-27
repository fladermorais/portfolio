@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h3>Cadastrar Evento</h3>
    </div>
</div>
<form action="{{route('eventos.store')}}" method="POST" id="formulario" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="box">
        <div class="box-body"> 
            @include('Admin.eventos._form')
        </div>
    </div>
    
    <div class="box">
        <div class="box-footer">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Cadastrar">    
        </div>
    </div>
</form>
</div>
@endsection