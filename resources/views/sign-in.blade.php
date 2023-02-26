@extends('layouts.app')
@section('title','الدخول')
@section('content')
    <!-- sign up area start -->
    <section class="signup__area po-rel-z1 pt-100 pb-145">
        <div class="sign__shape">
            <img class="man-1" src="assets/img/icon/sign/man-1.png" alt="" class="d-xxl-none">
            <img class="man-2" src="assets/img/icon/sign/man-2.png" alt="">
            <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
            <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
            <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
            <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 ">
                    <div class="sign__wrapper white-bg">
                        <div class="sign__header mb-35">
                            <div class="sign__in text-center">
                                <a href="#" class="sign__social mb-15"><i class="fa-brands text-white fs-4 fa-google ms-5"></i>Sign in with Google</a>
                                <p> <span>........</span> Or, <a href="sign-in.html">sign in</a> with your email<span> ........</span> </p>
                            </div>
                        </div>
                        <div class="sign__form">
                            <form action="#">
                                <div class="sign__input-wrapper mb-25">
                                    <h5>بريد الإلكتروني</h5>
                                    <div class="sign__input">
                                        <label class="w-100">
                                            <input type="text" placeholder="بريد الإلكتروني">
                                            <i class="fal fa-envelope position-absolute end-90 bottom-35"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="sign__input-wrapper mb-10">
                                    <h5>كلمة السر</h5>
                                    <div class="sign__input">
                                        <label class="w-100">
                                            <input type="text" placeholder="كلمة السر">
                                        <i class="fal fa-lock position-absolute end-90 bottom-35"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="sign__action d-sm-flex justify-content-between mb-30">
                                    <div class="sign__agree d-flex align-items-center">
                                        <input class="m-check-input" type="checkbox" id="m-agree">
                                        <label class="m-check-label" for="m-agree">تذكرني
                                        </label>
                                    </div>
                                    <div class="sign__forgot">
                                        <a href="#">نسيت كلمة السر?</a>
                                    </div>
                                </div>
                                <button class="e-btn  w-100"></button>
                                <div class="sign__new text-center mt-20">
                                    <p>عضو جديد? <a href={{asset('sign-up')}}>تسجيل الدخول</a></p>
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

