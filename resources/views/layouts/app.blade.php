<!doctype html>
<html class="no-js" lang="zxx" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>مدرسة إقرأ - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
          rel="stylesheet">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/webicon.svg')}}">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/backToTop.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/elegantFont.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="rtl.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


<!-- Add your site or application content here -->

<!-- pre loader area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="loading-content">
                <h1 class="loading-logo-text mb-2">مدرسة <span class="text-primary">إقرأ</span> جنيف</h1>
                <div class="loading-stroke">
                    <img class="loading-logo-icon" src="assets/img/logo/logo-icon.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pre loader area end -->

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" fill="none" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 227.245;"></path>
    </svg>
</div>
<!-- back to top end -->

<!-- header area start -->
<header>
    <div id="header-sticky" class="header__area header__transparent header__padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                    <div class="header__left d-flex align-items-center">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('assets/img/logo.svg')}}" alt="logo" class="img-fluid" style="width: 40px">

                            </a>
                        </div>
                        <div class="header__category d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li>
                                        <a class="cat-menu d-flex align-items-center">
                                            <div class="cat-dot-icon d-inline-block">
                                                <svg viewBox="0 0 276.2 276.2">
                                                    <g>
                                                        <g>
                                                            <path class="cat-dot" d="M33.1,2.5C15.3,2.5,0.9,17,0.9,34.8s14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S51,2.5,33.1,2.5z"/>
                                                            <path class="cat-dot" d="M137.7,2.5c-17.8,0-32.3,14.5-32.3,32.3s14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3S155.5,2.5,137.7,2.5    z"/>
                                                            <path class="cat-dot" d="M243.9,67.1c17.8,0,32.3-14.5,32.3-32.3S261.7,2.5,243.9,2.5S211.6,17,211.6,34.8S226.1,67.1,243.9,67.1z"/>
                                                            <path class="cat-dot" d="M32.3,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3S0,120.4,0,138.2S14.5,170.5,32.3,170.5z"/>
                                                            <path class="cat-dot" d="M136.8,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3c-17.8,0-32.3,14.5-32.3,32.3    C104.5,156.1,119,170.5,136.8,170.5z"/>
                                                            <path class="cat-dot" d="M243,170.5c17.8,0,32.3-14.5,32.3-32.3c0-17.8-14.5-32.3-32.3-32.3s-32.3,14.5-32.3,32.3    C210.7,156.1,225.2,170.5,243,170.5z"/>
                                                            <path class="cat-dot" d="M33,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3s32.3-14.5,32.3-32.3S50.8,209.1,33,209.1z    "/>
                                                            <path class="cat-dot" d="M137.6,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S155.4,209.1,137.6,209.1z"/>
                                                            <path class="cat-dot" d="M243.8,209.1c-17.8,0-32.3,14.5-32.3,32.3c0,17.8,14.5,32.3,32.3,32.3c17.8,0,32.3-14.5,32.3-32.3    S261.6,209.1,243.8,209.1z"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <span>فئة</span>
                                        </a>
                                        <ul class="cat-submenu">
                                            <li><a href="{{url('article')}}">مقالات</a></li>
                                            <li><a href="{{url('article')}}">حفالات</a></li>
                                            <li><a href="{{url('article')}}">رحالات</a></li>
                                            <li><a href="{{url('article')}}">نشاطات</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                    <div class="header__right d-flex justify-content-end justify-content-xl-start align-items-center">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{url('/')}}">الرئيسية</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/article')}}">مقالات</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/about-us')}}">هيكلة المدرسة</a>
                                    </li>
                                    <li>
                                        <a href="{{url('show-case')}}">معرض الصور</a>
                                    </li>
                                    <li><a href="{{url('/contact')}}">تواصلوا معنا</a></li>
                                </ul>
                            </nav>
                        </div>
                                <div class="header__btn p-0 ml-50 d-none d-xl-block">
                                    <a href="{{url('sign-up')}}" class="btn btn-primary py-2">سجل الدخول </a>
                                </div>
                        {{--AUTH--}}
                     {{--  <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-duotone fa-user"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{url('admin')}}">حساب الشخصي</a></li>
                                <li><a class="dropdown-item" ><i class="fa-duotone fa-arrow-right-to-bracket"></i> خروج</a></li>
                            </ul>
                        </div>--}}
                        <div class="sidebar__menu d-xl-none">
                            <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->

<!-- sidebar area start -->
<div class="sidebar__area">
    <div class="sidebar__wrapper">
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
                <span><i class="fa-duotone fa-times"></i></span>
                <span>ferme</span>
            </button>
        </div>
        <div class="sidebar__content">
            <div class="logo mb-40">
                <a href="{{url('/')}}">
                    <img src="{{asset('assets/img/logo.svg')}}" width="36" alt="logo">
                </a>
            </div>
            <div class="mobile-menu fix"></div>
            <div class=" p-relative mt-20 ">
                <a href="{{url('sign-up')}}">  <button class="btn btn-primary" type="submit"> تسجيل الدخول</button></a>
            </div>
        </div>
    </div>
</div>
<!-- sidebar area end -->
<div class="body-overlay"></div>
<!-- sidebar area end -->



<main>

    @yield('content')

</main>


<!-- footer area start -->
<footer>
    <div class="footer__area footer-bg z-index-5">
        <div class="footer__top pt-50 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="footer__widget mb-50">
                            <div class="footer__widget-head mb-22">
                                <div class="footer__logo">
                                        <h3 class="text-light  fw-bold"> مدرسة  <span class="text-primary">إقرأ</span> جنيف</h3>
                                </div>
                            </div>
                            <div class="footer__widget-body">
                                <p>       مدرسة جنيف العربية، هي مدرسة بسويسرا تابعة للمؤسسة الثقافية الإسلامية بجنيف، انشئت سنة 1978، ومنذ ذلك تعمل بالتعاون مع جميع عناصر العملية (الطاقم الإداري والتربوي والتلاميذ والاولياء) في بيئة آمنة من اجل دعم أبناء الجالية دينيا وتربويا وعقليا وخُلقيا ولغويا ومهارايا؛ وغيرهم من الجاليات غير المسلمة فيما يتعلق باللغة العربية من خلال فريق مؤهل إداريا وتربويا ومعرفيا وفق المعايير المعمول بها في التعليم، في بيئة تتسم بالتعاون والحيوية والتفاعل.</p>

                                <div class="footer__social ">
                                    <ul>
                                        <li><a href="https://www.facebook.com/" class="fb" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                        <li><a href="https://www.twitter.com/" class="tw" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="https://www.youtube.com/" class="pin" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 offset-xxl-1 col-xl-3 offset-xl-1 col-lg-2 offset-lg-1 col-md-3 col-sm-12">
                        <div class="footer__widget mb-50">
                            <div class="footer__widget-head mb-22">
                                <h3 class="footer__widget-title">اختصارات</h3>
                            </div>
                            <div class="footer__widget-body">
                                <div class="footer__link">
                                    <ul>
                                        <li><a href="{{url('article')}}">مقالات</a></li>
                                        <li><a href="#">دورات</a></li>
                                        <li><a href="{{url('show-case')}}">معرض الصور</a></li>
                                        <li><a href="{{url('about')}}">هيكلة المدرسة</a></li>
                                        <li><a href="{{url('contact')}}">تواصلوا معنا</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-2 col-lg-3 offset-lg-0 col-md-6 col-sm-12">
                        <div class="footer__widget mb-50">
                            <div class="footer__widget-head mb-22">
                                <h3 class="footer__widget-title">تواصلوا معنا</h3>
                            </div>
                            <div class="footer__widget-body">
                                <div class="footer__link">
                                    <ul >
                                        <li class="contact__info-text-ltr d-inline-flex align-items-center ">
                                            <i class="fa-light fa-phone text-white me-2"></i>
                                            <a style="direction: ltr;" href="tel:+(41) 799 653 711">+(41) 799 653 711</a>
                                        </li>
                                        <li class="d-inline-flex align-items-center my-2">
                                            <i class="fa-light fa-location-dot text-white me-2"></i>
                                            <a href="https://rb.gy/2ua5cv" target="_blank">chemin Colladon 1209 Genève Suisse</a>
                                        </li>
                                        <li class="d-inline-flex align-items-center ">
                                            <i class="fa-light fa-envelope text-white me-2"></i>
                                            <a href="mailto:info@fcigeneve.ch">Madrassa@fcigeneve.ch</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 offset-lg-0 col-md-3 col-sm-12">
                        <div class="d-flex">
                            <a class="mx-auto align-self-center" href="">  <img src="{{asset('assets/img/webicon.svg')}}" alt="logo" class="img-fluid " style="width: 95px"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="footer__copyright text-center">
                            <p>كل الحقوق محفوظة <script>document.write(new Date().getFullYear())</script> © مدرسة إقرأ جنيف </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
<!-- JS here -->
<script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/backToTop.js')}}"></script>
<script src="{{asset('assets/js/purecounter.js')}}"></script>
<script src="{{asset('assets/js/ajax-form.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
