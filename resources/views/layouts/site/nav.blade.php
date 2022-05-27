@php
use App\Models\CategoriaProduto;
$categorias = CategoriaProduto::with('produtos')->orderBy('nome')->get();
@endphp

<nav class="navbar navbar-expand-md navbar-custom bg-blue">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
    
  </button>
  
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ $rota[0] == "home" ? "active" : "" }}">
          <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
        </li>
        
        <li class="nav-item {{ $rota[0] == "sobre" ? "active" : "" }}">
          <a class="nav-link" href="sobre">Sobre</a>
        </li>
        
        <li class="nav-item ">
          <a class="nav-link" target="_blank"
          href="https://clientes.brdsoft.com.br/submitticket.php?step=2&deptid=1">Contato</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://www.brdvoz.com.br" id="dropdown" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Produtos</a>
          <div class="dropdown-menu" aria-labelledby="dropdown">
            
            @foreach($categorias as $cat)
            <ul class="nav-link submenu-1">
              <li><a class="dropdown-item" href="">{{ $cat->nome }}</a>
                <ul class="submenu-2">
                  @foreach($cat->produtos as $prod)
                  <li><a href="{{ route('produto', $prod->alias) }}">{{ $prod->titulo }}</a></li>
                  @endforeach
                </ul>
              </li>
            </ul>
            @endforeach
            
          </div>
        </li>
        @if(config('app.empresas.ativaBlog') == "sim")
        <li class="nav-item {{ $rota[0] == "noticias" || $rota[0] == "noticia" || $rota[0] == "categorias" ? "active" : "" }}">
          <a class="nav-link" href="{{ route('noticias') }}">Notícias</a>
        </li>
        @endif
      </ul>
      
    </div>
  </div>
</nav>