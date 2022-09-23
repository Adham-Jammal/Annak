@extends('app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/' . LaravelLocalization::getCurrentLocale() . '-style.css') }}">
@stop
@section('main')
{{-- Hero --}}
    <section class="hero" id="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-content">
                    {{-- <a class="url" href="http://ank-app.sa/">ank-app.sa</a> --}}
                    <h1 data-aos="fade-in" data-aos-duration="1000">
                        <span class="main-color">عنّك</span>
                        خطوة نحول
                        <span class="main-color">التسهيــــل</span>
                    </h1>
                    <p data-aos="fade-in" data-aos-duration="1000">
                        "سندك اللي يشيل عنّك عناء التسوق، أول وأرهب تطبيق سعودي يجمع لك كل البراندات في مكان واحد "
                    </p>
                    <div class="download">
                        <a href="https://apps.apple.com/lb/app/ank-client/id1637172167" ><img src="{{asset('img/apple-store.png')}}" alt="apple-store"></a>
                        <a href="https://play.google.com/store/apps/details?id=com.rightaccess.ank.client"><img src="{{asset('img/google-play.png')}}" alt="google-play"></a>
                    </div>



                </div>
                <div class="col-md-6 image-content" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{asset('img/hero-image.png')}}" alt="Anak">
                </div>

            </div>
        </div>
        <img src="{{asset('img/pink-shadow.png')}}" class="shadow" alt="" >
    </section>
    <Section class="discover" id="why_us">
        <div class="container">
            <div class="row">
                <div class="col-md-4 image-content" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{asset('img/question-mark-icon-1.png')}}" class="question-1" alt="question-mark">
                    <img src="{{asset('img/discover-image.png')}}" alt="Discover-Anak">
                </div>
                <div class="col-md-8 text-content" data-aos="fade-right" data-aos-duration="1000">
                    <h2>لنكتشف معاً عن تطبيق "عنّــك"؟</h2>
                    <span>فـي مرحلة الفكرة تساءلنا مــــــــاذا سيكون دورنا لشــــــركائنا العملاء والشركــــــات؟</span>
                    <p>وكانت الإجابـة: النيابة عن شركائنا الأفراد التسوق، النيابة عن شركائنا الشركات فـي التسويق وزايدة المبيعات وخدمــــة عملائهــــم. فلذلك تم إختيار اســم "عنـّـك" لأنك ستدعنــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــا نقوم بكـــــــــــــــــــــل ذلـــــــــــــك عنـــــــــــــــــــــــــــــــــــك</p>
                    <img src="{{asset('img/question-mark-icon-2.png')}}" class="question-2" alt="question-mark">
                </div>
            </div>
        </div>
        <img src="{{asset('img/dots.png')}}" class="dots" alt="Dots" data-aos="fade-right" data-aos-duration="1500">
        <img src="{{asset('img/arrow.png')}}" class="arrow" alt="Arrow" data-aos="fade-down-right" data-aos-duration="1500" >


    </Section>
    <section class="vmg" id="our_visions">
        <div class="container">
            <div class="boxes">
                <div class="box box-1" data-aos="fade-up" data-aos-duration="1000">
                    <h2>رؤية المنصة<img src="{{asset('img/vision-icon.png')}}" alt="vision"></h2>
                    <hr>
                    <p>تكمن رؤيتنا لتطبيق عنّك في مواكبة التحول التقني لنقلة نوعية لمفهوم التسوق</p>
                </div>
                <div class="box box-2" data-aos="fade-up" data-aos-duration="1250">
                    <h2> رسالة المنصة<img src="{{asset('img/message-icon.png')}}" alt="message"></h2>
                    <hr>
                    <p>نسعى أن نخلص منصة إلكترونية تسهل على شركائنا الأفراد تجربة التسوق. مما يساهم في زيادة مبيعات شركائنا الشركات</p>
                </div>
                <div class="box box-3" data-aos="fade-up" data-aos-duration="1500">
                    <h2>أهداف المنصة<img src="{{asset('img/goals-icon.png')}}" alt="goals"></h2>
                    <hr>
                    <p>التسهيــــــل على العميـــــل تجربــــــة التسوق وزيادة مبيعـات الشركات ومواكبــــــــــــــــــــــة التحوّل الرقمــــــــــــي</p>
                </div>
            </div>
        </div>
        <img src="{{asset('img/pink-shadow.png')}}" class="shadow" alt="shadow">
        <img src="{{asset('img/illustration.png')}}" class="illustration" alt="illustration">

    </section>
    <section class="advantages" id="goals" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-content">
                    <h2>ميزات المنصـــة
                        <br>
                        <span class="main-color" >للأفـــــــــــــــــــــــــــــــراد</span>
                    </h2>
                    <ol>
                        <li>تـــصميم مميز وعملي وبسيط</li>
                        <li>تـــــــــــــــــــــــوفير الوقـــــــــت والجهـــد</li>
                        <li>تســليم فوري من وقت الطلـــب</li>
                    </ol>
                </div>
                <div class="col-md-6 image-content">
                    <img src="{{asset('img/advantages-image.png')}}" alt="advantages-image">
                </div>
            </div>
        </div>
    </section>
    <section class="values" id="values">
        <div class="container">
            <h2>قيم المنصة</h2>
            <div class="boxes">
                <div class="box" data-aos="fade-up" data-aos-duration="1000">
                    <h3>السرعة</h3>
                    <span>1</span>
                </div>
                <div class="box" data-aos="fade-up" data-aos-duration="1250">
                    <h3>السهولة</h3>
                    <span>2</span>
                </div>
                <div class="box" data-aos="fade-up" data-aos-duration="1500">
                    <h3>التفرد</h3>
                    <span>3</span>
                </div>
            </div>
        </div>
        <img src="{{asset('img/pink-shadow.png')}}" class="shadow" alt="shadow">
    </section>
    <section class="advantages company-advantages" id="advantages" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-md-6 image-content">
                    <img src="{{asset('img/company-advantages-image.png')}}" alt="advantages-image">
                </div>
                <div class="col-md-6 text-content">
                    <div class="content">
                        <h2>ميزات المنصـــة
                            <br>
                            <span class="main-color" >للشركــــــــــــــــــــــــــــــات</span>
                        </h2>
                        <ol>
                            <li>توسيع نطاق المبيعـــــــــــــــــــــات</li>
                            <li>عــمـــــــــــــــــــــــــــولة منخفضـــــــــــــــــــة</li>
                            <li>لـوحـــــــــــــــــة تحكـــــــم سهـــــــــــــــــــلة</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="app">
        <div class="container-fluid">
            <h2>التطبيق الذي تحتاج إليه! </h2>
            <p>جانب من التصميم الداخلي للتطبيق</p>
            <div class="slider" data-aos="zoom-in" data-aos-duration="1000">
                <div id="owl-carousel" class="preview-carousel owl-carousel owl-theme">
                    <div class="slide">
                        <img src="{{ asset('/img/slider-1.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/img/slider-2.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/img/slider-3.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/img/slider-4.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/img/slider-5.png') }}" alt="">
                    </div>


                    <div class="slide">
                        <img src="{{ asset('/img/slider-1.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/img/slider-2.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/img/slider-3.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/img/slider-4.png') }}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/img/slider-5.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us contact-us-1" id="contact_us" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 form">
                    <form action="#">
                        <h3>التسجيل كشريك</h3>
                        <label for="company_name">اسم الشركة</label>
                        <input type="text" id="company_name" name="company_name" required>
                        <label for="store_name">اسم المتجر</label>
                        <input type="text" id="store_name" name="store_name" required>
                        <label for="cr">رقم السجل التجاري</label>
                        <input type="number" id="cr" name="cr" required>
                        <label for="phone_number">رقم الجوال</label>
                        <input type="number" id="phone_number" name="phone_number" required>
                        <label for="partner_mail">الايميل</label>
                        <input type="email" id="partner_mail" name="partner_mail" required>
                        <label for="position">المنصب</label>
                        <input type="text" id="position" name="position" required>
                        <input type="submit" id="submit" value="انضم لنا">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us contact-us-2" id="contact_us" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 form">
                    <form action="#">
                        <h3>دعنا نتكلم!</h3>
                        <label for="name">الاسم الكامل</label>
                        <input type="text" id="name" name="name" required>
                        <label for="name">البريد الالكتروني</label>
                        <input type="email" id="email" name="email" required>
                        <label for="name">رسالتك</label>
                        <textarea name="message" id="message" required ></textarea>
                        <input type="submit" id="send" value="إرسال">
                    </form>
                </div>
            </div>
        </div>
        <img src="{{asset('img/pink-shadow.png')}}" class="shadow" alt="shadow">
    </section>
@stop
