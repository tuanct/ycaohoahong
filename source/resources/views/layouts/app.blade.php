<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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


<!-- MAKE AN APPOINTMENT -->
{{--<section id="appointment" data-stellar-background-ratio="3">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-md-6 col-sm-6">--}}
{{--                <img src="images/appointment-image.jpg" class="img-responsive" alt="">--}}
{{--            </div>--}}

{{--            <div class="col-md-6 col-sm-6">--}}
{{--                <!-- CONTACT FORM HERE -->--}}
{{--                <form id="appointment-form" role="form" method="post" action="#">--}}

{{--                    <!-- SECTION TITLE -->--}}
{{--                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">--}}
{{--                        <h2>Make an appointment</h2>--}}
{{--                    </div>--}}

{{--                    <div class="wow fadeInUp" data-wow-delay="0.8s">--}}
{{--                        <div class="col-md-6 col-sm-6">--}}
{{--                            <label for="name">Name</label>--}}
{{--                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">--}}
{{--                        </div>--}}

{{--                        <div class="col-md-6 col-sm-6">--}}
{{--                            <label for="email">Email</label>--}}
{{--                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">--}}
{{--                        </div>--}}

{{--                        <div class="col-md-6 col-sm-6">--}}
{{--                            <label for="date">Select Date</label>--}}
{{--                            <input type="date" name="date" value="" class="form-control">--}}
{{--                        </div>--}}

{{--                        <div class="col-md-6 col-sm-6">--}}
{{--                            <label for="select">Select Department</label>--}}
{{--                            <select class="form-control">--}}
{{--                                <option>General Health</option>--}}
{{--                                <option>Cardiology</option>--}}
{{--                                <option>Dental</option>--}}
{{--                                <option>Medical Research</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}

{{--                        <div class="col-md-12 col-sm-12">--}}
{{--                            <label for="telephone">Phone Number</label>--}}
{{--                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">--}}
{{--                            <label for="Message">Additional Message</label>--}}
{{--                            <textarea class="form-control" rows="5" id="message" name="message"--}}
{{--                                      placeholder="Message"></textarea>--}}
{{--                            <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


<!-- FOOTER -->
<footer data-stellar-background-ratio="5">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">PHÒNG KHÁM ĐA KHOA Y CAO HOA HỒNG</h4>
                    <p>Bệnh viện Phụ Sản Hà Nội là bệnh viện chuyên khoa hạng I của thành phố trong lĩnh vực Sản Phụ Khoa và Kế hoạch hóa gia đình.</p>

                    <div class="contact-info">
                        <p><i class="fa fa-phone"></i> 010-070-0170</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                        <p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/phongkhamycao.hoahong"
                                                               attr="facebook icon">Phòng Khám Đa Khoa Y Cao Hoa Hồng</a></p>
                    </div>
                </div>
            </div>

{{--            <div class="col-md-4 col-sm-4">--}}
{{--                <div class="footer-thumb">--}}
{{--                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">TIN NỔI BẬT</h4>--}}
{{--                    <div class="latest-stories">--}}
{{--                        <div class="stories-image">--}}
{{--                            <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>--}}
{{--                        </div>--}}
{{--                        <div class="stories-info">--}}
{{--                            <a href="#"><h5>Amazing Technology</h5></a>--}}
{{--                            <span>March 08, 2018</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="latest-stories">--}}
{{--                        <div class="stories-image">--}}
{{--                            <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>--}}
{{--                        </div>--}}
{{--                        <div class="stories-info">--}}
{{--                            <a href="#"><h5>New Healing Process</h5></a>--}}
{{--                            <span>February 20, 2018</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <div class="opening-hours">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">THỜI GIAN MỞ CỬA</h4>
                        <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                        <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                        <p>Sunday <span>Closed</span></p>
                    </div>

                    <ul class="social-icon">
{{--                        <li><a href="https://www.facebook.com/phongkhamycao.hoahong" class="fa fa-facebook-square"--}}
{{--                               attr="facebook icon"></a></li>--}}
{{--                        <li><a href="#" class="fa fa-twitter"></a></li>--}}
{{--                        <li><a href="#" class="fa fa-instagram"></a></li>--}}
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <!-- GOOGLE MAP -->
                <section id="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.656472076414!2d105.90694781534188!3d20.64285468620866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135c945c657896f%3A0x3eca61ffdaec4486!2sPh%C3%B2ng%20Kh%C3%A1m%20%C4%90a%20Khoa%20Y%20Cao%20Hoa%20H%E1%BB%93ng%20-%20Hoa%20Hong%20High-tech%20General%20Clinic!5e0!3m2!1svi!2s!4v1649094792977!5m2!1svi!2s"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
            </div>

            <div class="col-md-12 col-sm-12 border-top">
                <div class="col-md-4 col-sm-6">
                    <div class="copyright-text">
                        <p>Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }}

{{--                            | Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a></p>--}}
                    </div>
                </div>
{{--                <div class="col-md-6 col-sm-6">--}}
{{--                    <div class="footer-link">--}}
{{--                        <a href="#">Laboratory Tests</a>--}}
{{--                        <a href="#">Departments</a>--}}
{{--                        <a href="#">Insurance Policy</a>--}}
{{--                        <a href="#">Careers</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-md-offset-6 col-sm-offset-6 col-md-2 col-sm-2 text-align-center">
                    <div class="angle-up-btn">
                        <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                class="fa fa-angle-up"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "450429172455593");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v13.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</footer>
<!-- SCRIPTS -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
