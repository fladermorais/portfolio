
<div class="container">
    <div class="blog-logo text-left"><a href="index.html"> <img width="292" height="58" alt="logo" src="{{ asset('storage/logo/' . config('app.empresas.logo')) }}"></a></div>
</div>
<div id="iview">
    @foreach($banners as $banner)
    <div data-iview:thumbnail="{{ asset('storage/banners/' . $banner->imagem) }}" data-iview:image="{{ asset('storage/banners/' . $banner->imagem) }}">
        
        <div class="container">
            <div class="iview-caption" data-x="0" data-y="300" data-transition="expandDown">
                <h3>{{ $banner->titulo }}</h3>
                {!! $banner->descricao !!}
                <a href="#navbar-collapse-1" class="btn">Mais...</a> </div>
            </div>
        </div>
        
    </div>
    @endforeach
    <div class="navbar yamm navbar-default ">
        <div class="container">
            <nav id="navbar-collapse-1" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active" ><a href="landing.html">Home</a></li>
                    <li ><a href="catalog.html">Produtos</a></li>
                    <li><a href="product.html">Notícias</a></li>
                    <li ><a href="blog.html">Contato</a></li>
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
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <a href="#" class="thumbnail"><img src="media/menu/promo.jpg" width="270" height="270" alt="img"/></a> 
                                        </div>
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
