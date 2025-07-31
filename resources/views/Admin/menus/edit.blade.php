@extends('layouts.painel')
@section('content')

<div class="box">
    <div class="box-header">
        <h3>Editar Menu</h3>
    </div>
</div>

<form action="{{ route('menus.update', $menu->id) }}" method="POST" id="formulario" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="box">
        <div class="box-body">
            <div class="form-group">
                <div class="form-row">
                    <div class="col-sm-6">
                        <label for="nome">Nome</label><br>
                        <input disabled class='form-control' type="text" id="nome" name="nome" value="{{ $menu->nome }}">
                        @if ($errors->has('nome'))
                        @foreach ($errors->get('nome') as $e)
                        <span class="error">{{ $e }}</span>
                        @endforeach
                        @endif
                    </div>
                    
                    <div class="col-sm-6">
                        <label for="alias">Alias</label><br>
                        <input class='form-control' type="text" id="alias" name="alias" value="{{ $menu->alias }}">
                        @if ($errors->has('alias'))
                        @foreach ($errors->get('alias') as $e)
                        <span class="error">{{ $e }}</span>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="box">
        <div class="box-footer">
            <input class="btn btn-primary btn-cadastro" type="submit" value="Atualizar">
        </div>
    </div>
</form>
@endsection
