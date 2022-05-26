<section style="background-color:#f4f4f4;" class="home-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-wrap animated" data-animation="bounceInUp">
                    <h2 class="section-heading"> {{ $titulos['redes']->titulo }}</h2>
                    <h3 class="section-subheading hang">{{ $titulos['redes']->descricao }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" xcarousel-1 animated"  data-animation="bounceInUp" >
                <div class="x-frame" >
                    <ul class="x-slider">
                        @foreach($redes as $rede)
                        <li>
                            <div class="x-item-wrap">
                                <div class="avatar"> 
                                    {{-- <i class="{{ $rede->icone }}"></i> --}}
                                    <a target="_blank" href="{{ $rede->link }}" class="fa-box-arrow"> <i class="{{ $rede->icone }}"></i> <h4>{{ $rede->titulo }}</h4> </a> 
                                </div>
                                <div class="details">
                                    <a target="_blank" href="{{ $rede->link }}" class="fa-box-arrow"> <i class="{{ $rede->icone }}"></i> <h4>{{ $rede->titulo }}</h4> </a> 
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="x-navigation navigation"> <a class="btn slider-direction prev-page" href="javascript:void(0);"><i class="icomoon-arrow-left2"></i></a> <a class="btn  slider-direction next-page" href="javascript:void(0);"><i class="icomoon-arrow-right2"></i></a> 
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section-footer ">
            <div class="sf-left" style="background-color:#fff"></div>
            <div class="sf-right"  style="background-color:#fff" ></div>
        </div>
    </div>
</section>