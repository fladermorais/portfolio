<div class="banner-inicial">
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
</div>