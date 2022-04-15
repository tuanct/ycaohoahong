@extends('layouts.app')
@section('content')
    @include('layouts.banner')
    <!-- NEWS -->
    @foreach($categories as $key => $category)
        @if(!empty($category->posts))
            <section id="news" data-stellar-background-ratio="0.5" style="@if($key%2) background: #FFFFFF @endif">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12">
                            <!-- SECTION TITLE -->
                            <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                <h2>{!! $category->name !!}</h2> <a href="{{ route('posts.index', ['category' => $category->id]) }}"><b>Xem Thêm</b></a>
                            </div>
                        </div>

                        @foreach($category->posts as $post)
                            <div class="col-md-4 col-sm-6">
                                <!-- NEWS THUMB -->
                                <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                                    <a href="{{ route('posts.show', $post->slug) }}">
                                        <img src="{{ asset($post->thumbnail) }}" class="img-responsive" alt="">
                                    </a>
                                    <div class="news-info">
                                        <span>{{ formatDatetime($post->created_at) }}</span>
                                        <h3><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
        @endif
    @endforeach

    <section id="social" data-stellar-background-ratio="1.5" style="background-color: #f9f9f9">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Tương Tác Xã Hội</h2>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="fb-page" data-href="https://www.facebook.com/phongkhamycao.hoahong" data-tabs="timeline"
                         data-width="" data-height="200px" data-small-header="false" data-adapt-container-width="true"
                         data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/phongkhamycao.hoahong" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/phongkhamycao.hoahong">Phòng Khám Đa Khoa Y Cao Hoa
                                Hồng</a></blockquote>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="fb-page"
                         data-href="https://www.facebook.com/Da-Li&#x1ec5;u-Th&#x1ea9;m-M&#x1ef9;-Hoa-H&#x1ed3;ng-450429172455593/"
                         data-tabs="timeline" data-width="" data-height="200px" data-small-header="false"
                         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote
                            cite="https://www.facebook.com/Da-Li&#x1ec5;u-Th&#x1ea9;m-M&#x1ef9;-Hoa-H&#x1ed3;ng-450429172455593/"
                            class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/Da-Li&#x1ec5;u-Th&#x1ea9;m-M&#x1ef9;-Hoa-H&#x1ed3;ng-450429172455593/">Da
                                Liễu Thẩm Mỹ Hoa Hồng</a></blockquote>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/WcKe9hkYTxE"
                            loading="lazy"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
