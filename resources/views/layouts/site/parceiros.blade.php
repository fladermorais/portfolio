<section class="home-section" style="background-color:#f4f4f4;" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-wrap animated"   data-animation="bounceInUp" >
                    <h2 class="section-heading"> {{ session('titulos')['parceiros']->titulo }}</h2>
                    <h3 class="section-subheading hang">{{ session('titulos')['parceiros']->descricao }}</h3>
                </div>
            </div>
        </div>
        <div class="row text-center">
            @foreach($parceiros as $parceiro)
            <div class="col-md-3">
                <div class="service-item animated"    data-animation="bounceInUp"  >
                    <div class="service-icon"> <img src="{{ asset('storage/thumb/clientes/' . $parceiro->imagem) }}" alt="icon"/></div>
                    <a target="_blank" href="{{ $parceiro->link }}"><h4 class="service-heading">{{ $parceiro->nome }}</h4></a>
                    <p>{{ $parceiro->descricao }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>