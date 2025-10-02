@extends('frontend.layouts.app')

@section('title')
	@if(app()->getLocale() == 'en')
        EGEC | Our Partners
    @else
        EGEC | شركائنا
	@endif
@endsection

@section('egec')
    @include('frontend.layouts.loader')

    @include('frontend.layouts.header')

    @if(app()->getLocale() == 'en')
        <style>
            .addmimsionStyle {
                 bottom: 34px !important;
                    right: 20px !important;
                    width: 172px !important;
                    position: fixed !important;
                    z-index: 99999 !important;
                    display: block !important;
             } 
        </style>
        
        <div class="btn-part addmimsionStyle">
                        
                        <a class="nav-expander apply-btn btn btn-primary text-white " style="font-size: 14px !important;" id="nav-expander">Admission Request</a>
                                            
                    </div>
        <div class="main-content">
            <div class="inner-hdr" style="background-image:url({{ asset('egec_new/frontend/images/slider/1.jpg') }})">
                <!--small-banner-->
                <div class="small-banner">
                    <div class="container">
                        <!--title-->
                        <div class="title">
                            <h3>Our Partners</h3>
                        </div>
                        <!--End title-->               
                    </div>
                </div>
                <!--End small-banner-->
            </div>

            <section class="features3 cid-qKT6knwV2G" id="clients2-2p" style="text-align: center">
                <div class="container mb-4">
                    <div class="media-container-row">
                        <div class="col-12 align-center">
                            <h2 class="mbr-section-title pb-2 mbr-fonts-style">
                                Our Partners
                            </h2>
                            <h4 class="mbr-section-subtitle mbr-light mbr-fonts-style display-7">
                                Here is a list of our partners
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row align-center justify-content-center">
                        @foreach($clients as $client)
                            <div class="p-3 col-12 col-md-6 col-lg-3">
                                <div class="client-wrapper">
                                    <div class="wrap-img">
                                        <img data-src="{{ asset('egec_new/clients/'. $client->logo) }}" class="img-responsive clients-img lazy_load">
                                    </div>
                                    
                                     <div class="image-layer row align-items-center justify-content-center">
                                        <a class="btn btn-link" href="{{$client->link}}" target="_blank"><h4 class="text-white mb-0">{{$client->en_name}}</h4></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        
        <div class="full-width-header header-style1 home1-modifiy">
                
           
            <div id="rs-header" class="rs-header">
                
                <nav class="right_menu_togle hidden-md ">
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
                
            </div id="rs-header" class="rs-header">
            
             </div>
    @else
        
        <style>
            .addmimsionStyle {
                 bottom: 34px !important;
                    left: 20px !important;
                    width: 172px !important;
                    position: fixed !important;
                    z-index: 99999 !important;
                    display: block !important;
             }  
        </style>
        
        <div class="btn-part addmimsionStyle">
                        
                        <a class="nav-expander apply-btn btn btn-primary text-white " style="font-size: 14px !important;" id="nav-expander">طلب التحاق</a>
                                            
                    </div>
    
        <div class="main-content">
            <div class="inner-hdr" style="background-image:url({{ asset('egec_new/frontend/images/slider/4.jpg') }})">
                <!--small-banner-->
                <div class="small-banner">
                    <div class="container">
                        <!--title-->
                        <div class="title">
                            <h3>شركاؤنا</h3>
                        </div>
                        <!--End title-->               
                    </div>
                </div>
                <!--End small-banner-->
            </div>

            <section class="features3 cid-qKT6knwV2G" id="clients2-2p" style="text-align: center">
                <div class="container mb-4">
                    <div class="media-container-row">
                        <div class="col-12 align-center">
                            <h2 class="mbr-section-title pb-2 mbr-fonts-style">
                                شركاؤنا
                            </h2>
                            <h4 class="mbr-section-subtitle mbr-light mbr-fonts-style display-7">
                                هنا قائمة شركاؤنا
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row align-center justify-content-center">
                        @foreach($clients as $client)
                            <div class="p-3 col-12 col-md-6 col-lg-3">
                                <div class="client-wrapper">
                                    <div class="wrap-img">
                                        <img data-src="{{ asset('egec_new/clients/'. $client->logo) }}" class="img-responsive clients-img lazy_load">
                                    </div>
                                    <div class="image-layer row align-items-center justify-content-center">
                                        <a class="btn btn-link" href="{{$client->link}}"><h4 class="text-white mb-0">{{$client->ar_name}}</h4></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        
        <div class="full-width-header header-style1 home1-modifiy">>
                
           
            <div id="rs-header" class="rs-header">
                
                <nav class="right_menu_togle hidden-md ">
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
                                        <input class="btn-send" type="submit" value="Apply">
                                    </div>       
                                </form>
                            </div>
                        </nav>
                
            </div id="rs-header" class="rs-header">
            
             </div>
    @endif

    @include('frontend.layouts.footer')
@endsection