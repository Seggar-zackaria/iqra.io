@extends('layouts.app')
@section('title','تسجيل الدخول')
@section('content')


    <!-- sign up area start -->
    <section class="signup__area po-rel-z1 pt-100 pb-145">
        <div class="sign__shape">
            <img class="man-1" src="assets/img/icon/sign/man-3.png" alt="">
            <img class="man-2 man-22" src="assets/img/icon/sign/man-2.png" alt="">
            <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
            <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
            <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
            <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
            <img class="flower" src="assets/img/icon/sign/flower.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                    <div class="section__title-wrapper text-center mb-55">
                        <h2 class="section__title">انشاء حساب</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="sign__wrapper white-bg">
                        <div class="sign__header mb-35">
                            <div class="sign__in text-center">
                                <a href="#" class="sign__social g-plus mb-15"><i class="fab fa-google text-white fs-4 ms-5"></i>Sign Up with Google</a>
                                <p> <span>........</span> Or, <a href="sign-up.html">sign up</a> with your email<span> ........</span> </p>
                            </div>
                        </div>
                        <div class="sign__form">
                            <form action="#">
                                <div class="sign__input-wrapper mb-25">
                                    <h5>اسم كامل</h5>
                                    <div class="sign__input">
                                        <input type="text" placeholder="اسم كامل">
                                        <i class="fal fa-user position-absolute end-up-90 bottom-35"></i>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>بريد الإلكتروني</h5>
                                    <div class="sign__input">
                                        <input type="text" placeholder="بريد الإلكتروني">
                                        <i class="fal fa-envelope position-absolute end-up-90 bottom-35"></i>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>كلمة السر</h5>
                                    <div class="sign__input">
                                        <input type="text" placeholder="كلمة السر">
                                        <i class="fal fa-lock position-absolute end-up-90 bottom-35"></i>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-10">
                                    <h5>اعادة ادخال كلمة السر</h5>
                                    <div class="sign__input">
                                        <input type="text" placeholder="اعادة ادخال كلمة السر">
                                        <i class="fal fa-lock position-absolute end-up-90 bottom-35"></i>
                                    </div>
                                </div>
                                <div class="sign__action d-flex justify-content-between mb-30">
                                    <div class="sign__agree d-flex align-items-center">
                                        <input class="m-check-input" type="checkbox" id="m-agree">
                                        <label class="m-check-label" for="m-agree">اوافق على <a href="#" class="fw-bold">Terms & Conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <button class="e-btn w-100">  انشاء حساب</button>
                                <div class="sign__new text-center mt-20">
                                    <p>عضو مسبقا? <a href="sign-in.html"> سجل </a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign up area end -->

@endsection

