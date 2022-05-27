@extends('layouts.sitePages')
@section('content')


<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Produto</h3>
    <ol class="breadcrumb float-right">
      <li><a href="{{ route('produtos', $produto->categorias->alias) }}">{{ $produto->categorias->nome }}</a></li>
      <li class="active">{{ $produto->titulo }}</li>
    </ol>
  </div>
</div>
<div class="product-paging">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <div class="pull-left"> <a href="{{ route('produtos', $produto->categorias->alias) }}" class="btn-arrow"> Voltar para Categoria</a> </div>
        {{-- <div class="pull-right"> <a href="#" class="btn btn-arrow-left"><span class="icomoon-arrow-left"></span></a><a class="btn btn-arrow-right" href="#"><span class="icomoon-arrow-right"></span></a> </div> --}}
      </div>
    </div>
  </div>
</div>
<main class="section layout-col-1" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12  ">
        <section class="main-content" role="main">
          <div class="row">
            {{-- Imagens --}}
            <div class="col-md-5">
              <div class="product-image-left animated" data-animation="bounceInUp">
                <div class="clearfix" id="image-block">
                  <div id="slider-product" class="flexslider">
                    <ul class="slides">
                      @if(count($produto->galerias) > 0)
                      @foreach($produto->galerias as $galeria)
                      <li> <a  href="{{ asset('storage/galeria/'. $galeria->name) }}"> <img src="{{ asset('storage/galeria/'. $galeria->name) }}" width="600" height="700" alt="img"/></a> </li>
                      @endforeach
                      @else
                      <li> <img src="{{ asset('storage/produtos/'. $produto->imagem) }}" width="600" height="700" alt="img"/> </li>
                      @endif
                    </ul>
                  </div>
                  <div id="carousel" class="flexslider">
                    <ul class="slides">
                      @if(count($produto->galerias) > 0)
                      @foreach($produto->galerias as $galeria)
                      <li> <img src="{{ asset('storage/galeria/'. $galeria->name) }}" width="600" height="700" alt="img"/> </li>
                      @endforeach
                      @else
                      <li> <img src="{{ asset('storage/produtos/'. $produto->imagem) }}" width="600" height="700" alt="img"/> </li>
                      @endif
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-7">
              <div class="product-right animated" data-animation="bounceInUp">
                <h3 class="product-title">{{ $produto->titulo }}</h3>
                {{-- <div class="product-desc">The Corsair Gaming Series GS600 is the ideal price/performance choice for mid-spec gaming PC</div> --}}
                <hr>
                <div class="price-box"> <span class="price-regular-single">R$ {{ str_replace('.', ',', $produto->preco) }}</span> <span class="price-old">{{ (isset($produto->old) ? $produto->old : "") }}</span> </div>
                <hr>
                <div class="product-button-group">
                  
                  <div class="shorty-desc">
                    
                    <p> {{ $produto->previa }}</p>
                    <br>
                    <p><a target="_blank" href="{{ $produto->link }}">Para Comprar clique aqui</a></p>
                  </div>
                  {{-- <hr> --}}
                  <div class="footer-panel">
                    {{-- <hr>
                    <div class="social-box">
                      <h4>COMPARTILHE</h4>
                      <ul class="social-links">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="icomoon-facebook"></i></a></li>
                        <li class=""><a href="https://twitter.com/" target="_blank"><i class="icomoon-twitter"></i></a></li>
                        <li><a href="https://www.google.com/" target="_blank"><i class="icomoon-googleplus"></i></a></li>
                        <li><a href="https://www.pinterest.com/" target="_blank"><i class="icomoon-pinterest"></i></a></li>
                      </ul>
                    </div> --}}
                  </div>
                  <div class="product-label"> <img src="{{asset('storage/produtos/' . $produto->imagem) }}" width="600" height="500" alt="img"/> </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-9  col-sm-9 product-info animated" data-animation="bounceInUp">
                <div id="tab-info-anchore"></div>
                
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tab1" role="tab" data-toggle="tab">Descrição</a></li>
                  <li role="presentation"><a href="#tab2" role="tab" data-toggle="tab">Mais Informações</a></li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="tab1">
                    {!! $produto->descricao !!}
                  </div>
                  
                  <div role="tabpanel" class="tab-pane" id="tab2">
                    {!! $produto->informacoes !!}
                  </div>
                </div>
              </div>
              <div class="col-md-3   col-sm-3  product-carousel-right animated" data-animation="bounceInUp">
                <div class="widget widget-special">
                  <h3 class="widget-title"><span>Produtos Similares</span></h3>
                  <ul class="entry-list unstyled verticale-carousel">
                    @foreach($referencias as $produto)
                    <li>
                      <div class="entry-thumbnail"> <a href="#" class="img"> <img src="{{ asset('storage/produtos/' . $produto->imagem) }}" width="600" height="700" alt=""/></a> </div>
                      <div class="entry-main">
                        <div class="entry-header">
                          <h5 class="entry-title"><a href="{{ route('produto', $produto->alias) }}">{{ $produto->titulo }}</a></h5>
                        </div>
                        <div class="entry-meta">
                          <div class="price-box"> <span class="price-regular-single">{{ $produto->preco }}</span> </div>
                        </div>
                      </div>
                    </li>
                    @endforeach
                    
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </main>
  
  
  
  
  <section  class="x-section " >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="heading-wrap animated"  data-animation="flipInX" >
            <h2 class="section-heading " >Produtos Relacionados</h2>
          </div>
        </div>
      </div>
      
      <div class="row text-center">
        <section class="xcarousel-4 animated " data-animation="bounceInUp">
          <div class="x-frame" >
            <ul class="x-slider product-grid ">
              @foreach($referencias as $produto)
              <li>
                <div class="product-container">
                  <div class="product-image"> 
                    {{-- <span class="label-sale">sale</span> --}}
                    <div class="btn-action-item"> 
                      <a href="{{ asset('storage/produtos/' . $produto->imagem) }}" class="magnific" title="Ampliar Imagem"> <i class="icomoon-eye-open"></i></a> 
                    </div>
                    <a href="{{ route('produto', $produto->alias) }}"> <img   src="{{ asset('storage/produtos/' . $produto->imagem) }}" width="600" height="700" alt="img"/> </a> 
                    <a href="{{ route('produto', $produto->alias) }}"> <img  class="b-lazy slider_img"  src="media/item/4/3.jpg" width="600" height="700" alt="img"/></a> 
                  </div>
                  <div class="product-bottom">
                    <h3 class="product-name x-hover"><span class="x-hover-text">{{ $produto->titulo }}</span></h3>
                    <div class="price-box"> 
                      <span class="price-regular">R$ {{ str_replace('.', ",", $produto->preco) }}</span> 
                      {{-- <span class="price-old">$200.00</span>  --}}
                    </div>
                  </div>
                </div>
              </li>
              @endforeach
              
            </ul>
          </div>
          {{-- <div class="x-navigation navigation"> <a href="javascript:void(0);" class="btn slider-direction prev-page disabled"><i class="icomoon-arrow-left2"></i></a> <a href="javascript:void(0);" class="btn  slider-direction next-page"><i class="icomoon-arrow-right2"></i></a> </div> --}}
        </section>
      </div>
    </div>
  </section>
  
  @include('layouts.site.parceiros')
  
  @include('layouts.site.contato')
  
  @endsection