@extends('layouts.app')
@section('content')
    <section id="news" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

            {{--                <div class="col-md-12 col-sm-12">--}}
            <!-- SECTION TITLE -->
                {{--                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">--}}
                {{--                        <h2>Tin Nổi Bật</h2> <a href="#">Xem Thêm</a>--}}
                {{--                    </div>--}}
            </div>

            @foreach($posts as $key => $item)

                <div class="col-md-4 col-sm-6" style="margin-bottom: 50px">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <a href="{{ route('posts.show', $item->slug) }}">
                            <img src="{{ asset($item->thumbnail) }}" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                            <span>{{ $item->created_at }}</span>
                            <h3><a href="{{ (route('posts.show', $item->slug)) }}">{{ $item->title }}</a></h3>
                            {{--                            <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>--}}
                            {{--                            <div class="author">--}}
                            {{--                                <img src="images/author-image.jpg" class="img-responsive" alt="">--}}
                            {{--                                <div class="author-info">--}}
                            {{--                                    <h5>Jeremie Carlson</h5>--}}
                            {{--                                    <p>CEO / Founder</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
                @if($key%3 === 2)
                        <div class="clearfix"></div>
                @endif()

            @endforeach

            <div class="col-md-12 col-sm-12" style="display: flex; justify-content: flex-end">
                {{ $posts->links() }}
            </div>

        </div>
        </div>
    </section>
@endsection
