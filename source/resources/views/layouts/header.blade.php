<!-- HEADER -->
<header>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-5">
                <p>Xin Chào Tới Phòng Khám Đa Khoa Y Cao Hoa Hồng</p>
            </div>

            <div class="col-md-8 col-sm-7 text-align-right">
                <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
            </div>

        </div>
    </div>
</header>


<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <a href="{{ route('home') }}" class="navbar-brand">Phòng Khám Đa Khoa Y Cao Hoa Hồng</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('home') }}" class="smoothScroll">Trang Chủ</a></li>
                <li><a href="#about" class="smoothScroll">Giới Thiệu</a></li>
                <li><a href="{{ route('posts.index', ['category' => \App\Models\Category::TYPE_POST]) }}" class="smoothScroll">Kiến Thức Y Khoa</a></li>
                <li><a href="{{ route('posts.index', ['category' => \App\Models\Category::TYPE_NEWS]) }}" class="smoothScroll">Tin Tức</a></li>
                <li><a href="javascript:void(0)" class="smoothScroll">Liên Hệ</a></li>
{{--                <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>--}}
            </ul>
        </div>

    </div>
</section>
