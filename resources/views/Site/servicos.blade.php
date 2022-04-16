@extends('layouts.site')
@section('content')

<section id="features-page">
  <div class="subsection1">
    <div class="container">
      <div class="section-heading text-center">
        <h1>Nossos <span>Serviços</span></h1>
        <p class="subheading">Somos especialistas em algumas coisas</p>
      </div>
      
      <div class="col sm_12">
        @foreach($categorias as $categoria)
        <div class="col-sm-4 wpb_column block">
          <div class="wpb_wrapper">
            <div class="flip">
              <div class="iconbox iconbox-style icon-color card clearfix">
                <div class="face front">
                  <table>
                    <tbody>
                      <tr>
                        <td>
                          <h3>{{ $categoria->nome }}</h3>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="iconbox-box2 face back">
                  <table>
                    <tbody>
                      <tr>
                        <td>
                          <h3>{{ $categoria->nome }}</h3>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  
  <section id="features">
    @foreach($categorias as $cat)
    <div class="container">
      <div class="text-center titulo">
        <h3>{{ $cat->nome }}</h3>
      </div>
      
      <div class="col-md-12">
        
      </div>
      
      <div class="flex-row">
        @foreach($cat->produtos as $produto)
        <div class="col-box">
          <div class="col-md-3 col-xs-3">
            <img class="img-icone" src="{{ asset('/storage/produtos/' . $produto->imagem) }}" alt="">
          </div>
          <div class="col-md-9 col-xs-9">
            <h4>{{ $produto->titulo }}</h4>
            <p>{!! $produto->descricao !!}</p>
          </div>
        </div>   
        @endforeach       
      </div>
    </div>
    @endforeach
  </section>
  
</section>

@endsection