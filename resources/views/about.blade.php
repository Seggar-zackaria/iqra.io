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
                                <li class="breadcrumb-item"><a href="{{url('/welcome')}}">الرئيسية</a></li>
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
                            <img src="assets/img/school/photo_2023-02-24_19-44-16.jpg" alt="">
                        </div>
                        <div class="about__banner mt--110">
                            <img src="assets/img/school/photo_2023-02-24_19-44-14.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="about__content pl-70 pr-60 pt-25">
                        <div class="section__title-wrapper mb-25">
                            <h2 class="section__title">Achieve your <br><span class="yellow-bg-big">Goals <img src="assets/img/shape/yellow-bg-2.png" alt=""></span>  with IQRA </h2>
                            <p>Lost the plot bobby such a fibber bleeding bits and bobs don't get shirty with me bugger all mate chinwag super pukka william barney, horse play buggered.</p>
                        </div>
                        <div class="about__list mb-35">
                            <ul>
                                <li class="d-flex align-items-center"> <i class="fa-light fa-check text-success me-3"></i> اتقان النطق الصحيح</li>
                                <li class="d-flex align-items-center"> <i class="fa-light fa-check text-success me-3"></i> تعلم مع اساتذة مختصين</li>
                                <li class="d-flex align-items-center"> <i class="fa-light fa-check text-success me-3"></i> تعلم باحدث الطرق</li>
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
                                        <p>“After I started learning design with Quillow, I realized that I had improved to very advanced levels. While I am studying at my university,  I am sure that I will do this professionally.”</p>

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
                                        <img src="assets/img/testimonial/home-3/testi-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__nav-thumb">
                                        <img src="assets/img/testimonial/home-3/testi-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__nav-thumb">
                                        <img src="assets/img/testimonial/home-3/testi-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__nav-thumb">
                                        <img src="assets/img/testimonial/home-3/testi-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10">
                    <div class="testimonial__video ml-70 fix">
                        <div class="testimonial__thumb-3 w-25" >
                            <video controls
                                   class="w-100"
                                   style="max-height: 385px;"
                                   src="assets/video/testimonial-video.mp4"
                                   title="YouTube video player"></video>
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
                        <div class="section__title-wrapper mb-30">
                            <span class="section__sub-title">لماذا مدرسة إقرا</span>
                            <h2 class="section__title">للأفضل <span class="yellow-bg yellow-bg-big">لنقرأ<img src="assets/img/shape/yellow-bg.png" alt=""></span> و نرتقي</h2>
                            <p>من اجل دعم أبناء الجالية دينيا وتربويا وعقليا وخُلقيا ولغويا ومهارايا؛ وغيرهم من الجاليات غير المسلمة فيما يتعلق باللغة العربية من خلال فريق مؤهل إداريا وتربويا ومعرفيا وفق المعايير المعمول بها في التعليم، في بيئة تتسم بالتعاون والحيوية والتفاعل.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8">
                    <div class="why__thumb">
                        <img src="assets/img/why/why.png" alt="">
                        <img class="why-green" src="assets/img/why/why-shape-green.png" alt="">
                        <img class="why-pink" src="assets/img/why/why-shape-pink.png" alt="">
                        <img class="why-dot" src="assets/img/why/why-shape-dot.png" alt="">
                        <img class="why-line" src="assets/img/why/why-shape-line.png" alt="">
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
                        <h2 class="section__title">We are <span class="yellow-bg yellow-bg-big">Proud<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                        <p>You don't have to struggle alone, you've got our assistance and help.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-2 offset-xxl-1 col-xl-2 offset-xl-1 col-lg-3 col-md-3 offset-md-0 col-sm-5 offset-sm-2">
                    <div class="counter__item mb-30">
                        <div class="counter__icon user mb-15">
                            <svg viewBox="0 0 490.7 490.7">
                                <path class="st0" d="m245.3 98c-39.7 0-72 32.3-72 72s32.3 72 72 72 72-32.3 72-72-32.3-72-72-72zm0 123.3c-28.3 0-51.4-23-51.4-51.4s23-51.4 51.4-51.4 51.4 23 51.4 51.4-23 51.4-51.4 51.4z"/>
                                <path class="st0" d="m389.3 180.3c-28.3 0-51.4 23-51.4 51.4s23 51.4 51.4 51.4c28.3 0 51.4-23 51.4-51.4s-23.1-51.4-51.4-51.4zm0 82.2c-17 0-30.8-13.9-30.8-30.8s13.9-30.8 30.8-30.8 30.8 13.9 30.8 30.8-13.9 30.8-30.8 30.8z"/>
                                <path class="st0" d="m102.9 180.3c-28.3 0-51.4 23-51.4 51.4s23 51.4 51.4 51.4 51.4-23 51.4-51.4-23-51.4-51.4-51.4zm0 82.2c-17 0-30.8-13.9-30.8-30.8s13.9-30.8 30.8-30.8 30.8 13.9 30.8 30.8-13.7 30.8-30.8 30.8z"/>
                                <path class="st0" d="m245.3 262.5c-73.7 0-133.6 59.9-133.6 133.6 0 5.7 4.6 10.3 10.3 10.3s10.3-4.6 10.3-10.3c0-62.3 50.7-113 113-113s113.1 50.7 113.1 113c0 5.7 4.6 10.3 10.3 10.3s10.3-4.6 10.3-10.3c0-73.7-60-133.6-133.7-133.6z"/>
                                <path class="st0" d="m389.3 303.6c-17 0-33.5 4.6-47.9 13.4-4.8 3-6.4 9.2-3.5 14.2 3 4.8 9.2 6.4 14.2 3.5 11.2-6.8 24.1-10.4 37.3-10.4 39.7 0 72 32.3 72 72 0 5.7 4.6 10.3 10.3 10.3s10.3-4.6 10.3-10.3c-0.2-51.3-41.8-92.7-92.7-92.7z"/>
                                <path class="st0" d="m149.4 316.9c-14.5-8.7-30.9-13.3-47.9-13.3-51 0-92.5 41.5-92.5 92.5 0 5.7 4.6 10.3 10.3 10.3s10.3-4.6 10.3-10.3c0-39.7 32.3-72 72-72 13.2 0 26 3.6 37.2 10.4 4.8 3 11.2 1.4 14.2-3.5 2.9-4.9 1.2-11.1-3.6-14.1z"/>
                            </svg>
                        </div>
                        <div class="counter__content">
                            <h4><span data-purecounter-duration="1" data-purecounter-end="345421" class="purecounter">0</span></h4>
                            <p>Students Enrolled</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-5">
                    <div class="counter__item counter__pl-80 mb-30">
                        <div class="counter__icon book mb-15">
                            <svg viewBox="0 0 512 512">
                                <path class="st0" d="M458.7,512h-384c-29.4,0-53.3-23.9-53.3-53.3V53.3C21.3,23.9,45.3,0,74.7,0H416c5.9,0,10.7,4.8,10.7,10.7v74.7  h32c5.9,0,10.7,4.8,10.7,10.7v405.3C469.3,507.2,464.6,512,458.7,512z M42.7,96v362.7c0,17.6,14.4,32,32,32H448v-384H74.7  C62.7,106.7,51.6,102.7,42.7,96L42.7,96z M74.7,21.3c-17.6,0-32,14.4-32,32s14.4,32,32,32h330.7v-64H74.7z"/>
                                <path class="st0" d="M309.3,298.7c-2.8,0-5.5-1.1-7.6-3.1l-56.4-56.5l-56.4,56.4c-3.1,3.1-7.6,4-11.6,2.3c-4-1.6-6.6-5.5-6.6-9.8V96  c0-5.9,4.8-10.7,10.7-10.7S192,90.1,192,96v166.3l45.8-45.8c4.2-4.2,10.9-4.2,15.1,0l45.8,45.8V96c0-5.9,4.8-10.7,10.7-10.7  S320,90.1,320,96v192c0,4.3-2.6,8.2-6.6,9.9C312.1,298.4,310.7,298.7,309.3,298.7L309.3,298.7z"/>
                            </svg>
                        </div>
                        <div class="counter__content">
                            <h4><span data-purecounter-duration="1" data-purecounter-end="2485" class="purecounter">0</span></h4>
                            <p>Total Courses</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 offset-xxl-0 col-xl-3 offset-xl-0 col-lg-3 offset-lg-0 col-md-3 offset-md-0 col-sm-5 offset-sm-2">
                    <div class="counter__item counter__pl-34 mb-30">
                        <div class="counter__icon graduate mb-15">
                            <svg viewBox="0 0 512 512">
                                <g id="Page-1">
                                    <g id="_x30_01---Degree">
                                        <path id="Shape" class="st0" d="M500.6,86.3L261.8,1c-3.8-1.3-7.9-1.3-11.7,0L11.3,86.3C4.5,88.7,0,95.2,0,102.4    s4.5,13.6,11.3,16.1L128,160.1v53.2c0,33.2,114.9,34.1,128,34.1s128-1,128-34.1v-53.2l25.6-9.1v19.6c0,9.4,7.6,17.1,17.1,17.1    h17.1c9.4,0,17.1-7.6,17.1-17.1V145c0-4-1-7.8-2.8-11.4l42.7-15.3c6.8-2.4,11.3-8.9,11.3-16.1S507.5,88.8,500.6,86.3L500.6,86.3z     M366.9,194.6c-32.5-14.8-101-15.4-110.9-15.4s-78.4,0.6-110.9,15.4v-74.3c5.1-6.6,45.4-17.8,110.9-17.8s105.8,11.2,110.9,17.8    V194.6z M256,230.4c-63.1,0-102.8-10.4-110.2-17.1c7.4-6.6,47.1-17.1,110.2-17.1s102.8,10.4,110.2,17.1    C358.8,220,319.1,230.4,256,230.4z M413.6,131.5L384,142v-22.5c0-33.2-114.9-34.1-128-34.1s-128,1-128,34.1V142L17.1,102.4    l239.1-85.3L426.7,78v43C421.3,123,416.7,126.6,413.6,131.5z M443.7,170.7h-17.1v-25.6c0-4.7,3.8-8.5,8.5-8.5s8.5,3.8,8.5,8.5    v25.6H443.7z M443.7,120.7V84.1l51.2,18.3L443.7,120.7z"/>
                                        <path id="Shape_1_" class="st0" d="M486.4,264.5c-0.5,0-1,0-1.5,0.1C409.2,276.4,332.6,282,256,281.5    c-76.6,0.5-153.2-5.2-228.9-16.9c-0.5-0.1-1-0.1-1.5-0.1c-6,0-25.6,6.8-25.6,93.9s19.6,93.9,25.6,93.9c0.5,0,1-0.1,1.5-0.2    c58.2-9.2,116.9-14.6,175.8-16l-16.7,40c-2.6,6.4-1,13.7,3.9,18.5s12.3,6.1,18.6,3.4l6.5-2.8l2.8,6.5c2.7,6.3,8.9,10.4,15.7,10.4    h0.2c6.9-0.1,13.1-4.3,15.6-10.6l14.8-35.5l14.8,35.3c2.6,6.5,8.8,10.7,15.7,10.8h0.3c6.8,0,12.9-4,15.6-10.2l2.9-6.5l6.4,2.8    c6.3,2.8,13.8,1.5,18.7-3.4c5-4.8,6.5-12.2,3.9-18.6L326.3,437c53.1,1.9,106,7,158.5,15.4c0.5,0.1,1,0.1,1.5,0.1    c6,0,25.6-6.8,25.6-93.9S492.4,264.5,486.4,264.5L486.4,264.5z M283.3,298.4c3.5,13,5.6,26.4,6.2,39.9c-19.3-9-42-6.9-59.4,5.5    c-0.4-15.3-2.4-30.6-5.9-45.5c10.3,0.2,20.9,0.3,31.8,0.3C265.3,298.7,274.4,298.6,283.3,298.4z M264.5,435.2    c-23.6,0-42.7-19.1-42.7-42.7s19.1-42.7,42.7-42.7s42.7,19.1,42.7,42.7S288.1,435.2,264.5,435.2z M25.6,285.9    c6.5,23.6,9.4,48.1,8.5,72.5c0.9,24.5-2,48.9-8.5,72.5c-6.5-23.6-9.4-48.1-8.5-72.5C16.2,333.9,19.1,309.5,25.6,285.9z     M42.8,432.4c4.7-13.5,8.4-36.2,8.4-74s-3.7-60.5-8.4-74c54.2,7.5,108.8,12,163.5,13.5c5.1,19.7,7.5,40.1,7,60.5    c0,1.2,0,2.4-0.1,3.6c-10.2,17-11.3,38-2.7,55.9l-0.4,0.9C154.2,420.2,98.3,424.7,42.8,432.4L42.8,432.4z M233.9,494.9l-6.2-14.3    c-1.9-4.3-6.9-6.3-11.2-4.4l-14.4,6.3l20-48c8.2,8.3,18.7,14.1,30.1,16.5L233.9,494.9z M312.6,476.2c-4.3-1.9-9.3,0.1-11.2,4.4    l-6.3,14.2L276.8,451c11.5-2.4,21.9-8.1,30.2-16.5l20,47.8L312.6,476.2z M484.7,434.8c-54.8-8.4-110.1-13.6-165.5-15.4l-0.6-1.5    c10.7-22.6,6.1-49.5-11.5-67.3c-0.1-17.7-2.1-35.3-6.1-52.6c61.5-1.4,122.9-6.7,183.7-16.1c4,6.7,10.2,33.3,10.2,76.4    S488.6,428,484.7,434.8L484.7,434.8z"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="counter__content">
                            <h4><span data-purecounter-duration="1" data-purecounter-end="24085" class="purecounter">0</span></h4>
                            <p>Online Learners</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 offset-xxl-1 col-xl-3 col-lg-3 col-md-3 col-sm-5">
                    <div class="counter__item mb-30">
                        <div class="counter__icon globe mb-15">
                            <svg viewBox="0 0 512 512">
                                <path class="st0" d="M444.2,150.6c6.9-14.6,10.9-30.4,11.8-46.6c0.1-48.5-39.2-87.9-87.8-88c-28,0-54.4,13.3-71,35.9  C175.7,29.1,58.6,109.2,35.8,230.8s57.3,238.6,178.9,261.4c121.6,22.8,238.6-57.3,261.4-178.9c2.6-13.6,3.8-27.4,3.8-41.3  C480,228.9,467.6,186.7,444.2,150.6z M464,272c0,39.2-11.1,77.6-32.1,110.8c-7.1-34.3-20.4-42.5-36.7-48.8  c-5.3-1.6-10.3-4.4-14.4-8.1c-5.9-6.6-11-13.8-15.2-21.5c-11.4-18.8-25.5-42.1-57.7-58.2l-5.9-2.9c-40.4-20-54-26.8-34.8-84.2  c3.5-10.5,9.5-20.1,17.4-27.9c9.9,32.7,34,71.5,55,101.4c11,15.6,32.6,19.4,48.2,8.4c3.3-2.3,6.1-5.1,8.4-8.4  c14.7-20.6,28-42.3,39.7-64.7C454.4,199.5,464,235.4,464,272z M368,32c39.7,0,72,32.3,72,72c0,24.8-20.2,67.2-56.8,119.4  c-6,8.4-17.6,10.4-26,4.4c-1.7-1.2-3.2-2.7-4.4-4.4C316.2,171.2,296,128.8,296,104C296,64.3,328.3,32,368,32z M48,272  c0-45.4,14.9-89.6,42.4-125.7c12,7.9,65.3,45.5,53.6,86.2c-4.9,14.7-3.4,30.8,4.2,44.3c14.1,24.4,45,32.4,45.6,32.6  c0.3,0.1,26.5,9.1,31.4,27.2c2.7,9.9-1.5,21.5-12.6,34.5c-12.5,15.5-29.2,27.1-48,33.5c-14.5,5.6-27.3,10.6-33.5,33.7  C78.8,399,48,337.4,48,272z M256,480c-39.2,0-77.5-11.1-110.6-32c3.6-20.1,10.6-22.9,25.1-28.5c21.3-7.4,40.1-20.5,54.3-38  c14.8-17.3,20.1-33.8,15.9-49.2c-7.3-26.3-40.4-37.6-42.4-38.2c-0.2-0.1-25.5-6.6-36.3-25.2c-5.3-9.8-6.3-21.4-2.6-31.9  c14.3-50.1-42.1-92-58.8-103.1C140,89.4,196.6,64,256,64c10.9,0,21.7,0.9,32.5,2.6c-5.6,11.7-8.5,24.5-8.5,37.4  c0,3.2,0.3,6.4,0.7,9.5c-13.3,10.4-23.2,24.5-28.6,40.5c-23.6,70.6,1.4,83.1,42.9,103.6l5.8,2.9c28,14,40.3,34.3,51.1,52.2  c4.9,8.8,10.7,17.1,17.5,24.6c5.7,5.3,12.5,9.3,20,11.7c12.9,5,24.1,9.4,29.2,52.4C379.4,451,319.4,480,256,480z M368,152  c26.5,0,48-21.5,48-48s-21.5-48-48-48s-48,21.5-48,48C320,130.5,341.5,152,368,152z M368,72c17.7,0,32,14.3,32,32s-14.3,32-32,32  s-32-14.3-32-32S350.3,72,368,72z"/>
                            </svg>
                        </div>
                        <div class="counter__content">
                            <h4><span data-purecounter-duration="1" data-purecounter-end="203" class="purecounter">0</span>k</h4>
                            <p>Foreign Followers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter area end -->


    <!-- banner area start -->
    <section class="banner__area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="banner__item p-relative mb-40" data-background="assets/img/banner/banner-bg-1.jpg">
                        <div class="banner__content">
                            <span>Free</span>
                            <h3 class="banner__title">
                                <a href="course-details.html">Germany Foundation <br> Document</a>
                            </h3>
                            <a href="course-grid.html" class="e-btn e-btn-2">View Courses</a>
                        </div>
                        <div class="banner__thumb d-none d-sm-block d-md-none d-lg-block">
                            <img src="assets/img/banner/banner-img-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="banner__item p-relative mb-40" data-background="assets/img/banner/banner-bg-2.jpg">
                        <div class="banner__content">
                            <span class="orange">new</span>
                            <h3 class="banner__title">
                                <a href="course-details.html">Online Courses <br>From Eduka University</a>
                            </h3>
                            <a href="course-grid.html" class="e-btn e-btn-2">Find Out More</a>
                        </div>
                        <div class="banner__thumb banner__thumb-2 d-none d-sm-block d-md-none d-lg-block">
                            <img src="assets/img/banner/banner-img-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->

@endsection

