<header id="site_header" class="header mobile-menu-hide">
    <div class="header-content clearfix">
        {{-- <div class="my-photos">
            <img src="{{ asset('storage/logo/logo.png') }}" alt="image">
        </div> --}}
        <div class="site-title-block">
            <div class="site-title">{{ config('app.empresas.nome') }}</div>
        </div>
        
        <!-- Navigation -->
        <div class="site-nav">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#sobre">Sobre mim</a><!-- href value = data-id without # of .pt-page. -->
                </li>
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#radio">Rádio UFRJ</a>
                </li>
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#pitacos">Pitacos</a>
                </li>
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#observatorio">Observatório</a>
                </li>
                @if(config('app.empresas.ativaBlog') == "sim")
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#noticias">Notícias</a>
                </li>
                @endif
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#galeria">Galeria</a>
                </li>
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#contato">Contato</a>
                </li>
            </ul>
            <!-- /Main menu -->
        </div>
        <!-- Navigation -->
        
        <!-- Social Links -->
        <div class="social-links">
            @foreach(config('app.redes') as $rede)
            <a href="{{ $rede->link }}" title="{{ $rede->titulo }}" target="_blank"><i class="{{ $rede->icone }}"></i></a>
            @endforeach
        </div>
        
        <!-- Copyrights -->
        <div class="copyrights">© {{ date('Y') }} Desenvolvido por <a href="https://fladermorais.com.br" target="_blank">Flader Morais</a></div>
    </div>
</header>