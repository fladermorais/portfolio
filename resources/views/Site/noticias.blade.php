@extends('layouts.sitePages')
@section('content')

<div class="page-header">
    <div class="container">
        <h3 class="page-title float-left">Notícias</h3>
    </div>
    @if(isset($data) && count($data) > 0)
    <div class="container bg-warning" style="padding: 20px">
        
        <span>Texto pesquisado: <b>{{ $data['s'] }}</b></span>
        
    </div>
    @endif
</div>

<main class="section" id="main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9">
                <section class="main-content" role="main">
                    @foreach($noticias as $noticia)
                    <article class="post media-image format-image animated" data-animation="bounceInUp">
                        <div class="entry-media">
                            <div class="box-date-post"> <span class="date-1">{{ date('d', strtotime($noticia->created_at)) }} </span> <span class="date-2"> {{ date('F', strtotime($noticia->created_at)) }}</span> </div>
                            <div class="entry-thumbnail">
                                {{-- <div class="sticky-post"><i class="icon-pin"></i></div> --}}
                                <div class="post-type-media type-image"><i class="icon-picture"></i></div>
                                <div class="img-overlay "> <a   class="link-view-more"></a> </div>
                                <a href="{{ asset('storage/noticias/' . $noticia->imagem) }}"><img src="{{ asset('storage/noticias/' . $noticia->imagem) }}"  alt="img"/></a> 
                            </div>
                        </div>
                        <div class="entry-main">
                            <h3 class="entry-title"> 
                                <a href="{{ route('noticia', $noticia->alias) }}" data-hover="{{ $noticia->nome }}">{{ $noticia->nome }}</a> 
                            </h3>
                            <div class="entry-content">
                                {!! Str::limit($noticia->descricao, 400) !!}
                                <div class="entry-footer"> 
                                    <a href="{{ route('noticia', $noticia->alias) }}" class="view-post-btn">Leia Mais</a> 
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    
                    <nav class="pagination">
                        <ul>
                            <li>
                                {{ $noticias->links() }}
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-3">
                <aside class="sidebar ">
                    <div class="widget widget-search ">
                        <h3 class="widget-title"><span>Pesquisar</span></h3>
                        <form role="search" method="post" id="searchform" class="searchform" action="{{ route('noticiasSearch') }}">
                            @csrf
                            <input type="text" placeholder="Search" value="" name="s"  >
                            <button type="submit"> <i class="fa fa-search"></i> </button>
                        </form>
                    </div>
                    
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

@endsection