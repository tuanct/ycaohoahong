<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme">
                @foreach($banners as $banner)
                    <div class="item item-first" style="background-image: url({{ asset($banner->thumbnail) }})">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h1>{{ $banner->title }}</h1>
                                <a href="{{ route('posts.show', $banner->id) }}" class="section-btn btn btn-default smoothScroll">Xem Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section><?php
