<section  class="home-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading-wrap animated"  data-animation="bounceInUp" >
          <h2 class="section-heading"> {{ session('titulos')['noticias']->titulo }}</h2>
          <h3 class="section-subheading hang">{{ session('titulos')['noticias']->descricao }}</h3>
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
            @foreach($noticias as $noticia)
            <li>
              <div class="product-container">
                <div class="product-image"> 
                  {{-- <span class="label-sale">sale</span> --}}
                  <a href="{{ route('noticia', $noticia->alias) }}"> <img src="{{ asset('storage/noticias/' . $noticia->imagem) }}" width="600" height="700" alt="{{ $noticia->titulo }}"/></a> 
                  <a href="{{ route('noticia', $noticia->alias) }}"> <img  class="b-lazy slider_img"  src="{{ asset('storage/noticias/' . $noticia->imagem) }}" width="600" height="700" alt="{{ $noticia->titulo }}"/></a> 
                </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">{{ $noticia->nome }}</span></h3>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </section>
    </div>
  </div>
</section>