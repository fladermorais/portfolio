<div id="cd-nav"> <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
    <nav id="cd-main-nav">
        <ul>
            <li class="" ><a href="{{ route('home') }}">Home</a></li>
            <li ><a href="{{ route('sobre') }}">Quem somos</a></li>
            
            @if(config('app.empresas.ativaProdutos') == "sim")
            <li ><a href="{{ route('produtos', 'all') }}">Produtos</a></li>
            @endif

            @if(config('app.empresas.ativaBlog') == "sim")
            <li><a href="{{ route('noticias') }}">Notícias</a></li>
            @endif

            <li ><a href="#contato">Contato</a></li>
        </ul>
    </nav>
</div>