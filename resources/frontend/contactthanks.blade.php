@extends('frontend.layouts.app')

@section('title')
	@if(app()->getLocale() == 'en')
        EGEC | Egyptian Gulf For Educational Consultant 
    @else
        EGEC | المصرية الخليجية للخدمات التعليمية
	@endif
@endsection

@section('egec')

    @include('frontend.layouts.loader')

    @include('frontend.layouts.header')

    <!-- Main content Start -->
        @if(app()->getLocale() == 'en')
            
            
            
            <main  class="main-content ">
        <section id="thanks-section" class="thanks-section">
            <div class="jumbotron text-center py-3">
                <!--<div id="btnDown">-->
                <!--    <a id="country-section" class="btn-success btn btn-rounded-circle"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>-->
                <!--</div>-->
                @if (session('flash_message'))
                <img src="{{ asset('frontend/images/F.png')}}" class="h-150" alt="">
                <h1 class="display-3 text-main">Thank you</h1>
                <p class="thanks-paragraph">Your message has been received and we will get in touch with you soon!</p>
                <!-- <hr> -->
               
                <!-- <p>
                  Having trouble? <a href="">Contact us</a>
                </p> -->
                <p class="lead">
                  <a class="btn btn-primary" href="http://digitalbondmena.com/egec_new_new/en" role="button">Continue to Home page</a>
                </p>
                @else
                    
                    <img src="{{ asset('frontend/images/F2.png')}}" class="h-150" alt="">
                    <h1 class="display-3 text-main" style="color:red !important;">Oops ... Sorry</h1>
                     <p class="thanks-paragraph">No Massage has been received</p>
                    <div class="row justify-content-center py-4">
                        <div class="col-md-3 text-center">
                            <h3 class="thanks-paragraph">Join Us Now</h3>
                        </div>
                        
                    </div>
                    <!-- <p>
                      Having trouble? <a href="">Contact us</a>
                    </p> -->
                    <p class="lead">
                      <a class="btn btn-primary" href="http://digitalbondmena.com/egec_new_new/en" role="button">Continue to Home page</a>
                    </p>
                @endif    

            </div>
        </section>
        <section id="country-section" class="country-section" style="opacity: 0;">
            <div class="container">
                <!-- <div id="btnUp">
                    <a id="btnUpButton" class="btn-success btn btn-rounded-circle"><i class="fa fa-chevron-up text-white" aria-hidden="true"></i></a>
                </div> -->


            </div>
        </section>
        
        
        <section  class="country-section">
            <div class="container">
                <!--<div id="btnUp">-->
                <!--    <a id="btnUpButton" class="btn-success btn btn-rounded-circle"><i class="fa fa-chevron-up text-white" aria-hidden="true"></i></a>-->
                <!--</div>-->
                <div class="sec-title2 text-center mb-45">
                    <h2 class="title black-color">Explore Universities by Country</h2>
                </div>
                <div class="row justify-content-center">
    
                        @foreach($destinations as $destination)
                                <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <a class="countery-item" href="{{ route('destination', $destination->en_slug) }}">
                                        <div class="icon-part">
                                            <img src="{{ asset('egec_new/destinations/'. $destination->flag) }}" style="    width: 70px;
                                                                                                                                             height: 35px;" alt="">
                                        </div>
                                        <div class="content-part">
                                            <h4 class="title">{{ $destination->en_name }}</h4>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                    
                </div>
            </div>
        </section>
    </main>
           
            @section('scripts')
            
            <script>
                function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }
        </script>
    @endsection
            
        @else
        
           
           
           <main class="main-content ">

        <section id="thanks-section" class="thanks-section jumbotron text-center bg-white py-3">
            <!--<div id="btnDown">-->
            <!--    <a href="#country-section" class="btn-success btn btn-rounded-circle"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>-->
            <!--</div>-->
            @if (session('flash_message'))
                <img src="{{ asset('frontend/images/F.png')}}" class="h-150" alt="">
                <h1 class="display-top-bar3 text-main">شكرًا لتسجيلك</h1>
                <p class="thanks-paragraph">تم استلام رسالتك وسنقوم بالتواصل معك في أقرب وقت!</p>
                <!-- <hr> -->
                
                <!-- <p>
                  Having trouble? <a href="">Contact us</a>
                </p> -->
                <p class="lead">
                  <a class="btn btn-primary" href="http://digitalbondmena.com/egec_new_new/ar" role="button">اذهب للصفحة الرئيسية</a>
                </p>
            @else
                
                <img src="{{ asset('frontend/images/F2.png')}}" class="h-150" alt="">
                <h1 class="display-3 text-main" style="color:red !important;">عفوا .. نعتذر</h1>
                     <p class="thanks-paragraph">لم يتم استلام أي طلب حاليا</p>
                    
                <!-- <p>
                  Having trouble? <a href="">Contact us</a>
                </p> -->
                <p class="lead">
                      <a class="btn btn-primary" href="http://digitalbondmena.com/egec_new_new/ar" role="button">تابع إلى الصفحه الرئيسية</a>
                    </p>
                
            @endif    
          </section>
          <div id="country-section" class="country-section" style="opacity: 0;">
            <div class="container">
                <!-- <div id="btnUp">
                    <a href="#rs-header" class="btn-success btn btn-rounded-circle"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
                </div>
                <div class="sec-title2 text-center mb-45">
                    <div class="sub-title"> البحث عن الجامعات</div>
                    <h2 class="title black-color">اكتشف الجامعات حسب الدولة</h2>
                </div>
                <div class="row justify-content-center">
                                                    <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                            <a class="countery-item" href="https://egecmena.com/ar/%D9%85%D8%B5%D8%B1">
                                <div class="icon-part">
                                    <img src="https://egecmena.com/egec_new/destinations/1608211531S8RwN2hRP1.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">مصر</h4>
                                </div>
                            </a>
                        </div>
                                                    <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                            <a class="countery-item" href="https://egecmena.com/ar/%D8%A7%D9%84%D8%B3%D9%88%D8%AF%D8%A7%D9%86">
                                <div class="icon-part">
                                    <img src="https://egecmena.com/egec_new/destinations/1623668794pXBAewZOPI.jpg" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">السودان</h4>
                                </div>
                            </a>
                        </div>
                                                    <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                            <a class="countery-item" href="https://egecmena.com/ar/%D8%A7%D9%84%D8%A7%D8%B1%D8%AF%D9%86">
                                <div class="icon-part">
                                    <img src="https://egecmena.com/egec_new/destinations/1623669219oFRDK3wmK7.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">الاردن</h4>
                                </div>
                            </a>
                        </div>
                                            </div> -->
            </div>
        </div>
        
        
        <div class="country-section">
                    <div class="container">
                        <!--<div id="btnUp">-->
                        <!--    <button id="btnUpButton" class="btn-success btn btn-rounded-circle"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>-->
                        <!--</div>-->
                        <div class="sec-title2 text-center mb-45">
                            <div class="sub-title"> البحث عن الجامعات</div>
                            <h2 class="title black-color">اكتشف الجامعات حسب الدولة</h2>
                        </div>
                        <div class="row justify-content-center">
                            @foreach($destinations as $destination)
                                <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <a class="countery-item" href="{{ route('destination', $destination->ar_slug) }}">
                                        <div class="icon-part">
                                            <img src="{{ asset('egec_new/destinations/'. $destination->flag) }}" alt="">
                                        </div>
                                        <div class="content-part">
                                            <h4 class="title">{{ $destination->ar_name }}</h4>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
        </div>
        
    </main>
            
             @section('scripts')
            
            <script>
                function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }
        </script>
    @endsection
           
        @endif
        
        <!-- Main content End --> 

    @include('frontend.layouts.footer')
@endsection

       