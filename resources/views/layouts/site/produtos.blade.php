<section  class="home-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading-wrap animated"  data-animation="bounceInUp" >
          <h2 class="section-heading"> {{ $titulos['produtos']->titulo }}</h2>
          <h3 class="section-subheading hang">{{ $titulos['produtos']->descricao }}</h3>
        </div>
      </div>
    </div>
    
    <!--Modal box-->
    <div class="quick-view-modal modal fade" id="quick-view-id47"  >
      <div class="modal-content"> </div>
    </div>
    <div class="row text-center">
      <section class="xcarousel-4 animated" data-animation="bounceInUp" >
        <div class="x-frame" >
          <ul class="x-slider product-grid">
            @foreach($produtos as $produto)
            <li>
              <div class="product-container">
                <div class="product-image"> 
                  <span class="label-sale">sale</span>
                  <div class="btn-action-item"> 
                    <a href="{{ asset('storage/produtos/' . $produto->imagem) }}" class="magnific" title="{{ $produto->titulo }}"> <i class="icomoon-eye-open"></i></a> 
                  </div>
                  <a href="{{ route('produto', $produto->alias) }}"> <img src="{{ asset('storage/produtos/' . $produto->imagem) }}" width="600" height="700" alt="{{ $produto->titulo }}"/></a> 
                  <a href="{{ route('produto', $produto->alias) }}"> <img  class="b-lazy slider_img"  src="{{ asset('storage/produtos/' . $produto->imagem) }}" width="600" height="700" alt="{{ $produto->titulo }}"/></a> 
                </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">{{ $produto->titulo }}</span></h3>
                  <div class="price-box"> <span class="price-regular">R$ {{ str_replace('.', ',', $produto->preco) }}</span> <span class="price-old">{{ (isset($produto->old) ? $produto->old : "") }}</span> </div>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="x-navigation navigation"> <a href="javascript:void(0);" class="btn slider-direction prev-page disabled"><i class="icomoon-arrow-left2"></i></a> <a href="javascript:void(0);" class="btn  slider-direction next-page"><i class="icomoon-arrow-right2"></i></a> </div>
      </section>
    </div>
  </div>
</section>