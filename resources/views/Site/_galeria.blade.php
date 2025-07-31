<!-- Blog Subpage -->
<section class="pt-page" id="galeria">
  <div class="section-inner custom-page-content">
    <div class="section-title-block second-style">
      <h2 class="section-title">Galeria</h2>
      <h5 class="section-description">Minhas fotos</h5>
    </div>
    
    <div class="section-content">
      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <div class="blog-masonry three-columns clearfix">
            
            <!-- Blog Posts-->
            @foreach($fotos as $foto)
            <div class="item post-1">
              <div class="blog-card">
                <div class="media-block">
                  <div class="category">
                    <a href="#" title="{{ $foto->name }}">{{ $foto->name }}</a>
                  </div>
                  <a class="noticias-img" href="{{ route('noticia', $foto->alias) }}">
                    <img src="{{ asset('storage/galeria/' . $foto->image) }}" class="size-blog-masonry-image-two-c" alt="{{ $foto->nome }}" title="{{ $foto->nome }}" />
                  </a>
                </div>
              </div>
            </div>
            @endforeach
            <div class="text-right">
              <a class="btn btn-primary" href="">Mais fotos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Blog Subpage -->