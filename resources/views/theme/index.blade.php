@extends('theme.master.app', ['data' => $data])

@section('theme')

    @include('theme.includes.header')

    <main class="block-wrapper block-wrapper-custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <div id="featured-slider" class="owl-carousel owl-theme featured-slider content-bottom">

                        @foreach(App\Post::where('tag','destaque')->limit(3)->get() as $slide)

                            <div class="item" style="background-image:url({{ thumbnail($slide->image, 750, 420) }})">
                                <div class="featured-post">
                                    <div class="post-content">
                                        <a class="post-cat" href="{{ route('category', $slide->category->name) }}">{{ $slide->category->title }}</a>
                                        <h2 class="post-title title-extra-large">
                                            <a href="{{ route('category', $slide->name) }}">{{ $slide->title }}</a>
                                        </h2>
                                    </div>
                                </div><!--/ Featured post end -->

                                @endforeach

                            </div><!-- Item 1 end -->


                    </div><!-- Featured owl carousel end-->

                    <!--- Featured Tab startet -->
                    <div class="featured-tab color-red featured-tab-custom">
                        <h3 class="block-title"><span>Technology</span></h3>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                                <span class="tab-head">
                                    <span class="tab-text-title">Gadgets</span>					
                                </span>
                                </a>
                            </li>
                            <li>
                                <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                                <span class="tab-head">
                                    <span class="tab-text-title">Games</span>					
                                </span>
                                </a>
                            </li>
                            <li>
                                <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
                                <span class="tab-head">
                                    <span class="tab-text-title">Robotics</span>					
                                </span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="tab_a">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="post-block-style clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="images/news/tech/gadget1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <a class="post-cat" href="#">Gadgets</a>
                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="#">The best MacBook Pro alternatives in 2017 for Apple users</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-author"><a href="#">John Doe</a></span>
                                                    <span class="post-date">Feb 24, 2017</span>
                                                </div>
                                                <p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
                                            </div><!-- Post content end -->
                                        </div><!-- Post Block style end -->
                                    </div><!-- Col end -->

                                    <div class="col-md-6 col-sm-6">
                                        <div class="list-post-block">
                                            <ul class="list-post">
                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/news/tech/gadget2.jpg" alt=""/>
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Samsung Gear S3 review: A whimper, when smartwatches need a bang</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 13, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 1 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/news/tech/gadget3.jpg" alt=""/>
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Panasonic's new Sumix CH7 an ultra portable filmmaker's dream</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Jan 11, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 2 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/news/tech/gadget4.jpg" alt=""/>
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Soaring through Southern Patagonia with the Premium Byrd drone</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 19, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 3 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/news/tech/gadget5.jpg" alt=""/>
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Google Assistant starts calling out to all recent Android phones</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 27, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 4 end -->
                                            </ul><!-- List post end -->
                                        </div><!-- List post block end -->
                                    </div><!-- List post Col end -->
                                </div><!-- Tab pane Row 1 end -->
                            </div><!-- Tab pane 1 end -->

                            <div class="tab-pane animated fadeInRight" id="tab_b">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="post-block-style clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="images/news/tech/game1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <a class="post-cat" href="#">Games</a>
                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="#">Historical heroes and robot dinosaurs: New games on our... </a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-author"><a href="#">John Doe</a></span>
                                                    <span class="post-date">Feb 24, 2017</span>
                                                </div>
                                                <p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
                                            </div><!-- Post content end -->
                                        </div><!-- Post Block style end -->
                                    </div><!-- Col end -->

                                    <div class="col-md-6 col-sm-6">
                                        <div class="list-post-block">
                                            <ul class="list-post">
                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/news/tech/game2.jpg" alt=""/>
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Lindie game plonks players in front of huge starship command cent…</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 13, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 1 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/news/tech/game3.jpg" alt=""/>
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Meet Twitch: Mintendo’s new console mixes handheld and console…</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Jan 11, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 2 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/news/tech/game4.jpg" alt=""/>
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Super Tario Run isn’t groundbreaking, but it has Mintendo charm</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 19, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 3 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/news/tech/game5.jpg" alt=""/>
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Oazer and Lacon bring eSport expertise to new PS4 controller…</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 27, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 4 end -->
                                            </ul><!-- List post end -->
                                        </div><!-- List post block end -->
                                    </div><!-- List post Col end -->
                                </div><!-- Tab pane Row 2 end -->
                            </div><!-- Tab pane 2 end -->

                            <div class="tab-pane animated fadeInLeft" id="tab_c">

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="post-block-style clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="images/news/tech/robot1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <a class="post-cat" href="#">Robotics</a>
                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="#">There's no escaping Watsone Dynamics' wheeled jumping robot</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-author"><a href="#">John Doe</a></span>
                                                    <span class="post-date">Feb 24, 2017</span>
                                                </div>
                                                <p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
                                            </div><!-- Post content end -->
                                        </div><!-- Post Block style end -->
                                    </div><!-- Col end -->

                                    <div class="col-md-6 col-sm-6">
                                        <div class="list-post-block">
                                            <ul class="list-post">
                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/news/tech/robot2.jpg" alt=""/>
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Robot Life on Mars! Meet the Machines Exploring the Red Planet To…</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 13, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 1 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/news/tech/robot3.jpg" alt=""/>
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Amaging China mech suit aims to assist with Lukushima cleanup</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Jan 11, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 2 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/news/tech/robot4.jpg" alt=""/>
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Taddler robot provides insights into early childhood learning</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 19, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 3 end -->

                                                <li class="clearfix">
                                                    <div class="post-block-style post-float clearfix">
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/news/tech/robot5.jpg" alt=""/>
                                                            </a>
                                                        </div><!-- Post thumb end -->

                                                        <div class="post-content">
                                                            <h2 class="post-title title-small">
                                                                <a href="#">Robots in hospitals can be quite handy to navigate around the ho…</a>
                                                            </h2>
                                                            <div class="post-meta">
                                                                <span class="post-date">Feb 27, 2017</span>
                                                            </div>
                                                        </div><!-- Post content end -->
                                                    </div><!-- Post block style end -->
                                                </li><!-- Li 4 end -->
                                            </ul><!-- List post end -->

                                        </div><!-- List post block end -->
                                    </div><!-- List post Col end -->
                                </div><!-- Tab pane Row 3 end -->
                            </div><!-- Tab pane 3 end -->
                        </div><!-- tab content -->
                    </div><!-- Technology Tab end -->

                    <div class="gap-40"></div>

                </div><!-- Content Col end -->

                @include('theme.includes.sidebar')

            </div><!-- Row end -->
        </div><!-- Container end -->
        </section><!-- First block end -->


        <section class="block-wrapper video-block">
            <div class="container">
                <div class="row">
                    <div class="video-tab clearfix">
                        <h2 class="video-tab-title">Watch Now</h2>
                        <div class="col-md-7 pad-r-0">
                            <div class="tab-content">
                                <div class="tab-pane active animated fadeIn" id="video1">
                                    <div class="post-overaly-style clearfix">
                                        <div class="post-thumb">
                                            <img class="img-responsive" src="images/news/video/video4.jpg" alt=""/>
                                            <a class="popup" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
                                                <div class="video-icon">
                                                    <i class="fa fa-play"></i>
                                                </div>
                                            </a>
                                        </div><!-- Post thumb end -->
                                        <div class="post-content">
                                            <a class="post-cat" href="#">Video</a>
                                            <h2 class="post-title">
                                                <a href="#">Is Running Good for You, Health Benefits of Morning Running</a>
                                            </h2>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Overaly Article end -->
                                </div><!--Tab pane 1 end-->

                                <div class="tab-pane animated fadeIn" id="video2">
                                    <div class="post-overaly-style clearfix">
                                        <div class="post-thumb">
                                            <img class="img-responsive" src="images/news/video/video3.jpg" alt=""/>
                                            <a class="popup" href="https://www.youtube.com/embed/wJF5NXygL4k?autoplay=1&amp;loop=1">
                                                <div class="video-icon">
                                                    <i class="fa fa-play"></i>
                                                </div>
                                            </a>
                                        </div><!-- Post thumb end -->
                                        <div class="post-content">
                                            <a class="post-cat" href="#">Video</a>
                                            <h2 class="post-title title-medium">
                                                <a href="#">Breeze through 17 locations in Europe in this breathtaking video</a>
                                            </h2>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Overaly Article 2 end -->
                                </div><!--Tab pane 2 end-->

                                <div class="tab-pane animated fadeIn" id="video3">
                                    <div class="post-overaly-style clearfix">
                                        <div class="post-thumb">
                                            <img class="img-responsive" src="images/news/video/video2.jpg" alt=""/>
                                            <a class="popup" href="https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&amp;loop=1">
                                                <div class="video-icon">
                                                    <i class="fa fa-play"></i>
                                                </div>
                                            </a>
                                        </div><!-- Post thumb end -->
                                        <div class="post-content">
                                            <a class="post-cat" href="#">Video</a>
                                            <h2 class="post-title title-medium">
                                                <a href="#">TG G6 will have dual 13-megapixel cameras on the back</a>
                                            </h2>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Overaly Article 2 end -->
                                </div><!--Tab pane 2 end-->


                            </div><!-- Tab content end -->
                        </div><!--Tab col end -->

                        <div class="col-md-5 pad-l-0">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a class="animated fadeIn" href="#video1" data-toggle="tab">
                                        <div class="post-thumb">
                                            <img class="img-responsive" src="images/news/video/video4.jpg" alt=""/>
                                        </div><!-- Post thumb end -->
                                        <h3>Is Running Good for You, Health Benefits of Morning Running</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="animated fadeIn" href="#video2" data-toggle="tab">
                                        <div class="post-thumb">
                                            <img class="img-responsive" src="images/news/video/video3.jpg" alt=""/>
                                        </div><!-- Post thumb end -->
                                        <h3>Breeze through 17 locations in Europe in this breathtaking video</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="animated fadeIn" href="#video3" data-toggle="tab">
                                        <div class="post-thumb">
                                            <img class="img-responsive" src="images/news/video/video2.jpg" alt=""/>
                                        </div><!-- Post thumb end -->
                                        <h3>TG G6 will have dual 13-megapixel cameras on the back</h3>
                                    </a>
                                </li>
                            </ul>
                        </div><!--Tab nav col end -->
                    </div><!-- Video tab end -->

                </div><!-- Row end -->
            </div><!-- Container end -->
        </section><!-- Video block end -->


        <section class="block-wrapper p-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="more-news block color-default">
                            <h3 class="block-title"><span>More News</span></h3>

                            <div id="more-news-slide" class="owl-carousel owl-theme more-news-slide">
                                <div class="item">
                                    <div class="post-block-style post-float-half clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="images/news/video/video1.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <a class="post-cat" href="#">Video</a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="#">KJerry's will sell food cream that tastes like your favorite video</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">John Doe</a></span>
                                                <span class="post-date">Mar 29, 2017</span>
                                            </div>
                                            <p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Block style 1 end -->

                                    <div class="gap-30"></div>

                                    <div class="post-block-style post-float-half clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="images/news/tech/game5.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <a class="post-cat" href="#">Games</a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="#">Oazer and Lacon bring eSport expertise to new PS4 controllers</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">John Doe</a></span>
                                                <span class="post-date">Mar 27, 2017</span>
                                            </div>
                                            <p>Pityful a rethoric question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of he...</p>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Block style 2 end -->

                                    <div class="gap-30"></div>

                                    <div class="post-block-style post-float-half clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="images/news/tech/game4.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <a class="post-cat" href="#">Games</a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="#">Super Tario Run isn’t groundbreaking, but it has Mintendo charm</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">John Doe</a></span>
                                                <span class="post-date">Feb 24, 2017</span>
                                            </div>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and ...</p>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Block style 3 end -->

                                    <div class="gap-30"></div>

                                    <div class="post-block-style post-float-half clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="images/news/tech/robot5.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <a class="post-cat" href="#">Robotics</a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="#">Robots in hospitals can be quite handy to navigate around the ho…</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">John Doe</a></span>
                                                <span class="post-date">Feb 24, 2017</span>
                                            </div>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and ...</p>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Block style 4 end -->
                                </div><!-- Item 1 end -->

                                <div class="item">
                                    <div class="post-block-style post-float-half clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="images/news/video/video2.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <a class="post-cat" href="#">Video</a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="#">TG G6 will have dual 13-megapixel cameras on the back</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">John Doe</a></span>
                                                <span class="post-date">Mar 29, 2017</span>
                                            </div>
                                            <p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Block style 5 end -->

                                    <div class="gap-30"></div>

                                    <div class="post-block-style post-float-half clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="images/news/video/video3.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <a class="post-cat" href="#">Video</a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="#">Breeze through 17 locations in Europe in this breathtaking v…</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">John Doe</a></span>
                                                <span class="post-date">Mar 31, 2017</span>
                                            </div>
                                            <p>Pityful a rethoric question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of he...</p>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Block style 6 end -->

                                    <div class="gap-30"></div>

                                    <div class="post-block-style post-float-half clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="images/news/lifestyle/architecture1.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <a class="post-cat" href="#">Architecture</a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="#">Science meets architecture in robotically woven, solar...</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">John Doe</a></span>
                                                <span class="post-date">Mar 23, 2017</span>
                                            </div>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and ...</p>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Block style 7 end -->

                                    <div class="gap-30"></div>

                                    <div class="post-block-style post-float-half clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="images/news/tech/game1.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <a class="post-cat" href="#">Robotics</a>
                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="#">Historical heroes and robot dinosaurs: New games on our…</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">John Doe</a></span>
                                                <span class="post-date">Feb 24, 2017</span>
                                            </div>
                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and ...</p>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Block style 8 end -->
                                </div><!-- Item 2 end -->

                            </div><!-- More news carousel end -->
                        </div><!--More news block end -->
                    </div><!-- Content Col end -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="sidebar sidebar-right">

                            <div class="widget color-default">
                                <h3 class="block-title"><span>Latest Reviews</span></h3>
                                <div class="list-post-block">
                                    <ul class="list-post review-post-list">
                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img class="img-responsive" src="images/news/review/review1.jpg" alt=""/>
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                    <h2 class="post-title">
                                                        <a href="#">Topical Resorts you need to know</a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <div class="review-stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div><!-- Post meta end -->
                                                </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 1 end -->

                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img class="img-responsive" src="images/news/review/review2.jpg" alt=""/>
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                    <h2 class="post-title">
                                                        <a href="#">Apple - MacBook Pro with Retina display</a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <div class="review-stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 2 end -->

                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img class="img-responsive" src="images/news/review/review3.jpg" alt=""/>
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                    <h2 class="post-title">
                                                        <a href="#">Asus ZenPad 3S 10 Z500M</a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <div class="review-stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 3 end -->

                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img class="img-responsive" src="images/news/review/review4.jpg" alt=""/>
                                                    </a>
                                                </div><!-- Post thumb end -->

                                                <div class="post-content">
                                                    <h2 class="post-title">
                                                        <a href="#">Polar M600 GPS Smart Sports Watch</a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <div class="review-stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div><!-- Post content end -->
                                            </div><!-- Post block style end -->
                                        </li><!-- Li 4 end -->

                                    </ul><!-- List post end -->
                                </div><!-- List post block end -->
                            </div><!-- Latest Review Widget end -->

                            <div class="widget m-bottom-0">
                                <h3 class="block-title"><span>Newsletter</span></h3>
                                <div class="ts-newsletter">
                                    <div class="newsletter-introtext">
                                        <h4>Get Updates</h4>
                                        <p>Subscribe our newsletter to get the best stories into your inbox!</p>
                                    </div>

                                    <div class="newsletter-form">
                                        <form action="#" method="post">
                                            <div class="form-group">
                                                <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
                                                <button class="btn btn-primary">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- Newsletter end -->
                            </div><!-- Newsletter widget end -->
                        </div><!--Sidebar right end -->
                    </div><!-- Sidebar col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </section><!-- 3rd block end -->

        <section class="ad-content-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <img class="img-responsive" src="{{ asset('images/anuncio-topo-1.jpg') }}" alt=""/>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </section><!-- Ad content two end -->

    @include('theme.includes.footer')

@endsection