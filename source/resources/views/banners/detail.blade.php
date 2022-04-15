@extends('layouts.app')
@section('content')

    <!-- NEWS DETAIL -->
    <section id="news-detail" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- NEWS THUMB -->
                    <div class="news-detail-thumb">
                        <div class="news-image">
                            <img src="{{ $banner->thumbnail }}" class="img-responsive" alt="">
                        </div>
                        <h3>{{ $banner->title }}</h3>
                        {!! $banner->content !!}
                    </div>
                </div>

{{--                @if ($recentPosts->count())--}}
{{--                    <div class="col-md-4 col-sm-5">--}}
{{--                        <div class="news-sidebar">--}}

{{--                            <div class="recent-post">--}}
{{--                                <h4>Tin Tức {{ $banner->category->name }} Khác</h4>--}}

{{--                                @foreach($recentPosts as $item)--}}
{{--                                    <div class="media">--}}
{{--                                        <div class="media-object pull-left">--}}
{{--                                            <a href="{{ route('posts.show', $item->slug) }}">--}}
{{--                                                <div style="overflow: hidden; width: 80px; height: 80px;">--}}
{{--                                                    <img src="{{ $item->thumbnail }}" class="img-responsive" alt="">--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-body">--}}
{{--                                            <h4 class="media-heading"><a--}}
{{--                                                    href="{{ route('posts.show', $item->slug) }}">{{ $item->title }}</a>--}}
{{--                                            </h4>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach()--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif()--}}
            </div>
        </div>
    </section>
@endsection

@section('fb_title', $banner->title)
@section('fb_image', $banner->thumbnail)
@section('fb_description', $banner->content)
@section('fb_url', route('posts.show', $banner->slug))
