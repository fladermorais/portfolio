@php
$route = Request::route()->getName();
$rota = explode('.', $route);

@endphp
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  
  {!! SEO::generate() !!}
  {!! JsonLd::generate() !!}
  {!! ReCaptcha::htmlScriptTagJsApi() !!}
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'Laravel') }}</title>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  
  
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/createjs.min.js') }}"></script>
  <script src="{{ asset('js/handanimation.js') }}"></script>
  <script src="{{ asset('js/animation-start.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  
  <!-- Master CSS -->
  <link href="{{ asset('Front/css/master.css') }}" rel="stylesheet">
  
  <!-- jQuery-->
  <script src="{{ asset('Front/js/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ asset('Front/js/jquery-migrate-1.2.1.min.js') }}"></script>
  <script src="{{ asset('Front/js/jquery-ui.min.js') }}"></script>
  
  <!-- Bootstrap Core JavaScript -->
  <script src="{{ asset('Front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('Front/js/modernizr.js') }}"></script>
  
  <!-- Switcher Only -->
  
  <link rel="stylesheet" id="switcher-css" type="text/css" href="{{ asset('Front/plugins/switcher/css/switcher.css') }}" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="{{ asset('Front/plugins/switcher/css/pink.css') }}" title="pink" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="{{ asset('Front/plugins/switcher/css/purple.css') }}" title="purple" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="{{ asset('Front/plugins/switcher/css/blue.css') }}" title="blue" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="{{ asset('Front/plugins/switcher/css/green.css') }}" title="green" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="{{ asset('Front/plugins/switcher/css/red.css') }}" title="red" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="{{ asset('Front/plugins/switcher/css/yellow.css') }}" title="yellow" media="all" />
  
  <!-- Switcher Only -->
</head>
<body>
  
  {{-- @include('layouts.site.header')
  @yield('content')
  @include('layouts.site.footer') --}}


  <body class="animated-all">

    <!-- Start Switcher -->
    <div class="demo_changer">
      <div class="demo-icon"> <i class="fa fa-cog fa-spin fa-2x"></i> </div>
      <!-- end opener icon -->
      <div class="form_holder">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="predefined_styles">
              <h4>Color Skins </h4>
              <!-- MODULE #3 --> 
              <a href="" rel="pink" class="styleswitch"><img src="{{ asset('Front/plugins/switcher/images/icons/pink.png') }}" alt="img"></a> <a href="" rel="purple" class="styleswitch"><img src="{{ asset('Front/plugins/switcher/images/icons/purple.png') }}" alt="img"></a> <a href="" rel="blue" class="styleswitch"><img src="{{ asset('Front/plugins/switcher/images/icons/blue.png') }}" alt="img"></a> <a href="" rel="green" class="styleswitch"><img src="{{ asset('Front/plugins/switcher/images/icons/green.png') }}" alt="img"></a> <a href="" rel="red" class="styleswitch"><img src="{{ asset('Front/plugins/switcher/images/icons/red.png') }}" alt="img"></a> <a href="" rel="yellow" class="styleswitch"><img src="{{ asset('Front/plugins/switcher/images/icons/yellow.png') }}" alt="img"></a> 
              <!-- END MODULE #3 --> 
              
            </div>
            <!-- end predefined_styles --> 
          </div>
          <!-- end col --> 
          
          <!-- end col --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end form_holder --> 
    </div>
    <!-- end demo_changer --> 
    <!-- End Switcher --> 
    
    <!-- Loader Landing Page -->
    <div id="ip-container" class="ip-container"> 
      <!-- initial header -->
      <header class="ip-header">
        <div class="col-lg-12 text-center">
          <div class="ip-logo"><img  src="{{ asset('Front/img/loader-logo.png') }}" alt="logo"></div>
        </div>
        <div class="ip-loader"> <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
          <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
          <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
          </svg> </div>
      </header>
    </div>
    <!-- Loader end -->
    
    <div id="cd-nav"> <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
      <nav id="cd-main-nav">
        <ul>
          <li class="active"><a href="index.html"><span>Home</span> <small>X-Sport Home Page</small> </a></li>
          <li><a href="blog.html"><span>NEWS & BLOG</span> <small>X-Sport News</small></a></li>
          <li ><a href="post.html"><span>Post </span> <small>X-Sport Post </small></a></li>
          <li><a href="shop.html" class="dropdown-toggle" data-toggle="dropdown"><span>Shop<b class="caret"></b></span> <small>SEE ALL MODELS</small></a>
            <ul>
              <li><a href="shop.html">Home</a></li>
              <li><a href="catalog.html">Catalog</a></li>
              <li><a href="product.html"  >Product</a></li>
            </ul>
          </li>
          <li ><a href="page.html"><span>Page</span> <small>X-Sport page </small></a></li>
        </ul>
      </nav>
    </div>
    <div class="header header-home">
      <div class="container">
        <div class="blog-logo text-left"><a href="index.html"> <img width="292" height="58" alt="logo" src="{{ asset('Front/img/blog-logo.png') }}"></a></div>
      </div>
      <div id="iview">
        <div data-iview:thumbnail="media/1920x960/1.jpg" data-iview:image="media/1920x960/1.jpg">
          <div class="container">
            <div class="iview-caption" data-x="0" data-y="300" data-transition="expandDown">
              <h3>SKATEBOARDING</h3>
              <p> FINE TUNED, SLEEK & SMOOTH, THIS SLIDER WILL IMPRESS YOUR VISITORS</p>
              <a href="#navbar-collapse-1" class="btn">EXPLORE NOW</a> </div>
          </div>
        </div>
        <div data-iview:thumbnail="media/1920x960/2.jpg" data-iview:image="media/1920x960/2.jpg" data-iview:transition="block-drop-random" data-iview:pausetime="2000">
          <div class="container">
            <div class="iview-caption" data-x="0" data-y="300" data-transition="expandRight">
              <h3>mountain bikes</h3>
              <p> FINE TUNED, SLEEK & SMOOTH, THIS SLIDER WILL IMPRESS YOUR VISITORS</p>
              <a href="#navbar-collapse-1" class="btn">EXPLORE NOW</a> </div>
          </div>
        </div>
        <div data-iview:thumbnail="media/1920x960/3.jpg" data-iview:image="media/1920x960/3.jpg">
          <div class="container">
            <div class="iview-caption" data-x="0" data-y="200" data-transition="expandLeft">
              <h3>xTreme-Bikes</h3>
              <p> FINE TUNED, SLEEK & SMOOTH, THIS SLIDER WILL IMPRESS YOUR VISITORS</p>
              <a href="#navbar-collapse-1" class="btn">EXPLORE NOW</a> </div>
          </div>
        </div>
        <div data-iview:thumbnail="media/1920x960/4.jpg" data-iview:image="media/1920x960/4.jpg">
          <div class="container">
            <div class="iview-caption" data-x="0" data-y="200" data-transition="expandLeft">
              <h3>xTreme-Sports</h3>
              <p> FINE TUNED, SLEEK & SMOOTH, THIS SLIDER WILL IMPRESS YOUR VISITORS</p>
              <a href="#navbar-collapse-1" class="btn">EXPLORE NOW</a> </div>
          </div>
        </div>
      </div>
      <div class="navbar yamm navbar-default ">
        <div class="container">
          <nav id="navbar-collapse-1" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li  ><a href="shop.html">Shop Page</a></li>
              <li class="active" ><a href="landing.html">Landing  Page</a></li>
              <li ><a href="catalog.html">Catalog  Page</a></li>
              <li><a href="product.html">Product  Page</a></li>
              <li ><a href="blog.html">Blog Page</a></li>
              <li><a href="post.html">Post  Page</a></li>
              <!-- Classic dropdown -->
              <li class="dropdown yamm-classic"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Classic<b class="caret"></b></a>
                <ul class="dropdown-menu ">
                  <li><a  href="#"> QUECHUA FORCLAZ 500 SOFTSHELL HIKING WEAR </a></li>
                  <li><a  href="#"> FORCLAZ GOFTSHELL HIKING WEAR</a></li>
                  <li><a  href="#"> SOFTSHELL HIKING 300 WEAR </a></li>
                  <li><a  href="#"> Paenitet me789 quod tultus plastic</a></li>
                  <li><a  href="#"> FORCLAZ 500 SOFTSHELL HIKING WEAR</a></li>
                  <li><a  href="#"> QUECHUA FORCLAZ 500LL HIKING WEAR</a> </li>
                </ul>
              </li>
              <!-- Pictures -->
              <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Mega Menu<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="yamm-content">
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <h5> SPORTS & FITNESS </h5>
                          <ul>
                            <li> <a href="#"> Bicycles & Accessories</a></li>
                            <li> <a href="#">Badminton</a></li>
                            <li> <a href="#">Fitness Accessories</a></li>
                            <li> <a href="#">Fitness Equipment</a></li>
                            <li> <a href="#">Outdoor Adventure Gear</a></li>
                            <li> <a href="#">Active Wear</a></li>
                            <li> <a href="#">Swimming Equipments</a></li>
                            <li> <a href="#">Water Sports</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <h5> NUTRITION</h5>
                          <ul>
                            <li> <a href="#"> Top Proteins</a></li>
                            <li> <a href="#">JSB Massagers</a></li>
                            <li> <a href="#">Horlicks</a></li>
                            <li> <a href="#">AccuChek</a></li>
                            <li> <a href="#">Omron BP Monitors</a></li>
                            <li> <a href="#">Herbalife Protein</a></li>
                            <li> <a href="#">Apollo Munich</a></li>
                            <li> <a href="#">Weight Gainers</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                          <h5> NEW ARRIVALS</h5>
                          <ul>
                            <li> <a href="#">Heart & Blood Pressure</a></li>
                            <li> <a href="#">Weighing Scale & Daily Needs</a></li>
                            <li> <a href="#">Massagers</a></li>
                            <li> <a href="#">Supports & Rehabilitation</a></li>
                            <li> <a href="#">Sexual WellnessHOT</a></li>
                            <li> <a href="#">Shop Privately At Home</a></li>
                            <li> <a href="#">E-Cigarette & E-Shisha</a></li>
                            <li> <a href="#">Alternative Health Therapy</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <a href="#" class="thumbnail"><img src="media/menu/promo.jpg" width="270" height="270" alt="img"/></a> </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a href="#" class="thumbnail"> <img src="media/menu/pormo2.jpg" width="350" height="140" alt="img"/> </a> </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a href="#" class="thumbnail"> <img src="media/menu/pormo3.jpg" width="350" height="140" alt="img"/> </a> </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a href="#" class="thumbnail"> <img src="media/menu/pormo4.jpg" width="350" height="140" alt="img"/> </a> </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    
    <!-- SECTION -->
    
    <section class="no-bg-color-parallax  parallax-white  home-section" style="background-image:url(media/bg/1.jpg)"    >
      <ul class="bg-slideshow"  >
        <li>
          <div class="bg-slide" style="background-image:url(media/bg/1.jpg)"></div>
        </li>
        <li>
          <div class="bg-slide" style="background-image:url(media/bg/2.jpg)"></div>
        </li>
      </ul>
      <div  class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="heading-wrap animated"  data-animation="bounceInUp"  >
              <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
              <h2 class="section-heading">ABOUT THE CLUB</h2>
              <h3 class="section-subheading hang">XTREME SPORTS CLUB</h3>
            </div>
          </div>
        </div>
        <div  class="container">
          <div class="row">
            <div class="col-lg-6"> 
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="about1">
                  <blockquote class="blockquote-title"> OUR
                    MISSION
                    STATEMENT </blockquote>
                  <blockquote class="blockquote-quote"> <i class="fa fa-quote-left"></i>
                    <p>Pellentesque eu lacus. Vivamus lorem arcu semper eget uldel
                      corper ut blandit sed nisa Phasellus conse quated Inte ger vel tortor. Sed hendrerit. In magna leo fermentum sed iacu lisnw interdum et elit. </p>
                    <p>Pellentesque felis nunc interdum vitae pretium acbib egndum vel velit. Etiam proin luctus sodales elit. Vestibulum eros nunc pellentesque quis viverra.</p>
                  </blockquote>
                  <div class="avatar-about"> <img src="media/270x337/3.jpg" width="269" height="345" alt="img"/>
                    <h4>HENRY ANDERSON </h4>
                    <p>MANAGER XTREME CLUB</p>
                    <p>Gold Medalist, Olympics 2012</p>
                  </div>
                </div>
                <div class="tab-pane" id="about2">
                  <blockquote class="blockquote-title"> OUR
                    MISSION
                    STATEMENT </blockquote>
                  <blockquote class="blockquote-quote"> <i class="fa fa-quote-left"></i>
                    <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur.</p>
                  </blockquote>
                  <div class="avatar-about"> <img src="media/270x337/2.jpg" width="269" height="345" alt="img"/>
                    <h4>HENRY ANDERSON </h4>
                    <p>MANAGER XTREME CLUB</p>
                    <p>Gold Medalist, Olympics 2012</p>
                  </div>
                </div>
                <div class="tab-pane" id="about3">
                  <blockquote class="blockquote-title"> OUR
                    MISSION
                    STATEMENT </blockquote>
                  <blockquote class="blockquote-quote"> <i class="fa fa-quote-left"></i>
                    <p>Mauris a nunc occideritis me rectum. Videtur quod Ive facillimum, qui fecit vos. Potes me interficere, sine testibus et tunc manere in pauci weeks vel mensis vestigia Isai Pinkman et vos quoque illum occidere. Exercitium inutili option A. Videtur mihi quod autem est. .</p>
                  </blockquote>
                  <div class="avatar-about"> <img src="media/270x337/1.jpg" width="269" height="345" alt="img"/>
                    <h4>HENRY ANDERSON </h4>
                    <p>MANAGER XTREME CLUB</p>
                    <p>Gold Medalist, Olympics 2012</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-tabs-wrap"> 
                
                <!-- Nav tabs -->
                <ul class="nav nav-tabs about-tabs">
                  <li class="active"><a href="#about1"  data-toggle="tab"><img src="media/tab1.jpg" width="170" height="280" alt="tab-img"></a>
                    <div class="tab-li-content">
                      <h4> We Are Best <strong>Xtreme Sports Club </strong></h4>
                      <p>Fusce ut odio eget elit eleifend tincidunt Vestibulum fringil lal rsus in metus. Sep interd eli Aliquam scelerisque. Donec congue pede egu lacus. Vestibulum fringilla nullda ultricies sem.Aliquam nudnc urnai ornare sed, tincidunt quis, posuere d justo. Intemetus eros volutpat leo, id auctor eit ore eu orci. </p>
                    </div>
                  </li>
                  <li><a href="#about2"  data-toggle="tab"><img src="media/tab2.jpg" width="170" height="280" alt="tab-img"></a>
                    <div class="tab-li-content">
                      <h4> We Are Best <strong>Xtreme Sports Club </strong></h4>
                      <p>Fusce ut odio eget elit eleifend tincidunt Vestibulum fringil lal rsus in metus. Sep interd eli Aliquam scelerisque. Donec congue pede egu lacus. </p>
                    </div>
                  </li>
                  <li><a href="#about3"  data-toggle="tab"><img src="media/tab3.jpg" width="170" height="280" alt="tab-img"></a>
                    <div class="tab-li-content">
                      <h4> We Are Best <strong>Xtreme Sports Club </strong></h4>
                      <p>Fusce ut odio eget elit eleifend tincidunt Vestibulum fringil lal rsus in metus. Sep interd eli Aliquam scelerisque. Donec congue pede egu lacus. Vestibulum fringilla nullda ultricies sem.Aliquam nudnc urnai ornare sed, tincidunt quis, posuere d justo. Integer consectetu erd lacus sit amet aliquet con sequati metus eros volutpat leo, id auctor eit ore eu orci. </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="section-footer">
          <div class="sf-left" style="background-color:#f4f4f4"></div>
          <div class="sf-right"  style="background-color:#f4f4f4" ></div>
        </div>
      </div>
    </section>
    
    <!-- SECTION -->
    
    <section class="home-section" style="background-color:#f4f4f4;" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="heading-wrap animated"   data-animation="bounceInUp" >
              <div class="small-logo"><img src="img/logo-black.png" width="106" height="36" alt="logo"></div>
              <h2 class="section-heading">ABOUT THE CLUB</h2>
              <h3 class="section-subheading hang hang">WE’RE ALL ABOUT XTREME SPORTS</h3>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-3">
            <div class="service-item animated"    data-animation="bounceInUp"  >
              <div class="service-icon"> <img src="img/iconic/01.png" alt="icon"/></div>
              <h4 class="service-heading">AMAZING EXPERIENCE</h4>
              <p>Ut eu diam vel leo aliquam consectetu Proin torto elit rutrum donec rhoncu. Cras erad
                est cursus sed dignissim sed euismod</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item animated"    data-animation="bounceInUp"  >
              <div class="service-icon"> <img src="img/iconic/02.png" alt="icon"/></div>
              <h4 class="service-heading">TALENTED STAFF</h4>
              <p>Ut eu diam vel leo aliquam consectetu Proin torto elit rutrum donec rhoncu. Cras erad
                est cursus sed dignissim sed euismod</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item animated"    data-animation="bounceInUp"  >
              <div class="service-icon"> <img src="img/iconic/03.png" alt="icon"/></div>
              <h4 class="service-heading">MEDALS WON</h4>
              <p>Ut eu diam vel leo aliquam consectetu Proin torto elit rutrum donec rhoncu. Cras erad
                est cursus sed dignissim sed euismod</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="service-item animated"    data-animation="bounceInUp"  >
              <div class="service-icon"> <img src="img/iconic/04.png" alt="icon"/></div>
              <h4 class="service-heading">REGISTER TODAY</h4>
              <p>Ut eu diam vel leo aliquam consectetu Proin torto elit rutrum donec rhoncu. Cras erad
                est cursus sed dignissim sed euismod</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- SECTION --> 
    
    <!-- SECTION -->
    
    <section  class="no-bg-color-parallax parallax-black home-section" style="background-image:url(media/bg/2.jpg)" >
      <ul class="bg-slideshow">
        <li>
          <div class="bg-slide" style="background-image:url(media/bg/2.jpg)"></div>
        </li>
        <li>
          <div class="bg-slide" style="background-image:url(media/bg/3.jpg)"></div>
        </li>
      </ul>
      <div class="container">
        <div class="row">
          <div class="col-lg-4  col-md-4  col-xs-12  text-center " >
            <div class="ft-box animated"   data-animation="bounceInUp">
              <div class="ft-icon-box "> <img src="img/iconic/05.png"  alt="img"/></div>
              <hr style="max-width:30px;">
              <h4> XTREME SPORTS</h4>
              <p>Fusce ut odio get eleifend tincidunt vestibulum fring
                al rsus in metus. Sep interd umli uam scelerisque.
                Nam odiodui vestibulum amolestie pulvinar</p>
            </div>
          </div>
          <div class="col-lg-4  col-md-4  col-xs-12  text-center  animated"   data-animation="bounceUp" >
            <div class="ft-box animated"   data-animation="bounceInUp">
              <div class="ft-icon-box "> <img src="img/iconic/06.png"  alt="img"/></div>
              <hr style="max-width:30px;">
              <h4>ACHIEVEMENTS</h4>
              <p>Fusce ut odio get eleifend tincidunt vestibulum fring
                al rsus in metus. Sep interd umli uam scelerisque.
                Nam odiodui vestibulum amolestie pulvinar</p>
            </div>
          </div>
          <div class="col-lg-4  col-md-4  col-xs-12  text-center">
            <div class="ft-box animated"   data-animation="bounceInUp">
              <div class="ft-icon-box "> <img src="img/iconic/07.png"  alt="img"/></div>
              <hr style="max-width:30px;">
              <h4>OUR TARGETS</h4>
              <p>Fusce ut odio get eleifend tincidunt vestibulum fring
                al rsus in metus. Sep interd umli uam scelerisque.
                Nam odiodui vestibulum amolestie pulvinar</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="section-footer sf-type-2">
          <div class="sf-left" style="background-color:#f4f4f4"></div>
          <div class="sf-right"  style="background-color:#f4f4f4" ></div>
        </div>
      </div>
    </section>
    
    <!-- SECTION -->
    
    <section style="background-color:#f4f4f4;" class="home-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="heading-wrap animated" data-animation="bounceInUp">
              <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
              <h2 class="section-heading"> OUR ACHIEVEMENTS</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class=" xcarousel-1 animated"  data-animation="bounceInUp" >
            <div class="x-frame" >
              <ul class="x-slider">
                <li>
                  <div class="x-item-wrap">
                    <div class="avatar"> <img    
             src="media/xcarousel/ftcarousel1.jpg" width="198" height="120" alt="img">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                    </div>
                    <div class="details">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                      <a href="#" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
                  </div>
                </li>
                <li>
                  <div data-animation="fadeIn" class="x-item-wrap">
                    <div class="avatar"> <img   
             src="media/xcarousel/ftcarousel2.jpg" width="198" height="120" alt="img">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                    </div>
                    <div class="details">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                      <a href="#" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
                  </div>
                </li>
                <li>
                  <div data-animation="fadeIn" class="x-item-wrap">
                    <div class="avatar"> <img   
             src="media/xcarousel/ftcarousel3.jpg" width="198" height="120" alt="img">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                    </div>
                    <div class="details">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                      <a href="#" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
                  </div>
                </li>
                <li>
                  <div data-animation="fadeIn" class="x-item-wrap">
                    <div class="avatar"> <img   
             src="media/xcarousel/ftcarousel4.jpg" width="198" height="120" alt="img">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                    </div>
                    <div class="details">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                      <a href="#" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
                  </div>
                </li>
                <li>
                  <div data-animation="fadeIn" class="x-item-wrap">
                    <div class="avatar"> <img   
             src="media/xcarousel/ftcarousel5.jpg" width="198" height="120" alt="img">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                    </div>
                    <div class="details">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                      <a href="#" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
                  </div>
                </li>
                <li>
                  <div data-animation="fadeIn" class="x-item-wrap">
                    <div class="avatar"> <img   
             src="media/xcarousel/ftcarousel6.jpg" width="198" height="120" alt="img">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                    </div>
                    <div class="details">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                      <a href="#" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
                  </div>
                </li>
                <li>
                  <div data-animation="fadeIn" class="x-item-wrap">
                    <div class="avatar"> <img   
             src="media/xcarousel/ftcarousel1.jpg" width="198" height="120" alt="img">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                    </div>
                    <div class="details">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                      <a href="#" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
                  </div>
                </li>
                <li>
                  <div data-animation="fadeIn" class="x-item-wrap">
                    <div class="avatar"> <img   
             src="media/xcarousel/ftcarousel2.jpg" width="198" height="120" alt="img">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                    </div>
                    <div class="details">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                      <a href="#" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
                  </div>
                </li>
                <li>
                  <div data-animation="fadeIn" class="x-item-wrap">
                    <div class="avatar"> <img   
             src="media/xcarousel/ftcarousel3.jpg" width="198" height="120" alt="img">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                    </div>
                    <div class="details">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                      <a href="#" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
                  </div>
                </li>
                <li>
                  <div data-animation="fadeIn" class="x-item-wrap">
                    <div class="avatar"> <img   
             src="media/xcarousel/ftcarousel4.jpg" width="198" height="120" alt="img">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                    </div>
                    <div class="details">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                      <a href="#" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
                  </div>
                </li>
                <li>
                  <div data-animation="fadeIn" class="x-item-wrap">
                    <div class="avatar"> <img   
              src="media/xcarousel/ftcarousel5.jpg" width="198" height="120" alt="img">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                    </div>
                    <div class="details">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                      <a href="#" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
                  </div>
                </li>
                <li>
                  <div data-animation="fadeIn" class="x-item-wrap">
                    <div class="avatar"> <img   
             src="media/xcarousel/ftcarousel6.jpg" width="198" height="120" alt="img">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                    </div>
                    <div class="details">
                      <h4>EXTREME LEVEL
                        OF SPORTS</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                      <a href="#" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="x-navigation navigation"> <a class="btn slider-direction prev-page" href="javascript:void(0);"><i class="icomoon-arrow-left2"></i></a> <a class="btn  slider-direction next-page" href="javascript:void(0);"><i class="icomoon-arrow-right2"></i></a> </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="section-footer ">
          <div class="sf-left" style="background-color:#fff"></div>
          <div class="sf-right"  style="background-color:#fff" ></div>
        </div>
      </div>
    </section>
    
    <!-- SECTION -->
    
    <section  class="home-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="heading-wrap animated"  data-animation="bounceInUp" >
              <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
              <h2 class="section-heading">SPORTS OFFERED</h2>
              <h3 class="section-subheading hang hang">WE’RE ALL ABOUT XTREME SPORTS</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="text-center" >
            <ul id="filter" class="clearfix">
              <li><a href="" class="current btn" data-filter="*">ALL SPORTS</a></li>
              <li><a href="" class="btn" data-filter=".portfolio">WATER SPORTS</a></li>
              <li><a href="" class="btn" data-filter=".cutaway">JUMPING</a></li>
              <li><a href="" class="btn" data-filter=".corporative">BIKES</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="isotope-frame animated" data-animation="bounceInUp">
        <div class="isotope-filter">
          <div class="isotope-item portfolio"> <img   width="475" height="300"  
              src="media/1000x625/1.jpg" alt="img"/>
            <div class="slide-desc">
              <h3>Lorem ipsum </h3>
              <div class="isotope-desc-content">
                <p>Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. </p>
              </div>
              <a data-target="#myModal-id-12" class="btn-icon outline-outward" data-toggle="modal" href="include/modal-box-portfolio12.html"> <i class="fa fa-file-text"></i> Explorer Now </a> </div>
          </div>
          <div  class="isotope-item cutaway"><img   width="475" height="300"  
              src="media/1000x625/2.jpg" alt="img"/>
            <div class="slide-desc">
              <h3>Lorem ipsum </h3>
              <div class="isotope-desc-content">
                <p>Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. </p>
              </div>
              <a  class="btn-icon outline-outward magnific" href="media/1000x625/3.jpg" > <i class="fa fa-file-image-o"></i> Explorer Now </a> </div>
          </div>
          <div class="isotope-item corporative"> <img   width="475" height="300"  
              src="media/1000x625/3.jpg" alt="img"/>
            <div class="slide-desc">
              <h3>Lorem ipsum </h3>
              <div class="isotope-desc-content">
                <p>Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. </p>
              </div>
              <a class="btn-icon outline-outward video-popab"  href="https://vimeo.com/107685992?width=1160&amp;height=610"> <i class="fa fa-file-video-o"></i> Explorer Now </a> </div>
          </div>
          <div class="isotope-item portfolio"> <img   width="475" height="300"  
              src="media/1000x625/4.jpg" alt="img"/>
            <div class="slide-desc">
              <h3>Lorem ipsum </h3>
              <div class="isotope-desc-content">
                <p>Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. </p>
              </div>
              <a data-target="#myModal-id-12" class="btn-icon outline-outward" data-toggle="modal" href="include/modal-box-portfolio12.html"> <i class="fa fa-file-text"></i> Explorer Now </a> </div>
          </div>
          <div class="isotope-item portfolio"> <img   width="475" height="300"  
              src="media/1000x625/5.jpg" alt="img"/>
            <div class="slide-desc">
              <h3>Lorem ipsum </h3>
              <div class="isotope-desc-content">
                <p>Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. </p>
              </div>
              <a data-target="#myModal-id-12" class="btn-icon outline-outward" data-toggle="modal" href="include/modal-box-portfolio12.html"> <i class="fa fa-file-text"></i> Explorer Now </a> </div>
          </div>
          <div  class="isotope-item cutaway"> <img   width="475" height="300"  
              src="media/1000x625/6.jpg" alt="img"/>
            <div class="slide-desc">
              <h3>Lorem ipsum </h3>
              <div class="isotope-desc-content">
                <p>Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. </p>
              </div>
              <a  class="btn-icon outline-outward magnific" href="media/1000x625/7.jpg" > <i class="fa fa-file-image-o"></i> Explorer Now </a> </div>
          </div>
          <div class="isotope-item corporative"> <img   width="475" height="300"  
              src="media/1000x625/7.jpg" alt="img"/>
            <div class="slide-desc">
              <h3>Lorem ipsum </h3>
              <div class="isotope-desc-content">
                <p>Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. </p>
              </div>
              <a class="btn-icon outline-outward video-popab"  href="https://vimeo.com/107685992?width=1160&amp;height=610"> <i class="fa fa-file-video-o"></i> Explorer Now </a> </div>
          </div>
          <div class="isotope-item portfolio"> <img   width="475" height="300"  
              src="media/1000x625/1.jpg" alt="img"/>
            <div class="slide-desc">
              <h3>Lorem ipsum </h3>
              <div class="isotope-desc-content">
                <p>Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. </p>
              </div>
              <a data-target="#myModal-id-12" class="btn-icon outline-outward" data-toggle="modal" href="include/modal-box-portfolio12.html"> <i class="fa fa-file-text"></i> Explorer Now </a> </div>
          </div>
          <div  class="isotope-item cutaway"><img   width="475" height="300"  
              src="media/1000x625/2.jpg" alt="img"/>
            <div class="slide-desc">
              <h3>Lorem ipsum </h3>
              <div class="isotope-desc-content">
                <p>Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. </p>
              </div>
              <a  class="btn-icon outline-outward magnific" href="media/1000x625/7.jpg" > <i class="fa fa-file-image-o"></i> Explorer Now </a> </div>
          </div>
          <div class="isotope-item corporative"> <img   width="475" height="300"  
              src="media/1000x625/3.jpg" alt="img"/>
            <div class="slide-desc">
              <h3>Lorem ipsum </h3>
              <div class="isotope-desc-content">
                <p>Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. </p>
              </div>
              <a class="btn-icon outline-outward video-popab"  href="https://vimeo.com/107685992?width=1160&amp;height=610"> <i class="fa fa-file-video-o"></i> Explorer Now </a> </div>
          </div>
          <div class="isotope-item portfolio"> <img   width="475" height="300"  
              src="media/1000x625/4.jpg" alt="img"/>
            <div class="slide-desc">
              <h3>Lorem ipsum </h3>
              <div class="isotope-desc-content">
                <p>Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. </p>
              </div>
              <a data-target="#myModal-id-12" class="btn-icon outline-outward" data-toggle="modal" href="include/modal-box-portfolio12.html"> <i class="fa fa-file-text"></i> Explorer Now </a> </div>
          </div>
          <div class="isotope-item portfolio"> <img   width="475" height="300"  
              src="media/1000x625/5.jpg" alt="img"/>
            <div class="slide-desc">
              <h3>Lorem ipsum </h3>
              <div class="isotope-desc-content">
                <p>Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. </p>
              </div>
              <a data-target="#myModal-id-12" class="btn-icon outline-outward" data-toggle="modal" href="include/modal-box-portfolio12.html"> <i class="fa fa-file-text"></i> Explorer Now </a> </div>
          </div>
        </div>
      </div>
      
      <!--  Inserts  contents for ID 12   -->
      
      <div class="portfolio-modal modal fade" id="myModal-id-12"  >
        <div class="modal-content"> </div>
      </div>
      <div class="container">
        <div class="row text-center">
          <section class="xcarousel-5 animated" data-animation="bounceInUp" >
            <div class="x-frame" >
              <ul class="x-carousel brand-carousel">
                <li> <a href="#"><img src="media/brand/1.jpg"  alt="img"/></a> </li>
                <li> <a href="#"><img src="media/brand/2.jpg"  alt="img"/></a> </li>
                <li> <a href="#"><img src="media/brand/3.jpg"  alt="img"/></a> </li>
                <li> <a href="#"><img src="media/brand/4.jpg"  alt="img"/></a> </li>
                <li> <a href="#"><img src="media/brand/1.jpg"  alt="img"/></a> </li>
                <li> <a href="#"><img src="media/brand/2.jpg"  alt="img"/></a> </li>
                <li> <a href="#"><img src="media/brand/1.jpg"  alt="img"/></a> </li>
                <li> <a href="#"><img src="media/brand/2.jpg"  alt="img"/></a> </li>
                <li> <a href="#"><img src="media/brand/3.jpg"  alt="img"/></a> </li>
                <li> <a href="#"><img src="media/brand/4.jpg"  alt="img"/></a> </li>
                <li> <a href="#"><img src="media/brand/1.jpg"  alt="img"/></a> </li>
                <li> <a href="#"><img src="media/brand/2.jpg"  alt="img"/></a> </li>
              </ul>
            </div>
            <div class="x-navigation navigation"> <a href="javascript:void(0);" class="btn slider-direction prev-page disabled"><i class="icomoon-arrow-left2"></i></a> <a href="javascript:void(0);" class="btn  slider-direction next-page"><i class="icomoon-arrow-right2"></i></a> </div>
          </section>
        </div>
      </div>
    </section>
    
    <!-- SECTION -->
    
    <section class="no-bg-color-parallax parallax-black home-section"  style="background-image:url(media/bg/3.jpg)">
      <ul class="bg-slideshow">
        <li>
          <div class="bg-slide" style="background-image:url(media/bg/3.jpg)"></div>
        </li>
        <li>
          <div class="bg-slide" style="background-image:url(media/bg/4.jpg)"></div>
        </li>
      </ul>
      <div class="container">
        <div class="row">
          <div class="cd-events-wrapper cd-container animated" data-animation="bounceInUp">
            <ul class="cd-events">
              <li>
                <div class=" col-sm-12 col-md-2 col-lg-2"  >
                  <div class="events-image"><img src="media/1000x625/2.jpg"  alt="img"/> </div>
                  <a href="#0" class="cd-see-all btn  hang">See all events</a> </div>
                <div class=" col-sm-12 col-md-6 col-lg-6"  >
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO MEGA SKIING</strong></h3>
                    <div class="events-date">APRIL  1 - 3, 2015</div>
                    <p>Aenean urna tellus sodales aliquam egestas quis convallis cursus, magna. Fusce sa scelerisque. Proin tempor rci vestibulum adipiscing. Etiam blanditd Vestibulum nis Duis nibh dui porttitor eu rhoncus uted. Fusce lacus alc neque interdum pulvinarl Integer vel ante ut. </p>
                  </div>
                </div>
                <div class=" col-sm-12 col-md-4 col-lg-4"  >
                  <div class="x-coutdown">
                    <h5> THE COUNTDOWN BEGINS</h5>
                    <div class="x-coutdown">
                      <div id="x-coutdown-timer" data-countdown="2015/09/07"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class=" col-sm-2 col-md-2 col-lg-2"  >
                  <div class="events-image"><img src="media/1000x625/3.jpg"  alt="img"/> </div>
                  <a href="#0" class="cd-see-all btn  hang">See all events</a> </div>
                <div class=" col-sm-6 col-md-6 col-lg-6"  >
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO MEGA SKIING</strong></h3>
                    <div class="events-date">SEPTEMBER 10 - 15, 2014</div>
                    <p>Aenean urna tellus sodales aliquam egestas quis convallis cursus, magna. Fusce sa scelerisque. Proin tempor rci vestibulum adipiscing. Etiam blanditd Vestibulum nis Duis nibh dui porttitor eu rhoncus uted. Fusce lacus alc neque interdum pulvinarl Integer vel ante ut. </p>
                  </div>
                </div>
                <div class=" col-sm-4 col-md-4 col-lg-4"  >
                    <div class="x-coutdown">
                      <div id="x-coutdown-timer" data-countdown="2015/07/09"></div>
                    </div>
                </div>
              </li>
              <li>
                <div class=" col-sm-2 col-md-2 col-lg-2"  >
                  <div class="events-image"><img src="media/1000x625/4.jpg"  alt="img"/> </div>
                  <a href="#0" class="cd-see-all btn  hang">See all events</a> </div>
                <div class=" col-sm-6 col-md-6 col-lg-6"  >
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO MEGA SKIING</strong></h3>
                    <div class="events-date">SEPTEMBER 10 - 15, 2014</div>
                    <p>Aenean urna tellus sodales aliquam egestas quis convallis cursus, magna. Fusce sa scelerisque. Proin tempor rci vestibulum adipiscing. Etiam blanditd Vestibulum nis Duis nibh dui porttitor eu rhoncus uted. Fusce lacus alc neque interdum pulvinarl Integer vel ante ut. </p>
                  </div>
                </div>
                <div class=" col-sm-4 col-md-4 col-lg-4"  >
                  <div class="x-coutdown">
                    <h5> THE COUNTDOWN BEGINS </h5>
                    <div class="x-coutdown">
                      <div id="x-coutdown-timer" data-countdown="2015/08/19"></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <!-- cd-events --> 
            
            
            
             <script>
        
       $(document).ready(function(){ 
    
    
         /////////////////////////////////////
        //  Clock
        /////////////////////////////////////
        
    $('[data-countdown]').each(function() {
       var $this = $(this), finalDate = $(this).data('countdown');
       $this.countdown(finalDate, function(event) {
    
       $this.html(event.strftime(''
         + '<div class="x-cdr"><span>%D</span> <strong>day%!d</strong> </div>'
         + '<div class="x-cdr"><span>%H</span> <strong>hr</strong> </div>'
         + '<div class="x-cdr"><span>%M</span> <strong>min</strong> </div>'
         + '<div class="x-cdr last"><span>%S</span> <strong>sec</strong> </div>'));
     
       
       });
     });
    
    });
    
       </script> 
       
       
       
            
          </div>
          
          <!--Modal Events Grid-->
          
          <div class="cd-events-all">
            <div class="cd-events-all-wrapper">
              <ul>
                <li class="cd-events-item">
                  <div class="cd-events-item-image"> <img src="media/xcarousel/ftcarousel1.jpg" width="195" height="120" alt="img"/></div>
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO MEGA SKIING</strong></h3>
                    <div class="events-date">SEPTEMBER 10 - 15, 2014</div>
                    <p>Paenitet me quod tu me rogas? Oh, sic, qui stultus plastic continentis rogavi te ut emas. Vides non manducare acidum hydrofluoric per plastic. Erit autem dissolvere metalli petram, vitrum, tellus. Ita quod illic '. Quam de aliquo cum aliqua interdum, maybe? Aliquid viride, huh? Quam vos sunt etiam vivere? </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in manibus. Sed finge iustum faciens quod qualibet septimana. SIC. Duis duas libras triginta quinque milia pondo. </p>
                    <p> Sentio sicut ego vobis exponam: sed vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                    <p>Aut si rem a me pecuniam in Midiam elit. Nec ego in imperio elit. Id quod sum sub potestate felis. Etiam Id est - problema solvenda. Skyler est simplex partitio - introducam pecuniam, pecuniam launder. Id quod vobis deerat. </p>
                  </div>
                </li>
                <li class="cd-events-item">
                  <div class="cd-events-item-image"> <img src="media/xcarousel/ftcarousel2.jpg" width="195" height="120" alt="img"/></div>
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO MEGA SKIING</strong></h3>
                    <div class="events-date">SEPTEMBER 12 - 15, 2014</div>
                    <p>Paenitet me quod tu me rogas? Oh, sic, qui stultus plastic continentis rogavi te ut emas. Vides non manducare acidum hydrofluoric per plastic. Erit autem dissolvere metalli petram, vitrum, tellus. Ita quod illic '. Quam de aliquo cum aliqua interdum, maybe? Aliquid viride, huh? Quam vos sunt etiam vivere? </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in manibus. Sed finge iustum faciens quod qualibet septimana. SIC. Duis duas libras triginta quinque milia pondo. </p>
                    <p> Sentio sicut ego vobis exponam: sed vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                  </div>
                </li>
                <li class="cd-events-item">
                  <div class="cd-events-item-image"> <img src="media/xcarousel/ftcarousel3.jpg" width="195" height="120" alt="img"/></div>
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO  SKIING</strong></h3>
                    <div class="events-date">SEPTEMBER 17 - 12, 2014</div>
                    <p>Paenitet me quod tu me rogas? Oh, sic, qui stultus plastic continentis rogavi te ut emas. Vides non manducare acidum hydrofluoric per plastic. Erit autem dissolvere metalli petram, vitrum, tellus. Ita quod illic '. Quam de aliquo cum aliqua interdum, maybe? Aliquid viride, huh? Quam vos sunt etiam vivere? </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in  vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in manibus. Sed finge iustum faciens quod qualibet septimana. SIC. Duis duas libras triginta quinque milia pondo. </p>
                    <p> Sentio sicut ego vobis exponam: sed vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                  </div>
                </li>
                <li class="cd-events-item">
                  <div class="cd-events-item-image"> <img src="media/xcarousel/ftcarousel4.jpg" width="195" height="120" alt="img"/></div>
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO  SKIING</strong></h3>
                    <div class="events-date">SEPTEMBER 17 - 12, 2014</div>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in  vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in manibus. Sed finge iustum faciens quod qualibet septimana. SIC. Duis duas libras triginta quinque milia pondo. </p>
                    <p> Sentio sicut ego vobis exponam: sed vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                  </div>
                </li>
                <li class="cd-events-item">
                  <div class="cd-events-item-image"> <img src="media/xcarousel/ftcarousel5.jpg" width="195" height="120" alt="img"/></div>
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO  SKIING</strong></h3>
                    <div class="events-date">SEPTEMBER 17 - 12, 2014</div>
                    <p>Paenitet me quod tu me rogas? Oh, sic, qui stultus plastic continentis rogavi te ut emas. Vides non manducare acidum hydrofluoric per plastic. Erit autem dissolvere metalli petram, vitrum, tellus. Ita quod illic '. Quam de aliquo cum aliqua interdum, maybe? Aliquid viride, huh? Quam vos sunt etiam vivere? </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in  vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. </p>
                    <p> Sentio sicut ego vobis exponam: sed vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                  </div>
                </li>
                <li class="cd-events-item">
                  <div class="cd-events-item-image"> <img src="media/xcarousel/ftcarousel1.jpg" width="195" height="120" alt="img"/></div>
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO MEGA SKIING</strong></h3>
                    <div class="events-date">SEPTEMBER 10 - 15, 2014</div>
                    <p>Paenitet me quod tu me rogas? Oh, sic, qui stultus plastic continentis rogavi te ut emas. Vides non manducare acidum hydrofluoric per plastic. Erit autem dissolvere metalli petram, vitrum, tellus. Ita quod illic '. Quam de aliquo cum aliqua interdum, maybe? Aliquid viride, huh? Quam vos sunt etiam vivere? </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in manibus. Sed finge iustum faciens quod qualibet septimana. SIC. Duis duas libras triginta quinque milia pondo. </p>
                    <p> Sentio sicut ego vobis exponam: sed vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                    <p>Aut si rem a me pecuniam in Midiam elit. Nec ego in imperio elit. Id quod sum sub potestate felis. Etiam Id est - problema solvenda. Skyler est simplex partitio - introducam pecuniam, pecuniam launder. Id quod vobis deerat. </p>
                  </div>
                </li>
                <li class="cd-events-item">
                  <div class="cd-events-item-image"> <img src="media/xcarousel/ftcarousel2.jpg" width="195" height="120" alt="img"/></div>
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO MEGA SKIING</strong></h3>
                    <div class="events-date">SEPTEMBER 12 - 15, 2014</div>
                    <p>Paenitet me quod tu me rogas? Oh, sic, qui stultus plastic continentis rogavi te ut emas. Vides non manducare acidum hydrofluoric per plastic. Erit autem dissolvere metalli petram, vitrum, tellus. Ita quod illic '. Quam de aliquo cum aliqua interdum, maybe? Aliquid viride, huh? Quam vos sunt etiam vivere? </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in manibus. Sed finge iustum faciens quod qualibet septimana. SIC. Duis duas libras triginta quinque milia pondo. </p>
                    <p> Sentio sicut ego vobis exponam: sed vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                  </div>
                </li>
                <li class="cd-events-item">
                  <div class="cd-events-item-image"> <img src="media/xcarousel/ftcarousel3.jpg" width="195" height="120" alt="img"/></div>
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO  SKIING</strong></h3>
                    <div class="events-date">SEPTEMBER 17 - 12, 2016</div>
                    <p>Paenitet me quod tu me rogas? Oh, sic, qui stultus plastic continentis rogavi te ut emas. Vides non manducare acidum hydrofluoric per plastic. Erit autem dissolvere metalli petram, vitrum, tellus. Ita quod illic '. Quam de aliquo cum aliqua interdum, maybe? Aliquid viride, huh? Quam vos sunt etiam vivere? </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in  vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in manibus. Sed finge iustum faciens quod qualibet septimana. SIC. Duis duas libras triginta quinque milia pondo. </p>
                    <p> Sentio sicut ego vobis exponam: sed vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                  </div>
                </li>
                <li class="cd-events-item">
                  <div class="cd-events-item-image"> <img src="media/xcarousel/ftcarousel4.jpg" width="195" height="120" alt="img"/></div>
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO  SKIING</strong></h3>
                    <div class="events-date">SEPTEMBER 27 - 12, 2016</div>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in  vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in manibus. Sed finge iustum faciens quod qualibet septimana. SIC. Duis duas libras triginta quinque milia pondo. </p>
                    <p> Sentio sicut ego vobis exponam: sed vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                  </div>
                </li>
                <li class="cd-events-item">
                  <div class="cd-events-item-image"> <img src="media/xcarousel/ftcarousel5.jpg" width="195" height="120" alt="img"/></div>
                  <div class="events-content">
                    <h3>EVENT: <strong>TORANTO  SKIING</strong></h3>
                    <div class="events-date">SEPTEMBER 12 - 12, 2016</div>
                    <p>Paenitet me quod tu me rogas? Oh, sic, qui stultus plastic continentis rogavi te ut emas. Vides non manducare acidum hydrofluoric per plastic. Erit autem dissolvere metalli petram, vitrum, tellus. Ita quod illic '. Quam de aliquo cum aliqua interdum, maybe? Aliquid viride, huh? Quam vos sunt etiam vivere? </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in  vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                    <p>Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. </p>
                    <p> Sentio sicut ego vobis exponam: sed vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum. Nec apud hos. </p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- cd-events-all-wrapper --> 
            
            <a href="#0" class="close-btn">Close</a> </div>
        </div>
      </div>
    </section>
    
    <!-- SECTION -->
    
    <section class="home-section" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="heading-wrap animated"  data-animation="bounceInUp" >
              <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
              <h2 class="section-heading">QUALIFIED STAFF</h2>
              <h3 class="section-subheading hang">WE’RE ALL ABOUT XTREME SPORTS</h3>
            </div>
          </div>
        </div>
        <div class="text-center">
          <main id="cd-team"> 
            
            <!--Start Carousel-->
            <section class="xcarousel-2 animated" data-animation="bounceInUp" >
              <div class="x-frame" >
                <ul class="x-slider">
                  <li> <a href="#0" data-type="member-1">
                    <figure> <img    
              src="media/270x337/1.jpg" width="270" height="337" alt="img"/>
                      <div class="cd-img-overlay  ">
                        <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                      </div>
                    </figure>
                    <div class="cd-member-info">
                      <h4 class="staff-name">LINDA </h4>
                    </div>
                    <!-- cd-member-info --> 
                    </a>
                    <div class="staff-wrap">
                      <h5 class="staff-position">SUPPORT STAFF</h5>
                      <ul class="social-team">
                        <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                      </ul>
                      <div class="staff-shorty">
                        <p>Personal Trainer, Body Builder,
                          3 Times Country Champion,
                          Water Sports Expert, Gold Medalist</p>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#0" data-type="member-2">
                    <figure> <img    
              src="media/270x337/2.jpg" width="270" height="337" alt="img"/>
                      <div class="cd-img-overlay  ">
                        <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                      </div>
                    </figure>
                    <div class="cd-member-info">
                      <h4 class="staff-name">Mike </h4>
                    </div>
                    <!-- cd-member-info --> 
                    </a>
                    <div class="staff-wrap">
                      <h5 class="staff-position">FITNESS TRAINER</h5>
                      <ul class="social-team">
                        <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                        <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                      </ul>
                      <div class="staff-shorty">
                        <p>Personal Trainer, Body Builder,
                          3 Times Country Champion,
                          Water Sports Expert, Gold Medalist</p>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#0" data-type="member-3">
                    <figure> <img    
              src="media/270x337/3.jpg" width="270" height="337" alt="img"/>
                      <div class="cd-img-overlay  ">
                        <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                      </div>
                    </figure>
                    <div class="cd-member-info">
                      <h4 class="staff-name">Ron </h4>
                    </div>
                    <!-- cd-member-info --> 
                    </a>
                    <div class="staff-wrap">
                      <h5 class="staff-position">SKATEBOARD</h5>
                      <ul class="social-team">
                        <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                        <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                      </ul>
                      <div class="staff-shorty">
                        <p>Personal Trainer, Body Builder,
                          3 Times Country Champion,
                          Water Sports Expert, Gold Medalist</p>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#0" data-type="member-4">
                    <figure> <img    
              src="media/270x337/4.jpg" width="270" height="337" alt="img"/>
                      <div class="cd-img-overlay  ">
                        <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                      </div>
                    </figure>
                    <div class="cd-member-info">
                      <h4 class="staff-name">ANDREA </h4>
                    </div>
                    <!-- cd-member-info --> 
                    </a>
                    <div class="staff-wrap">
                      <h5 class="staff-position">MOUNTAINER</h5>
                      <ul class="social-team">
                        <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                        <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                      </ul>
                      <div class="staff-shorty">
                        <p>Personal Trainer, Body Builder,
                          3 Times Country Champion,
                          Water Sports Expert, Gold Medalist</p>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#0" data-type="member-1">
                    <figure> <img    
              src="media/270x337/1.jpg" width="270" height="337" alt="img"/>
                      <div class="cd-img-overlay  ">
                        <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                      </div>
                    </figure>
                    <div class="cd-member-info">
                      <h4 class="staff-name">LINDA </h4>
                    </div>
                    <!-- cd-member-info --> 
                    </a>
                    <div class="staff-wrap">
                      <h5 class="staff-position">SUPPORT STAFF</h5>
                      <ul class="social-team">
                        <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                      </ul>
                      <div class="staff-shorty">
                        <p>Personal Trainer, Body Builder,
                          3 Times Country Champion,
                          Water Sports Expert, Gold Medalist</p>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#0" data-type="member-2">
                    <figure> <img    
              src="media/270x337/2.jpg" width="270" height="337" alt="img"/>
                      <div class="cd-img-overlay  ">
                        <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                      </div>
                    </figure>
                    <div class="cd-member-info">
                      <h4 class="staff-name">Mike </h4>
                    </div>
                    <!-- cd-member-info --> 
                    </a>
                    <div class="staff-wrap">
                      <h5 class="staff-position">FITNESS TRAINER</h5>
                      <ul class="social-team">
                        <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                        <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                      </ul>
                      <div class="staff-shorty">
                        <p>Personal Trainer, Body Builder,
                          3 Times Country Champion,
                          Water Sports Expert, Gold Medalist</p>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#0" data-type="member-3">
                    <figure> <img    
              src="media/270x337/3.jpg" width="270" height="337" alt="img"/>
                      <div class="cd-img-overlay  ">
                        <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                      </div>
                    </figure>
                    <div class="cd-member-info">
                      <h4 class="staff-name">Ron </h4>
                    </div>
                    <!-- cd-member-info --> 
                    </a>
                    <div class="staff-wrap">
                      <h5 class="staff-position">SKATEBOARD</h5>
                      <ul class="social-team">
                        <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                        <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                      </ul>
                      <div class="staff-shorty">
                        <p>Personal Trainer, Body Builder,
                          3 Times Country Champion,
                          Water Sports Expert, Gold Medalist</p>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#0" data-type="member-4">
                    <figure> <img    
              src="media/270x337/4.jpg" width="270" height="337" alt="img"/>
                      <div class="cd-img-overlay  ">
                        <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                      </div>
                    </figure>
                    <div class="cd-member-info">
                      <h4 class="staff-name">ANDREA </h4>
                    </div>
                    <!-- cd-member-info --> 
                    </a>
                    <div class="staff-wrap">
                      <h5 class="staff-position">MOUNTAINER</h5>
                      <ul class="social-team">
                        <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                        <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                      </ul>
                      <div class="staff-shorty">
                        <p>Personal Trainer, Body Builder,
                          3 Times Country Champion,
                          Water Sports Expert, Gold Medalist</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="x-navigation team-navigation"> <a class="btn slider-direction prev-page" href="javascript:void(0);"><i class="icomoon-arrow-left2"></i></a> <a class="btn  slider-direction next-page" href="javascript:void(0);"><i class="icomoon-arrow-right2"></i></a> </div>
              <!-- end-carousel --> 
              
            </section>
            <!-- cd-team -->
            
            <div class="cd-overlay"></div>
          </main>
          <div class="cd-member-bio member-1">
            <div class="cd-member-bio-pict"> <img src="media/270x337/1.jpg" width="270" height="337" alt="img"/> </div>
            <!-- cd-member-bio-pict -->
            
            <div class="cd-bio-content">
              <h1>John Smith</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, explicabo, doloribus, esse rem officia quas facilis eius alias similique ducimus amet quam odio perspiciatis dolorem ipsam! Ab, dolores, adipisci, explicabo pariatur illum deleniti quam iusto placeat nisi aliquam praesentium mollitia eligendi a! Sequi, voluptatibus sed quos possimus harum rem tempore fugiat? Corporis, officia, assumenda, asperiores blanditiis quidem aliquam fugiat vel excepturi velit provident aut omnis quos aliquid tempora eaque. Nemo, eveniet, sint maxime eum maiores totam est inventore numquam voluptatem hic nam blanditiis placeat illum nesciunt voluptatum eos cum quos magni voluptates ipsam. Perspiciatis alias ducimus libero. Quo provident omnis fugiat ut repellendus optio cum quaerat odio et ipsa. Molestias, atque repellat non maxime amet corporis magni libero quam numquam error beatae at asperiores et a porro nostrum ab necessitatibus esse aliquid iure repellendus obcaecati unde quo eius eum dolores quasi consectetur culpa velit optio! Sequi, dolor, minima, veniam doloribus in ullam cupiditate iste animi ipsum esse eaque similique illo temporibus magni et earum amet sint deleniti est reiciendis. Maxime, quis, animi, ad quasi adipisci suscipit alias iste reprehenderit ea placeat nulla commodi nobis magnam provident veniam earum odit eveniet possimus aut voluptatum dolorum culpa necessitatibus facere totam quisquam. Ipsam.</p>
            </div>
            <!-- cd-bio-content --> 
          </div>
          <!-- cd-member-bio -->
          
          <div class="cd-member-bio member-2">
            <div class="cd-member-bio-pict"> <img src="media/270x337/2.jpg" width="270" height="337" alt="img"/> </div>
            <!-- cd-member-bio-pict -->
            
            <div class="cd-bio-content">
              <h1>Cristina Cameron</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, explicabo, doloribus, esse rem officia quas facilis eius alias similique ducimus amet quam odio perspiciatis dolorem ipsam! Ab, dolores, adipisci, explicabo pariatur illum deleniti quam iusto placeat nisi aliquam praesentium mollitia eligendi a! Sequi, voluptatibus sed quos possimus harum rem tempore fugiat? Corporis, officia, assumenda, asperiores blanditiis quidem aliquam fugiat vel excepturi velit provident aut omnis quos aliquid tempora eaque. Nemo, eveniet, sint maxime eum maiores totam est inventore numquam voluptatem hic nam blanditiis placeat illum nesciunt voluptatum eos cum quos magni voluptates ipsam. Perspiciatis alias ducimus libero. Quo provident omnis fugiat ut repellendus optio cum quaerat odio et ipsa. Molestias, atque repellat non maxime amet corporis magni libero quam numquam error beatae at asperiores et a porro nostrum ab necessitatibus esse aliquid iure repellendus obcaecati unde quo eius eum dolores quasi consectetur culpa velit optio! Sequi, dolor, minima, veniam doloribus in ullam cupiditate iste animi ipsum esse eaque similique illo temporibus magni et earum amet sint deleniti est reiciendis. Maxime, quis, animi, ad quasi adipisci suscipit alias iste reprehenderit ea placeat nulla commodi nobis magnam provident veniam earum odit eveniet possimus aut voluptatum dolorum culpa necessitatibus facere totam quisquam. Ipsam.</p>
            </div>
            <!-- cd-bio-content --> 
          </div>
          <!-- cd-member-bio -->
          
          <div class="cd-member-bio member-3">
            <div class="cd-member-bio-pict"> <img src="media/270x337/3.jpg" width="270" height="337" alt="img"/> </div>
            <!-- cd-member-bio-pict -->
            
            <div class="cd-bio-content">
              <h1>Meet Samuel Noel</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, explicabo, doloribus, esse rem officia quas facilis eius alias similique ducimus amet quam odio perspiciatis dolorem ipsam! Ab, dolores, adipisci, explicabo pariatur illum deleniti quam iusto placeat nisi aliquam praesentium mollitia eligendi a! Sequi, voluptatibus sed quos possimus harum rem tempore fugiat? Corporis, officia, assumenda, asperiores blanditiis quidem aliquam fugiat vel excepturi velit provident aut omnis quos aliquid tempora eaque. Nemo, eveniet, sint maxime eum maiores totam est inventore numquam voluptatem hic nam blanditiis placeat illum nesciunt voluptatum eos cum quos magni voluptates ipsam. Perspiciatis alias ducimus libero. Quo provident omnis fugiat ut repellendus optio cum quaerat odio et ipsa. Molestias, atque repellat non maxime amet corporis magni libero quam numquam error beatae at asperiores et a porro nostrum ab necessitatibus esse aliquid iure repellendus obcaecati unde quo eius eum dolores quasi consectetur culpa velit optio! Sequi, dolor, minima, veniam doloribus in ullam cupiditate iste animi ipsum esse eaque similique illo temporibus magni et earum amet sint deleniti est reiciendis. Maxime, quis, animi, ad quasi adipisci suscipit alias iste reprehenderit ea placeat nulla commodi nobis magnam provident veniam earum odit eveniet possimus aut voluptatum dolorum culpa necessitatibus facere totam quisquam. Ipsam.</p>
            </div>
            <!-- cd-bio-content --> 
          </div>
          <div class="cd-member-bio member-4">
            <div class="cd-member-bio-pict"> <img src="media/270x337/4.jpg" width="270" height="337" alt="img"/> </div>
            <!-- cd-member-bio-pict -->
            
            <div class="cd-bio-content">
              <h1>Meet Samuel Noel</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, explicabo, doloribus, esse rem officia quas facilis eius alias similique ducimus amet quam odio perspiciatis dolorem ipsam! Ab, dolores, adipisci, explicabo pariatur illum deleniti quam iusto placeat nisi aliquam praesentium mollitia eligendi a! Sequi, voluptatibus sed quos possimus harum rem tempore fugiat? Corporis, officia, assumenda, asperiores blanditiis quidem aliquam fugiat vel excepturi velit provident aut omnis quos aliquid tempora eaque. Nemo, eveniet, sint maxime eum maiores totam est inventore numquam voluptatem hic nam blanditiis placeat illum nesciunt voluptatum eos cum quos magni voluptates ipsam. Perspiciatis alias ducimus libero. Quo provident omnis fugiat ut repellendus optio cum quaerat odio et ipsa. Molestias, atque repellat non maxime amet corporis magni libero quam numquam error beatae at asperiores et a porro nostrum ab necessitatibus esse aliquid iure repellendus obcaecati unde quo eius eum dolores quasi consectetur culpa velit optio! Sequi, dolor, minima, veniam doloribus in ullam cupiditate iste animi ipsum esse eaque similique illo temporibus magni et earum amet sint deleniti est reiciendis. Maxime, quis, animi, ad quasi adipisci suscipit alias iste reprehenderit ea placeat nulla commodi nobis magnam provident veniam earum odit eveniet possimus aut voluptatum dolorum culpa necessitatibus facere totam quisquam. Ipsam.</p>
            </div>
            <!-- cd-bio-content --> 
          </div>
          <!-- cd-member-bio --> 
          <a href="#0" class="cd-member-bio-close">Close</a> <!-- close the author bio section --> 
          
        </div>
      </div>
      <div class="container">
        <div class="section-footer ">
          <div class="sf-left" style="background-color:#f4f4f4"></div>
          <div class="sf-right"  style="background-color:#f4f4f4" ></div>
        </div>
      </div>
    </section>
    
    <!-- SECTION --> 
    
    <!-- SECTION -->
    
    <section style="background-color:#f4f4f4;" class="home-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="heading-wrap animated"  data-animation="bounceInUp" >
              <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
              <h2 class="section-heading">HAPPY CLIENTS OF THE CLUB</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <section class="xcarousel-3 animated" data-animation="bounceInUp" >
            <div class="x-frame" >
              <ul class="x-slider review-slider">
                <li>
                  <div class="avatar-review "> <img    
              src="media/270x337/1.jpg" width="269" height="345" alt="img"/> </div>
                  <div class="details-review">
                    <p>Interd umli Aliquam scelerisque. In sollicd itudin gravida tortor. Class aptent tacitd sociosqu ad litoracel torquent. Suspendisse vehicula rhoncus leo. Integer ante bio nunc accumsan sed tempus rutrum. </p>
                    <div class="autor-date"> <i class="fa fa-quote-left"></i>
                      <h5>Pergo coctione</h5>
                      <p>Member of the Club</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="avatar-review "> <img    
              src="media/270x337/2.jpg" width="269" height="345" alt="img"/> </div>
                  <div class="details-review">
                    <p>Interd umli Aliquam scelerisque. In sollicd itudin gravida tortor. Class aptent tacitd sociosqu ad litoracel torquent. Suspendisse vehicula rhoncus leo. Integer ante bio nunc accumsan sed tempus rutrum. </p>
                    <div class="autor-date"> <i class="fa fa-quote-left"></i>
                      <h5>Pergo coctione</h5>
                      <p>Member of the Club</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="avatar-review "> <img    
              src="media/270x337/3.jpg" width="269" height="345" alt="img"/> </div>
                  <div class="details-review">
                    <p>Interd umli Aliquam scelerisque. In sollicd itudin gravida tortor. Class aptent tacitd sociosqu ad litoracel torquent. Suspendisse vehicula rhoncus leo. Integer ante bio nunc accumsan sed tempus rutrum. </p>
                    <div class="autor-date"> <i class="fa fa-quote-left"></i>
                      <h5>Pergo coctione</h5>
                      <p>Member of the Club</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="avatar-review "> <img    
              src="media/270x337/4.jpg" width="269" height="345" alt="img"/> </div>
                  <div class="details-review">
                    <p>Interd umli Aliquam scelerisque. In sollicd itudin gravida tortor. Class aptent tacitd sociosqu ad litoracel torquent. Suspendisse vehicula rhoncus leo. Integer ante bio nunc accumsan sed tempus rutrum. </p>
                    <div class="autor-date"> <i class="fa fa-quote-left"></i>
                      <h5>Pergo coctione</h5>
                      <p>Member of the Club</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="x-navigation navigation"> <a href="javascript:void(0);" class="btn slider-direction prev-page disabled"><i class="icomoon-arrow-left2"></i></a> <a href="javascript:void(0);" class="btn  slider-direction next-page"><i class="icomoon-arrow-right2"></i></a> </div>
          </section>
        </div>
      </div>
    </section>
    
    <!-- SECTION -->
    
    <section class="no-bg-color-parallax parallax-black home-section text-center"  style="background-image:url(media/bg/5.jpg)"  >
      <ul class="bg-slideshow">
        <li>
          <div class="bg-slide" style="background-image:url(media/bg/5.jpg)"></div>
        </li>
        <li>
          <div class="bg-slide" style="background-image:url(media/bg/6.jpg)"></div>
        </li>
      </ul>
      <div  class="container">
        <div class="row">
          <div class="col-lg-6"> </div>
          <div class="col-lg-6">
            <p>&nbsp;</p  >
            <p>&nbsp;</p  >
            <p>&nbsp;</p>
            <a href="https://vimeo.com/107685992?width=1160&amp;height=610" class="video-popab animated"  data-animation="bounceInUp" ><img src="img/show-video.png" width="340" height="213" alt="img"/></a>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- SECTION -->
    
    <section  class="home-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="heading-wrap animated"  data-animation="bounceInUp" >
              <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
              <h2 class="section-heading " >OUR PRODUCTS</h2>
            </div>
          </div>
        </div>
        
        <!--Modal box-->
        <div class="quick-view-modal modal fade" id="quick-view-id47"  >
          <div class="modal-content"> </div>
        </div>
        <div class="row text-center">
          <section class="xcarousel-4 animated" data-animation="bounceInUp" >
            <div class="x-frame" >
              <ul class="x-slider product-grid">
                <li>
                  <div class="product-container">
                    <div class="product-image"> <span class="label-sale">sale</span>
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/2.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <a href="product.html"> <img   
             src="media/item/4/2.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
             src="media/item/4/3.jpg" width="600" height="700" alt="img"/></a> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ 
                        500 SOFTSHELL HIKING WEAR</span></h3>
                      <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-old">$200.00</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container ">
                    <div class="product-image"> <span class="label-hot">HOT</span>
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/5.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <img   
             src="media/item/4/4.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
             src="media/item/4/5.jpg" width="600" height="700" alt="img"/> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">FORCLAZ 
                        GOFTSHELL HIKING WEAR</span></h3>
                      <div class="price-box"> <span class="price-regular">$5420.00</span> <span class="price-reduction">70%</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container">
                    <div class="product-image"> <span class="label-sale">sale</span>
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/5/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <a href="product.html"> <img   
             src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
             src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">SOFTSHELL HIKING 300 WEAR</span></h3>
                      <div class="price-box"> <span class="price-regular">$220.00</span> <span class="price-old">$700.00</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container">
                    <div class="product-image">
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/6/26.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <img   
             src="media/item/6/26.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
             src="media/item/6/27.jpg" width="600" height="700" alt="img"/> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">Paenitet me789 quod tultus plastic</span></h3>
                      <div class="price-box"> <span class="price-regular">$220.00</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container">
                    <div class="product-image">
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/7/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <a href="product.html"> <img   
             src="media/item/7/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
             src="media/item/7/2.jpg" width="600" height="700" alt="img"/></a> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ 
                        500LL HIKING WEAR</span></h3>
                      <div class="price-box"> <span class="price-regular">$170.00</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container">
                    <div class="product-image"> <span class="label-sale">sale</span>
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/2.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <a href="product.html"> <img   
             src="media/item/4/2.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
             src="media/item/4/3.jpg" width="600" height="700" alt="img"/></a> </div>
                    <div class="only-list-view">
                      <div class="product-desc">
                        <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-danger"> Add to cart </button>
                      </div>
                      <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                    </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ 
                        500 SOFTSHELL HIKING WEAR</span></h3>
                      <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-old">$200.00</span> </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container">
                    <div class="product-image">
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/5.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <img   
             src="media/item/4/4.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
             src="media/item/4/5.jpg" width="600" height="700" alt="img"/> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">FORCLAZ 
                        500 SOFTSHELL HIKING WEAR</span></h3>
                      <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-reduction">70%</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container label-not-available-active">
                    <div class="product-image"> <span class="label-not-available">not available</span>
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/5/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <a href="product.html"> <img   
             src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
             src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">SOFTSHELL HIKING 300 WEAR</span></h3>
                      <div class="price-box"> <span class="price-regular">$420.00</span> <span class="price-old">$700.00</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" disabled class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container label-hot-active ">
                    <div class="product-image"> <span class="label-hot">HOT</span>
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/8/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <img   
             src="media/item/8/1.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
             src="media/item/8/2.jpg" width="600" height="700" alt="img"/> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">FORCLAZ 
                        500 SOFTSHELL HIKING WEAR</span></h3>
                      <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-reduction">70%</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container">
                    <div class="product-image">
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/6/26.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <img   
             src="media/item/6/26.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
             src="media/item/6/27.jpg" width="600" height="700" alt="img"/> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">Paenitet me789 quod tultus plastic</span></h3>
                      <div class="price-box"> <span class="price-regular">$220.00</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container">
                    <div class="product-image">
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/7/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <a href="product.html"> <img   
             src="media/item/7/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
             src="media/item/7/2.jpg" width="600" height="700" alt="img"/></a> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ 
                        500LL HIKING WEAR</span></h3>
                      <div class="price-box"> <span class="price-regular">$170.00</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container">
                    <div class="product-image"> <span class="label-sale">sale</span>
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/2.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <a href="product.html"> <img   
             src="media/item/4/2.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
             src="media/item/4/3.jpg" width="600" height="700" alt="img"/></a> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ 
                        500 SOFTSHELL HIKING WEAR</span></h3>
                      <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-old">$200.00</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container ">
                    <div class="product-image"> <span class="label-hot">HOT</span>
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/5.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <img   
             src="media/item/4/4.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
             src="media/item/4/5.jpg" width="600" height="700" alt="img"/> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">FORCLAZ 
                        GOFTSHELL HIKING WEAR</span></h3>
                      <div class="price-box"> <span class="price-regular">$5420.00</span> <span class="price-reduction">70%</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="product-container">
                    <div class="product-image"> <span class="label-sale">sale</span>
                      <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/5/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                      <a href="product.html"> <img   
             src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
             src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> </div>
                    <div class="product-bottom">
                      <h3 class="product-name x-hover"><span class="x-hover-text">SOFTSHELL HIKING 300 WEAR</span></h3>
                      <div class="price-box"> <span class="price-regular">$220.00</span> <span class="price-old">$700.00</span> </div>
                      <div class="only-list-view">
                        <div class="product-desc">
                          <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger"> Add to cart </button>
                        </div>
                        <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="x-navigation navigation"> <a href="javascript:void(0);" class="btn slider-direction prev-page disabled"><i class="icomoon-arrow-left2"></i></a> <a href="javascript:void(0);" class="btn  slider-direction next-page"><i class="icomoon-arrow-right2"></i></a> </div>
          </section>
        </div>
      </div>
    </section>
    
    <!-- SECTION -->
    
    <section class="no-bg-color-parallax parallax-black home-section text-center" style="background-image:url(media/bg/6.jpg)" >
      <ul class="bg-slideshow">
        <li>
          <div class="bg-slide" style="background-image:url(media/bg/6.jpg)"></div>
        </li>
        <li>
          <div class="bg-slide" style="background-image:url(media/bg/5.jpg)"></div>
        </li>
      </ul>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="heading-wrap animated"  data-animation="bounceInUp" >
              <div class="small-logo"><img src="img/logo-white.png" width="106" height="36" alt=""/></div>
              <h2 class="section-heading"> CONTACT US</h2>
              <h3 class="section-subheading hang">WE’RE ALL ABOUT XTREME SPORTS</h3>
              <p>Lacus sit amet aliquet cons equate metus eros volutpat leo id ms auctor elit lorem eu orci. Suspendisse ante. Cras pedey Mauris lectus quam facilisis ad condimentum sit amet condm entum eudel justo. Sed eget nulla at quam.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <form name="sentMessage animated" data-animation="bounceInUp" id="contactForm" novalidate>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group form-group-text">
                  <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                  <div id="success"></div>
                  <button type="submit" class="btn btn-xl  hang">Send Message</button>
                </div>
              </div>
              <div class="col-md-3">
                <ul>
                  <li>
                    <div class="icon-set-wrap">
                      <div class="icon-set"><a><i class="fa fa-map-marker   "></i></a></div>
                      <div class="content-icon-set">121 King Street, Melbourne 
                        Victoria 3000 Australia </div>
                    </div>
                  </li>
                  <li>
                    <div class="icon-set-wrap">
                      <div class="icon-set"><a><i class="fa   fa-envelope   "></i></a></div>
                      <div class="content-icon-set"><a href="mailto:info@xtremesp.org">info@xtremesp.org</a> <a href="mailto:support@xtremesp.org">support@xtremesp.org</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="icon-set-wrap">
                      <div class="icon-set"><a><i class="fa  fa-phone "></i></a></div>
                      <div class="content-icon-set">0800 123 4567
                        +1 234 56789-0</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    
    <!-- SECTION -->
    
    <section  class="home-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="heading-wrap animated"  data-animation="bounceInUp" >
              <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
              <h2 class="section-heading">SUBSCRIPTION PLANS</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="price-table">
            <div class="ptable-heading">
              <div class="ptable-our-packet" ><i class="fa fa-arrow-circle-down"></i> OUR PACKAGES</div>
              <div class="ptable-more-info"> FOR MORE INFORMATION & 
                CUSTOM PLANS PLEASE CALL </div>
              <div class="ptable-phone">0200-123-45678</div>
            </div>
            <div class="table-line">
              <div class="price-plan-wrap">
                <h3> 1  WEEK </h3>
                <div class="price-plan"> $69.00 </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>6</strong> CLASSES
                  PER WEEK </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>12</strong> DEDICATED
                  TRAINER </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>4</strong> MORNING
                  CLASSES</div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>30</strong> SPORTS
                  PRACTICES </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>2</strong> CLUB
                  DISCOUNTS </div>
              </div>
              <div class="ptable-offer-button"> <a href="#">SUBSCRIBE <small>*some other info</small> </a> </div>
            </div>
            <div class="table-line">
              <div class="price-plan-wrap">
                <h3> 1  MONTH</h3>
                <div class="price-plan"> $119.00 </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>23</strong> CLASSES
                  PER WEEK </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>12</strong> DEDICATED
                  TRAINER </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>14</strong> MORNING
                  CLASSES</div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>23</strong> SPORTS
                  PRACTICES </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>23</strong> CLUB
                  DISCOUNTS </div>
              </div>
              <div class="ptable-offer-button"> <a href="#">SUBSCRIBE <small>*some other info</small> </a> </div>
            </div>
            <div class="table-line active">
              <div class="price-plan-wrap">
                <h3> 6  MONTHS</h3>
                <div class="price-plan"> $189.00 </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>23</strong> CLASSES
                  PER WEEK </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>12</strong> DEDICATED
                  TRAINER </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>14</strong> MORNING
                  CLASSES</div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>23</strong> SPORTS
                  PRACTICES </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>23</strong> CLUB
                  DISCOUNTS </div>
              </div>
              <div class="ptable-offer-button"> <a href="#">SUBSCRIBE <small>*some other info</small> </a> </div>
            </div>
            <div class="table-line">
              <div class="price-plan-wrap">
                <h3> 1 YEAR</h3>
                <div class="price-plan"> $189.00 </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>343</strong> CLASSES
                  PER WEEK </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>342</strong> DEDICATED
                  TRAINER </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>344</strong> MORNING
                  CLASSES</div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>243</strong> SPORTS
                  PRACTICES </div>
              </div>
              <div class="ptable-offer-item">
                <div class="flex-item"> <strong>343</strong> CLUB
                  DISCOUNTS </div>
              </div>
              <div class="ptable-offer-button"> <a href="#">SUBSCRIBE <small>*some other info</small> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- SECTION -->
    
    <section class="no-bg-color-parallax parallax-black home-section text-center" style="background-image:url(media/bg/7.jpg)">
      <ul class="bg-slideshow">
        <li>
          <div class="bg-slide" style="background-image:url(media/bg/7.jpg)"></div>
        </li>
        <li>
          <div class="bg-slide" style="background-image:url(media/bg/4.jpg)"></div>
        </li>
      </ul>
      <div class="container">
        <div class="col-lg-12">
          <div class="cd-form-wrapper cd-container">
            <div class="heading-wrap animated"  data-animation="bounceInUp" >
              <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-white.png"></div>
              <h2 class="section-heading">SUBSCRIBE TO <strong>CLUB NEWSLETTER</strong></h2>
              <p>Lacus sit amet aliquet cons equate metus eros volutpat leo id ms auctor elit lorem eu orci. Suspendisse ante cras pedey</p>
            </div>
            <form class="cd-form">
              <input type="email" id="cd-email" class="cd-email" name="cd-email" placeholder="Enter your email address">
              <input type="submit" class="cd-submit" value="Submit">
              <div class="cd-loading"></div>
            </form>
            <div data-type="message" class="cd-response cd-response-error">Ops! Error message here</div>
            <div data-type="message" class="cd-response-success">
              <p>Great! Success message here</p>
            </div>
            <div data-type="message" class="cd-response cd-response-notification">Hey! Notification message here</div>
          </div>
        </div>
      </div>
    </section>
    <div class="map"> <img src="media/map.jpg"  alt="map.jpg"/> </div>
    
    <!-- SECTION -->
    
    <footer class="footer">
      <section class="no-bg-color-parallax parallax-black home-section text-center" style="background-image:url(media/bg/5.jpg)">
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
            <div class="col-lg-4 col-sm-4 col-xs-12">
              <h3 class="fot-title">CLUB OPENING HOURS</h3>
              <table>
                <tr>
                  <th>MONDAY</th>
                  <td>09:00 AM  -  06:00 PM </td>
                </tr>
                <tr>
                  <th>TUESDAY</th>
                  <td>09:00 AM  -  06:00 PM </td>
                </tr>
                <tr>
                  <th>WEDNESDAY</th>
                  <td>09:00 AM  -  06:00 PM </td>
                </tr>
                <tr>
                  <th>THURSDAY</th>
                  <td>09:00 AM  -  06:00 PM </td>
                </tr>
                <tr>
                  <th>FRIDAY</th>
                  <td>09:00 AM  -  06:00 PM </td>
                </tr>
                <tr>
                  <th> SATURDAY</th>
                  <td>09:00 AM  -  06:00 PM </td>
                </tr>
              </table>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12">
              <div class="big-logo"> <img src="img/big-logo.png" width="225" height="178" alt="img"/> </div>
              <ul class="social-links">
                <li><a href="https://www.facebook.com/" target="_blank"><i class="icomoon-facebook"></i></a></li>
                <li class=""><a href="https://twitter.com/" target="_blank"><i class="icomoon-twitter"></i></a></li>
                <li><a href="https://www.google.com/" target="_blank"><i class="icomoon-googleplus"></i></a></li>
                <li><a href="https://www.pinterest.com/" target="_blank"><i class="icomoon-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12">
              <h3 class="fot-title"> PHOTOS FROM FLICKR</h3>
              <ul id="flickr-feed" class="flickr-feed">
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
    </body>
</body>
</html>