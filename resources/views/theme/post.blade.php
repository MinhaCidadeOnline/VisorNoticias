@extends('theme.master.app', ['data' => $post])

@section('theme')

@include('theme.includes.header')

<section class="block-wrapper block-wrapper-custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                <div class="single-post">

                    <div class="post-title-area">
                        <a class="post-cat" href="{{ route('category', $post->category->name) }}">{{ $post->category->title }}</a>
                        <h2 class="post-title">{{ $post->title }}</h2>
                        <div class="post-meta">
                            <span class="post-author">
                                Por <a href="#">{{ $post->user->name }}</a>
                            </span>
                            <span class="post-date"><i class="fa fa-clock-o"></i> {{ $post->created_at->diffForHumans() }}</span>
                        </div>
                    </div><!-- Post title end -->

                    <div class="post-content-area">
                        <div class="post-media post-featured-image">
                            <img src="{{ thumbnail($post->image, 750, 380) }}" alt="" class="img-responsive">
                        </div>
                        <div class="entry-content">
                            <p>{!! $post->body !!}</p>
                        </div><!-- Entery content end -->

                        <div class="share-items clearfix">
                            <ul class="post-social-icons unstyled">
                                <li class="facebook">
                                    <a href="https://www.facebook.com/sharer.php?u={{ route('category', $post->name) }}" target="_blank">
                                        <i class="fa fa-facebook"></i> 
                                        <span class="ts-social-title">Facebook</span>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com/intent/tweet?text={{ $post->title }}&url={{ route('category', $post->name) }}" target="_blank">
                                        <i class="fa fa-twitter"></i> 
                                        <span class="ts-social-title">Twitter</span>
                                    </a>
                                </li>
                                <li class="gplus">
                                    <a href="https://plus.google.com/share?url={{ route('category', $post->name) }}" target="_blank">
                                        <i class="fa fa-google-plus"></i> 
                                        <span class="ts-social-title">Google +</span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- Share items end -->

                    </div><!-- post-content end -->
                </div><!-- Single post end -->

                <div class="related-posts block">
                    <h3 class="block-title"><span>Veja Tambem</span></h3>

                    <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">

                        @foreach(DB::table('posts')->where('id', '!=', $post->id)->limit(6)->get() as $item)

                        <div class="item">
                            <div class="post-block-style clearfix">
                                <div class="post-thumb">
                                    <a href="{{ route('category', $item->name) }}"><img src="{{ thumbnail($item->image, 260, 155) }}" alt="" class="img-responsive"></a>
                                </div>
                                <div class="post-content">
                                    <h2 class="post-title title-medium">
                                        <a href="{{ route('category', $item->name) }}">{{ $item->title }}</a>
                                    </h2>
                                </div><!-- Post content end -->
                            </div><!-- Post Block style end -->
                        </div>
                        @endforeach

                    </div><!-- Carousel end -->

                </div><!-- Related posts end -->

            </div><!-- Content Col end -->

            @include('theme.includes.sidebar')

        </div><!-- Row end -->
    </div><!-- Container end -->
</section>

@include('theme.includes.footer')

@endsection