@extends('layouts.app')
@section('title','الرئيسية')
@section('content')
    <!-- hero area start -->
    <section class="hero__area hero__height d-flex align-items-center grey-bg-2 p-relative">
        <div class="hero__shape">
            <img class="hero-1-circle" src="assets/img/shape/hero/hero-1-circle.png" alt="">
            <img class="hero-1-circle-2" src="assets/img/shape/hero/hero-1-circle-2.png" alt="">
            <img class="hero-1-dot-2" src="assets/img/shape/hero/hero-1-dot-2.png" alt="">
        </div>
        <div class="container">
            <div class="hero__content-wrapper mt-90">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="hero__content p-relative z-index-1">
                            <h3 class="hero__title mb-3">
                                <span></span>
                                <span class="yellow-shape">مدرسة <img src="assets/img/shape/yellow-bg.png" alt="yellow-shape"> </span>
                                 <span class="text-primary">إقرأ</span> جنيف</h3>
                            <p class="lh-sm">مدرسة جنيف العربية مدرسة متميزة في حماية الهوية الإسلامية لأبناء الجالية، وجعلهم نافعـين لذاتهم ومجتمعهم، بما يجعلها نموذجا للمدارس العربية في اوروبا.</p>
                            <a href="course-grid.html" class="e-btn">من نحن</a>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="hero__thumb d-flex p-relative">
                            <div class="hero__thumb-shape">
                                <img class="hero-1-dot" src="assets/img/shape/hero/hero-1-dot.png" alt="">
                                <img class="hero-1-circle-3" src="assets/img/shape/hero/hero-1-circle-3.png" alt="">
                                <img class="hero-1-circle-4" src="assets/img/shape/hero/hero-1-circle-4.png" alt="">
                            </div>
                            <div class="hero__thumb-big mr-30">
                                <img src="{{asset('assets/img/home/primary-img.jpg')}}" alt="" width="400" height="460" style="object-fit: cover ">

                                <div class="hero__quote hero__quote-animation">
                                    <span>أحرص أن</span>
                                    <h4>“أكسب ثقافة ديني الإسلامية الصحيحة“</h4>
                                </div>
                            </div>
                            <div class="hero__thumb-sm mt-50 d-none d-lg-block">
                                <img src="{{asset('assets/img/home/secondary-img.jpg')}}" alt="" width="200" height="240" style="object-fit: cover ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->

    <!-- category area start -->
    <section class="category__area pt-120 pb-70">


        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                    <div class="section__title-wrapper mb-45">
                        <h2 class="section__title">ما يجب ان  <br> <span class="yellow-bg"> تعرفه <img src="assets/img/shape/yellow-bg-2.png" alt="">  </span>عن المدرسة
                        </h2>
                    </div>
                </div>

            </div>
            <div class="row">
               <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-6">
                    <div class="category__item mb-30 transition-3 d-flex">
                        <div class="category__icon mr-30" >
                            <svg viewBox="0 0 512 512">
                                <g>
                                    <path class="st0" d="M111.3,491.6C60.1,487.1,20,444.2,20,392V223.7c0-31.2,14.6-60.6,39.4-79.5l136-103.7   c35.8-27.3,85.5-27.3,121.3,0l9.2,7c-24.6-2.4-49.8,4.2-70.5,20L93.6,190.8C85,197.4,80,207.5,80,218.3V419   C80,447.6,92,473.4,111.3,491.6L111.3,491.6z"/>
                                    <path class="st1" d="M392,512H120C53.8,512,0,458.1,0,392V223.7c0-37.2,17.7-72.9,47.2-95.4l136-103.7   c42.8-32.7,102.7-32.7,145.5,0L372,57.5V32c0-11,9-20,20-20s20,9,20,20v65.9c0,7.6-4.3,14.5-11.1,17.9c-6.8,3.4-15,2.6-21-2   l-75.4-57.4c-28.6-21.8-68.5-21.8-97,0l-136,103.7c-19.7,15-31.5,38.8-31.5,63.6V392c0,44.1,35.9,80,80,80h272   c44.1,0,80-35.9,80-80V223.7c0-25.1-11.6-49-31.1-63.8c-8.8-6.7-10.5-19.2-3.8-28s19.3-10.5,28-3.8c29.3,22.4,46.9,58.1,46.9,95.6   V392C512,458.1,458.2,512,392,512z"/>
                                    <path class="st2" d="M241,256c0,13.8-11.2,25-25,25s-25-11.2-25-25s11.2-25,25-25S241,242.2,241,256z M296,231   c-13.8,0-25,11.2-25,25c0,13.8,11.2,25,25,25s25-11.2,25-25C321,242.2,309.8,231,296,231z M216,311c-13.8,0-25,11.2-25,25   s11.2,25,25,25s25-11.2,25-25S229.8,311,216,311z M296,311c-13.8,0-25,11.2-25,25s11.2,25,25,25s25-11.2,25-25S309.8,311,296,311z"/>
                                </g>
                            </svg>
                        </div>
                        <div class="category__content">
                            <h4 class="category__title mb-3"><a href="course-details.html" >من نحن</a></h4>
                            <p>      مدرسة جنيف العربية، هي مدرسة بسويسرا تابعة للمؤسسة الثقافية الإسلامية بجنيف، انشئت سنة 1978 ومنذ ذلك تعمل بالتعاون مع جميع عناصر العملية .</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-6">
                    <div class="category__item mb-30 transition-3 d-flex ">
                        <div class="category__icon mr-30">
                            <svg viewBox="0 0 512 512">
                                <g>
                                    <path class="st0" d="M106.1,341.9V120c0-55.2,44.8-100,100-100h-61c-55.2,0-100,44.8-100,100v221.9c0,55.2,44.8,100,100,100h61   C150.8,441.8,106.1,397.1,106.1,341.9z"/>
                                    <path class="st1" d="M442.8,512c-10.5,0-20.9-3.9-29.2-11.3l-49.9-43.9c-8.3-7.3-9.1-19.9-1.8-28.2c7.3-8.3,19.9-9.1,28.2-1.8   l49.9,43.9c0.1,0,0.1,0.1,0.2,0.1c0.5,0.4,1.9,1.7,4.3,0.7c2.4-1.1,2.4-3,2.4-3.7V120c0-44.1-35.9-80-80-80H145   c-44.1,0-80,35.9-80,80v221.9c0,44.1,35.9,80,80,80h154c11,0,20,9,20,20s-9,20-20,20H145c-66.1,0-120-53.8-120-120V120   C25.1,53.8,78.9,0,145,0h222c66.1,0,120,53.8,120,120v348c0,17.6-10,33-26.1,40.2C455,510.7,448.8,512,442.8,512L442.8,512z    M350.7,264c-9.3-5.9-21.7-3.2-27.6,6.1c-0.2,0.4-25.1,38.7-67.1,38.7s-67.9-38.3-68.1-38.7c-5.9-9.3-18.3-12.1-27.6-6.1   c-9.3,5.9-12.1,18.3-6.1,27.6c1.5,2.3,38.2,57.2,101.8,57.2s99.3-54.9,100.8-57.2C362.8,282.3,360,270,350.7,264z"/>
                                    <path class="st2" d="M334,211.9c-11,0-20-9-20-20v-55c0-11,9-20,20-20s20,9,20,20v55C354,203,345,211.9,334,211.9z M199,191.9v-55   c0-11-9-20-20-20s-20,9-20,20v55c0,11,9,20,20,20S199,203,199,191.9z"/>
                                </g>
                            </svg>
                        </div>
                        <div class="category__content">
                            <h4 class="category__title mb-3"><a href="course-details.html">رؤيتنا</a></h4>
                            <p> مدرسة جنيف العربية مدرسة متميزة في حماية الهوية الإسلامية لأبناء الجالية، وجعلهم نافعـين لذاتهم ومجتمعهم، بما يجعلها نموذجا للمدارس العربية في اوروبا.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-12  col-md-12 col-sm-6">
                    <div class="category__item mb-30 transition-3 d-flex">
                        <div class="category__icon mr-30 align-items-lg-start">
                            <svg viewBox="0 0 512 512">
                                <g>
                                    <path class="st0" d="M178.7,492H120c-55.2,0-100-44.8-100-100V120C20,64.8,64.8,20,120,20h58.7C123.7,20,81,64.8,81,120v272   C81,447.2,123.7,492,178.7,492z M355.5,204.8l18.9-85.5c4.8-24.1,16.7-46.3,34.1-63.7l35.4-35.4c-15.1-1.4-30.7,3.7-42.3,15.3   l-61.1,61.1c-17.4,17.4-29.3,39.6-34.1,63.7L295,217l56.7-11.3C352.9,205.4,354.2,205.1,355.5,204.8L355.5,204.8z"/>
                                    <path class="st1" d="M299,512H120C53.8,512,0,458.2,0,392V120C0,53.8,53.8,0,120,0h183c11,0,20,9,20,20s-9,20-20,20H120   c-44.1,0-80,35.9-80,80v272c0,44.1,35.9,80,80,80h179c44.1,0,80-35.9,80-80V272c0-11,9-20,20-20s20,9,20,20v120   C419,458.2,365.2,512,299,512z M298.9,236.6l56.7-11.3c28.1-5.6,53.7-19.3,73.9-39.6l61.1-61.1c28.5-28.5,28.5-74.8,0-103.2   c-28.5-28.5-74.8-28.5-103.2,0l-61.1,61.1c-20.3,20.3-33.9,45.8-39.6,73.9l-11.3,56.7c-1.3,6.6,0.7,13.3,5.5,18.1   c3.8,3.8,8.9,5.9,14.1,5.9C296.3,237,297.6,236.9,298.9,236.6L298.9,236.6z M462.4,49.7c6.2,6.2,9.7,14.5,9.7,23.3   s-3.4,17.1-9.7,23.3l-61.1,61.1c-14.7,14.7-33.2,24.6-53.5,28.6l-27.3,5.4l5.4-27.3c4.1-20.3,14-38.8,28.6-53.5l61.1-61.1   c6.2-6.2,14.5-9.7,23.3-9.7S456.1,43.4,462.4,49.7L462.4,49.7z"/>
                                </g>
                            </svg>
                        </div>
                        <div class="category__content">
                            <h4 class="category__title mb-3">رسالتنا</h4>
                            <p>مدرسة بفريق متكامل ومهني في تربية وتكوين أبناء الجالية لإخراج مواطن مسلم صالح ونافع لنفسه واسرته ومجتمعه، بترقية القيم والاخلاق وتعليم اللغة العربية، وتعزيز مكانة العلم والتعلّم، وتطوير أنفسهم طوال حياتهم، من خلال مناهج ووسائل تربوية حديثة، و مناشط متنوعة.</p>
                        </div>
                    </div>
                </div>
                <div class="hero__shape">
                    <img class="hero-1-circle-1" src="assets/img/shape/hero/hero-1-circle.png" alt="">
                    <img class="hero-1-circle-3" src="assets/img/shape/hero/hero-1-circle-2.png" alt="">
                    <img class="hero-1-dot-3" src="assets/img/shape/hero/hero-1-dot-2.png" alt="">
                </div>


            </div>

        </div>
    </section>
    <!-- category area end -->

    <!-- banner area start -->
    <section class="banner__area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="banner__item p-relative mb-40" data-background="assets/img/banner/banner-bg-1.jpg">
                        <div class="banner__content">
                            <span>امتياز</span>
                            <h3 class="banner__title">
                                <a href="course-details.html">الطلاب الممتازين <br> و متخرجين</a>
                            </h3>
                        </div>
                        <div class="banner__thumb d-none d-sm-block d-md-none d-lg-block">
                                <img src="assets/img/school/photo_2023-02-24_19-44-52.jpg"
                                     style="max-width: 330px; max-height: 215px"
                                     alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="banner__item p-relative mb-40" data-background="assets/img/banner/banner-bg-2.jpg">
                        <div class="banner__content">
                            <span class="orange">مقال</span>
                            <h3 class="banner__title">
                                <a href="course-details.html">عن المدرسة <br>من مدرسة اقرا</a>
                            </h3>
                        </div>
                        <div class="banner__thumb banner__thumb-2 d-none d-sm-block d-md-none d-lg-block">
                            <img src="assets/img/school/photo_2023-02-24_19-44-14.jpg"
                                 style="max-width: 318px; max-height: 276px"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- latest NEWS area start -->
    <section class="course__area pt-115 pb-120 grey-bg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-5 col-xl-6 col-lg-6">
                    <div class="section__title-wrapper mb-60">
                        <h2 class="section__title"> أخر<span class="yellow-bg yellow-bg-big"> المنشورات<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat2 cat4">
                    <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix" style="max-height:300px">
                            <a href="course-details.html" >
                                <img alt="" class="object-fit-cover" style=" background-position: center;"  src="assets/img/school/photo_2023-02-24_19-44-06.jpg">
                            </a>
                            <div class="course__tag">
                                <a href="#">رحلات مدرسية</a>
                            </div>
                        </div>
                        <div class="course__content">
                            <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                    <span><i class="fa-light fa-timer me-2"></i> منذ أسبوع</span>
                                </div>
                            </div>
                            <h3 class="course__title"><a href="course-details.html">رحالات مدرسية ممتع مع الأستاذة بن فلان</a></h3>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                            <div class="course__status">
                                <span>المزيد</span>
                            </div>
                            <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                    تصفح المزيد
                                    <i class="fa-light fa-arrow-left ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat3 cat4">
                    <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix" style="max-height:300px">
                            <a href="course-details.html">
                                <img src="assets/img/school/photo_2023-02-24_19-44-14.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="course__tag">
                                <a href="#" class="sky-blue">نشاطات</a>
                            </div>
                        </div>
                        <div class="course__content">
                            <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                    <span><i class="fa-light fa-timer me-2"></i> منذ ساعة</span>
                                </div>
                            </div>
                            <h3 class="course__title"><a href="course-details.html">نشاطات عن المدرسة</a></h3>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                            <div class="course__status d-flex align-items-center">
                                <span class="sky-blue">المزيد</span>
                            </div>
                            <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                    تصفح المزيد
                                    <i class="fa-light fa-arrow-left ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat4 cat3">
                    <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix" style="max-height:300px">
                            <a href="course-details.html">
                                <img src="assets/img/school/photo_2023-02-24_19-44-16.jpg" alt="">
                            </a>
                            <div class="course__tag">
                                <a href="#" class="green">مقالات</a>
                            </div>
                        </div>
                        <div class="course__content">
                            <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                    <span><i class="fa-light fa-timer me-2"></i> منذ ساعة</span>
                                </div>
                            </div>
                            <h3 class="course__title"><a href="course-details.html">مقال عن مماراسات المدرسة</a></h3>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                            <div class="course__status d-flex align-items-center">
                                <span class="green">المزيد</span>
                            </div>
                            <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                     تصفح المزيد
                                    <i class="fa-light fa-arrow-left ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat4 cat1 cat3">
                    <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix" style="max-height:300px">
                            <a href="course-details.html">
                                <img src="assets/img/school/photo_2023-02-24_19-44-52.jpg" class="img-fluid" alt="">
                            </a>
                            <div class="course__tag">
                                <a href="#" class="blue">مقالات</a>
                            </div>
                        </div>
                        <div class="course__content">
                            <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                    <span><i class="fa-light fa-timer me-2"></i>منذ 3 ساعات</span>
                                </div>
                            </div>
                            <h3 class="course__title"><a href="course-details.html"> تخرج الطلاب من مدرسة غقرا حنيف</a></h3>

                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                            <div class="course__status d-flex align-items-center">
                                <span class="blue">المزيد</span>
                            </div>
                            <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                    تصفح المزيد
                                    <i class="fa-light fa-arrow-left ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat2 cat4">
                    <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix" style="max-height:300px">
                            <a href="course-details.html">
                                <img src="assets/img/school/photo_2023-02-24_19-44-21.jpg" alt="">
                            </a>
                            <div class="course__tag">
                                <a href="#" class="orange">مناسبات</a>
                            </div>
                        </div>
                        <div class="course__content">
                            <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                    <span>
                                        <span><i class="fa-light fa-timer me-2"></i>منذ 2ساعات</span>
                                    </span>
                                </div>
                            </div>
                            <h3 class="course__title"><a href="course-details.html">مناسبت عيد الأضحى قامت المدرسة باحتفال</a></h3>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                            <div class="course__status d-flex align-items-center">
                                <span class="orange">المزيد</span>
                            </div>
                            <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                    تصفح المزيد
                                    <i class="far fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat3">
                    <div class="course__item white-bg mb-30 fix">
                        <div class="course__thumb w-img p-relative fix" style="max-height:300px">
                            <a href="course-details.html">
                                <img src="assets/img/school/photo_2023-02-24_19-44-16.jpg" alt="">
                            </a>
                            <div class="course__tag">
                                <a href="#" class="pink">حفالات</a>
                            </div>
                        </div>
                        <div class="course__content">
                            <div class="course__meta d-flex align-items-center justify-content-between">
                                <div class="course__lesson">
                                    <span>
                                        <span><i class="fa-light fa-timer me-2"></i>منذ 1 ساعة</span>
                                    </span>
                                </div>

                            </div>
                            <h3 class="course__title"><a href="course-details.html">احتفال بيوم التخرج الطلاب</a></h3>
                        </div>
                        <div class="course__more d-flex justify-content-between align-items-center">
                            <div class="course__status d-flex align-items-center">
                                <span class="pink">المزيد</span>
                            </div>
                            <div class="course__btn">
                                <a href="course-details.html" class="link-btn">
                                    تصفح المزيد
                                    <i class="far fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest NEWS area end -->

    <!-- events area start -->
    <section class="events__area pt-115 pb-120 p-relative">
        <div class="events__shape">
            <img class="events-1-shape" src="assets/img/events/events-shape.png" alt="">
        </div>
        <div class="container" id="card-container">
            <div class="row">
                <div class="col-xxl-4 offset-xxl-4 ">
                    <div class="section__title-wrapper mb-60 text-center">
                        <h2 class="section__title">خصائص <span class="yellow-bg yellow-bg-big">مدرستنا<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center white-bg overflow-hidden">
                            <div class="events__content ">
                                <h3 class="events__title"><i class="fa-duotone fa-sparkles fs-3 me-2 text-primary"></i> بناء شخصية</h3>
                                <p class="mb-0 mt-2">
                                    الاسهام في بناء شخصية المنتسب الى مدرستنا بناءً تربوياً سليماً ومتكاملا.
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="events__item mb-10 hover__active active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                            <div class="events__content">
                                <h3 class="events__title"> <i class="fa-duotone fa-sparkles fs-3 me-2 text-primary"></i>العقيدة الإسلامية الصحيحة</h3>
                                <p class="mb-0 mt-2">
                                    تعميق معاني العقيدة الإسلامية الصحيحة
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                            <div class="events__content">
                                <h3 class="events__title"><i class="fa-duotone fa-sparkles fs-3 me-2 text-primary"></i> النبي <span class="fs-1 text-muted">ﷺ </span> </h3>
                                <p class="mb-0 mt-2">
                                    التعريف بشخصية النبي صلى الله عليه وسلم وحبه
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                            <div class="events__content">

                                <h3 class="events__title"> <i class="fa-duotone fa-sparkles fs-3 me-2 text-primary"></i>السيرة النبوية المختارة </h3>
                                <p class="mb-0 mt-2">التعريف ببعض محطات السيرة النبوية المختارة، وكيف يستثمرها في حياته اليومية</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                            <div class="events__content">

                                <h3 class="events__title"> <i class="fa-duotone fa-sparkles fs-3 me-2 text-primary"></i> ثقافة إسلامية دينية</h3>
                                <p class="mb-0 mt-2">اكساب ثقافة إسلامية دينية صحيحة -الأنبياء، الرسالات السماوية...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                            <div class="events__content">

                                <h3 class="events__title"> <i class="fa-duotone fa-sparkles fs-3 me-2 text-primary"></i> اركان الإسلام</h3>
                                <p class="mb-0 mt-2">التعريف باركان الإسلام اجمالا</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                            <div class="events__content">

                                <h3 class="events__title"><i class="fa-duotone fa-sparkles fs-3 me-2 text-primary"></i>تنمية القدرة </h3>
                                <p class="mb-0 mt-2">تنمية القدرة على استعمال القواميس والمراجع باللغة العربية</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                            <div class="events__content">

                                <h3 class="events__title"> <i class="fa-duotone fa-sparkles fs-3 me-2 text-primary"></i>تنمية القدرة على الاصغاء</h3>
                                <p class="mb-0 mt-2">تنمية القدرة على الاصغاء والتحدث والقراءة والكتابة بلغة عربية بشكل صحيح، والتفاعل مع ما يقرأ.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                            <div class="events__content">

                                <h3 class="events__title"> <i class="fa-duotone fa-sparkles fs-3 me-2 text-primary"></i>حفظ القرآن</h3>
                                <p class="mb-0 mt-2">حفظ بعض السور القرآنية المختارة ( 05حوالي احزاب)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                            <div class="events__content">

                                <h3 class="events__title"><i class="fa-duotone fa-sparkles fs-3 me-2 text-primary"></i>حفظ الأحاديث</h3>
                                <p class="mb-0 mt-2">حفظ بعض الأحاديث المناسبة (الأربعين النووية)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                            <div class="events__content">

                                <h3 class="events__title"> <i class="fa-duotone fa-sparkles fs-3 me-2 text-primary"></i>تقدير قيمة اللغة</h3>
                                <p class="mb-0 mt-2">تقدير قيمة اللغة واهميتها في حياة المتعلم وحضارته كفرد مسلم نطق الحروف بشكل صحيح، والتعريف ب الرسم العثماني.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <button id="load-more" class="btn btn-outline-primary d-flex mx-auto justify-content-center my-3" style="width: 11rem">
                        تصفح المزيد
                    </button>

                </div>

            </div>
        </div>
    </section>
    <!-- events area end -->

    <!-- cta area start -->
    <section class="cta__area mb--120">
        <div class="container">
            <div class="cta__inner blue-bg fix">
                <div class="cta__shape">
                    <img src="assets/img/cta/cta-shape.png" alt="">
                </div>
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8">
                        <div class="cta__content">
                            <h3 class="cta__title">يمكن تسجيل اولادك هنا</h3>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4">
                        <div class="cta__more d-md-flex justify-content-end p-relative z-index-1">
                            <a href="contact.html" class="e-btn e-btn-white">سجل الان</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->

@endsection

