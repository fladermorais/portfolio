@extends('layouts.sitePages')
@section('content')

<main class="section layout-col-2" id="main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar-resize"    >
                <aside class="sidebar ">
                    <div class="widget widget-category">
                        <h3 class="widget-title"><span>categories</span></h3>
                        <ul class="category-list unstyled clearfix">
                            <li><a href="{{ route('produtos', 'alls') }}">Todas</a></li>
                            @foreach($categorias as $categoria)
                            <li><a href="{{ route('produtos', $categoria->alias) }}">{{ $categoria->nome }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-9  col-resize ">
                <section class="main-content" role="main">
                    
                    <div class="catalog-grid">
                        <ul class="product-grid">
                            @foreach($produtos as $produto)
                            <li>
                                <div class="product-container">
                                    <div class="product-image"> 
                                        {{-- <span class="label-sale">sale</span> --}}
                                        <div class="btn-action-item"> 
                                            <a href="{{ asset('storage/produtos/' . $produto->imagem) }}" class="magnific" title="{{ $produto->titulo }}"> <i class="icomoon-eye-open"></i></a> 
                                        </div>
                                        <a href="{{ route('produto', $produto->alias) }}"> <img src="{{ asset('storage/produtos/' . $produto->imagem) }}" width="600" height="700" alt="{{ $produto->titulo }}"/></a> 
                                        <a href="{{ route('produto', $produto->alias) }}"> <img  class="b-lazy slider_img"  src="{{ asset('storage/produtos/' . $produto->imagem) }}" width="600" height="700" alt="{{ $produto->titulo }}"/></a> 
                                    </div>
                                    <div class="product-bottom">
                                        <h3 class="product-name x-hover"><span class="x-hover-text">{{ $produto->titulo }}</span></h3>
                                        <div class="price-box"> 
                                            <span class="price-regular">R$ {{ str_replace('.', ',', $produto->preco) }}</span> 
                                            <span class="price-old">{{ (isset($produto->old) ? $produto->old : "") }}</span> 
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <nav class="pagination">
                        <ul>
                            <li>
                                {{ $produtos->links() }}
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection