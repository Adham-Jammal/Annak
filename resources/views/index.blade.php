@extends('app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/' . LaravelLocalization::getCurrentLocale() . '-style.css') }}">
@stop
@section('main')
{{-- Hero --}}
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-content">
                    <a class="url" href="ank.sa.com">ank.sa.com</a>
                    <h1>
                        <span class="main-color">عنّك</span>
                        <br>
                        خطوة نحول
                        <span class="main-color">التسهيــــل</span>
                    </h1>
                    <p>
                        خطوة نحو المستقبل حالمون، مبتكرون، لأجل الغد عاملــــــــــــون. صفات بسيطة تروي مسيرة طموح وفكر من أجل بناء مستقبل رقمي مبهر وذلك من خلال ابتكار منصة لتكون بوابة التســـــــــــــوق الالكتروني الأولى من نوعها في المملكة العربية السعوديــــــــــــــــة. توفر وتجمع كافة الماركات العالميـــــة في مكــــان واحد ومن خلال منصة واحدة قام عليها فريق سعودي بداية ً من مرحلـــــــة الفكرة وصولا إلى! مرحلة التسويـــق... خطـــــــــــــوة نحـــــــــــو التسهيــــــــــــل
                    </p>
                    <div class="download">
                        <img src="{{asset('img/apple-store.png')}}" alt="apple-store">
                        <img src="{{asset('img/google-play.png')}}" alt="google-play">
                    </div>



                </div>
                <div class="col-md-6 image-content">
                    <img src="{{asset('img/hero-image.png')}}" alt="Annak">
                </div>

            </div>
        </div>
        <img src="{{asset('img/pink-shadow.png')}}" class="shadow" alt="" >
    </section>
    <Section class="discover">
        <div class="container">
            <div class="row">
                <div class="col-md-4 image-content">
                    <img src="{{asset('img/discover-image.png')}}" alt="Discover-Annak">
                </div>
                <div class="col-md-8 text-content">
                    <h2>لنكتشف معاً لماذا تم اختيار اسم المنصة "عنـّـك؟</h2>
                    <span>فـي مرحلة الفكرة تساءلنا مــــــــاذا سيكون دورنا لشــــــركائنا العملاء والشركــــــات؟</span>
                    <p>وكانت الإجابـة: النيابة عن شركائنا الأفراد التسوق، النيابة عن شركائنا الشركات فـي التسويق وزايدة المبيعات وخدمــــة عملائهــــم. فلذلك تم إختيار اســم "عنـّـك" لأنك ستدعنــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــا نقوم بكـــــــــــــــــــــل ذلـــــــــــــك عنـــــــــــــــــــــــــــــــــــك</p>
                </div>
            </div>
        </div>
    </Section>
    <section class="vmg">
        <div class="container">
            <div class="boxes">
                <div class="box box-1">
                    <h2>رؤية المنصة<img src="{{asset('img/vision-icon.png')}}" alt="vision"></h2>
                    <hr>
                    <p>نسعى أن نخلق منصـة الكترونية تسهــــل على شركائنا الأفراد تجربـــــــة التسوق مما يســـاهم زايدة مبيعات شركائنا الشركــــات</p>
                </div>
                <div class="box box-2">
                    <h2> رسالة المنصة<img src="{{asset('img/message-icon.png')}}" alt="message"></h2>
                    <hr>
                    <p> تكمـــــــــــن رسالتنــــــــــــــــــــــا مواكبـــــــــــــــة التحول التقــنــــــــــي الـــــــــذي يقوده ولي عهدنا الملهم من خلال رؤيـــــــــــــــــــــــــــــة عــــــــــــــــــــــــــــــــــــام 2030</p>
                </div>
                <div class="box box-3">
                    <h2>أهداف المنصة<img src="{{asset('img/goals-icon.png')}}" alt="goals"></h2>
                    <hr>
                    <p>التسهيــــــل على العميـــــل تجربــــــة التسوق وزيادة مبيعـات الشركات ومواكبــــــــــــــــــــــة التحوّل الرقمــــــــــــي</p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
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
    <section class="values">
        <div class="container">
            <div class="boxes">
                <div class="box">
                    <h3>السرعة</h3>
                    <span>1</span>
                </div>
                <div class="box">
                    <h3>السهولة</h3>
                    <span>2</span>
                </div>
                <div class="box">
                    <h3>التفرد</h3>
                    <span>3</span>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages company-advantages">
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
        <div class="container">
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
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 form">
                    <form action="#">
                        <h3>دعنا نتكلم!</h3>
                        <label for="name">الاسم الكامل</label>
                        <input type="text" id="name" name="name" required>
                        <label for="name">البريد الالكتروني</label>
                        <input type="email" id="email" name="email" required>
                        <label for="name">رسالتك</label>
                        <textarea name="message" id="message" required ></textarea>
                        <input type="submit" id="submit" value="إرسال">
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
