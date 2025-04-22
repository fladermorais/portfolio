@extends('layouts.site')
@section('content')

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Notícia</h3>
    <ol class="breadcrumb float-right">
      <li><a href="{{ route('noticias', $noticia->categorias->alias) }}">{{ $noticia->categorias->nome }}</a></li>
      <li class="active">{{ $noticia->nome }}</li>
    </ol>
  </div>
</div>

<main class="section" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9">
        <section class="main-content" role="main">
          <article class="post media-image   format-image animated" data-animation="bounceInUp">
            <div class="entry-media">
              <div class="box-date-post"> <span class="date-1">16 </span> <span class="date-2"> JULY</span> </div>
              <div class="entry-thumbnail">
                <div class="sticky-post"><i class="icon-pin"></i></div>
                <div class="post-type-media type-image"><i class="icon-picture"></i></div>
                <div class="img-overlay "> <a  href="{{ asset('storage/noticias/' . $noticia->imagem ) }}" class="link-view-more magnific"></a> </div>
                <a   href="{{ asset('storage/noticias/' . $noticia->imagem ) }}"><img src="{{ asset('storage/noticias/' . $noticia->imagem ) }}" width="830" height="400" alt=""/></a> 
              </div>
            </div>
            <div class="entry-main">
              <h3 class="entry-title"> <a href="#" data-hover="ALIQUAM MOLLIS NEQUE UT ULLAMCORPER TEMPOR DOLOR TORTOR VARIUS">{{ $noticia->nome }}</a> </h3>
              <div class="entry-content">
                {!! $noticia->descricao !!}
              </div>
            </div>
            
            {{-- <div class="footer-panel">  
              <div class="social-box">
                <h4>Compartilhe</h4>  
                <ul class="social-links">
                  <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                  <li class=""><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                  <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                  <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                </ul>
              </div>
            </div> --}}
            
          </article>
        </section>
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-3">
        <aside class="sidebar">
          <div class="widget widget-search ">
            <h3 class="widget-title"><span>Pesquisar</span></h3>
            <form role="search" method="post" id="searchform" class="searchform" action="{{ route('noticiasSearch') }}">
              @csrf
              <input type="text" placeholder="Search" value="" name="s"  >
              <button type="submit"> <i class="fa fa-search"></i> </button>
            </form>
          </div>
          
          <!-- CATEGORY LIST WIDGET -->
          <div class="widget widget-category">
            <h3 class="widget-title"><span>Categorias</span></h3>
            <ul class="category-list unstyled clearfix">
              <li><a href="{{ route('noticias') }}">Todas as Notícias</a></li>
              @foreach($categorias as $categoria)
              <li><a href="{{ route('categorias', $categoria->alias) }}">{{ $categoria->nome }}</a></li>
              @endforeach
            </ul>
          </div>
          
        </aside>
      </div>
    </div>
  </div>
</main>

@include('layouts.site.parceiros')

@include('layouts.site.contato')

@endsection