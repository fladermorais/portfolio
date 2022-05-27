@extends('layouts.painel')

@section('content')

<div class="container home">
    
    <div class="row justify-content-center">
        <h1>Informações</h1>
        @if(isset($categorias))
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ $categorias }}</h3>
                    <p>Categorias</p>
                </div>
                <div class="icon">
                    <i class="fa fa-paste"></i>
                </div>
                <a href="{{ route('categorias.index') }}" class="small-box-footer"> Detalhes <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endif
        
        
        @if(isset($noticias))
        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ $noticias }}</h3>
                    <p>Notícias</p>
                </div>
                <div class="icon">
                    <i class="fa fa-newspaper"></i>
                </div>
                <a href="{{ route('noticias.index') }}" class="small-box-footer"> Detalhes <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection
