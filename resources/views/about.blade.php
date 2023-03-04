@extends('layouts.app')
@section('title','هيكلة المدرسة')
@section('content')
    <!-- page title area start -->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="assets/img/page-title/page-title-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">هيكلة المدرسة</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page">هيكلة المدرسة</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- about area start -->
    <section class="about__area pt-120 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6 position-relative">
                    <div class="about__thumb-wrapper">
                        <div class="about__review">
                            <h5><span class="text-primary">إقرأ</span> جنيفا سويسرا</h5>
                        </div>
                        <div class="about__thumb ml-100  ">
                            <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-16.jpg')}}" alt="">
                        </div>
                        <div class="about__banner mt--110">
                            <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-14.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="about__content pl-70 pr-60 pt-25">
                        <div class="section__title-wrapper mb-25">
                            <h2 class="section__title">نمكن قي اللغة <br><span class="yellow-bg-big">العربية<img src="{{asset('assets/img/shape/yellow-bg-2.png')}}" alt=""></span>  في مدرسة اقرا </h2>
                            <p>مدرسة جنيف اقرا العربية تحترف في تعليم اللغة العربية مع تخرج شهادة  </p>
                        </div>
                        <div class="about__list mb-35">
                            <ul>
                                <li class="d-flex align-items-center"><i class="fa-duotone fa-check text-success me-3"></i> اتقان النطق الصحيح</li>
                                <li class="d-flex align-items-center"><i class="fa-duotone fa-check text-success me-3"></i> تعلم مع اساتذة مختصين</li>
                                <li class="d-flex align-items-center"><i class="fa-duotone fa-check text-success me-3"></i> تعلم باحدث الطرق</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- testimonial area start -->
    <section class="testimonial__area pt-145 pb-150" data-background="assets/img/testimonial/home-3/testimonial-bg-3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10">
                    <div class="testimonial__slider-3">
                        <h3 class="testimonial__title">أراء<br> الطلاب المتخرجين</h3>
                        <div class="testimonial__slider-wrapper swiper-container testimonial-text mb-35">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__item-3">
                                        <p>“After I started learning design with Quillow, I realized that I had improved to very advanced levels. While I am studying at my university, I am sure that I will do this professionally.”</p>

                                        <div class="testimonial__info-2">
                                            <h4>قاسي اسامة</h4>
                                            <span>طالب @IQRA GENEVA</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item-3">
                                        <p>“After I started learning design with Quillow, I realized that I had improved to very advanced levels. While I am studying at my university,  I am sure that I will do this professionally.”</p>

                                        <div class="testimonial__info-2">
                                            <h4>سقار زكرياء</h4>
                                            <span>طالب @IQRA GENEVA</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item-3">
                                        <p>“<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur delectus</span>”</p>

                                        <div class="testimonial__info-2">
                                            <h4>قاسي سقار</h4>
                                            <span>طالب @IQRA GENEVA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-container testimonial-nav">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__nav-thumb">
                                        <img src="{{asset('assets/img/testimonial/home-3/testi-1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__nav-thumb">
                                        <img src="{{asset('assets/img/testimonial/home-3/testi-2.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__nav-thumb">
                                        <img src="{{asset('assets/img/testimonial/home-3/testi-3.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__nav-thumb">
                                        <img src="{{asset('assets/img/testimonial/home-3/testi-2.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10">
                    <div class="testimonial__video ml-70 fix">
                        <div class="testimonial__thumb-3 bg-white ratio-16x9" >
                            <video controls muted loop height="320"
                                   class="img-fluid"
                                   src="assets/video/testimonial-video.mp4"
                                   title="iqra student "></video>
                        </div>
                        <div class="testimonial__video-content d-sm-flex">
                            <div class="category__icon mr-30">
                                <svg viewBox="0 0 512 512">
                                    <g>
                                        <path class="st1" d="M6.7,381.8c13-25,42.5-35.5,70.1-25.1c19.2,7.3,42.8,16.2,68.4,23.3c-2.4-11.4-1.2-23.4,3.5-34.9   c6.9-16.7,21-29.1,38.8-34.1c9.1-2.5,19-3.1,29.3-1.7c68.4,9.3,109.1-13.8,145.1-34.2c24.2-13.7,47-26.7,73.7-26.7   c31.2,0,61.9,10.9,61.9,10.9c10.5,3.3,16.4,14.5,13.1,25s-14.5,16.4-25,13.1c0,0-25.5-9.1-49.9-9.1c-16.2,0-32.8,9.5-54,21.5   c-31.6,18-73.1,41.5-134.8,41.5c-11.1,0-22.9-0.8-35.3-2.5c-4.9-0.7-9.5-0.5-13.2,0.6c-4.2,1.2-9.8,4-12.6,10.8   c-2.2,5.3-2.3,10.2-0.3,14.7c2.4,5.5,7.9,10,15.5,12.8c10.9,4,26.5,6.1,44.1,6.3c19,0.1,37.5-2.1,53.8-6.3   c10.7-2.8,21.6,3.6,24.4,14.2c2.8,10.7-3.6,21.6-14.2,24.4c-19.1,5-41,7.6-64,7.6C169,433.8,104,409.7,62.6,394   c-6.9-2.6-16.5-1.5-20.7,6.5c-3.7,7.2-1,16.1,6.1,20C98.1,447.3,156.2,472,241.7,472c76.1,0,146.1-29.4,191.5-54   c35-19,60.5-13,63.3-12.2v0.1c8.5,2.3,14.9,10,14.9,19.3c0,11-8.9,20-20,20c-1.9,0-3.8-0.3-5.5-0.8c-3.4-0.4-15.7-0.9-33.6,8.8   C402.9,480,326.3,512,241.8,512c-107.2,0-178.3-38-212.5-56.2C3,441.7-7.1,408.3,6.7,381.8L6.7,381.8z"></path>
                                        <path class="st1" d="M486.9,443.6L486.9,443.6L486.9,443.6z M79.2,293.4v-99.3c0-24.7,11.7-48.5,31.5-63.5l96.8-74.3   c28.5-21.7,68.3-21.7,96.9,0l97.8,74.4c20,15.2,31.4,38.2,31.4,63c0,11,8.9,20,20,20c11,0,20-8.9,20-20c0-37.4-17.2-71.9-47.2-94.8   l-97.8-74.4C285.8-8.2,226-8.2,183.2,24.5L86.4,98.8c-29.5,22.5-47.1,58.1-47.1,95.2v99.3c0,11,8.9,20,20,20S79.2,304.4,79.2,293.4   L79.2,293.4z"></path>
                                        <path class="st2" d="M240.9,151.6c0,13.8-11.2,25-25,25s-25-11.2-25-25s11.2-25,25-25S240.9,137.9,240.9,151.6z M295.8,126.7   c-13.8,0-25,11.2-25,25s11.2,25,25,25s25-11.2,25-25S309.6,126.7,295.8,126.7z M216,206.5c-13.8,0-25,11.2-25,25s11.2,25,25,25   s25-11.2,25-25S229.8,206.5,216,206.5L216,206.5z M295.8,206.5c-13.8,0-25,11.2-25,25s11.2,25,25,25s25-11.2,25-25   S309.6,206.5,295.8,206.5L295.8,206.5z"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="testimonial__video-text">
                                <h4>شكر وعرفان</h4>
                                <p>فيديو تعريفي على المدرسة و الطلاب بشكلا عام </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!-- why area start -->
    <section class="why__area pt-125">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-6 col-md-8">
                    <div class="why__content pr-50 mt-40">
                        <div class="section__title-wrapper mb-30 mx-auto">
                            <span class="section__sub-title">لماذا مدرسة إقرا</span>
                            <h2 class="section__title">للأفضل <span class="yellow-bg yellow-bg-big">لنقرأ<img src="{{asset('assets/img/shape/yellow-bg.png')}}" alt=""></span> و نرتقي</h2>
                            <p>من اجل دعم أبناء الجالية دينيا وتربويا وعقليا وخُلقيا ولغويا ومهارايا؛ وغيرهم من الجاليات غير المسلمة فيما يتعلق باللغة العربية من خلال فريق مؤهل إداريا وتربويا ومعرفيا وفق المعايير المعمول بها في التعليم، في بيئة تتسم بالتعاون والحيوية والتفاعل.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8">
                    <div class="why__thumb">
                        <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-10.jpg')}}" class="img-fluid" alt="">
                        <img class="why-green" src="{{asset('assets/img/why/why-shape-green.png')}}" alt="">
                        <img class="why-pink" src="{{asset('assets/img/why/why-shape-green.png')}}" alt="">
                        <img class="why-dot" src="{{asset('assets/img/why/why-shape-dot.png')}}" alt="">
                        <img class="why-line" src="{{asset('assets/img/why/why-shape-line.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why area end -->

    <!-- counter area start -->
    <section class="counter__area pt-145 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xl-3 col-xl-6 offset-xl-3">
                    <div class="section__title-wrapper text-center mb-60">
                        <h2 class="section__title">نحن <span class="yellow-bg yellow-bg-big"> نفتخر<img src="{{asset('assets/img/shape/yellow-bg.png')}}" alt=""></span></h2>
                        <p>يما نقدمه للطبلب من اداء و انفعال</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-5 offset-1">
                    <div class="counter__item mb-30">
                        <div class="counter__icon user mb-15 d-flex">
                            <svg viewBox="0 0 490.7 490.7" class="mx-auto">
                                <path class="st0" d="m245.3 98c-39.7 0-72 32.3-72 72s32.3 72 72 72 72-32.3 72-72-32.3-72-72-72zm0 123.3c-28.3 0-51.4-23-51.4-51.4s23-51.4 51.4-51.4 51.4 23 51.4 51.4-23 51.4-51.4 51.4z"/>
                                <path class="st0" d="m389.3 180.3c-28.3 0-51.4 23-51.4 51.4s23 51.4 51.4 51.4c28.3 0 51.4-23 51.4-51.4s-23.1-51.4-51.4-51.4zm0 82.2c-17 0-30.8-13.9-30.8-30.8s13.9-30.8 30.8-30.8 30.8 13.9 30.8 30.8-13.9 30.8-30.8 30.8z"/>
                                <path class="st0" d="m102.9 180.3c-28.3 0-51.4 23-51.4 51.4s23 51.4 51.4 51.4 51.4-23 51.4-51.4-23-51.4-51.4-51.4zm0 82.2c-17 0-30.8-13.9-30.8-30.8s13.9-30.8 30.8-30.8 30.8 13.9 30.8 30.8-13.7 30.8-30.8 30.8z"/>
                                <path class="st0" d="m245.3 262.5c-73.7 0-133.6 59.9-133.6 133.6 0 5.7 4.6 10.3 10.3 10.3s10.3-4.6 10.3-10.3c0-62.3 50.7-113 113-113s113.1 50.7 113.1 113c0 5.7 4.6 10.3 10.3 10.3s10.3-4.6 10.3-10.3c0-73.7-60-133.6-133.7-133.6z"/>
                                <path class="st0" d="m389.3 303.6c-17 0-33.5 4.6-47.9 13.4-4.8 3-6.4 9.2-3.5 14.2 3 4.8 9.2 6.4 14.2 3.5 11.2-6.8 24.1-10.4 37.3-10.4 39.7 0 72 32.3 72 72 0 5.7 4.6 10.3 10.3 10.3s10.3-4.6 10.3-10.3c-0.2-51.3-41.8-92.7-92.7-92.7z"/>
                                <path class="st0" d="m149.4 316.9c-14.5-8.7-30.9-13.3-47.9-13.3-51 0-92.5 41.5-92.5 92.5 0 5.7 4.6 10.3 10.3 10.3s10.3-4.6 10.3-10.3c0-39.7 32.3-72 72-72 13.2 0 26 3.6 37.2 10.4 4.8 3 11.2 1.4 14.2-3.5 2.9-4.9 1.2-11.1-3.6-14.1z"/>
                            </svg>
                        </div>
                        <div class="counter__content text-center">
                            <h4><span data-purecounter-duration="1" data-purecounter-end="2103" class="purecounter">0</span></h4>
                            <p>عدد الطلاب</p>
                        </div>
                    </div>
                </div>
                <div class="col-5 offset-1">
                    <div class="counter__item mb-30">
                        <div class="counter__icon globe mb-15 d-flex">
                            <svg viewBox="0 0 512 512" class="mx-auto">
                                <path class="st0" d="M444.2,150.6c6.9-14.6,10.9-30.4,11.8-46.6c0.1-48.5-39.2-87.9-87.8-88c-28,0-54.4,13.3-71,35.9  C175.7,29.1,58.6,109.2,35.8,230.8s57.3,238.6,178.9,261.4c121.6,22.8,238.6-57.3,261.4-178.9c2.6-13.6,3.8-27.4,3.8-41.3  C480,228.9,467.6,186.7,444.2,150.6z M464,272c0,39.2-11.1,77.6-32.1,110.8c-7.1-34.3-20.4-42.5-36.7-48.8  c-5.3-1.6-10.3-4.4-14.4-8.1c-5.9-6.6-11-13.8-15.2-21.5c-11.4-18.8-25.5-42.1-57.7-58.2l-5.9-2.9c-40.4-20-54-26.8-34.8-84.2  c3.5-10.5,9.5-20.1,17.4-27.9c9.9,32.7,34,71.5,55,101.4c11,15.6,32.6,19.4,48.2,8.4c3.3-2.3,6.1-5.1,8.4-8.4  c14.7-20.6,28-42.3,39.7-64.7C454.4,199.5,464,235.4,464,272z M368,32c39.7,0,72,32.3,72,72c0,24.8-20.2,67.2-56.8,119.4  c-6,8.4-17.6,10.4-26,4.4c-1.7-1.2-3.2-2.7-4.4-4.4C316.2,171.2,296,128.8,296,104C296,64.3,328.3,32,368,32z M48,272  c0-45.4,14.9-89.6,42.4-125.7c12,7.9,65.3,45.5,53.6,86.2c-4.9,14.7-3.4,30.8,4.2,44.3c14.1,24.4,45,32.4,45.6,32.6  c0.3,0.1,26.5,9.1,31.4,27.2c2.7,9.9-1.5,21.5-12.6,34.5c-12.5,15.5-29.2,27.1-48,33.5c-14.5,5.6-27.3,10.6-33.5,33.7  C78.8,399,48,337.4,48,272z M256,480c-39.2,0-77.5-11.1-110.6-32c3.6-20.1,10.6-22.9,25.1-28.5c21.3-7.4,40.1-20.5,54.3-38  c14.8-17.3,20.1-33.8,15.9-49.2c-7.3-26.3-40.4-37.6-42.4-38.2c-0.2-0.1-25.5-6.6-36.3-25.2c-5.3-9.8-6.3-21.4-2.6-31.9  c14.3-50.1-42.1-92-58.8-103.1C140,89.4,196.6,64,256,64c10.9,0,21.7,0.9,32.5,2.6c-5.6,11.7-8.5,24.5-8.5,37.4  c0,3.2,0.3,6.4,0.7,9.5c-13.3,10.4-23.2,24.5-28.6,40.5c-23.6,70.6,1.4,83.1,42.9,103.6l5.8,2.9c28,14,40.3,34.3,51.1,52.2  c4.9,8.8,10.7,17.1,17.5,24.6c5.7,5.3,12.5,9.3,20,11.7c12.9,5,24.1,9.4,29.2,52.4C379.4,451,319.4,480,256,480z M368,152  c26.5,0,48-21.5,48-48s-21.5-48-48-48s-48,21.5-48,48C320,130.5,341.5,152,368,152z M368,72c17.7,0,32,14.3,32,32s-14.3,32-32,32  s-32-14.3-32-32S350.3,72,368,72z"/>
                            </svg>
                        </div>
                        <div class="counter__content text-center">
                            <h4><span data-purecounter-duration="1" data-purecounter-end="25" class="purecounter">0</span></h4>
                            <p>طلاب الأجانب <br> المتمدرسين في المدرسة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter area end -->
@endsection

