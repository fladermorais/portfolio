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
                @if($menus[0]['status'] == 'ativo')
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#sobre">{{ $menus[0]['alias'] }}</a><!-- href value = data-id without # of .pt-page. -->
                </li>
                @endif
                @if($menus[1]['status'] == 'ativo')
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#radio">{{ $menus[1]['alias'] }}</a>
                </li>
                @endif
                @if($menus[2]['status'] == 'ativo')
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#pitacos">{{ $menus[2]['alias'] }}</a>
                </li>
                @endif
                @if($menus[3]['status'] == 'ativo')
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#observatorio">{{ $menus[3]['alias'] }}</a>
                </li>
                @endif
                @if($menus[4]['status'] == 'ativo')
                @if(config('app.empresas.ativaBlog') == "sim")
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#noticias">{{ $menus[4]['alias'] }}</a>
                </li>
                @endif
                @endif
                @if($menus[5]['status'] == 'ativo')
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#galeria">{{ $menus[5]['alias'] }}</a>
                </li>
                @endif
                @if($menus[6]['status'] == 'ativo')
                <li>
                    <a class="pt-trigger" href="{{ route('home') }}#contato">{{ $menus[6]['alias'] }}</a>
                </li>
                @endif
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