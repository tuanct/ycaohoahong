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
                        {{--                        <div class="news-social-share">--}}
                        {{--                            <h4>Share this article</h4>--}}
                        {{--                            <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>Facebook</a>--}}
                        {{--                            <a href="#" class="btn btn-success"><i class="fa fa-twitter"></i>Twitter</a>--}}
                        {{--                            <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i>Google+</a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>

                @if ($recentPosts->count())
                    <div class="col-md-4 col-sm-5">
                        <div class="news-sidebar">
                            {{--                        <div class="news-author">--}}
                            {{--                            <h4>About the author</h4>--}}
                            {{--                            <p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque.</p>--}}
                            {{--                        </div>--}}

                            <div class="recent-post">
                                <h4>Tin Tức Khác</h4>

                                @foreach($recentPosts as $item)
                                    <div class="media">
                                        <div class="media-object pull-left">
                                            <a href="{{ route('posts.show', $item->id) }}">
                                                <div style="overflow: hidden; width: 80px; height: 80px;">
                                                    <img src="{{ $item->thumbnail }}" class="img-responsive" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a
                                                    href="{{ route('posts.show', $item->id) }}">{{ $item->title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach()
                            </div>

                            {{--                        <div class="news-categories">--}}
                            {{--                            <h4>Categories</h4>--}}
                            {{--                            <li><a href="#"><i class="fa fa-angle-right"></i> Dental</a></li>--}}
                            {{--                            <li><a href="#"><i class="fa fa-angle-right"></i> Cardiology</a></li>--}}
                            {{--                            <li><a href="#"><i class="fa fa-angle-right"></i> Health</a></li>--}}
                            {{--                            <li><a href="#"><i class="fa fa-angle-right"></i> Consultant</a></li>--}}
                            {{--                        </div>--}}

                            {{--                        <div class="news-ads sidebar-ads">--}}
                            {{--                            <h4>Sidebar Banner Ad</h4>--}}
                            {{--                        </div>--}}

                            {{--                        <div class="news-tags">--}}
                            {{--                            <h4>Tags</h4>--}}
                            {{--                            <li><a href="#">Pregnancy</a></li>--}}
                            {{--                            <li><a href="#">Health</a></li>--}}
                            {{--                            <li><a href="#">Consultant</a></li>--}}
                            {{--                            <li><a href="#">Medical</a></li>--}}
                            {{--                            <li><a href="#">Doctors</a></li>--}}
                            {{--                            <li><a href="#">Social</a></li>--}}
                            {{--                        </div>--}}
                        </div>
                    </div>
                @endif()
            </div>
        </div>
    </section>
@endsection
