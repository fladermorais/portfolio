{{-- <section class="no-bg-color-parallax  parallax-white  home-section" style="background-image:url(media/bg/1.jpg)"    > --}}
    <section>
    <div  class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-wrap animated"  data-animation="bounceInUp"  >
                    <div class="small-logo"><img width="106" height="36" alt="logo" src="{{ asset('Front/img/logo-black.png') }}"></div>
                    <h2 class="section-heading"> {{ session('titulos')['quem_somos']->titulo }}</h2>
                    <h3 class="section-subheading hang">{{ session('titulos')['quem_somos']->descricao }}</h3>
                </div>
            </div>
        </div>
        <div  class="container">
            <div class="row">
                <div class="col-lg-12"> 
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        
                        <div class="tab-pane active" id="about1">
                            <blockquote class="blockquote-title"> {{ $quemsomos->titulo }} </blockquote>
                            <blockquote class="blockquote-quote"> <i class="fa fa-quote-left"></i>
                                {!! $quemsomos->descricao !!}
                            </blockquote>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="about-tabs-wrap"> 
                        
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs about-tabs">
                            <li class="active"><a href="#about1"  data-toggle="tab"><img src="{{ asset('img/_missao.png') }}" width="120" height="135" alt="Missão"></a>
                                <div class="tab-li-content">
                                    <h4> Nossa Missão <strong>{{ config('app.empresas.nome') }} </strong></h4>
                                    <p>{{ $quemsomos->missao }}</p>
                                </div>
                            </li>
                            <li><a href="#about2"  data-toggle="tab"><img src="{{ asset('img/_visao.png') }}" width="120" height="135" alt="Visão"></a>
                                <div class="tab-li-content">
                                    <h4> Nossos Objetivos <strong>{{ config('app.empresas.nome') }} </strong></h4>
                                    <p>{{ $quemsomos->objetivos }} </p>
                                </div>
                            </li>
                            <li><a href="#about3"  data-toggle="tab"><img src="{{ asset('img/_valores.png') }}" width="120" height="135" alt="Valores"></a>
                                <div class="tab-li-content">
                                    <h4> Nossos Valores <strong>{{ config('app.empresas.nome') }} </strong></h4>
                                    <p>{{ $quemsomos->valores }} </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section-footer">
            <div class="sf-left" style="background-color:#f4f4f4"></div>
            <div class="sf-right"  style="background-color:#f4f4f4" ></div>
        </div>
    </div>
</section>
