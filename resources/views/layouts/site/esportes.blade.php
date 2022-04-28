<section  class="no-bg-color-parallax parallax-black home-section" style="background-image:url({{ asset('Front/media/bg/2.jpg')}} )" >
    <ul class="bg-slideshow">
        <li>
            <div class="bg-slide" style="background-image:url({{ asset('Front/media/bg/2.jpg')}} )"></div>
        </li>
        <li>
            <div class="bg-slide" style="background-image:url({{ asset('Front/media/bg/3.jpg')}} )"></div>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            @foreach($dicas as $dica)
            <div class="col-lg-4  col-md-4  col-xs-12  text-center " >
                <div class="ft-box animated"   data-animation="bounceInUp">
                    <div class="ft-icon-box "> <i class="{{ $dica->icone }}"></i> </div>
                    <hr style="max-width:30px;">
                    <h4> {{ $dica->titulo }} </h4>
                    <p> {{ $dica->descricao }} </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="section-footer sf-type-2">
            <div class="sf-left" style="background-color:#f4f4f4"></div>
            <div class="sf-right"  style="background-color:#f4f4f4" ></div>
        </div>
    </div>
</section>