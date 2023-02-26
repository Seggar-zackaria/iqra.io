@extends('layouts.app')
@section('title',__('contact'))
@section('content')
    <main>

        <!-- page title area start -->
        <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="assets/img/contact/contact-img.jpeg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="page__title-wrapper mt-110">
                            <h3 class="page__title mb-3">تواصلوا معنا</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
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
                                <h2 class="section__title">تواصلوا<span class="yellow-bg yellow-bg-big"> معنا<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
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
                            <div class="contact__shape">
                                <img class="contact-shape-1" src="assets/img/contact/contact-shape-1.png" alt="">
                                <img class="contact-shape-2" src="assets/img/contact/contact-shape-2.png" alt="">
                                <img class="contact-shape-3" src="assets/img/contact/contact-shape-3.png" alt="">
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
                                                <p><a target="_blank" href="https://www.google.com/maps/place/Chem.+Colladon+34,+1209+Gen%C3%A8ve,+Suisse/@46.2236071,6.1200926,17z/data=!4m10!1m2!2m1!1s34+chemin+Colladon+1209+Gen%C3%A8ve+Suisse+Bus+3,+arr%C3%AAt+Colladon!3m6!1s0x478c64934f5c9513:0x9a6066c964f25777!8m2!3d46.2236034!4d6.1222813!15sCj0zNCBjaGVtaW4gQ29sbGFkb24gMTIwOSBHZW7DqHZlIFN1aXNzZSBCdXMgMywgYXJyw6p0IENvbGxhZG9ukgERY29tcG91bmRfYnVpbGRpbmfgAQA!16s%2Fg%2F11c1x24yb7">34 chemin Colladon 1209 Genève Suisse Bus 3, arrêt Colladon</a></p>

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
                                            <div class="contact__info-text">
                                                <h4>الهاتف</h4>
                                                <p><a href="tel:+(426)-742-26-44">+(41) 799 653 711</a></p>
                                                <p><a href="tel:+(224)-762-442-32">+(41) 799 653 711</a></p>
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

        <!-- contact info area start -->
        <section class="contact__area grey-bg-2 pt-120 pb-90 p-relative fix">
            <div class="contact__shape">
                <img class="contact-shape-5" src="assets/img/contact/contact-shape-5.png" alt="">
                <img class="contact-shape-4" src="assets/img/contact/contact-shape-4.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-6">
                        <div class="contact__item text-center mb-30 transition-3 white-bg">
                            <div class="contact__icon d-flex justify-content-center align-items-end">
                                <svg viewBox="0 0 24 24">
                                    <circle class="st0" cx="12" cy="12" r="10"/>
                                    <path class="st0" d="M8,14c0,0,1.5,2,4,2s4-2,4-2"/>
                                    <line class="st0" x1="9" y1="9" x2="9" y2="9"/>
                                    <line class="st0" x1="15" y1="9" x2="15" y2="9"/>
                                </svg>
                            </div>
                            <div class="contact__content">
                                <h3 class="contact__title">مفاهيم حول المدرسة</h3>
                                <p>يرجى من كل طالب او اولياء الطلاب بقراة دفتر الشروط لتجنب الغضب عند الحاجة</p>
                                <a href="contact.html" class="e-btn e-btn-border">اقرا دفتر الشروط</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5  col-lg-5 col-md-6">
                        <div class="contact__item text-center mb-30 transition-3 white-bg">
                            <div class="contact__icon d-flex justify-content-center align-items-end">
                                <svg viewBox="0 0 24 24">
                                    <path class="st0" d="M21,10.8c0,1.3-0.3,2.6-0.9,3.8c-1.4,2.9-4.4,4.7-7.6,4.7c-1.3,0-2.6-0.3-3.8-0.9L3,20.3l1.9-5.7  C4.3,13.4,4,12.1,4,10.8c0-3.2,1.8-6.2,4.7-7.6c1.2-0.6,2.5-0.9,3.8-0.9H13c4.3,0.2,7.8,3.7,8,8V10.8z"/>
                                    <g>
                                        <circle class="st1" cx="9.3" cy="10.5" r="0.5"/>
                                        <circle class="st1" cx="12.5" cy="10.5" r="0.5"/>
                                        <circle class="st1" cx="15.7" cy="10.5" r="0.5"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="contact__content">
                                <h3 class="contact__title">مساعدة </h3>
                                <p>نجيب على اي استفسار او تسائلات او شكاوي  عبر البريد الالكتروني</p>
                                <a href="contact.html" class="e-btn e-btn-border">ارسال </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact info area end -->
    </main>

@endsection

