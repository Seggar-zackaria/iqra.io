@extends('layouts.app')
@section('title',__('gallery'))


@section('content')


    <!-- page title area start -->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="assets/img/page-title/pages-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">معرض الصور</h3>
                        <nav aria-label="breadcrumb">
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

    <!--Start Photos -->

    <section class="photos py-5 my-5">
        <div class="container ">
            <div class="d-flex justify-content-end mx-auto mb-3">

                <a href="{{url('')}}">
                    <i class="btn btn-dark-outline ms-2 rounded-circle fs-3 fa-duotone fa-video align-self-end p-2"></i>
                </a>

                <a href="{{url('')}}">
                    <i class="btn btn-dark-outline ms-2 rounded-circle fs-3 fa-duotone fa-image align-self-end p-2 "></i>
                </a>
            </div>

            <!-- HERE ENDS 2 BUTTONS -->

            <!-- HERE START PICTURE SECTION -->

            <div class="row g-3">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="blog__thumb w-img fix">
                        <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-06.jpg')}}"
                             alt="Photo D'evenement"
                             class="img-fluid rounded-3">
                    </div>
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-06.jpg')}}"
                         alt="Photo D'evenement"
                         class="img-fluid rounded-3 ">
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-06.jpg')}}"
                         alt="Photo D'evenement"
                         class="img-fluid rounded-3 ">
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-06.jpg')}}"
                         alt="Photo D'evenement"
                         class="img-fluid rounded-3 ">
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-06.jpg')}}"
                         alt="Photo D'evenement"
                         class="img-fluid rounded-3 ">
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-06.jpg')}}"
                         alt="Photo D'evenement"
                         class="img-fluid rounded-3 ">
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-06.jpg')}}"
                         alt="Photo D'evenement"
                         class="img-fluid rounded-3 ">
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-06.jpg')}}"
                         alt="Photo D'evenement"
                         class="img-fluid rounded-3 ">
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-16.jpg')}}"
                         alt="Photo D'evenement"
                         class="img-fluid rounded-3 ">
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-06.jpg')}}"
                         alt="Photo D'evenement"
                         class="img-fluid rounded-3 ">
                </div>


                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <img src="{{asset('assets/img/school/photo_2023-02-24_19-44-06.jpg')}}"
                         alt="Photo D'evenement"
                         class="img-fluid rounded-3 ">
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <video src="{{asset('assets/video/testimonial-video.mp4')}}"
                           controls
                           type="mp4"
                           class="img-fluid rounded-3 ">
                    </video>
                </div>
            </div>   <!-- HERE ENDS PICTURE SECTION -->
        </div>
    </section>

    <!--End Photos -->




@endsection
