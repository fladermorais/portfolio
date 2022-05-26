<section class="no-bg-color-parallax parallax-black home-section text-center" style="background-image:url(media/bg/6.jpg)" id="contato">
    <ul class="bg-slideshow">
        <li>
            <div class="bg-slide" style="background-image:url(media/bg/6.jpg)"></div>
        </li>
        <li>
            <div class="bg-slide" style="background-image:url(media/bg/5.jpg)"></div>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-wrap animated"  data-animation="bounceInUp" >
                    <h2 class="section-heading"> {{ session('titulos')['contato']->titulo }}</h2>
                    <h3 class="section-subheading hang">{{ session('titulos')['contato']->descricao }}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <form name="ssentMessage aanimated" data-animation="bounceInUpee" id="contactForm" novalidate action="{{ route('contatoForm') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nome *" name="nome" id="name" required data-validation-required-message="Seu Nome">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email *" name="email" id="email" required data-validation-required-message="Email">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Telefone *" name="telefone" id="phone" required data-validation-required-message="Telefone">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-text">
                            <textarea class="form-control" placeholder="Messagem *" id="message" name="mensagem" required data-validation-required-message="Mensagem."></textarea>
                            <p class="help-block text-danger"></p>
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl  hang">Enviar Mensagem</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>
                                <div class="icon-set-wrap">
                                    <div class="icon-set"><a><i class="fa fa-map-marker   "></i></a></div>
                                    <div class="content-icon-set">{{ config('app.empresas.cidade') }}</div>
                                </div>
                            </li>
                            <li>
                                <div class="icon-set-wrap">
                                    <div class="icon-set"><a><i class="fa   fa-envelope   "></i></a></div>
                                    <div class="content-icon-set">
                                        <a href="mailto:{{ config('app.empresas.email') }}">{{ config('app.empresas.email') }}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon-set-wrap">
                                    <div class="icon-set"><a><i class="fa  fa-phone "></i></a></div>
                                    <div class="content-icon-set">{{ config('app.empresas.telefone') }}</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>