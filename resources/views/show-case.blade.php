@extends('layouts.app')
@section('title','show-case')
@section('content')


    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="assets/img/page-title/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper mt-110">
                        <h3 class="page__title mb-5">معرض الصور</h3>
                        <nav aria-label="breadcrumb  mt-3">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page">معرض الصور</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- course area start -->
    <section class="course__area pt-120 pb-120">
        <div class="container">
           {{-- <div class="course__tab-inner grey-bg-2 mb-50">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="course__tab-wrapper d-flex align-items-center">
                            <div class="course__tab-btn">
                                <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">
                                            <svg class="grid" viewBox="0 0 24 24">
                                                <rect x="3" y="3" class="st0" width="7" height="7"/>
                                                <rect x="14" y="3" class="st0" width="7" height="7"/>
                                                <rect x="14" y="14" class="st0" width="7" height="7"/>
                                                <rect x="3" y="14" class="st0" width="7" height="7"/>
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link list" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">
                                            <svg class="list" viewBox="0 0 512 512">
                                                <g id="Layer_2_1_">
                                                    <path class="st0" d="M448,69H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,69,448,69z"/>
                                                    <circle class="st0" cx="64" cy="100" r="31"/>
                                                    <path class="st0" d="M448,225H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,225,448,225z"/>
                                                    <circle class="st0" cx="64" cy="256" r="31"/>
                                                    <path class="st0" d="M448,381H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,381,448,381z"/>
                                                    <circle class="st0" cx="64" cy="412" r="31"/>
                                                </g>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="course__view">
                                <h4>Showing 1 - 9 of 84</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="course__sort d-flex justify-content-sm-end">
                            <div class="course__sort-inner">
                                <select>
                                    <option>Default</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                    <option>Option 6</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
            <div class="row">
                <div class="col-xxl-12">
                    <div class="course__tab-conent">
                        <div class="tab-content" id="courseTabContent">
                            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item white-bg mb-30 fix">
                                            <div class="course__thumb w-img p-relative fix">
                                                <a href="course-details.html">
                                                    <img src="assets/img/school/photo_2023-02-24_19-44-10.jpg"  alt="">
                                                </a>
                                                <div class="course__tag">
                                                    <a href="#">رحالات</a>
                                                </div>
                                            </div>
                                            <div class="course__content">

                                                <h3 class="course__title"><a href="course-details.html">رحالات الصيفية للمدرسة </a></h3>
                                            </div>
                                            <div class="course__more d-flex justify-content-between align-items-center">
                                                <div class="course__btn">
                                                    <a href="course-details.html" class="link-btn ">
                                                        <i class="fa-duotone fa-eye "></i>
                                                        تصفح
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item white-bg mb-30 fix">
                                            <div class="course__thumb w-img p-relative fix" >
                                                <a href="course-details.html">
                                                    <img src="assets/img/school/photo_2023-02-24_19-44-14.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                    <a href="#" class="sky-blue">نشاطات</a>
                                                </div>
                                            </div>
                                            <div class="course__content">
                                                <h3 class="course__title"><a href="course-details.html">ممارسات و نشاطات التى تمارس داخل المدرسة</a></h3>
                                            </div>
                                            <div class="course__more d-flex justify-content-between align-items-center">
                                                <div class="course__btn">
                                                    <a href="course-details.html" class="link-btn">
                                                        <i class="fa-duotone fa-eye"></i>
                                                        تصفح
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item white-bg mb-30 fix">
                                            <div class="course__thumb w-img p-relative fix">
                                                <a href="course-details.html">
                                                    <img src="assets/img/school/photo_2023-02-24_19-44-21.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                    <a href="#" class="blue-2">اختتام</a>
                                                </div>
                                            </div>
                                            <div class="course__content">
                                                <h3 class="course__title"><a href="course-details.html"> حفل اختتام نهاية السنة</a></h3>
                                            </div>
                                            <div class="course__more d-flex justify-content-between align-items-center">
                                                <div class="course__btn">
                                                    <a href="course-details.html" class="link-btn">
                                                        <i class="fa-duotone fa-eye"></i>
                                                        تصفح
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item white-bg mb-30 fix">
                                            <div class="course__thumb w-img p-relative fix">
                                                <a href="course-details.html">
                                                    <img src="assets/img/school/photo_2023-02-24_19-44-16.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                    <a href="#" class="green">مناسبات</a>
                                                </div>
                                            </div>
                                            <div class="course__content">
                                                <h3 class="course__title"><a href="course-details.html">احتفال بعيد الفطر المبارك</a></h3>
                                            </div>
                                            <div class="course__more d-flex justify-content-between align-items-center">

                                                <div class="course__btn">
                                                    <a href="course-details.html" class="link-btn">
                                                        <i class="fa-duotone fa-eye"></i>
                                                        تصفح
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item white-bg mb-30 fix">
                                            <div class="course__thumb w-img p-relative fix">
                                                <a href="course-details.html">
                                                    <img src="assets/img/school/photo_2023-02-24_19-44-52.jpg" alt="">
                                                </a>
                                                <div class="course__tag">
                                                    <a href="#" class="blue">تخرج</a>
                                                </div>
                                            </div>
                                            <div class="course__content">
                                                <h3 class="course__title"><a href="course-details.html">تخرج الطلبة و انهاء الدراسة بنجاح</a></h3>
                                            </div>
                                            <div class="course__more d-flex justify-content-between align-items-center">

                                                <div class="course__btn">
                                                    <a href="course-details.html" class="link-btn">
                                                            تصفح
                                                        <i class="fa-duotone fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s">
                        <ul class="d-flex align-items-center">
                            <li class="prev">
                                <a href="course-grid.html" class="link-btn link-prev">
                                    <i class="fa-duotone fa-arrow-right me-2"></i>
                                    السابق
                                </a>
                            </li>
                            <li>
                                <a href="course-grid.html">
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="course-grid.html">
                                    <span>2</span>
                                </a>
                            </li>
                            <li>
                                <a href="course-grid.html">
                                    <span>3</span>
                                </a>
                            </li>
                            <li class="next">
                                <a href="course-grid.html" class="link-btn">
                                    التالي
                                    <i class="fa-duotone fa-arrow-left ms-2"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course area end -->




@endsection
