<!--Full width header Start-->
<style>
    .admission_btn_request:hover{
        color:#fff !important;
        border: 1px solid #fff;
    }
    .admission_btn_request{
        min-width:150px;
    }
</style>
@if(app()->getLocale() == 'en')
    <div class="full-width-header header-style1 home1-modifiy">
        <!--Header Start-->
        @auth
        <header id="rs-header" class="rs-header menu-sticky">
        @else
        <header id="rs-header" class="rs-header">
        @endif
            <!-- Topbar Area Start -->
            <div class="topbar-area dark-parimary-bg">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-md-5">
                            <ul class="topbar-contact">
                                <li>
                                    <i class="flaticon-email"></i>
                                    <a href="mailto:info@egec.com">{{ $contact->email }}</a>
                                </li>
                                <li>
                                    <i class="flaticon-phone"></i>
                                    {{ $contact->phone }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 text-right">
                            <ul class="topbar-right">
                                    @auth
                                        <!--<li class="btn-part">-->
                                        <!--    <a class="nav-expander apply-btn"  id="nav-expander">Admission Request</a>-->
                                        <!--</li>-->
                                        <li class="btn-part">
                                           
                        
                                                <a class="nav-expander apply-btn btn  btn-primary" id="nav-expander">Admission Request</a>
                                                                    
                                        
                                        </li>
                                    @else
                                        <li class="btn-part">
                                            <i class="fa fa-sign-in" style="color: #3db166; margin-right: 5px;"></i>
                                            <a href="{{ route('login') }}" class="" style="color: white">Login</a>
                                            <span style="color: white">/</span><a href="{{ route('register') }}" class="" style="color: white">Register</a>
                                        </li>
                                    @endif
                                    <li class="btn-part">
                                        <a href="/ar" class="" style="color: white">اللغة العربية</a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Area End -->

            <!-- Menu Start -->
             @auth
            <nav class="navbar shadow navbar-expand-xl navbar-light bg-white">
             @else
            <nav class="navbar shadow navbar-expand-xl navbar-light bg-white menu-sticky"> 
             @endif
                <div class="container">
                        
                        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt=""></a>
                        <button class="navbar-toggler d-xl-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav ml-auto mt-2 align-items-center mt-lg-0">
                                
                                <li class="nav-item {{ request()->segment(2) === null ? 'current-menu-item active' : null }}">
                                    <a class="nav-link " href="{{ route('home') }}">Home</a>
                                </li>

                                <li class="nav-item {{ request()->segment(2) === 'about-us' ? 'current-menu-item active' : null }}">
                                    <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Studying Abroad</a>
                                    <div class="dropdown-menu" style="right:0;" aria-labelledby="dropdownId">
                                        @foreach($destinations as $destination)
                                            <a class="dropdown-item" href="{{ route('destination', $destination->en_slug) }}">Study in {{ $destination->en_name }}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item {{ request()->segment(2) === 'clients' ? 'current-menu-item active' : null }}">
                                    <a class="nav-link" href="{{ route('clients') }}">Our Partners</a>
                                </li>

                                <li class="nav-item {{ request()->segment(2) === 'contact-us' ? 'current-menu-item active' : null }}">
                                    <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                                </li>
                                
                                @guest
                                @else
                                
                                    <li class="nav-item dropdown">
                                            @if(auth()->user()->role == 'super-admin' || auth()->user()->role == 'admin')
                                            <a class="nav-link dropdown-toggle text-main" style="color: #8cc63f;" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                                <div class="dropdown-menu" style="right:0;">
                                                    <a class="dropdown-item" href="{{ route('admin.home') }}"><i class="fa fa-user-circle"></i> Admin Dashboard </a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                </div>
                                            @elseif(auth()->user()->role == 'academic-guide')
                                                <a class="nav-link dropdown-toggle text-main" style="color: #8cc63f;" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->en_name }}</a>
                                                <div class="dropdown-menu" style="right:0;">
                                                    <a class="dropdown-item" href="{{ route('admin.home') }}"><i class="fa fa-user-circle"></i> Admin Dashboard </a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                </div>
                                            @elseif(auth()->user()->role == 'data-entry')
                                                <a class="nav-link dropdown-toggle text-main" style="color: #8cc63f;" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->en_name }}</a>
                                                <div class="dropdown-menu" style="right:0;">
                                                    <a class="dropdown-item" href="{{ route('admin.home') }}"><i class="fa fa-user-circle"></i> Admin Dashboard </a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                </div>    
                                            @else
                                                <a class="nav-link dropdown-toggle text-main" style="color: #8cc63f;" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                                <div class="dropdown-menu" style="right:0;  min-width:15rem;">
                                                        <a class="dropdown-item" href="{{ route('show-personal-info') }}"><i class="fa fa-user-circle"></i> Personal Information</a>
                                                    @if(auth()->user()->personal_info()->first())
                                                        <a class="dropdown-item" href="{{ route('show-academic-info') }}"><i class="fa fa-id-card"></i> Academic Information</a>
                                                    @endif
                                                    @if(auth()->user()->user_admission_forms()->first())
                                                        <a class="dropdown-item" href="{{ route('show-movement-info') }}"><i class="fa fa-id-card"></i> Movement Information</a>
                                                    @endif
                                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                </div>
                                            @endif
                                    </li>
                                @endif
                                
                                @auth
                                @else
                                <li class="nav-item ml-4">
                                    <div class="btn-part">
                        
                                    <a class="nav-expander apply-btn btn btn-primary admission_btn_request "  id="nav-expander">Admission Request</a>
                                                        
                                </div>
                                </li>
                                @endif
                                
                            </ul>
                            
                        </div>
                </div>
                
                 
                
            </nav>
        </header>
        <header id="rs-header" class="rs-header">
                
                <nav class="right_menu_togle hidden-md " style="overflow:hidden;">
                            <div class="close-btn">
                                <span id="nav-close">
                                    <div class="line">
                                        <span class="line1"></span><span class="line2"></span>
                                    </div>
                                </span>
                            </div>
                            <div class="admision-text">
                                <h3>Apply Now</h3>
                                <p>The employee in charge will contact you ...</p>
                            </div>
                            <div class="admision-form">
                                <form id="uni-search-form" action="{{ route('submit-admission-info') }}" method="POST">
                                    
                                    
                                    @csrf
                                    <div class="mb-20">
                                        <label for="country-list">Country:</label>
                                        <select name="admission_destination_id" class="form-control" id="admission_destination_id" required>
                                                <option value="" >Select Distination</option>
                                               @foreach($destinations as $destination)
                                                    
                                                   
                                                    
                                                    <option value="{{ $destination->id }}" >{{ $destination->en_name }}</option>
                                                  
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="university-list">University:</label>
                                        <select name="admission_university_id" class="form-control" id="admission_university_id" required>
                                           
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="collage-list">Faculty:</label>
                                        <select name="admission_fac_uni_id" class="form-control" id="admission_fac_uni_id"  required>
    
    
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="collage-list">Major:</label>
                                        <select name="admission_fac_uni_major_id" class="form-control" id="admission_fac_uni_major_id" required>
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="collage-list">Department:</label>
                                        <select name="admission_department_id" class="form-control" id="admission_department_id" required>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3 text-center">
                                        <input class="btn-send" type="submit" value="Apply">
                                    </div>       
                                </form>
                            </div>
                        </nav>
                </header>
        <!--Header End-->
    </div>
@else
    <div class="full-width-header header-style1 home1-modifiy">
        <!--Header Start-->
        @auth
        <header id="rs-header" class="rs-header menu-sticky">
        @else
        <header id="rs-header" class="rs-header">
        @endif
            <!-- Topbar Area Start -->
            <div class="topbar-area dark-parimary-bg">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-md-5">
                            <ul class="topbar-contact"  style="float:right !important;">
                                <li>
                                    <i class="flaticon-email"></i>
                                    <a href="mailto:info@egec.com">{{ $contact->email }}</a>
                                </li>
                                <li>
                                    <i class="flaticon-phone"></i>
                                    {{ $contact->phone }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 text-right">
                            <ul class="topbar-right" style="float:left !important;">
                                <li class="btn-part" style="margin-left: 30px;">
                                    <a href="/en" class="" style="color: white">English</a>
                                </li>
                                    @auth
                                        <!--<li class="btn-part" style="margin-left: 20px;">-->
                                        <!--    <a class="nav-expander apply-btn"  id="nav-expander"> طلب القبول الجامعي</a>-->
                                        <!--</li>-->
                                        <li class="btn-part">
                                   
                        
                                    <a class="nav-expander apply-btn btn btn-primary " id="nav-expander">طلب الالتحاق</a>
                                                        
                               
                                </li>
                                    @else
                                        <li class="btn-part">
                                            <a href="{{ route('login') }}" class="" style="color: white"> تسجيل الدخول </a>
                                            
                                            <span style="color: white">
                                                 / </span><a href="{{ route('register') }}" class="" style="color: white"> إنشاء حساب </a>
                                            <i class="fa fa-sign-in" style="color: #3db166; margin-right: 5px;"></i>
                                        </li>
                                    @endif
                                    
                                   
                                        
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Area End -->

            <!-- Menu Start -->
            
             @auth
            <nav class="navbar shadow navbar-expand-xl navbar-light bg-white">
             @else
            <nav class="navbar shadow navbar-expand-xl navbar-light bg-white menu-sticky"> 
             @endif
                <div class="container">
                        
                        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt=""></a>
                        <button class="navbar-toggler d-xl-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav mr-auto mt-2 align-items-center mt-lg-0">
                                
                                <li class="nav-item {{ request()->segment(2) === null ? 'current-menu-item active' : null }}">
                                    <a class="nav-link " href="{{ route('home') }}">الرئيسية</a>
                                </li>

                                <li class="nav-item {{ request()->segment(2) === 'about-us' ? 'current-menu-item active' : null }}">
                                    <a class="nav-link" href="{{ route('about-us') }}">من نحن  </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الدراسه بالخارج</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        @foreach($destinations as $destination)
                                            <a class="dropdown-item" href="{{ route('destination', $destination->ar_slug) }}">الدراسه في {{ $destination->ar_name }}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item {{ request()->segment(2) === 'clients' ? 'current-menu-item active' : null }}">
                                    <a class="nav-link" href="{{ route('clients') }}">شركائنا</a>
                                </li>

                                <li class="nav-item {{ request()->segment(2) === 'contact-us' ? 'current-menu-item active' : null }}">
                                    <a class="nav-link" href="{{ route('contact-us') }}">تواصل معنا </a>
                                </li>
                                
                                @guest
                                @else
                                
                                    <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-main" style="color: #8cc63f;" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                            @if(auth()->user()->role == 'super-admin' || auth()->user()->role == 'admin')
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('admin.home') }}"><i class="fa fa-user-circle"></i> لوحة التحكم </a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> تسجيل الخروج</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                </div>
                                            @elseif(auth()->user()->role == 'academic-guide')
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('admin.home') }}"><i class="fa fa-user-circle"></i> لوحه التحكم </a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> تسجيل الخروج</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                </div>
                                                
                                            @elseif(auth()->user()->role == 'academic-guide')
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('admin.home') }}"><i class="fa fa-user-circle"></i> لوحه التحكم </a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> تسجيل الخروج</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                </div>    
                                            @else
                                                <div class="dropdown-menu"> 
                                                        <a class="dropdown-item" href="{{ route('show-personal-info') }}"><i class="fa fa-user-circle"></i> المعلومات الأكاديمية</a>
                                                    @if(auth()->user()->personal_info()->first())
                                                        <a class="dropdown-item" href="{{ route('show-academic-info') }}"><i class="fa fa-id-card"></i> المعلومات الأكاديمية</a>
                                                    @endif
                                                    @if(auth()->user()->user_admission_forms()->first())
                                                        <a class="dropdown-item" href="{{ route('show-movement-info') }}"><i class="fa fa-id-card"></i> استلام اصول الاوراق</a>
                                                    @endif
                                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> تسجيل الخروج</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                </div>
                                            @endif
                                    </li>
                                @endif
                                
                                @auth
                                @else
                                <li class="btn-part">
                                   
                        
                                    <a class="nav-expander apply-btn btn btn-primary admission_btn_request " id="nav-expander">طلب الالتحاق</a>
                                                        
                               
                                </li>
                                @endif
                                
                            </ul>
                            
                        </div>
                </div>
                
            </nav>
                

            
        </header>
        
        <header id="rs-header" class="rs-header">
        <nav class="right_menu_togle hidden-md " style="overflow:hidden;">
                            <div class="close-btn">
                                <span id="nav-close">
                                    <div class="line">
                                        <span class="line1"></span><span class="line2"></span>
                                    </div>
                                </span>
                            </div>
                            <div class="admision-text">
                                <h3>سجل الان</h3>
                                <p>سيتصل بك الموظف المسؤول ...</p>
                            </div>
                            <div class="admision-form">
                                <form id="uni-search-form" action="{{ route('submit-admission-info') }}" method="POST">
                                    
                                    
                                    @csrf
                                    <div class="mb-20">
                                        <label for="country-list">البلد:</label>
                                        <select name="admission_destination_id" class="form-control" id="admission_destination_id" required>
                                                    <option value="">اختر الدوله</option>
                                               @foreach($destinations as $destination)
                                                    
                                                    <option value="{{ $destination->id }}">{{ $destination->ar_name }}</option>
                                                    
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="university-list">الجامعه:</label>
                                        <select name="admission_university_id" class="form-control" id="admission_university_id" required>
                                            
                                         
                                           
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="collage-list">الكلية:</label>
                                        <select name="admission_fac_uni_id" class="form-control" id="admission_fac_uni_id"  required>
    
    
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="collage-list">الدرجه العلميه:</label>
                                        <select name="admission_fac_uni_major_id" class="form-control" id="admission_fac_uni_major_id" required>
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="collage-list">التخصص:</label>
                                        <select name="admission_department_id" class="form-control" id="admission_department_id" required>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3 text-center">
                                        <input class="btn-send" type="submit" value="سجل">
                                    </div>       
                                </form>
                            </div>
                        </nav>
        </header>                
        <!--Header End-->
    </div>
@endif
<!--Full width header End-->