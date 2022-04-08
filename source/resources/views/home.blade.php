@extends('layouts.app')
@section('content')
    @include('layouts.banner')
    <!-- NEWS -->
    <section id="news" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Tin Nổi Bật</h2> <a href="{{ route('posts.index', ['category' => \App\Models\Category::TYPE_NEWS]) }}"><b>Xem Thêm</b></a>
                    </div>
                </div>

                @foreach($news as $item)

                    <div class="col-md-4 col-sm-6">
                        <!-- NEWS THUMB -->
                        <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('posts.show', $item->slug) }}">
                                <img src="{{ asset($item->thumbnail) }}" class="img-responsive" alt="">
                            </a>
                            <div class="news-info">
                                <span>{{ $item->created_at }}</span>
                                <h3><a href="{{ route('posts.show', $item->slug) }}">{{ $item->title }}</a></h3>
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

                @endforeach

            </div>
        </div>
    </section>

    <section id="team" data-stellar-background-ratio="1">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Kiến Thức Y Khoa</h2> <a href="{{ route('posts.index', ['category' => \App\Models\Category::TYPE_POST]) }}"><b>Xem Thêm</b></a>
                    </div>
                </div>

                @foreach($posts as $item)

                    <div class="col-md-4 col-sm-6">
                        <a href="{{ route('posts.show', $item->slug) }}">
                            <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                                <img src="{{ asset($item->thumbnail) }}" class="img-responsive" alt="">

                                <div class="team-info">
                                    <h3>{{ $item->title }}</h3>
                                    {{--                                <p>General Principal</p>--}}
                                    {{--                                <div class="team-contact-info">--}}
                                    {{--                                    <p><i class="fa fa-phone"></i> 010-020-0120</p>--}}
                                    {{--                                    <p><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p>--}}
                                    {{--                                </div>--}}
                                    {{--                                <ul class="social-icon">--}}
                                    {{--                                    <li><a href="#" class="fa fa-linkedin-square"></a></li>--}}
                                    {{--                                    <li><a href="#" class="fa fa-envelope-o"></a></li>--}}
                                    {{--                                </ul>--}}
                                </div>

                            </div>
                        </a>
                    </div>

                @endforeach

            </div>
        </div>
    </section>

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
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
