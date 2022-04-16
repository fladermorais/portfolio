@extends('layouts.site')
@section('content')

<section>
  <div class="container">
    <h1 class="title">{{ $noticia->nome }}</h1>
  </div>
</section>

<section>
  <div class="container">
    <div class="box-noticias">
      <div class="noticias-sidebar">
        <h4>Categorias</h4>
        <ul>
          <li><a href="{{ route('noticias') }}">Todas as Notícias</a></li>
          @foreach($categorias as $cat)
          <li><a href="{{ route('categorias', $cat->alias) }}">{{ $cat->nome }}</a></li>
          @endforeach
        </ul>
        
      </div>
      
      <div class="noticias-box">
        <div class="noticia-img">
          <img src="{{ asset('storage/noticias/'. $noticia->imagem) }}" alt="{{ $noticia->nome }}">
        </div>
        <div class="noticia-descricao">
          {!! $noticia->descricao !!}
        </div>
        
        <div class="noticia-social">
          <div class="fb-share-button" data-href="{{ Request::url() }}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartilhar</a></div>
        </div>
        
      </div> 
      
    </div>
    
    
  </div>
</section>

@endsection