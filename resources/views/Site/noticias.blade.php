@extends('layouts.site')
@section('content')

<section>
  <div class="container">
    <h1 class="title">{{(isset($categoria->nome) ? $categoria->nome : "Notícias") }}</h1>
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
        
        @foreach($noticias as $noticia)
        <div class="noticias-item">
          <div class="noticias-img">
            <img src="{{ asset('storage/noticias/'. $noticia->imagem) }}" alt="{{ $noticia->nome }}">
          </div>
          
          <div class="noticias-detalhes">
            <h5 class="noticias-title">{{ $noticia->nome}}</h5>
            
            <div class="noticias-descricao">
              {!! Str::limit($noticia->descricao, 100, '...') !!}
              
              
              
            </div>
            
            <div class="noticias-link">
              <a class="btn btn" href="{{ route('noticia', $noticia->alias) }}">Leia Mais...</a>
            </div>
            
          </div> <!-- Fim do port-detalhes -->
          
        </div> <!-- Fim do port-item -->
        
        @endforeach
        
        {{ $noticias->links() }}
      </div> 
      
    </div>
  </div>
</section>

@endsection