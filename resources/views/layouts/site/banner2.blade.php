{{-- <div class="banner-inicial">
    @foreach($banners as $banner)
    <div class="banner-imagem" style="background: url({{ asset('/storage/banners/' . $banner->imagem) }}) no-repeat top center ">
        
        
        <div class="banner-box" data-x="0" data-y="300" data-transition="expandDown">
            <h3>{!! $banner->nome !!}</h3>
            {!! $banner->descricao !!}
            <a target="_blank" href="{{ $banner->link }}" class="btn">Mais...</a> </div>
        </div>
        
    </div>
    
    <div class="caption-text">
        <p>BIKE BROTHERS</p>
    </div>
    
    @endforeach
</div> --}}


<div class="introducao slide">
    @foreach($banners as $banner)
    <a target="_blank" href="{{ $banner->link }}">
        <img src="{{ asset('/storage/banners/' . $banner->imagem) }}" alt="Bike Brothers">
        <h2>{!! $banner->descricao !!}</h2>

        <div class="caption-text">
            <p>BIKE BROTHERS</p>
        </div>
        
    </a>
    @endforeach
</div> 

<script>
    function slider(sliderName, velocidade) {
        var sliderClass = '.' + sliderName,
            activeClass = 'active',
            rotate = setInterval(rotateSlide, velocidade)

        $(sliderClass + ' > :first').addClass(activeClass);
        
        $(sliderClass).hover(function() {
            clearInterval(rotate);
        }, function() {
            rotate = setInterval(rotateSlide, velocidade)
        });
        function rotateSlide() {
            var activeSlide = $(sliderClass + ' > .'+ activeClass),
            nextSlide   = activeSlide.next();
            
            if(nextSlide.length == 0){
                nextSlide = $(sliderClass + ' > :first');
            }
            
            activeSlide.removeClass(activeClass);
            nextSlide.addClass(activeClass);
        }
    }

    slider('introducao', 3000);
</script>