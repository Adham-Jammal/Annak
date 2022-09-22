@php
$lang2 =  LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
@endphp

 <header class="wrapper">
    <nav id="main_nav" class="container">
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><a href="/"><img src="{{asset('img/logo.svg')}}" class="mobile-logo" alt="Logo"></a><img src="{{asset('img/burger.png')}}" class="burger" alt="burger"></a></label>

      <div class="content">
          <div class="logo">
          <a href="/"><img src="{{asset('img/logo.svg')}}" alt="Logo"></a>
            </div>
     </div>

        <div class="content">
        <ul class="links">
            <li> <a href="/">نبذة عن المنصة</a> </li>
            <li> <a href="#about_us"> لماذا عنّك</a></li>
            <li> <a href="#services">رؤيتنا ورسالتنا</a></li>
            <li> <a href="#contact_us"> أهداف المنصة</a></li>
            <li> <a href="#contact_us"> قيم المنصة</a></li>
            <li> <a href="#contact_us"> الميزات</a></li>
            <li> <a href="#contact_us"> اتصل بنا</a></li>
        </ul>
      </div>
      <div>
            <a  id="join_us" href="#">انضم إلينا</a>
      </div>
    </nav>
</header>

