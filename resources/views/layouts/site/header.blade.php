@php
$route = Request::route()->getName();
$rota = explode('.', $route);
@endphp

<nav id="mainNav" class="navbar navbar-default navbar-full">
    <div class="container container-nav">
        <div class="navbar-header">
            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="{{ route('home') }}">
                <img class="logo" src="{{ asset('/storage/logo/'.config('app.empresas.logo')) }}" alt="Hostio">
            </a>
        </div>
        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="about.html">Sobre Nós</a></li>
                <li class="dropdown">
                    <a href="hosting.html">Produtos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach (session('categoriaProdutos') as $cat)
                            <li><a href="whosting.html">{{ $cat->nome }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="support.html">Notícias</a></li>
                <li><a href="support.html">Privacidade</a></li>
                <li><a href="contact.html">Dados LGPD</a></li>
                <li><a href="{{ route('contato') }}">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>
