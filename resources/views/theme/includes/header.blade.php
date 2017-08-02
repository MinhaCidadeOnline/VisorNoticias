<div class="body-inner">

    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="logo">
                        <a href="{{ config('app.url') }}">
                            <img src="{{ asset('images/logos/logo.png') }}" alt="" title="">
                        </a>
                    </div>
                </div><!-- logo col end -->

                <div class="col-xs-12 col-sm-9 col-md-9 header-right">
                    <div class="ad-banner pull-right">
                        <div id="anuncio-header" class="carousel slide anuncio-header" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">

                                <div class="item active">
                                    <img src="{{ asset('images/Camara-Itapema-Banner-728x90px-Camara-Cidada.jpg') }}" alt="...">
                                </div>

                                <div class="item">
                                    <img src="{{ asset('images/anuncio-topo-1.jpg') }}" alt="...">
                                </div>

                            </div>

                            <a class="left carousel-control" href="#anuncio-header" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#anuncio-header" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div><!-- header right end -->
            </div><!-- Row end -->
        </div><!-- Logo and banner area end -->
    </header><!--/ Header end -->

    <div class="main-nav dark-bg clearfix">
        <div class="container">
            <div class="row">
                <nav class="site-navigation navigation">
                    <div class="site-nav-inner pull-left">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown"><a href="{{ route('index') }}">Home</a></li>

                                <li class="dropdown mega-dropdown">
                                    <a href="category-style1.html" class="dropdown-toggle" >Visor TV <i class="fa fa-angle-down"></i></a>
                                    <div class="dropdown-menu mega-menu-content hidden-xs hidden-sm clearfix">
                                        <div class="menu-tab">
                                            <ul class="nav nav-tabs nav-stacked col-md-2" data-toggle="tab-hover">

                                                @for($i = 1; $i < 5; $i++)

                                                <li {!! ($i == 1 ? 'class="active"' : null) !!}>
                                                    <a class="animated fadeIn" href="#tab-{{ $i }}" data-toggle="tab">
                                                        <span class="tab-head">
                                                            <span class="tab-text-title">Architecture</span>					
                                                        </span>
                                                    </a>
                                                </li>

                                                @endfor

                                            </ul>

                                            <div class="tab-content col-md-10">

                                                @for($i = 1; $i < 5; $i++)

                                                <div class="tab-pane animated fadeIn {!! ($i == 1 ? 'active' : null) !!}" id="tab-{{ $i }}">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="post-block-style clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#"><img class="img-responsive" src="images/news/lifestyle/health1.jpg" alt="" /></a>
                                                                </div>
                                                                <a class="post-cat" href="#">Health</a>
                                                                <div class="post-content">
                                                                    <h2 class="post-title title-small">
                                                                        <a href="#">That wearable on your wrist could soon track your…</a>
                                                                    </h2>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post Block style end -->
                                                        </div><!-- Col 1 end -->
                                                        <div class="col-md-3">
                                                            <div class="post-block-style clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#"><img class="img-responsive" src="images/news/lifestyle/health2.jpg" alt="" /></a>
                                                                </div>
                                                                <a class="post-cat" href="#">Health</a>
                                                                <div class="post-content">
                                                                    <h2 class="post-title title-small">
                                                                        <a href="#">Can't shed those Gym? The problem might be in your…</a>
                                                                    </h2>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post Block style end -->
                                                        </div><!-- Col 2 end -->
                                                        <div class="col-md-3">
                                                            <div class="post-block-style clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#"><img class="img-responsive" src="images/news/lifestyle/health3.jpg" alt="" /></a>
                                                                </div>
                                                                <a class="post-cat" href="#">Health</a>
                                                                <div class="post-content">
                                                                    <h2 class="post-title title-small">
                                                                        <a href="#">Deleting fears from the brain means you might neve…</a>
                                                                    </h2>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post Block style end -->
                                                        </div><!-- Col 3 end -->
                                                        <div class="col-md-3">
                                                            <div class="post-block-style clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#"><img class="img-responsive" src="images/news/lifestyle/health4.jpg" alt="" /></a>
                                                                </div>
                                                                <a class="post-cat" href="#">Health</a>
                                                                <div class="post-content">
                                                                    <h2 class="post-title title-small">
                                                                        <a href="#">Smart packs parking sensor tech and beeps when col…</a>
                                                                    </h2>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post Block style end -->
                                                        </div><!-- Col 4 end -->
                                                    </div><!-- Post block row end -->
                                                </div>

                                                @endfor

                                            </div><!-- tab content -->
                                        </div><!-- Menu tab end -->
                                    </div><!-- Mega menu end -->
                                </li><!-- Tab menu end -->

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cidades <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('category', 'balneario-camboriu') }}">Balneário Camboriú</a></li>
                                        <li><a href="{{ route('category', 'balneario-picarras') }}">Balneário Piçarras</a></li>
                                        <li><a href="{{ route('category', 'bombinhas') }}">Bombinhas</a></li>
                                        <li><a href="{{ route('category', 'camboriu') }}">Camboriú</a></li>
                                        <li><a href="{{ route('category', 'ilhota') }}">Ilhota</a></li>
                                        <li><a href="{{ route('category', 'itajai') }}">Itajaí</a></li>
                                        <li><a href="{{ route('category', 'itapema') }}">Itapema</a></li>
                                        <li><a href="{{ route('category', 'luiz-alves') }}">Luiz Alves</a></li>
                                        <li><a href="{{ route('category', 'navegantes') }}">Navegantes</a></li>
                                        <li><a href="{{ route('category', 'penha') }}">Penha</a></li>
                                        <li><a href="{{ route('category', 'porto-belo') }}">Porto Belo</a></li>
                                    </ul><!-- End dropdown -->
                                </li>
                                <li><a href="{{ route('category', 'esportes') }}">Esportes</a></li>
                                <li><a href="{{ route('category', 'cultura-e-lazer') }}">Cultura e Lazer</a></li>
                                <li><a href="{{ route('category', 'turismo') }}">Turismo</a></li>
                            </ul><!--/ Nav ul end -->
                        </div><!--/ Collapse end -->

                    </div><!-- Site Navbar inner end -->
                </nav><!--/ Navigation end -->

                <div class="nav-search">
                    <span id="search"><i class="fa fa-search"></i></span>
                </div><!-- Search end -->

                <div class="search-block" style="display: none;">
                    <input type="text" class="form-control" placeholder="Type what you want and enter">
                    <span class="search-close">&times;</span>
                </div><!-- Site search end -->

            </div><!--/ Row end -->
        </div><!--/ Container end -->

    </div><!-- Menu wrapper end -->

    <div class="trending-light hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="trending-title">Últimas</h3>
                    <div id="trending-slide" class="owl-carousel owl-theme trending-slide">

                        @foreach(App\Post::limit(10)->get() as $trending)

                        <div class="item">
                            <div class="post-content">
                                <h2 class="post-title title-small">
                                    <a href="#">{{ $trending->title }}</a>
                                </h2>
                            </div><!-- Post content end -->
                        </div>

                        @endforeach

                    </div><!-- Carousel end -->
                </div><!-- Col end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </div><!--/ Trending end -->