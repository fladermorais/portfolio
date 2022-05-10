@extends('layouts.sitePages')
@section('content')

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Notícia</h3>
    <ol class="breadcrumb float-right">
      <li><a href="{{ route('noticias', $noticia->categorias->alias) }}">{{ $noticia->categorias->nome }}</a></li>
      <li class="active">{{ $noticia->nome }}</li>
    </ol>
  </div>
</div>

<main class="section" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9">
        <section class="main-content" role="main">
          <article class="post media-image   format-image animated" data-animation="bounceInUp">
            <div class="entry-media">
              <div class="box-date-post"> <span class="date-1">16 </span> <span class="date-2"> JULY</span> </div>
              <div class="entry-thumbnail">
                <div class="sticky-post"><i class="icon-pin"></i></div>
                <div class="post-type-media type-image"><i class="icon-picture"></i></div>
                <div class="img-overlay "> <a  href="media/830x400/1.jpg" class="link-view-more magnific"></a> </div>
                <a   href="media/830x400/1.jpg"><img src="media/830x400/1.jpg" width="830" height="400" alt=""/></a> 
              </div>
            </div>
            <div class="entry-main">
              <h3 class="entry-title"> <a href="post.html" data-hover="ALIQUAM MOLLIS NEQUE UT ULLAMCORPER TEMPOR DOLOR TORTOR VARIUS">ALIQUAM MOLLIS NEQUE UT ULLAMCORPER TEMPOR DOLOR TORTOR VARIUS</a> </h3>
              <div class="entry-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales dapibus dui, sed iaculis metus facilisis sed. Etiam scelerisque molestie purus vel mollis. Mauris dapibus quam id turpis dignissim rutrum. Phasellus placerat nunc in nulla pretium pellentesque. Aliquam erat volutpat. In nec enim dui, in hendrerit enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Vivamus at tortor at est mattis aliquam non id est. Quisque pretium suscipit faucibus. Fusce vestibulum mollis interdum. Duis a nibh at odio aliquet varius. Pellentesque feugiat nulla nec ipsum suscipit ut varius elit posuere. Nunc tellus urna, viverra ac porta ac, commodo et libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque ullamcorper nisl id justo ultrices hendrerit. Vivamus dignissim ultrices erat, vitae placerat ligula lacinia non. In arcu nunc, aliquet a condimentum et </p>
                <blockquote>
                  <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
                </blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales dapibus dui, sed iaculis metus facilisis sed. Etiam scelerisque molestie purus vel mollis. Mauris dapibus quam id turpis dignissim rutrum. Phasellus placerat nunc in nulla pretium pellentesque. Aliquam erat volutpat. In nec enim dui, in hendrerit enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Vivamus at tortor at est mattis aliquam non id est. Quisque pretium suscipit faucibus. Fusce vestibulum mollis interdum. Duis a nibh at odio aliquet varius. Pellentesque feugiat nulla nec ipsum suscipit ut varius elit posuere. Nunc tellus urna, viverra ac porta ac, commodo et libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque ullamcorper nisl id justo ultrices hendrerit. Vivamus dignissim ultrices erat, vitae placerat ligula lacinia non. In arcu nunc, aliquet a condimentum et </p>
                
                
              </div>
            </div>
            
            <div class="footer-panel">  
              
              <div class="social-box">
                
                
                <h4>SHARE THIS STORY</h4>  
                
                
                <ul class="social-links">
                  <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                  <li class=""><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                  <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                  <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                </ul>
                
                
              </div>
              
              
            </div>
            
            
            
          </article>
        </section>
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-3">
        <aside class="sidebar">
          <div class="widget widget-search ">
            <h3 class="widget-title"><span>Pesquisar</span></h3>
            <form role="search" method="get" id="searchform" class="searchform" action="/">
              <input type="text" placeholder="Search" value="" name="s"  >
              <button> <i class="fa fa-search"></i> </button>
            </form>
          </div>
          
          <!-- CATEGORY LIST WIDGET -->
          <div class="widget widget-category">
            <h3 class="widget-title"><span>Categorias</span></h3>
            <ul class="category-list unstyled clearfix">
              <li><a href="{{ route('noticias') }}">Todas as Notícias</a></li>
              @foreach($categorias as $categoria)
              <li><a href="{{ route('categorias', $categoria->alias) }}">{{ $categoria->nome }}</a></li>
              @endforeach
            </ul>
          </div>
          
        </aside>
      </div>
    </div>
  </div>
</main>

@endsection