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
            
            <!-- Blog Post 1 -->
            <?php
            
            for ($i=0; $i < 6; $i++) { 
              ?>
              <div class="item post-1">
                <div class="blog-card">
                  <div class="media-block">
                    <div class="category">
                      <a href="#" title="View all posts in UI">UI</a>
                    </div>
                    <a href="blog-post-1.html">
                      <img src="./include/img/blog.png" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                      <div class="mask"></div>
                    </a>
                  </div>
                  <div class="post-info">
                    <div class="post-date">06 Apr 2018</div>
                    <a href="blog-post-1.html">
                      <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                    </a>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Blog Subpage -->