<main role="main">
  
  <div class="jumbotron" style='background-image: url("{{ asset('storage/banners/' . $banner->imagem) }}")'>
    <div class="container">
      <h1 class="display-3">{{ $banner->nome }} </h1>
      <h2>{!! $banner->descricao !!}</h2>
    </div>
  </div>
  
</main>