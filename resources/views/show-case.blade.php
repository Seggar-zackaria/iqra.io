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
           <div class="course__tab-inner grey-bg-2 mb-50">
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
                                </ul>
                            </div>
                            <div class="course__view">
                                <h4>Showing 1 - 1 of 1</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="course__sort d-flex justify-content-sm-end">
                            <div class="course__sort-inner">
                                <label for="اختر فئة">
                                    <select>
                                        <option disabled selected hidden>اختر فئة</option>
                                        <option>نشاطات</option>
                                        <option>رحالات</option>
                                        <option>اختتام</option>
                                        <option>تخرج</option>
                                        <option>مناسبات</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="course__tab-conent">
                        <div class="tab-content" id="courseTabContent">
                            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                        <div class="course__item white-bg mb-30 fix">
                                            <div class="course__thumb w-img p-relative fix">
                                                <a href="{{url('gallery')}}">
                                                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-10.jpg')}}"  alt="">
                                                </a>
                                                <div class="course__tag">
                                                    <a href="{{url('gallery')}}">رحالات</a>
                                                </div>
                                            </div>
                                            <div class="course__content">

                                                <h3 class="course__title"><a href="{{url('gallery')}}">رحالات الصيفية للمدرسة </a></h3>
                                            </div>
                                            <div class="course__more d-flex justify-content-between align-items-center">
                                                <div class="course__btn">
                                                    <a href="{{url('gallery')}}" class="link-btn ">
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
                                                <a href="{{url('gallery')}}">
                                                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-10.jpg')}}" alt="">
                                                </a>
                                                <div class="course__tag">
                                                    <a href="{{url('gallery')}}" class="sky-blue">نشاطات</a>
                                                </div>
                                            </div>
                                            <div class="course__content">
                                                <h3 class="course__title"><a href="{{url('gallery')}}">ممارسات و نشاطات التى تمارس داخل المدرسة</a></h3>
                                            </div>
                                            <div class="course__more d-flex justify-content-between align-items-center">
                                                <div class="course__btn">
                                                    <a href="{{url('gallery')}}" class="link-btn">
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
                                                <a href="{{url('gallery')}}">
                                                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-21.jpg')}}" alt="">
                                                </a>
                                                <div class="course__tag">
                                                    <a href="{{url('gallery')}}" class="blue-2">اختتام</a>
                                                </div>
                                            </div>
                                            <div class="course__content">
                                                <h3 class="course__title"><a href="{{url('gallery')}}"> حفل اختتام نهاية السنة</a></h3>
                                            </div>
                                            <div class="course__more d-flex justify-content-between align-items-center">
                                                <div class="course__btn">
                                                    <a href="{{url('gallery')}}" class="link-btn">
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
                                                <a href="{{url('gallery')}}">
                                                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-16.jpg')}}" alt="">
                                                </a>
                                                <div class="course__tag">
                                                    <a href="{{url('gallery')}}" class="green">مناسبات</a>
                                                </div>
                                            </div>
                                            <div class="course__content">
                                                <h3 class="course__title"><a href="{{url('gallery')}}">احتفال بعيد الفطر المبارك</a></h3>
                                            </div>
                                            <div class="course__more d-flex justify-content-between align-items-center">

                                                <div class="course__btn">
                                                    <a href="{{url('gallery')}}" class="link-btn">
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
                                                <a href="{{url('gallery')}}">
                                                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-52.jpg')}}" alt="">
                                                </a>
                                                <div class="course__tag">
                                                    <a href="{{url('gallery')}}" class="blue">تخرج</a>
                                                </div>
                                            </div>
                                            <div class="course__content">
                                                <h3 class="course__title"><a href="c{{url('gallery')}}">تخرج الطلبة و انهاء الدراسة بنجاح</a></h3>
                                            </div>
                                            <div class="course__more d-flex justify-content-between align-items-center">

                                                <div class="course__btn">
                                                    <a href="{{url('gallery')}}" class="link-btn">
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
                        <ul class="d-flex align-items-center justify-content-center">
                            <li>
                                <a href="{{url('gallery')}}" class="link-btn">
                                    <i class="fa-duotone fa-arrow-right"></i>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('gallery')}}" class="link-btn">
                                    <i class="fa-duotone fa-arrow-left"></i>
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
