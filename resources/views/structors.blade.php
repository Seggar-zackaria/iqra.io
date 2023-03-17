@extends('layouts.app')
@section('title','هيكلة المدرسة')
@section('content')


<!-- page title area start -->
<section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="assets/img/page-title/pages-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="page__title-wrapper mt-110">
                    <h3 class="page__title">الهيكلة</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">الهيكلة</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end -->

<!-- teacher area start -->
<section class="teacher__area pt-115 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 offset-xxl-3">
                <div class="section__title-wrapper text-center mb-60">
                    <h2 class="section__title"> <br>
                        أساتذة <span class="yellow-bg"> المدرسة <img src="{{asset('assets/img/shape/yellow-bg-2.png')}}}" alt="">  </span> <br>
                    </h2>
                    <p>معلمين و منظمين المدرسة</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                <div class="teacher__item text-center grey-bg-5 transition-3 mb-30 overflow-hidden ">
                    <div class="teacher__thumb w-img fix">
                        <a href="#">
                            <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-16.jpg')}}"
                                 style="max-width: 15rem; max-height:15rem ;!important;"
                                 class="rounded img-fluid"
                                 alt="">
                        </a>
                    </div>
                    <div class="teacher__content">
                        <h3 class="teacher__title">مهاجري زيان</h3>
                        <span>مدير المدرسة</span>

                        <div class="teacher__social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- teacher area end -->
@endsection
