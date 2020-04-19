<!doctype html>
<html lang="fa">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="چاره" >
        <meta name="description" content="چاره">
         <meta name="author" content="Peyman Nasirian , یمان نصیریان">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="{{asset("css/bootstra.css")}}">
        <!-- Animation Min CSS -->
        <link rel="stylesheet" href="{{asset("css/animate0.css")}}">
        <!-- Font Awesome Min CSS -->
        <link rel="stylesheet" href="{{asset("css/fontawes.css")}}">
        <!-- FlatIcon CSS -->
        <link rel="stylesheet" href="{{asset("css/flaticon.css")}}">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="{{asset("css/magnific.css")}}">
        <!-- Mean Menu CSS -->
        <link rel="stylesheet" href="{{asset("css/meanmenu.css")}}">
        <!-- Odometer Min CSS -->
        <link rel="stylesheet" href="{{asset("css/odometer.css")}}">
        <!-- Nice Select Min CSS -->
        <link rel="stylesheet" href="{{asset("css/nice-sel.css")}}">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="{{asset("css/owl00000.css")}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset("css/style000.css")}}">
        <!-- RTL CSS -->
        <link rel="stylesheet" href="{{asset("css/rtl00000.css")}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset("css/responsi.css")}}">
        <link rel="stylesheet" href="{{asset("css/fonts.css")}}">

        <title>شصت سی چاره</title>


<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>

    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
@include("sections.navbar")
        <!-- End Navbar Area -->

        <!-- Sidebar Modal -->
        <div class="sidebar-modal">
            <div class="sidebar-modal-inner">
                <div class="sidebar-about-area">
                    <div class="title">
                        <h2>درباره ما</h2>
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                    </div>
                </div>

                <div class="sidebar-instagram-feed">
                    <h2>اینستاگرام</h2>

                    <ul>
                        <li><a href=""><img src="{{asset("img/services.jpg")}}" alt="image"></a></li>
                        <li><a href=""><img src="{{asset("img/servicet.jpg")}}" alt="image"></a></li>
                        <li><a href=""><img src="{{asset("img/serviceu.jpg")}}" alt="image"></a></li>
                        <li><a href=""><img src="{{asset("img/servicev.jpg")}}" alt="image"></a></li>
                        <li><a href=""><img src="{{asset("img/services.jpg")}}" alt="image"></a></li>
                        <li><a href=""><img src="{{asset("img/servicet.jpg")}}" alt="image"></a></li>
                        <li><a href=""><img src="{{asset("img/serviceu.jpg")}}" alt="image"></a></li>
                        <li><a href=""><img src="{{asset("img/servicev.jpg")}}" alt="image"></a></li>
                    </ul>
                </div>

                <div class="sidebar-contact-area">
                    <div class="contact-info">
                        <div class="contact-info-content">
                            <h2>
                                <a href="tel:+0881306298615">+088 130 629 8615</a>
                                <span>یا</span>
                                <a href="mailto:zovio@site.com">zovio@site.com</a>
                            </h2>

                            <ul class="social">
                                <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <span class="close-btn sidebar-modal-close-btn"><i class="fas fa-times"></i></span>
            </div>
        </div>
        <!-- End Sidebar Modal -->

        <!-- Start Main Banner Area -->

        @include("sections.slider")
        <!-- End Main Banner Area -->

        <!-- Start About Area -->
        @include("sections.about_us")
        <!-- End About Area -->

        <!-- Start Offer Area -->
{{--        @include("sections.offer")--}}
        <!-- End Offer Area -->

        <!-- Start Services Area -->
        @include("sections.services")
        <!-- End Services Area -->

        <!-- Start Our Story Area -->
        <section class="our-story-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">داستان ما</span>
                    <h2>یک داستان طراحی دارد</h2>
                </div>

                <div class="our-story-content">
                    <img src="{{asset("img/story-bg.jpg")}}" alt="image">

                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"><i class="flaticon-play-button"></i></a>

                    <div class="quote">
                        <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</p>

                        <h3>جان ویلیامز</h3>
                        <span>طراحی دکور داخلی</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Story Area -->

        <!-- Start Fun Facts Area -->
        @include("sections.fun_fact")
        <!-- End Fun Facts Area -->

        <!-- Start How We Work Area -->
        @include("sections.work_way")
        <!-- End How We Work Area -->

        <!-- Start Projects Area -->
        @include("sections.project")
        <!-- End Projects Area -->

        <!-- Start Testimonials Area -->
        @include("sections.testimonial")
        <!-- End Testimonials Area -->

        <!-- Start Team Area -->

        <!-- End Team Area -->

        <!-- Start Company Value Area -->
        @include("sections.company_v")
        <!-- End Company Value Area -->

        <!-- Start Partner Area -->
        @include("sections.partner")
        <!-- End Partner Area -->

        <!-- Start Blog Area -->
        @include("sections.blog")
        <!-- End Blog Area -->

        <!-- Start Instagram Feed Area -->
        @include("sections.instagram")
        <!-- End Instagram Feed Area -->

        <!-- Start Footer Area -->
        @include("sections.footer")
        <!-- End Footer Area -->

        <div class="go-top"><i class="fas fa-arrow-up"></i><i class="fas fa-arrow-up"></i></div>

        <!-- jQuery Min JS -->
        <script src="{{asset("js/jquery00.js")}}"></script>
        <!-- Popper Min JS -->
        <script src="{{asset("js/popper00.js")}}"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{asset("js/bootstra.js")}}"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{asset("js/owl00000.js")}}"></script>
        <!-- magnific Popup Min JS -->
        <script src="{{asset("js/jquery01.js")}}"></script>
        <!-- Appear Min JS -->
        <script src="{{asset("js/jquery02.js")}}"></script>
        <!-- Odometer Min JS -->
        <script src="{{asset("js/odometer.js")}}"></script>
        <!-- Mean Menu JS -->
        <script src="{{asset("js/jquery03.js")}}"></script>
        <!-- Nice Select Min JS -->
        <script src="{{asset("js/jquery04.js")}}"></script>
        <!-- Parallax Min JS -->
        <script src="{{asset("js/parallax.js")}}"></script>
        <!-- WOW Min JS -->
        <script src="{{asset("js/wow00000.js")}}"></script>
        <!-- AjaxChimp Min JS -->
        <script src="{{asset("js/jquery05.js")}}"></script>
        <!-- Form Validator Min JS -->
        <script src="{{asset("js/form-val.js")}}"></script>
        <!-- Contact Form Min JS -->
        <script src="{{asset("js/contact-.js")}}"></script>
        <!-- Main JS -->
        <script src="{{asset("js/main0000.js")}}"></script>
    </body>
</html>

