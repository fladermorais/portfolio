@extends('layouts.site')
@section('content')

<section>
  <div class="container">
    <h1 class="title">{{ $produto->titulo }}</h1>
    <div class="box-portifolio">
      
      <div class="produto">
        @if(isset($produto->imagem) && $produto->imagem != "")
        <div class="produto-img">
          <img src="{{ asset('storage/produtos/'. $produto->imagem) }}" alt="{{ $produto->nome }}">
        </div>
        @endif
        <div class="produto-descricao">
          {!! $produto->descricao !!}
        </div>  
      </div> 
      
    </div>    
  </div>
</section>

@if(isset($produto->recursos) && count($produto->recursos) > 0)
<section class="container">
  <div class="row box-container">
    <h2>Recursos Básicos?</h2>
    <div class="col-md-12 resources">
      @foreach($produto->recursos as $recurso)
      <div class="info col-md-3">
        <span><i class="{{ $recurso->icone }}"></i></span>
        <h4>{{ $recurso->titulo }}</h4>
        {!! $recurso->descricao !!}
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

<div class="container">
  <div class=" col-md-12">
    <div class="contratar">
      <a class="btn btn-primary" target="_blank" href="{{ $produto->link }}">Quero Contratar</a>
    </div>
  </div>
</div>

<article class="container home">
  <h3>Produtos Relacionados</h3>
  <p class="sub-info">Conheça alguns produtos que semelhantes ao que está sendo visualizado</p>
  <div class="row flex-row numeracao">
    
    @foreach($referencias as $value)
    <div class="col-md-4 home-box imagem">
      @if(isset($value->imagem))
      <img class="img-fluid" src="{{ asset('storage/produtos/' . $value->imagem) }}" alt=" {{ $value->nome }}" title="{{ $value->nome }}">
      @else
      <img class="img-fluid" src="{{ asset('storage/logo/logo.png') }}" alt=" {{ $value->nome }}" title="{{ $value->nome }}">
      @endif
      <h2>{{ $value->titulo }}</h2>
      <div>
        {!! $value->previa !!}
      </div>
      <span><a class="btn btn-primary" href="{{ route('produto', $value->alias) }}" role="button">Mais Detalhes &raquo;</a></span>
    </div>
    @endforeach
  </div>
</article>

@endsection