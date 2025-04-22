<!-- Blog Subpage -->
<section class="pt-page" id="blog">
  <div class="section-inner custom-page-content">
    <div class="section-title-block second-style">
      <h2 class="section-title">Reportagens</h2>
      <h5 class="section-description">Minhas reportagens</h5>
    </div>
    
    <div class="section-content">
      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <div class="blog-masonry two-columns clearfix">
            
            <!-- Blog Posts-->
            @foreach($noticias as $noticia)
            <div class="item post-1">
              <div class="blog-card">
                <div class="media-block">
                  <div class="category">
                    <a href="#" title="{{ $noticia->categorias->nome }}">{{ $noticia->categorias->nome }}</a>
                  </div>
                  <a href="{{ route('noticia', $noticia->alias) }}">
                    <img src="{{ asset('storage/noticias/' . $noticia->imagem) }}" class="size-blog-masonry-image-two-c" alt="{{ $noticia->nome }}" title="{{ $noticia->nome }}" />
                    <div class="mask"></div>
                  </a>
                </div>
                <div class="post-info">
                  <div class="post-date">{{ date('d/m/Y', strtotime($noticia->created_at)) }}</div>
                  <a href="{{ route('noticia', $noticia->alias) }}">
                    <h4 class="blog-item-title">{{ $noticia->nome }}</h4>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Blog Subpage -->