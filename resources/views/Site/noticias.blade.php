@extends('layouts.site')
@section('content')

<section class="pt-page">
    <div class="section-inner custom-page-content">
        <div class="section-title-block second-style">
            <h2 class="section-title">Notícias</h2>
        </div>
    </div>
</section>

<section class="pt-page" id="noticias">
    <div class="section-inner custom-page-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="blog-masonry one-columns clearfix">
                                    
                                    <!-- Blog Posts-->
                                    @foreach($noticias as $noticia)
                                    <div class="item post-1">
                                        <div class="blog-card">
                                            <div class="media-block">
                                                <a class="noticias-img" href="{{ route('noticia', $noticia->alias) }}">
                                                    <img src="{{ asset('storage/noticias/' . $noticia->imagem) }}" class="size-blog-masonry-image-two-c" alt="{{ $noticia->nome }}" title="{{ $noticia->nome }}" />
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <div class="post-date">{{ date('d/m/Y', strtotime($noticia->created_at)) }}</div>
                                                <a href="{{ route('noticia', $noticia->alias) }}">
                                                    <h4 class="blog-item-title">{{ $noticia->nome }}</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
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

<section class="pt-page" id="noticias">
    <div class="section-inner custom-page-content">
        <div class="container">
            <div class="row pagination">
                {{ $noticias->links() }}
            </div>
        </div>
    </div>
</section>

@endsection