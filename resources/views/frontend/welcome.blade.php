@extends('frontend.layouts.app')

@section('title')
    
   EHA || Home
 
@endsection

@section('ehanative')


    @include('frontend.layouts.header')

    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_29_1_wrapper" data-alias="slider-2" data-source="gallery"
        style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_29_1" data-version="6.5.19">
            <rs-slides>
                <rs-slide style="position: absolute;" data-key="rs-99" data-title="Slide"
                data-thumb="{{ asset('medicatetheme/rev/assets/1-6-50x100.jpg')}}" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
                <img src="{{ asset('medicatetheme/rev/assets/1-6.jpg')}}" alt="" title="1" class="rev-slidebg tp-rs-img" data-no-retina>
              
                    <rs-layer id="slider-29-slide-99-layer-0" data-type="shape" data-rsp_ch="on"
                        data-xy="x:c;xo:0,0,0,1px;y:m;yo:-140px,-115px,-87px,-67px;"
                        data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                        data-dim="w:290px,290px,290px,250px;h:30px,30px,30px,25px;" data-border="bor:3px,3px,3px,3px;"
                        data-frame_0="y:50,41,31,19;" data-frame_1="st:600;sp:1000;sR:600;" data-frame_999="o:0;st:w;sR:7400;"
                        style="z-index:8;background-color:#d3e9fb;">
                    </rs-layer>

                    <rs-layer id="slider-29-slide-99-layer-1" data-type="text" data-color="#2490eb" data-rsp_ch="on"
                        data-xy="x:c;y:m;yo:-140px,-115px,-87px,-65px;"
                        data-text="w:normal;s:14,14,14,12;l:22,22,22,20;fw:600;" data-frame_0="y:50,41,31,19;"
                        data-frame_1="st:600;sp:1000;sR:600;" data-frame_999="o:0;st:w;sR:7400;"
                        style="z-index:9;font-family:'Quicksand';text-transform:uppercase;">Welcome to EHA
                    </rs-layer>

                    <a id="slider-29-slide-99-layer-2" class="rs-layer pq-button rev-btn" href=""
                        target="_self" data-type="button" data-rsp_ch="on"
                        data-xy="x:c;xo:102px,109px,100px,72px;y:m;yo:97px,88px,111px,66px;"
                        data-text="w:normal;s:14,14,14,12;l:22,22,22,20;fw:600;" data-dim="minh:0px,none,none,none;"
                        data-padding="t:15,12,14,10;r:30,25,22,20;b:15,12,14,10;l:30,25,22,20;"
                        data-border="bor:3px,3px,3px,3px;" data-frame_0="y:50,41,31,19;"
                        data-frame_1="st:1910;sp:1000;sR:1910;" data-frame_999="o:0;st:w;sR:6090;"
                        data-frame_hover="bgc:#007aff;bor:3px,3px,3px,3px;sp:100;e:power1.inOut;bri:120%;"
                        style="z-index:12;background-color:#2490eb;font-family:'Quicksand';text-transform:uppercase;"><span
                            class="text">History</span><i class="ion ion-plus-round"></i>
                    </a>

                    <rs-layer id="slider-29-slide-99-layer-3" data-type="text" data-rsp_ch="on"
                        data-xy="x:c;y:m;yo:-34px,-30px,-5px,-10px;"
                        data-text="w:normal;s:64,52,48,28;l:72,60,56,36;fw:600;a:center;" data-frame_0="y:50,41,31,19;"
                        data-frame_1="st:1220;sp:1000;sR:1220;" data-frame_999="o:0;st:w;sR:6780;"
                        style="z-index:10;font-family:'Quicksand';text-transform:capitalize;">we also have a ton of
                        <br>
                        fun in the process
                    </rs-layer>

                    <a id="slider-29-slide-99-layer-4" class="rs-layer pq-button rev-btn" href="{{ route('protocols' , 0) }}"
                        target="_self" data-type="button" data-rsp_ch="on"
                        data-xy="x:c;xo:-90px,-63px,-60px,-68px;y:m;yo:97px,88px,111px,66px;"
                        data-text="w:normal;s:14,14,14,12;l:22,22,22,20;fw:600;" data-dim="minh:0px,none,none,none;"
                        data-padding="t:15,12,14,10;r:30,25,22,20;b:15,12,14,10;l:30,25,22,20;"
                        data-border="bor:3px,3px,3px,3px;" data-frame_0="y:50,41,31,19;"
                        data-frame_1="st:1910;sp:1000;sR:1910;" data-frame_999="o:0;st:w;sR:6090;"
                        data-frame_hover="bgc:#007aff;bor:3px,3px,3px,3px;sp:100;e:power1.inOut;bri:120%;"
                        style="z-index:11;background-color:#2490eb;font-family:'Quicksand';text-transform:uppercase;"><span
                            class="text">Protocols </span><i class="ion ion-plus-round"></i>
                    </a>
                </rs-slide>


                <rs-slide style="position: absolute;" data-key="rs-103" data-title="Slide"
                data-thumb="{{ asset('medicatetheme/rev/assets/2-6-50x100.jpg')}}" data-anim="ms:600;" data-in="o:0;" data-out="a:false;">
                <img src="{{ asset('medicatetheme/rev/assets/2-6.jpg')}}" alt="" title="2" class="rev-slidebg tp-rs-img" data-no-retina>
             
                    <rs-layer id="slider-29-slide-103-layer-0" data-type="shape" data-rsp_ch="on"
                        data-xy="x:c;xo:0,0,0,1px;y:m;yo:-140px,-115px,-87px,-67px;"
                        data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                        data-dim="w:290px,290px,290px,250px;h:30px,30px,30px,25px;" data-border="bor:3px,3px,3px,3px;"
                        data-frame_0="y:50,41,31,19;" data-frame_1="st:600;sp:1000;sR:600;" data-frame_999="o:0;st:w;sR:7400;"
                        style="z-index:8;background-color:#d3e9fb;">
                    </rs-layer>
                
                    <rs-layer id="slider-29-slide-103-layer-1" data-type="text" data-color="#2490eb" data-rsp_ch="on"
                        data-xy="x:c;y:m;yo:-140px,-115px,-87px,-65px;"
                        data-text="w:normal;s:14,14,14,12;l:22,22,22,20;fw:600;" data-frame_0="y:50,41,31,19;"
                        data-frame_1="st:600;sp:1000;sR:600;" data-frame_999="o:0;st:w;sR:7400;"
                        style="z-index:9;font-family:'Quicksand';text-transform:uppercase;">Welcome to EHA
                    </rs-layer>
                    
                    <a id="slider-29-slide-103-layer-2" class="rs-layer pq-button rev-btn" href=""
                        target="_self" data-type="button" data-rsp_ch="on"
                        data-xy="x:c;xo:102px,109px,100px,72px;y:m;yo:97px,88px,111px,66px;"
                        data-text="w:normal;s:14,14,14,12;l:22,22,22,20;fw:600;" data-dim="minh:0px,none,none,none;"
                        data-padding="t:15,12,14,10;r:30,25,22,20;b:15,12,14,10;l:30,25,22,20;"
                        data-border="bor:3px,3px,3px,3px;" data-frame_0="y:50,41,31,19;"
                        data-frame_1="st:1910;sp:1000;sR:1910;" data-frame_999="o:0;st:w;sR:6090;"
                        data-frame_hover="bgc:#007aff;bor:3px,3px,3px,3px;sp:100;e:power1.inOut;bri:120%;"
                        style="z-index:12;background-color:#2490eb;font-family:'Quicksand';text-transform:uppercase;"><span
                            class="text">History </span><i class="ion ion-plus-round"></i>
                    </a>
                
                    <rs-layer id="slider-29-slide-103-layer-3" data-type="text" data-rsp_ch="on"
                        data-xy="x:c;y:m;yo:-34px,-30px,-5px,-10px;"
                        data-text="w:normal;s:64,52,48,28;l:72,60,56,36;fw:600;a:center;" data-frame_0="y:50,41,31,19;"
                        data-frame_1="st:1220;sp:1000;sR:1220;" data-frame_999="o:0;st:w;sR:6780;"
                        style="z-index:10;font-family:'Quicksand';text-transform:capitalize;">we also have a ton of
                        <br>
                        fun in the process
                    </rs-layer>
                    
                    <a id="slider-29-slide-103-layer-4" class="rs-layer pq-button rev-btn" href="{{ route('protocols' , 0) }}"
                        target="_self" data-type="button" data-rsp_ch="on"
                        data-xy="x:c;xo:-90px,-63px,-60px,-68px;y:m;yo:97px,88px,111px,66px;"
                        data-text="w:normal;s:14,14,14,12;l:22,22,22,20;fw:600;" data-dim="minh:0px,none,none,none;"
                        data-padding="t:15,12,14,10;r:30,25,22,20;b:15,12,14,10;l:30,25,22,20;"
                        data-border="bor:3px,3px,3px,3px;" data-frame_0="y:50,41,31,19;"
                        data-frame_1="st:1910;sp:1000;sR:1910;" data-frame_999="o:0;st:w;sR:6090;"
                        data-frame_hover="bgc:#007aff;bor:3px,3px,3px,3px;sp:100;e:power1.inOut;bri:120%;"
                        style="z-index:11;background-color:#2490eb;font-family:'Quicksand';text-transform:uppercase;"><span
                            class="text">Protocols  </span><i class="ion ion-plus-round"></i>
                    </a>
                
                </rs-slide>


            </rs-slides>
            <rs-static-layers>
                <!--
                    -->
            </rs-static-layers>
        </rs-module>
    </rs-module-wrap>


    <section class="about-us pq-bg-grey pq-mb-130 pq-pb-130">
        <div class="container">
           <div class="row align-items-center">
              <div class="col-lg-6 col-md-12 pe-xl-5"> <img src="{{  asset('about/' . $about->about_image)}}" class="img-fluid wow fadeInLeft"
                    alt="home"> </div>
              <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                 <div class="pq-section pq-style-1 text-left"> <span class="pq-section-sub-title">What About Us</span>
                    <h5 class="pq-section-title">{{ $about->about_title }}</h5>
                    <p class="pq-section-description">
                        {!! $about->about_text !!}
                    </p>
                 </div>

                 <div class="col-lg-12">
                    <a class="pq-button pq-button-flat mt-3" href="{{ route('about-us') }}">
                       <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i
                             class="ion ion-plus-round"></i> </div>
                    </a>
                 </div>
              </div>
           </div>
        </div>
    </section>
     <!--Section End-->
     <!--Section Start -->
     <section class="p-sm-0 departments">
        <div class="container">
           <div class="row justify-content-center">
              <div class="col-lg-6 col-md-6 col-xl-4">
                 <div class="pq-service-box pq-style-4">
                    <div class="pq-service-icon"> <i aria-hidden="true" class=" flaticon-heartbeat"></i> </div>
                    <div class="pq-service-box-info">
                       <h5 class="pq-service-title">Neurology</h5>
                       <p class="pq-service-description mt-3 mb-1">There are many variations of passages of Lorem Ipsum
                          available, but the majority have suffered alteration...</p>
                       <ul class="pq-list-check">
                          <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Lorem ipsum dolor sit
                                amet</span></li>
                          <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>There are many
                                variations</span></li>
                          <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>lorem ipsum dummy
                                text</span></li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xl-4 mt-lg-0 mt-md-0 mt-4">
                 <div class="pq-service-box pq-style-4 active">
                    <div class="pq-service-icon"> <i aria-hidden="true"
                          class=" flaticon-medical-report-1 pq-text-white"></i> </div>
                    <div class="pq-service-box-info">
                       <h5 class="pq-service-title pq-text-white">Endocrinology</h5>
                       <p class="pq-service-description mt-3 mb-1">There are many variations of passages of Lorem Ipsum
                          available, but the majority have suffered alteration...</p>
                       <ul class="pq-list-check">
                          <li><i aria-hidden="true" class="ion ion-checkmark-round pq-text-white"></i><span
                                class="pq-text-white">Lorem ipsum dolor sit amet</span></li>
                          <li><i aria-hidden="true" class="ion ion-checkmark-round pq-text-white"></i><span
                                class="pq-text-white">There are many variations</span></li>
                          <li><i aria-hidden="true" class="ion ion-checkmark-round pq-text-white"></i><span
                                class="pq-text-white">lorem ipsum dummy text</span></li>
                       </ul>
                    </div>
                 </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xl-4 mt-xl-0 mt-4">
                 <div class="pq-service-box pq-style-4">
                    <div class="pq-service-icon"> <i aria-hidden="true" class=" flaticon-heartbeat "></i> </div>
                    <div class="pq-service-box-info">
                       <h5 class="pq-service-title">Orthodontics</h5>
                       <p class="pq-service-description mt-3 mb-1">There are many variations of passages of Lorem Ipsum
                          available, but the majority have suffered alteration...</p>
                       <ul class="pq-list-check">
                          <li><i aria-hidden="true" class="ion ion-checkmark-round "></i><span>Lorem ipsum dolor sit
                                amet</span></li>
                          <li><i aria-hidden="true" class="ion ion-checkmark-round "></i><span>There are many
                                variations</span></li>
                          <li><i aria-hidden="true" class="ion ion-checkmark-round "></i><span>lorem ipsum dummy
                                text</span></li>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--Section  End -->
     
     <!--Section Start-->
     <section class="pq-bg-primary-dark pq-process-pb pq-bg-img-1 mt-5">
        <div class="container">
           <div class="row ">
              <div class="col-lg-12">
                 <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title ">OUR PROCESS
                       STEP</span>
                    <h5 class="pq-section-title pq-text-white">we Apply our latest research</h5>
                 </div>
              </div>
              <div class="col-lg-6 col-md-6">
                 <div class="pq-process-step pq-style-3 ">
                    <div class="pq-process-info">
                        
                       <h5 class="pq-process-title">
                            <i class="fab fa-android" aria-hidden="true" style="color:#fff;font-size:20px"></i>
                            
                            Download From Adnroid
                        </h5>
                    </div>
                 </div>
              </div>
              <div class="col-lg-6 col-md-6 ">
                 <div class="pq-process-step pq-style-3 ">
                    <div class="pq-process-info">
                       <h5 class="pq-process-title">
                        <i class="fab fa-apple" aria-hidden="true" style="color:#fff;font-size:20px"></i>
                        
                            Download From Apple 

                        </h5>
                    </div>
                    

                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--Section End-->

     <!--Section  End -->
    
     
  
  
     <!--Section Start -->
     <section class="p-0 mt-5">
        <div class="container">
           <div class="pq-formbox ">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-xl-6 pq-form-location">
                    <img src="{{ asset('medicatetheme/images/from3.jpg')}}" class="img-fluid pq-form3-img img-fluid" alt="">
                    <div class="pq-location-box pq-location-box1">
                       <div class="pq-location-icon">
                          <i aria-hidden="true" class=" flaticon-medical-doctor"></i>
                       </div>
                       <div class="pq-location-info">
                          <h5 class="pq-location-title">Get in Touch</h5>
                          <p class="pq-location-description mb-0">The Queen's Walk, Bishop's, London SE1 7PB, UK</p>
                       </div>
                    </div>
                    <div class="pq-location-box pq-location-box2">
                       <div class="pq-location-icon">
                          <i aria-hidden="true" class=" flaticon-medical-doctor"></i>
                       </div>
                       <div class="pq-location-info">
                          <h5 class="pq-location-title">Get in Touch </h5>
                          <p class="pq-location-description mb-0">The Queen's Walk, Bishop's, London SE1 7PB, UK</p>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-12 col-md-12 col-xl-6 pq-p-45">
                    <div class="pq-section pt-style-1 text-left">
                       <span class="pq-section-sub-title">Get In Touch</span>
                       <h5 class="pq-section-title mb-4">Contact Us</h5>
                    </div>
                    <form action="{{ route('sendMessage') }}" method="POST">
                        @csrf
                        <div class="pq-applyform">
                           <div class="row">
                              <div class="col-md-6">
                                 <input type="text" name="name"  class="name-field"
                                    placeholder="Enter Your Name" required>
                              </div>
                              
                              <div class="col-md-6">
                                 <input type="text" name="phone"  class="phone-number-field"
                                    placeholder="Enter Your Phone Number" required>
                              </div>
                              <div class="col-md-12">
                                <input type="text" name="email"  class="e-mail-field"
                                   placeholder="Enter Your Email" required>
                             </div>
                              <div class="col-md-12">
                                 <textarea name="message"  cols="40" rows="10"
                                    placeholder="Write Your Message" required></textarea>
                              </div>
                              <div class="col-md-12">
                                 <button class="pq-button form-btn">
                                    <div class="pq-button-block">
                                       <span class="pq-button-text me-0">SEND MESSAGE</span>
                                    </div>
                                 </button>
                              </div>
                           </div>
                        </div>

                    </form>
                 </div>
              </div>
           </div>
        </div>
  
  
     </section>
     <!--Section  End -->
  
  
  
  
     <!--Section Start-->
     <section class="pq-blog pq-pb-210 ">
        <div class="container">
           <div class="row">
              <div class="col-lg-12">
                 <div class="pq-section pq-style-1 text-center"> <span class="pq-section-sub-title">our Newsletter</span>
                    <h5 class="pq-section-title">See Our Latest Newsletter</h5>
                 </div>
              </div>
              <div class="col-lg-12">
                 <div class="" >
                    @foreach ($news as $item)
                        
                        <div class="item">
                        <div class="pq-bg-grey  pq-blog-post pq-style-1">
                            
                            <div class="pq-blog-contain">
                                <h5 class=""><a >
                                    {{ $item->newsletter_title }}
                                </a></h5>
                                <div class="pq-blog-info">
                                    <p>{!!  $item->newsletter_text !!}   </p>
                                </div>
                                
                            </div>
                        </div>
                        </div>

                    @endforeach
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--Section End-->

    @include('frontend.layouts.footer')



@endsection