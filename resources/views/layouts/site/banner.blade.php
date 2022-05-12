
<div class="container">
    <div class="blog-logo text-left"><a href="index.html"> <img width="292" height="150" alt="logo" src="{{ asset('storage/logo/' . config('app.empresas.logo')) }}"></a></div>
</div>
<div id="iview">
    @foreach($banners as $banner)
    <div data-iview:thumbnail="{{ asset('storage/banners/' . $banner->imagem) }}" data-iview:image="{{ asset('storage/banners/' . $banner->imagem) }}">
        
        <div class="container">
            <div class="iview-caption" data-x="0" data-y="300" data-transition="expandDown">
                <h3>{!! $banner->nome !!}</h3>
                {!! $banner->descricao !!}
                <a target="_blank" href="{{ $banner->link }}" class="btn">Mais...</a> </div>
            </div>
        </div>
        
    </div>
    @endforeach
    <div class="navbar yamm navbar-default ">
        <div class="container">
            <nav id="navbar-collapse-1" class="navbar-collapse collapse">
                @include('layouts.site.menu_superior')
            </nav>
        </div>
    </div>
</div>
