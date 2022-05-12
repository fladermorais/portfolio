<footer class="footer">
  <section class="no-bg-color-parallax parallax-black home-section text-center" >
    <ul class="bg-slideshow">
      <li>
        <div class="bg-slide" style="background-image:url(media/bg/5.jpg)"></div>
      </li>
      <li>
        <div class="bg-slide" style="background-image:url(media/bg/6.jpg)"></div>
      </li>
    </ul>
    <div class="container">
      <div class="row">
        
        <div class="col-lg-12 col-sm-4 col-xs-12">
          {{-- <div class="big-logo"> <img src="{{ asset('storage/logo/' . config('app.empresas.logo')) }}" width="225" height="178" alt="img"/> </div> --}}
          <ul class="social-links">
            @foreach(config('app.redes') as $redes)
            <li><a href="{{ $redes->link }}" target="_blank" title="{{ $redes->titulo }}"><i class="{{ $redes->icone }}"></i></a></li>
            @endforeach  
          </ul>
        </div>
        
      </div>
    </div>
  </section>
</footer>

<!-- AlLL SCRIPTS & PLUGINS --> 

<!-- SWITCHER --> 
<script src="{{ asset('Front/plugins/switcher/js/bootstrap-select.js') }}"></script> 
<script src="{{ asset('Front/plugins/switcher/js/evol.colorpicker.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('Front/plugins/switcher/js/dmss.js') }}"></script> 
<!-- MAIN SCRIPTS--> 

<!--Blazy image--> 
<script type="text/javascript" src="{{ asset('Front/js/blazy.min.js') }}"></script> 
<!-- User Agent --> 
<script src="{{ asset('Front/js/cssua.js') }}"></script> 

<!--Waypoint--> 
<script src="{{ asset('Front/js/waypoints.min.js') }}"></script> 
<!--Ios Fix--> 
<script src="{{ asset('Front/js/ios-orientationchange-fix.js') }}"></script> 
<!--Element form Styled--> 
<script src="{{ asset('Front/plugins/selectbox/jquery.selectbox-0.2.js') }}"></script> 

<!--Sly Slider--> 
<script type="text/javascript" src="{{ asset('Front/plugins/sly/sly.min.js') }}"></script> 
<!--Bx Slider--> 
<script src="{{ asset('Front/plugins/bxslider/jquery.bxslider.min.js') }}"></script> 
<!--Flex Slider--> 
<script src="{{ asset('Front/plugins/flexslider/jquery.flexslider-min.js') }}"></script> 
<!-- Flickr--> 
<script src="{{ asset('Front/plugins/jflickrfeed/jflickrfeed.min.js') }}" ></script> 
<!-- Catalog Price--> 
<script src="{{ asset('Front/plugins/nouislider/jquery.nouislider.min.js') }}"></script> 
<!-- Magnific--> 
<script type="text/javascript" src="{{ asset('Front/plugins/magnific/jquery.magnific-popup.js') }}"></script> 
<!-- Pretty Photo --> 
<script src="{{ asset('Front/plugins/prettyphoto/js/jquery.prettyPhoto.js') }}"></script> 
<!-- SMart Menu --> 
<script src="{{ asset('Front/plugins/smart-menu/smart-menu.js') }}"></script> 
<!-- User agent --> 
<script type="text/javascript" src="{{ asset('Front/js/cssua.min.js') }}"></script> 
<!-- Loader --> 
<script src="{{ asset('Front/plugins/loader/js/classie.js') }}"></script> 
<script src="{{ asset('Front/plugins/loader/js/pathLoader.js') }}"></script> 
<script src="{{ asset('Front/plugins/loader/js/main.js') }}"></script> 



<!--SHOP SCRIPTS --> 

<!--Catalog Points--> 
<script src="{{ asset('Front/plugins/points/points.js') }}" ></script> 

<!--HOME SCRIPTS--> 

<!--Isotope filter--> 
<script type="text/javascript" src="{{ asset('Front/plugins/isotope/jquery.isotope.min.js') }}"></script> 
<!--Contact form--> 
<script src="{{ asset('Front/js/jqBootstrapValidation.js') }}"></script> 
<script src="{{ asset('Front/js/contact_me.js') }}"></script> 
<!-- SMart Grid--> 
<script src="{{ asset('Front/plugins/events/masonry.pkgd.min.js') }}"></script> 
<!-- Events --> 
<script src="{{ asset('Front/plugins/events/events.js') }}"></script> 
<!--Count Down--> 
<script src="{{ asset('Front/plugins/countdown/jquery.countdown.min.js') }}" ></script> 
<!-- Newsletter --> 
<script src="{{ asset('Front/plugins/newsletter/main.js') }}" ></script> 
<!-- Bio --> 
<script type="text/javascript" src="{{ asset('Front/plugins/bio/js/bio.js') }}"></script> 
<!--IVIEW--> 
<script src="{{ asset('Front/plugins/iview/js/iview.js') }}"></script> 
<!--Scripts--> 
<script type="text/javascript" src="{{ asset('/Front/js/scripts.js') }}"></script>