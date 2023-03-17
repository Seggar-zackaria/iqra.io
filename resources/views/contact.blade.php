@extends('layouts.app')
@section('title',__('contact'))
@section('content')

        <!-- page title area start -->
        <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="assets/img/page-title/pages-title.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="page__title-wrapper mt-110">
                            <h3 class="page__title mb-3">تواصلوا معنا</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">تواصلوا معنا</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- contact area start -->
        <section class="contact__area pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-xl-7 col-lg-6">
                        <div class="contact__wrapper">
                            <div class="section__title-wrapper mb-40">
                                <h2 class="section__title">تواصلوا<span class="yellow-bg yellow-bg-big"> معنا<img src="{{asset('assets/img/shape/yellow-bg.png')}}" alt=""></span></h2>
                                <p>نرد على اسئلتكم و إقترحاتكم نحن هنا من أجلكم.</p>
                            </div>
                            <div class="contact__form">
                                <form action="assets/mail.php">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-md-6">
                                            <div class="contact__form-input">
                                                <input type="text" placeholder="الاسم" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-md-6">
                                            <div class="contact__form-input">
                                                <input type="email" placeholder="بريد الالكتروني" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__form-input">
                                                <input type="text" placeholder="الموضوع" name="subject">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__form-input">
                                                <textarea placeholder="ادخل الرسالة" name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__form-agree  d-flex align-items-center mb-20">
                                                <input class="e-check-input" type="checkbox" id="e-agree">
                                                <label class="e-check-label" for="e-agree">اوافق على <a href="#">Terms & Conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__btn">
                                                <button type="submit" class="e-btn"> ارسال <span><i class="fa-thin fa-paper-plane ms-2"></i></span> </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
                        <div class="contact__info white-bg p-relative z-index-1">
                            <div class="contact__shape d-none d-lg-block ">
                                <img class="contact-shape-1" src="{{asset('assets/img/contact/contact-shape-1.png')}}"  alt="">
                                <img class="contact-shape-2" src="{{asset('assets/img/contact/contact-shape-2.png')}}" alt="">
                            </div>
                            <div class="contact__info-inner white-bg">
                                <ul>
                                    <li>
                                        <div class="contact__info-item d-flex align-items-start mb-35">
                                            <div class="contact__info-icon mr-15">
                                                <svg class="map" viewBox="0 0 24 24">
                                                    <path class="st0" d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z"/>
                                                    <circle class="st0" cx="12" cy="10" r="3"/>
                                                </svg>
                                            </div>
                                            <div class="contact__info-text">
                                                <h4>جنيفا سويسرا</h4>
                                                <p><a target="_blank" href="https://rb.gy/2ua5cv">34 chemin Colladon 1209 Genève Suisse Bus 3, arrêt Colladon</a></p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact__info-item d-flex align-items-start mb-35">
                                            <div class="contact__info-icon mr-15">
                                                <svg class="mail" viewBox="0 0 24 24">
                                                    <path class="st0" d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z"/>
                                                    <polyline class="st0" points="22,6 12,13 2,6 "/>
                                                </svg>
                                            </div>
                                            <div class="contact__info-text">
                                                <h4> بريد الإلكتروني</h4>
                                                <p><a href="mailto:Madrassa@fcigeneve.ch">Madrassa@fcigeneve.ch</a></p>
                                                <p><a href="mailto:info@fcigeneve.ch"> info@fcigeneve.ch</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact__info-item d-flex align-items-start mb-35">
                                            <div class="contact__info-icon mr-15">
                                                <svg class="call" viewBox="0 0 24 24">
                                                    <path class="st0" d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z"/>
                                                </svg>
                                            </div>
                                            <div class="contact__info-text-ltr">
                                                <h4>الهاتف</h4>
                                                <p style="direction: ltr;unicode-bidi: embed;"><a href="tel:+(41) 799 653 711">+(41) 799 653 711</a></p>
                                                <p><a href="tel:+(41) 799 653 711">+(41) 799 653 711</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="contact__social pl-30">
                                    <h4>تابعونا على</h4>
                                    <ul>
                                        <li><a href="https://www.facebook.com/MEDIA.EOIC/" target="_blank" class="fb" ><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="tw" ><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCi_iTZfHrRN19Wtwo4vM4EA?view_as=subscriber" target="_blank" class="pin" ><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->



@endsection

