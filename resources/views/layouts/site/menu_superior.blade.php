<ul class="nav navbar-nav" id="menu-navegacao">
    <li class="" ><a href="{{ route('home') }}">Home</a></li>
    <li ><a href="{{ route('sobre') }}">Quem somos</a></li>
    <li ><a href="{{ route('produtos', 'all') }}">Produtos</a></li>
    @if(config('app.empresas.ativaBlog') == "sim")
    <li><a href="{{ route('noticias') }}">Notícias</a></li>
    @endif
    <li ><a href="#contato">Contato</a></li>
</ul>