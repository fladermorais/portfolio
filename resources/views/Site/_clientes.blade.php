@php
$testes = $clientes->where('id', '<=', 6);
// dd($testes);
@endphp
<h1 class="title">Principais Clientes</h1>
<div class="row">
  <div class="container-fluid">
    <div class="d-flex justify-content-center">
      <div id="carouselLogoCustomers" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            @foreach($clientes->where('id', '<=', 6) as $value)
            <img class="w-10" src="{{ asset('storage/clientes/' . $value->imagem) }}" alt="{{ $value->nome }}">
            @endforeach
          </div>
          <div class="carousel-item">
            @foreach($clientes->where('id', '>=', 7)->where('id', '<=', 12) as $value)
            <img class="w-10" src="{{ asset('storage/clientes/' . $value->imagem) }}" alt="{{ $value->nome }}">
            @endforeach
          </div>
          
          <div class="carousel-item">
            @foreach($clientes->where('id', '>=', 13)->where('id', '<=', 18) as $value)
            <img class="w-10" src="{{ asset('storage/clientes/' . $value->imagem) }}" alt="{{ $value->nome }}">
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>