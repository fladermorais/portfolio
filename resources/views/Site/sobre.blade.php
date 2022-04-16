@extends('layouts.site')
@section('content')

<section>
  <div class="container">
    <h1 class="title">{{ $sobre->titulo }}</h1>
  </div>
</section>


<section id="about-page-section-3">
  <div class="container">
    <div class="row sobre">
      <div class="text-align sobre-conteudo">
        <div>
          {!! $sobre->descricao !!}
        </div>
      </div>
      <div class="sobre-img">
        <img width="auto" src="{{ asset('/storage/quemsomos/' . $sobre->imagem) }}" class="attachment-full img-responsive"
        alt="{{ config('app.empresas.nome') }}">
      </div>
    </div>
  </div>
</section>

<section id="features">
  <div class="container">
    <div class="flex-row">
      
      @isset($sobre->missao)
      <div class="col-box">
        <div class="col-md-12 col-xs-12">
          <h4>Missão</h4>
          <p>{!! $sobre->missao !!}</p>
        </div>
      </div>   
      @endif
      
      @isset($sobre->valores)
      <div class="col-box">
        <div class="col-md-12 col-xs-12">
          <h4>Valores</h4>
          <p>{!! $sobre->valores !!}</p>
        </div>
      </div>   
      @endif
      
      @isset($sobre->objetivos)
      <div class="col-box">
        <div class="col-md-12 col-xs-12">
          <h4>Objetivos</h4>
          <p>{!! $sobre->objetivos !!}</p>
        </div>
      </div>   
      @endif
    </div>
  </div>
</section>

@endsection