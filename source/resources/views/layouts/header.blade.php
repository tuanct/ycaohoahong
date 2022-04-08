<!-- HEADER -->
<header>
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <p>Đơn Vị Khám Và Tiếp Nhận Bảo Hiểm Y Tế Thông Tuyến</p>
            </div>

            <div class="col-md-6 col-sm-6 text-align-right">
                <span class="phone-icon"><i class="fa fa-phone"></i> <a href="tel:0788688333">0788.688.333</a> </span>
                <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 7:00 - 20:00 (Tất Cả Các Ngày Trong Tuần)</span>
{{--                <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>--}}
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

            <a href="{{ route('home') }}" class="navbar-brand">PHÒNG KHÁM ĐA KHOA Y CAO HOA HỒNG</a>
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
