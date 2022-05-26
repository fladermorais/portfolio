@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Imagens do Produto {{ $produto->titulo }}</h3>
    </div>
</div>

<div class="box">
    <div class="box-body">
        <form action="{{ route('medias.UpdateByProduto', $produto->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            <input type="file" class="form-control" name="arquivos[]" id="arquivos" multiple>
            <button type="submit">Enviar</button>
        </form>
    </div>
</div>
<div class="box">
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <div class=" flex-row flex-row-strech">
                    @foreach($imagens as $imagem)
                    <form class="galeria-form" action="{{ route('medias.DeleteByProduto', $imagem->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <img class="galeria-img" src="{{ asset('/storage/galeria/' . $imagem->name) }}" alt="">
                        <button onclick="return(confirm('Deseja realmente excluir esta imagem?'))" type="submit" class="galeria-btn">X</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection