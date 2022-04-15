@extends('layouts.app')
@section('content')

    <!-- NEWS DETAIL -->
    <section id="news-detail" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-7">
                    <!-- NEWS THUMB -->
                    <div class="news-detail-thumb">
                        <div class="news-image">
                            <img src="{{ $post->thumbnail }}" class="img-responsive" alt="">
                        </div>
                        <h3>{{ $post->title }}</h3>
                        {!! $post->content !!}
                    </div>
                </div>

                @if ($recentPosts->count())
                    <div class="col-md-4 col-sm-5">
                        <div class="news-sidebar">

                            <div class="recent-post">
                                <h4>Tin Tức {{ $post->category->name }} Khác</h4>

                                @foreach($recentPosts as $item)
                                    <div class="media">
                                        <div class="media-object pull-left">
                                            <a href="{{ route('posts.show', $item->slug) }}">
                                                <div style="overflow: hidden; width: 80px; height: 80px;">
                                                    <img src="{{ $item->thumbnail }}" class="img-responsive" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a
                                                    href="{{ route('posts.show', $item->slug) }}">{{ $item->title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach()
                            </div>
                        </div>
                    </div>
                @endif()
            </div>
        </div>
    </section>
@endsection

@section('fb_title', $post->title)
@section('fb_image', $post->thumbnail)
@section('fb_description', $post->content)
@section('fb_url', route('posts.show', $post->slug))
