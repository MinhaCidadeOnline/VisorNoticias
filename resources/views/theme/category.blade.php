@extends('theme.master.app', ['data' => $category])

@section('theme')

@include('theme.includes.header')

<section class="block-wrapper block-wrapper-custom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                <div class="block category-listing category-style2">
                    <h3 class="block-title"><span>{{ $category->title }}</span></h3>

                    @foreach($posts as $post)
                    <div class="post-block-style post-list clearfix">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <div class="post-thumb thumb-float-style">
                                    <a href="{{ route('category', $post->name) }}">
                                        <img src="{{ thumbnail($post->image, 400, 240) }}" title="{{ $post->title }}" alt="{{ $post->title }}" class="img-responsive" />
                                    </a>
                                </div>
                            </div><!-- Img thumb col end -->

                            <div class="col-md-7 col-sm-6">
                                <div class="post-content">
                                    <h2 class="post-title title-large"><a href="{{ route('category', $post->name) }}">{{ $post->title }}</a></h2>
                                    <div class="post-meta">
                                        <span class="post-author"><a href="#">{{ $post->user->name }}</a></span>
                                        <span class="post-date">{{ $post->created_at->diffForHumans() }}</span>
                                    </div>
                                    <p>{{ str_limit($post->subtitle, 150, '...') }}</p>
                                </div><!-- Post content end -->
                            </div><!-- Post col end -->
                        </div><!-- 1st row end -->
                    </div>
                    @endforeach

                </div><!-- Block Technology end -->

                <div class="paging">
                    {{ $posts->render() }}
                </div>

            </div><!-- Content Col end -->

            @include('theme.includes.sidebar')

        </div><!-- Row end -->
    </div><!-- Container end -->
</section>

@include('theme.includes.footer')

@endsection