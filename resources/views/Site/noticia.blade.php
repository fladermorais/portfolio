@extends('layouts.site')
@section('content')

<section class="pt-page" id="noticias">
  <div class="section-inner custom-page-content">
    <div class="section-title-block second-style">
      <h2 class="section-title">Notícia</h2>
    </div>
  </div>
</section>

<section class="pt-page" id="noticias">
  <div class="section-inner custom-page-content">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">
          <section class="main-content" role="main">
            <article class="post media-image   format-image animated" data-animation="bounceInUp">

              <h3 class="entry-title text-center "> <a href="#" data-hover="{{ $noticia->nome }}">{{ $noticia->nome }}</a> </h3>
              <div class="box-date-post text-right"> <span class="date-1">{{ $noticia->users->name ?? "-" }} </span> | <span class="date-2"> {{ date('d-m-Y', strtotime($noticia->created_at)) }}</span> </div>
              <br>
              <hr>
              <br>

              <div class="entry-media">
                <div class="entry-thumbnail">
                  <div class="sticky-post"><i class="icon-pin"></i></div>
                  <div class="post-type-media type-image"><i class="icon-picture"></i></div>
                  {{-- <div class="img-overlay "> <a href="{{ asset('storage/noticias/' . $noticia->imagem ) }}" class="link-view-more magnific"></a> </div> --}}
                  <img src="{{ asset('storage/noticias/' . $noticia->imagem ) }}" width="830" height="400" alt=""/>
                  <br>
                </div>

              </div>
              <br>
              <br>
              <br>
              <div class="entry-main">
                <div class="entry-content">
                  {!! $noticia->descricao !!}
                </div>
              </div>

            </article>
          </section>
        </div>

        <div class="col-md-1"></div>

        <div class="col-xs-12 col-sm-12 col-md-3">
          <aside class="sidebar">
            <div class="widget widget-search ">
              <h3 class="widget-title"><span>Pesquisar</span></h3>
              <form role="search" method="post" id="searchform" class="searchform d-inline-flex" action="{{ route('noticiasSearch') }}">
                @csrf
                <input class="col-md-10" type="text" placeholder="Search" value="" name="s"  >
                <button class="col-md-2" type="submit"> <i class="fa fa-search"></i> </button>
              </form>
            </div>

            <br>

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
  </div>
</section>

@endsection