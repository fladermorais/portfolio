<section class="no-bg-color-parallax parallax-black home-section"  style="background-image:url(media/bg/3.jpg)">
    <ul class="bg-slideshow">
        <li>
            <div class="bg-slide" style="background-image:url(media/bg/3.jpg)"></div>
        </li>
        <li>
            <div class="bg-slide" style="background-image:url(media/bg/4.jpg)"></div>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="cd-events-wrapper cd-container animated" data-animation="bounceInUp">
                <ul class="cd-events">
                    @foreach($eventos as $evento)
                    <li>
                        <div class=" col-sm-12 col-md-6 col-lg-6"  >
                            <div class="events-content">
                                <h3>EVENTO: <strong>{{ $evento->titulo }}</strong></h3>
                                <div class="events-date">{{ date('d-m-Y', strtotime($evento->dia)) }}</div>
                                <a class="btn btn-sm btn-info" target="_blank" href="{{ $evento->link }}">Clique aqui</a>
                            </div>
                        </div>
                        <div class=" col-sm-12 col-md-4 col-lg-4"  >
                            <div class="x-coutdown">
                                <h5> Detalhes </h5>
                                <div class="x-coutdown">
                                    <p>{{ $evento->descricao }}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                
            </div>
            
        </div>
    </div>
</section>