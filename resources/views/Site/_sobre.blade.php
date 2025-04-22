<section class="pt-page" id="sobre">
    <div class="section-inner start-page-full-width">
        <div class="start-page-full-width">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 flex-center">
                    <div class="inner-content">
                        <div class="fill-block">
                            <img src="{{ asset('storage/quemsomos/' . $sobre->imagem) }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="inner-content">
                        <div class="hp-text-block">
                            <!-- Text rotation / Subtitle -->
                            <div class="owl-carousel text-rotation">                                    
                                <div class="item">
                                    <div class="sp-subtitle">Jornalista</div>
                                </div>
                            </div>
                            <!-- /Text rotation / Subtitle -->
                            
                            <h2 class="hp-main-title">{{ $sobre->titulo }}</h2>
                            {!! $sobre->descricao !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@foreach($quemsomos as $sobre)
<section class="pt-page" id="radio">
    <div class="section-inner custom-page-content">
        <div class="section-title-block second-style">
            <h2 class="section-title">{{ $sobre->titulo }}</h2>
            <h5 class="section-description">Desde 2025</h5>
        </div>
        
        <div class="section-content">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="inner-content">
                        <div class="fill-block">
                            <img src="{{ asset('storage/quemsomos/' . $sobre->imagem) }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="inner-content">
                        <div class="hp-text-block">
                            {!! $sobre->descricao !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach