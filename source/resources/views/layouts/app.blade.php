<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website"/>
    <meta property="og:url"
          content="@if(View::hasSection('fb_url')) @yield('fb_url') @else https://ycaohoahong.com @endif "/>
    <meta property="og:title"
          content="@if(View::hasSection('fb_title')) @yield('fb_title') @else Phòng Khám Đa Khoa Y Cao Hoa Hồng - Hoa Hong High-tech General Clinic @endif "/>
    <meta property="og:description"
          content="@if(View::hasSection('fb_description')) @yield('fb_description') @else Phòng Khám Đa Khoa Y Cao Hoa Hồng - Hoa Hong High-tech General Clinic @endif "/>
    <meta property="og:image"
          content="@if(View::hasSection('fb_image')) @yield('fb_image') @else {{ asset('images/logo.svg') }} @endif "/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>

@include('layouts.header')

@yield('content')

<!-- GOOGLE MAP -->
<section id="google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.656472076414!2d105.90694781534188!3d20.64285468620866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135c945c657896f%3A0x3eca61ffdaec4486!2sPh%C3%B2ng%20Kh%C3%A1m%20%C4%90a%20Khoa%20Y%20Cao%20Hoa%20H%E1%BB%93ng%20-%20Hoa%20Hong%20High-tech%20General%20Clinic!5e0!3m2!1svi!2s!4v1649094792977!5m2!1svi!2s"
        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- FOOTER -->
<footer data-stellar-background-ratio="5">
    <div class="container">
        <div class="row">


            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">PHÒNG KHÁM ĐA KHOA Y CAO HOA HỒNG</h4>
                    <p>KHÁM BẢO HIỂM Y TẾ THÔNG TUYẾN<br>
                        Đầy đủ đa khoa : Nội - Ngoại - Sản - Nhi - Đông y - Nha khoa - Da liễu thẩm mỹ - Mắt, kính mắt
                        thuốc - Tai mũi họng - Phòng tiêm chủng vắc xin dịch vụ</p>

                    <div class="contact-info">
                        <p><i class="fa fa-phone"></i> <a href="tel:0788688333">0788.688.333</a></p>
                        <p><i class="fa fa-facebook-square"></i> <a
                                href="https://www.facebook.com/phongkhamycao.hoahong"
                                attr="facebook icon">Phòng Khám Đa Khoa Y Cao Hoa Hồng</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">CÔNG TY TNHH DỊCH VỤ Y TẾ HUỆ LINH <br>
                        HUE LINH HEALTH SERVICE AND TRADE COMPANY LIMITED</h4>

                    <div>
                        <p><i class="fa fa-fax" style="color: #4C9B1A"></i> Tax code/MST: 07008266</p>
                        <p><i class="fa fa-phone" style="color: #4C9B1A"></i> Phone/Số Điện thoại: 0902076131 - 0978397113 - 0788688333</p>
                        <p><i class="fa fa-map-marker" style="color: #4C9B1A"></i> Address/Địa chỉ: Dong Hai Group - Duy Hai Ward, Ha Nam <br>
                            Tổ Dân Phố Đông Hải - Phường Duy Hải - Thị Xã Duy Tiên - Tỉnh Hà Nam</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <div class="opening-hours">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">THỜI GIAN MỞ CỬA</h4>
                        <p>Tất Cả Các Ngày Trong Tuần <br>(Cả Thứ 7, Chủ Nhật, Ngày Lễ) <span> 07:00 - 20:00</span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 border-top">
                <div class="col-md-4 col-sm-6">
                    <div class="copyright-text">
                        <p>Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }}

                        {{--                            | Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a></p>--}}
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-link">
                        <a href="{{ route('about') }}">Giới Thiệu</a>
                        <a href="{{ route('posts.index', ['category' => \App\Models\Category::TYPE_POST]) }}">Kiến Thức Y Khoa</a>
                        <a href="{{ route('posts.index', ['category' => \App\Models\Category::TYPE_NEWS]) }}">Tin Tức</a>
                        <a href="{{ route('contact') }}">Liên Hệ</a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 text-align-center">
                    <div class="angle-up-btn">
                        <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                class="fa fa-angle-up"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="more_action_right">
        <ul>
            <li><a href="tel:0788688333"><img src="{{ asset('images/phone-call.png') }}"></a></li>
        </ul>
    </div>

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "481609849048698");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v13.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="zalo-chat-widget" data-oaid="1349867481366251779" data-welcome-message="Rất vui khi được hỗ trợ bạn!"
         data-autopopup="0" data-width="" data-height="" style="bottom: 100px; right: 25px"></div>

    <script async src="https://sp.zalo.me/plugins/sdk.js"></script>
</footer>
<!-- SCRIPTS -->
<script async src="{{ asset('js/jquery.js') }}"></script>
<script async src="{{ asset('js/bootstrap.min.js') }}"></script>
<script async src="{{ asset('js/jquery.sticky.js') }}"></script>
<script async src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script async src="{{ asset('js/wow.min.js') }}"></script>
<script async src="{{ asset('js/smoothscroll.js') }}"></script>
<script async src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script async src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
