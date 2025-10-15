
@if(app()->getLocale() == 'en')

    <!-- header area start -->
    <header class="main-header">
        <div class="top-header">
            <div class="container">
                <div class="d-flex justify-content-between">

                    <div class="left-side  ">
                        <ul>
                            <li><span class="icon round-border"><i class="fas fa-mobile"></i></span> <a target="_blank"
                                    href="tel:+2-01000670590" class="tran3s">

                                    +2-01000670590
                                </a></li>
                            <li><span class="icon round-border"><i class="fa fa-envelope"></i></span> <a target="_blank"
                                    href="mailto:admission@egecmena.com" class="tran3s">admission@egecmena.com
                                </a></li>
                            <li><span class="icon round-border"><i class="fa fa-map-marker-alt"></i></span> <a
                                    target="_blank" href="https://goo.gl/maps/3iHBEFt2wF4pUShT9"
                                    class="tran3s">11, Haron, Dokki, Giza, Egypt

                                </a></li>

                        </ul>

                    </div> <!-- /.left-side -->

                    <div class="right-side">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/EGEC.EDU/"
                                    class="tran3s round-border icon"><i class="fab fa-facebook-f"
                                        aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/Egy_Gulf"
                                    class="tran3s round-border icon"><i class="fa-brands fa-x-twitter"></i>
                            <li><a target="_blank" href="https://www.instagram.com/egec2030/"
                                    class="tran3s round-border icon"><i class="fab fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://api.whatsapp.com/send?phone=2001000670590"
                                    class="tran3s round-border icon"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="header-sticky" class="header__area header__transparent header__padding-2">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">

                    <div class="header__left d-flex">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('frontend/egec-landing/img/logo/Logo (2).png') }}" style="width: auto !important;" height="80px" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="header__center">
                        <div class="main-menu main-menu-2">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">
                                            Home
                                        </a>

                                    </li>
                                    <li>
                                        <a href="{{ route('about-us') }}">
                                            About

                                        </a>

                                    </li>
                                    
                                    
                                    <li class="has-dropdown destination_li" (mouseenter)="mouseEnter()">
                                        <a href="{{ route('country-data') }}">
                                            Studying Abroad

                                        </a>
                                        <ul class="submenu">
                                            @foreach($destinations as $destination)
                                            <li>

                                                <a  href="{{ route('destination', $destination->en_slug) }}">Study in {{ $destination->en_name }}</a>
                                            </li>
                                                @endforeach

                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('blogs-log') }}">
                                            Blogs

                                        </a>

                                    </li>
                                    <li>
                                        <a href="{{ route('gallery-log') }}">
                                            Gallery

                                        </a>

                                    </li>

                                    <li><a href="{{ route('contact-us') }}">
                                            Contact Us

                                        </a></li>
                                        
                  <!--                      <li><a href="{{ route('privacy-policy') }}">-->
                  <!--  Privacy Policy-->
                  <!--</a></li>-->

                                    <li >
                                        <a href="https://egecmena.com/ar">
                                            العربية
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__btn header__btn-2 d-none d-sm-block">
                            @auth

                            <div class="main-menu main-menu-2">
                                <nav id="mobile-menu">
                                  <ul>
                                    <li class="has-dropdown">

                                      <a>{{ auth()->user()->name }}</a>

                                      <ul class="submenu">
                                        @if(auth()->user()->role == 'super-admin' || auth()->user()->role == 'admin')

                                          <li><a
                                            href="{{ route('admin.home') }}">Dashboard</a>
                                          </li>
                                          <li>
                                            <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                          </li>
                                          @elseif(auth()->user()->role == 'academic-guide')
                                          <li><a
                                            href="{{ route('admin.home') }}">Dashboard</a>
                                          </li>
                                          <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                          </li>
                                          @else
                                          <li>
                                              <a  href="{{ route('show-personal-info') }}">Personal information</a>

                                          </li>
                                          @if(auth()->user()->personal_info()->first())
                                          <li>
                                              <a href="{{ route('show-academic-info') }}">Academic information</a>
                                          </li>
                                          @endif
                                          @if(auth()->user()->user_admission_forms()->first())
                                          <li>
                                              <a  href="{{ route('show-movement-info') }}">File movement</a>

                                          </li>
                                          @endif
                                          <li>

                                              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                            </li>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  @csrf
                                              </form>
                                          @endif
                                      </ul>
                                    </li>
                                  </ul>
                                </nav>
                              </div>

                            @else
                            <div  class="e-btn button_login d-flex justify-content-between align-items-center">

                                <p class="mb-0 d-flex align-items-center">
                                    <a class="link" href="{{ route('login') }}"> Login</a> <span class="text-white">/</span> <a class="link" href="{{ route('register') }}">Register</a>
                                </p>
                                <i  class="fas fa-chevron-right"></i>
                            </div>
                            @endif
                        </div>
                        <div class="sidebar__menu d-xl-none">
                            <div class="sidebar-toggle-btn ml-30"
                                (click)="openNavbar()" id="sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- sidebar area start -->
    <div class="sidebar__area responsive_navbar">
        <div class="sidebar__wrapper">
            <div class="sidebar__content">
                <div class="logo mb-20 d-flex justify-content-between">
                    <a href="/ar">
                        <img src="{{ asset('frontend/egec-landing/img/logo/Logo (2).png') }}" style="width: auto !important;" height="80px" alt="logo">
                    </a>
                    <button  class="btn sidebar__close-btn" id="sidebar__close-btn">
                        <span><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="mobile-menu fix mean-container">
                    <div class="mean-bar"><a href="#nav" class="meanmenu-reveal"
                            style="right: 0px; left: auto; display: inline;"><span><span><span></span></span></span></a>
                        <nav class="mean-nav">
                            <ul style="display: none;">


                            </ul>
                        </nav>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- sidebar area end -->
    <div class="body-overlay" ></div>
    <!-- sidebar area end -->
    <div id="sidebar" style="display: flex;">
        <div id="sidebar_container">
            <ul class="list-unstyled icons_container">
                <li class="whatsapp" title="Whatsapp"><a href="https://api.whatsapp.com/send?phone=2001000670590"
                        target="_blank">
                        <img src="{{ asset('frontend/img/icon/whatsapp.webp') }}" alt="Whatsapp">
                    </a></li>
                <li class="facebook" title="Facebook"><a href="https://www.facebook.com/EGEC.EDU/" target="_blank">
                        <img src="{{ asset('frontend/img/icon/facebook.webp') }}" alt="Facebook">

                    </a></li>
                <li class="instgram" title="Instagram"><a href="https://www.instagram.com/egec2030/" target="_blank">
                        <img src="{{ asset('frontend/img/icon/instgram.webp') }}" alt="Instagram">

                    </a></li>
                <li class="twitter" title="X"><a href="https://twitter.com/Egy_Gulf" target="_blank">
                        <img src="{{ asset('frontend/img/icon/Untitled-1 (3).png') }}" alt="Twitter">
                    </a></li>
                <li  class="admission_form addmission_sidebar" title="Admission form">
                    <a>

                        <img src="{{ asset('frontend/img/icon/form.webp') }}" alt="Admission form">
                    </a>
                </li>

            </ul>


        </div>
        <button class="toggle_btn">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </button>
        <div class="clearfix"></div>
    </div>

    <form action="{{route('generalForm')}}" method="POST">
        @csrf
            <input type="hidden" name="blog_id" value="{{ $blogData->id }}">
        <button class="admission__btn" type="submit" style="right: 0px; background-color: transparent !important; transform: translateY(-50%)" >
            <img style="width:100px" src="{{ asset('frontend/img/button-en.png') }}" alt="logo">
        </button>
    </form>

  
 


@else
    <!-- header area start -->
    <header class="main-header">
        <div class="top-header">
            <div class="container">
                <div class="d-flex justify-content-between">

                    <div class="left-side  ">
                        <ul>
                            <li><span class="icon round-border"><i class="fas fa-mobile"></i></span> <a target="_blank"
                                    href="tel:+2-01000670590" class="tran3s">

                                    2-01000670590+
                                </a></li>
                            <li><span class="icon round-border"><i class="fa fa-envelope"></i></span> <a target="_blank"
                                    href="mailto:admission@egecmena.com" class="tran3s">admission@egecmena.com
                                </a></li>
                            <li><span class="icon round-border"><i class="fa fa-map-marker-alt"></i></span> <a
                                    target="_blank" href="https://goo.gl/maps/3iHBEFt2wF4pUShT9"
                                    class="tran3s">11 هارون، الدقي، الجيزة، مصر

                                </a></li>

                        </ul>

                    </div> <!-- /.left-side -->

                    <div class="right-side">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/EGEC.EDU/"
                                    class="tran3s round-border icon"><i class="fab fa-facebook-f"
                                        aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/Egy_Gulf"
                                    class="tran3s round-border icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/egec2030/"
                                    class="tran3s round-border icon"><i class="fab fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://api.whatsapp.com/send?phone=2001000670590"
                                    class="tran3s round-border icon"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="header-sticky" class="header__area header__transparent header__padding-2">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <!-- <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
          </div>
          <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
          </div> -->
                    <div class="header__left d-flex">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('frontend/egec-landing/img/logo/Logo (2).png') }}" style="width: auto !important;" height="80px" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="header__center">
                        <div class="main-menu main-menu-2">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">
                                            الرئيسية
                                        </a>

                                    </li>
                                    <li>
                                        <a href="{{ route('about-us') }}">
                                            من نحن

                                        </a>

                                    </li>
                                    
                                    
                                    <li class="has-dropdown destination_li" (mouseenter)="mouseEnter()">
                                        <a href="{{ route('country-data') }}">
                                            الدراسة بالخارج

                                        </a>
                                        <ul class="submenu">
                                            @foreach($destinations as $destination)
                                            <li>

                                                <a  href="{{ route('destination', $destination->ar_slug) }}">الدراسه في  {{ $destination->ar_name }}</a>
                                            </li>
                                                @endforeach

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('blogs-log') }}">
                                            المقالات

                                        </a>

                                    </li>
                                    <li>
                                        <a href="{{ route('gallery-log') }}">
                                             المعرض

                                        </a>

                                    </li>

                                    <li><a href="{{ route('contact-us') }}">
                                        اتصل بنا
                                        </a></li>
                  <!--                   <li><a href="{{ route('privacy-policy') }}">-->
                  <!--       سياسة الخصوصية-->
                  <!--</a></li>    -->

                                    <li >
                                        <a href="https://egecmena.com/en">
                                           EN
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__btn header__btn-2 d-none d-sm-block">
                            @auth

                            <div class="main-menu main-menu-2">
                                <nav id="mobile-menu">
                                  <ul>
                                    <li class="has-dropdown">

                                      <a>{{ auth()->user()->name }}</a>

                                      <ul class="submenu">
                                        @if(auth()->user()->role == 'super-admin' || auth()->user()->role == 'admin')

                                          <li><a
                                            href="{{ route('admin.home') }}">لوحة التحكم</a>
                                          </li>
                                          <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">تسجيل الخروج</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                          </li>
                                          @elseif(auth()->user()->role == 'academic-guide')
                                          <li><a
                                            href="{{ route('admin.home') }}">لوحة التحكم</a>
                                          </li>
                                          <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> تسجيل الخروج</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                          </li>
                                          @else
                                          <li>
                                              <a  href="{{ route('show-personal-info') }}"> المعلومات الشخصية</a>

                                          </li>
                                          @if(auth()->user()->personal_info()->first())
                                          <li>
                                              <a  href="{{ route('show-academic-info') }}"> المعلومات الأكاديمية</a>
                                          </li>
                                          @endif
                                          @if(auth()->user()->user_admission_forms()->first())
                                          <li>
                                              <a href="{{ route('show-movement-info') }}"> استلام اصول الاوراق</a>

                                          </li>
                                          @endif
                                          <li>

                                              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> تسجيل الخروج</a>
                                            </li>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  @csrf
                                              </form>
                                          @endif
                                      </ul>
                                    </li>
                                  </ul>
                                </nav>
                              </div>
                            @else

                            <div  class="e-btn button_login d-flex justify-content-between align-items-center">

                                <p class="mb-0 d-flex align-items-center">
                                    <a class="link" href="{{ route('login') }}">  تسجيل دخول</a> <span class="text-white">/</span> <a class="link" href="{{ route('register') }}">إنشاء حساب</a>
                                </p>
                                <i  class="fas fa-chevron-left"></i>
                            </div>
                              @endif
                        </div>
                        <div class="sidebar__menu d-xl-none">
                            <div class="sidebar-toggle-btn mr-30"
                                (click)="openNavbar()" id="sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- sidebar area start -->
    <div class="sidebar__area responsive_navbar">
        <div class="sidebar__wrapper">
            <div class="sidebar__content">
                <div class="logo mb-20 d-flex justify-content-between">
                    <a href="/">
                        <img src="{{ asset('frontend/egec-landing/img/logo/Logo (2).png') }}" style="width: auto !important;" height="80px" alt="logo">
                    </a>
                    <button  class="btn sidebar__close-btn" id="sidebar__close-btn">
                        <span><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="mobile-menu fix mean-container">
                    <div class="mean-bar"><a href="#nav" class="meanmenu-reveal"
                            style="right: 0px; left: auto; display: inline;"><span><span><span></span></span></span></a>
                        <nav class="mean-nav">
                            <ul style="display: none;">

                            </ul>
                        </nav>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- sidebar area end -->
    <div class="body-overlay"></div>
    <!-- sidebar area end -->
    <div id="sidebar" style="display: flex;">
        <div id="sidebar_container">
            <ul class="list-unstyled icons_container">
                <li class="whatsapp" title="Whatsapp"><a href="https://api.whatsapp.com/send?phone=2001000670590"
                        target="_blank">
                        <img src="{{ asset('frontend/img/icon/whatsapp.webp') }}" alt="Whatsapp">
                    </a></li>
                <li class="facebook" title="Facebook"><a href="https://www.facebook.com/EGEC.EDU/" target="_blank">
                        <img src="{{ asset('frontend/img/icon/facebook.webp') }}" alt="Facebook">

                    </a></li>
                <li class="instgram" title="Instagram"><a href="https://www.instagram.com/egec2030/" target="_blank">
                        <img src="{{ asset('frontend/img/icon/instgram.webp') }}" alt="Instagram">

                    </a></li>
                <li class="twitter" title="X"><a href="https://twitter.com/Egy_Gulf" target="_blank">
                        <img src="{{ asset('frontend/img/icon/Untitled-1 (3).png') }}" alt="Twitter">
                    </a></li>
                <li (click)="openAdmissionForm()" class="admission_form addmission_sidebar" title="Admission form">
                    <a>

                        <img src="{{ asset('frontend/img/icon/form.webp') }}" alt="Admission form">
                    </a>
                </li>

            </ul>


        </div>
        <button class="toggle_btn">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </button>
        <div class="clearfix"></div>
    </div>

    <form action="{{route('generalForm')}}" method="POST">
        @csrf
            <input type="hidden" name="blog_id" value="{{ $blogData->id }}">
        <button class="admission__btn" type="submit" style="right: 0px; background-color: transparent !important; transform: translateY(-50%)" >
            <img style="width:100px" src="{{ asset('frontend/img/button-ar.png') }}" alt="logo">
        </button>
    </form>
        
     

@endif
