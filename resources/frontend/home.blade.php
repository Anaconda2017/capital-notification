@extends('frontend.layouts.app')

@section('title')
	@if(app()->getLocale() == 'en')
        EGEC | Egyptian Gulf For Educational Consultant
    @else
        EGEC | المصرية الخليجية للخدمات التعليمية
	@endif
@endsection

@section('egec')

    @if(session('user_submitted_email'))
        @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $(".success-form").modal('show');
                });
            </script>
        @endsection
        <div class="modal fade success-form" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-body">
                <div class="modal-content">
                <div class="modal-body text-center">
                    <i class="fa fa-5x fas fa-check-circle text-success"></i>
                    <h3>Here is your credentials</h3>
                    <span>Email: <strong>{{ session('user_submitted_email') }}</strong></span><br>
                    <span>Password: <strong>{{ session('user_submitted_password') }}</strong></span>
                </div>
                </div>
            </div>
            </div>
        </div>
    @elseif(session('verified_success'))
        @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $(".success-verified").modal('show');
                });
            </script>
        @endsection
        <div class="modal fade success-verified" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-body">
                <div class="modal-content">
                <div class="modal-body text-center">
                    <i class="fa fa-5x fas fa-check-circle text-success"></i><br><br>
                    <b><strong>{{ session('verified_success') }}</strong></b>
                </div>
                </div>
            </div>
            </div>
        </div>
    @endif

    @include('frontend.layouts.loader')

    @include('frontend.layouts.header')

    <!-- Main content Start -->
        @if(app()->getLocale() == 'en')
            @section('css')
            <style>
        .loader {
            z-index: 99999999999999999;
        }
        .mat-button-wrapper{
            display: none;
        }
        .wa-chat-box-poweredby {
            display: none;
        }
        #wa-widget-send-button{
            right: 50px !important;
            left:auto !important;
        }
        #sntch_webchat{
            right: auto !important;
            left: 0;
        }
        #sntch_button{
            left: 60px !important;
            bottom: 50px !important;
            z-index: 3 !important;
            right: auto !important;
        }
    </style>
            @endsection



            <div class="main-content">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif

                <!-- Slider Section Start -->
                <div class="rs-slider style1">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                        @foreach($sliders as $slider)
                            <div class="slider-content" style="background: url({{ asset('egec_new/sliders/'. $slider->image) }});
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;">
                                <div class="container">
                                    <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">{{$slider->en_title}}</div>
                                    <h2 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">{{$slider->en_paragraph}}</h2>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Slider Section End -->
                <div class="container" style="max-width: 1315px !important">
                    <div class="welcome-area fix area-padding">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="all-wel-services">

                                    <!-- single-well end-->
                                    <div class="well-services wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                        <div class="services-img">
                                            <a style="margin-left: -37px;margin-top: 8px;" class="big-icon" href=""><img src="{{ asset('egec_new/frontend/images/blck3.svg') }}" alt="" width="74"></a>
                                        </div>
                                        <div class="main-wel">
                                            <a href="http://egecmena.com/en/about-us" class="wel-content">
                                                <h4>Why Choose EGEC?</h4>
                                                <p>As experts in international education, we can turn your dreams of studying abroad into a plan for success.</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="well-services wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <div class="services-img">
                                            <a style="margin-top: 8px" class="big-icon ml85ico" href="">
                                                <img src="{{ asset('frontend/images/blck2.svg') }}" alt="" width="89">
                                            </a>
                                        </div>
                                        <div class="main-wel">
                                            <a href="http://egecmena.com/en/contact-us" class="wel-content">
                                                <h4>Visit Us</h4>
                                                <p> do you have questions? We can help you! Book your appointment for free with one of our consultants </p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-well end-->
                                    <div class="well-services wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                        <div class="services-img">
                                            <a style="margin-left: -45px;" class="big-icon ml82ico"><img src="{{ asset('egec_new/frontend/images/blck1.svg') }}" alt="" width="91"></a>
                                        </div>
                                        <div class="main-wel">
                                            <a href="http://egecmena.com/en/egypt"  class="wel-content">
                                                <h4>Search In Universities </h4>
                                                <p>On our website, you can search for the appropriate university and choose a major</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-well end-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="search-section">
                    <div class="container" >
                        <div class="sec-title2 text-center mb-45">
                            <div class="sub-title"> Universities Search</div>
                            <h2 class="title black-color">Choose the appropriate university, college and major</h2>
                        </div>
                        <div class="row mb-35" >
                            <form id="uni-search-form" action="{{ route('search') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-3 mb-35 col-md-6 col-sm-12">
                                        <label for="country-list">Country:</label>
                                        <select name="destination_id" class="form-control" id="destination_id" required>
                                            <option value="">Select a Country</option>
                                            @foreach($destinations as $destination)
                                                <option value="{{ $destination->id }}">{{ $destination->en_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-35 col-md-6 col-sm-12">
                                        <label for="country-list">University:</label>
                                        <select name="university_id" class="form-control" id="university_id">
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-35 col-md-6 col-sm-12">
                                        <label for="country-list">Faculty:</label>
                                        <select name="fac_uni_id" class="form-control" id="fac_uni_id">
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-35 col-md-6 col-sm-12">
                                        <label for="country-list">Major:</label>
                                        <select name="fac_uni_major_id" class="form-control" id="fac_uni_major_id">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3 text-center">
                                    <input class="btn-send" type="submit" value="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="country-section">
                    <div class="container">
                        <div class="sec-title2 text-center mb-45">
                            <div class="sub-title"> Universities Search</div>
                            <h2 class="title black-color">Explore Universities by Country</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    @foreach($destinations as $destination)
                                    <div class="col-lg-4 country col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
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
                                    <div class="col-12 text-center">
                                        <a href="" id="loadmore" class="btn btn-send">عرض المزيد</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('frontend/images/meduim_banner_336.jpg') }}" class="meduim-adv" alt="">

                            </div>

                        </div>
                    </div>
                </div>

                <section class="video-banner video-banner-layout2 bg-overlay bg-img" id="videoBanner" style="background-image: url({{ asset('egec_new/frontend/images/1_2.jpg') }}); background-size: cover; background-position: center center;">
                    <div class="container">
                        <div class="row mb-20 mt-40">
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="heading"><span class="heading__subtitle color-white mb-5">Follow The Next Steps to Submit The Application Correctly</span>

                        <h3 class="heading__title mb-0 color-white">The Application Process</h3>
                        </div>
                        <!-- /.heading --></div>
                        <!-- /.col-lg-7 --></div>
                        <!-- /.row-->

                        <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="cd-container" id="cd-timeline">
                        <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">&nbsp;</div>
                        <!-- cd-timeline-img -->

                        <div class="cd-timeline-content step-1 bounce-in">
                        <h3>Step One</h3>

                        <h4>Contact the Egyptian Gulf Company for Educational Services</h4>

                        <p>You can contact us via email, phone, or by visiting us at one of our offices</p>
                        </div>
                        <!-- cd-timeline-content --></div>
                        <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">&nbsp;</div>
                        <!-- cd-timeline-img -->

                        <div class="cd-timeline-content step-2 bounce-in">
                        <h3>Step Two</h3>

                        <h4>Talk to a Counselor</h4>

                        <p>Your own educational counselor will be appointed and you can talk to them about your current situation and what you are seeking</p>
                        </div>
                        <!-- cd-timeline-content --></div>
                        <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">&nbsp;</div>
                        <!-- cd-timeline-img -->

                        <div class="cd-timeline-content step-3 bounce-in">
                        <h3>Step Three</h3>

                        <h4>The chancellor proposes a university</h4>

                        <p>After having a conversation with you, your counselor will assess your condition and suggest the best available option</p>
                        </div>
                        <!-- cd-timeline-content --></div>
                        <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">&nbsp;</div>
                        <!-- cd-timeline-img -->

                        <div class="cd-timeline-content step-4 bounce-in">
                        <h3>Step Four</h3>

                        <h4>The Egyptian Gulf Educational Services is applying</h4>

                        <p>After you send all the documents to us, we will submit the application on your behalf</p>
                        </div>
                        <!-- cd-timeline-content --></div>
                        <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                        <div class="cd-timeline-img cd-picture">&nbsp;</div>
                        <!-- cd-timeline-img -->

                        <div class="cd-timeline-content step-5 bounce-in">
                        <h3>Step Five</h3>

                        <h4>You Get The Agreement!</h4>
                        </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>

                <section class="about about-layout2 pb-40 wow zoomIn" data-wow-delay="500ms" data-wow-duration="1500ms" id="aboutLayout2" style="margin-top: 50px;">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="heading heading-3 mb-50"><span class="heading__subtitle mb-2 font-size-17">Welcome to Our Website</span>

                        <h2 class="heading__title color-green">Egyptian Gulf for Educational Consultant</h2>

                        <h3 class="font-size-16">We have agreements with the major international universities that accredited in Switzerland and Hungary to enroll students from all facades of the Middle East</h3>
                        </div>
                        <!-- /heading --></div>
                        <!-- /.col-xl-9 --></div>
                        <!-- /.row -->

                        <div class="row">
                        <div class="col-sm-12 col-md-10 col-lg-5 col-xl-5">
                        <div class="about__img mb-50"><img alt="about" class="img-fluid" src="{{ asset('egec_new/frontend/images/2.jpg') }}">
                        <div class="cta__banner">
                        <div class="cta__icon">&nbsp;</div>

                        <h5 class="cta__title">Word From Mr<br>
                        <span class="font-size-17 color-white">Chairman of Board of Directors</span></h5>
                        </div>
                        <!-- /.cta__banner --></div>
                        <!-- /.about-img --></div>
                        <!-- /.col-xl-5 -->

                        <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                        <div class="about__text mb-30">
                        <p>We are a company that works in the field of developing, qualifying human resources and providing all educational services starting from enrolling students through the study period until obtaining a bachelor’s or licentiate in addition to many student services</p>

                        <p class="color-green">The company aims to many goals:</p>
                        </div>

                        <ul class="list-items list-items-layout2 list-unstyled mb-30">
                            <li>Providing the finest forms of scientific knowledge using the most modern means of communication technology</li>
                            <li>Contribute to raising the scientific and knowledge level for the people of the Arab world</li>
                            <li>Contribute to thought and effort in making the process of human development</li>
                            <li>Qualifying individuals and equipping them with skills and knowledge</li>
                            <li>Supporting positive thinking and scientific creativity</li>
                        </ul>

                        <div class="about__signature mb-30"><a class="btn btn__primary btn__bordered mr-40" href="{{ route('about-us') }}">More About Company</a></div>
                        </div>
                        </div>
                    </div>
                </section>
                <section class="ad-third py-5">
                    <div class="container  ">
                        <div class="row justify-content-center">
                            <img src="{{ asset('frontend/images/largeAdv.jpg') }}" alt="" class="large-adv">
                        </div>
                    </div>
                </section>
                <section class="social-media bg-gray py-5">

                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center mb-3" >
                                <div class="head_title text-center">
                                    <h2 class="mb-2">Stay Updated</h2>
                                    <span class="welcome">Know our latest activities</span>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-6 mb-4 text-center">

                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEGEC.EDU&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=864935207738443" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="col-md-6 mb-4 text-center">

                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEGEC.EDU&tabs=messages&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=864935207738443" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                        </div>
                    </div>

                </section>

            </div>


          @section('scripts')
         <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?78533';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
          "enabled":true,
          "chatButtonSetting":{
              "backgroundColor":"#4dc247",
              "ctaText":"",
              "borderRadius":"25",
              "marginLeft":"0",
              "marginBottom":"50",
              "marginRight":"0",
              "position":"right",

          },
          "brandSetting":{
              "brandName":"Egec",
              "brandSubTitle":"Typically replies within few minutes",
              "brandImg":"http://egecmena.com/frontend/images/pre-logo.png",
              "welcomeText":"Hello!\nHow can we help you today?",
              "messageText":"",
              "backgroundColor":"#0a5f54",
              "ctaText":"Start Chat",
              "borderRadius":"25",
              "autoShow":false,
              "phoneNumber":"971566306890"
          }
    };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>

        <script>
            $("#btnUpButton").click(function () {
                $("body,html").animate({ scrollTop: 0 }, 500);
            });
            $(document).ready(function() {
                $(window).scroll(function() {
                  var menuHeight = $('#footer').height();
                  var top = $(this).scrollTop();
                  var bottom = $(document).height() - $(this).height() - $(this).scrollTop();
                if (bottom < menuHeight) {

                    $('.registerBtn').fadeOut(500);
                }
                else {
                      $('.registerBtn').fadeIn(500);
                  }
                });
            });
        </script>

        <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(194452)</script>


          @endsection


        @else

            @section('css')
            <style>
            .loader{
                z-index:99999999999999999;
                }
            .wa-chat-box-poweredby  {
                display:none;
            }
            #wa-widget-send-button{
                right: 45px !important;
            }
            #sntch_webchat{
                right: auto !important;
                left: 0;
            }
            #wa-widget-send-button{
    right: 45px !important;
    left: auto !important;
}
#sntch_button{
    left: 60px !important;
    bottom: 50px !important;
    z-index: 3 !important;
    right: auto !important;
}

        </style>
            @endsection

            <div class="main-content">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif

                <!-- Slider Section Start -->
                <div class="rs-slider style1" style="direction: ltr">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                        @foreach($sliders as $slider)
                            <div class="slider-content" style="background: url({{ asset('egec_new/sliders/'. $slider->image) }});
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;">
                                <div class="container">
                                    <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">{{$slider->ar_title}}</div>
                                    <h2 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">{{$slider->ar_paragraph}}</h2>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Slider Section End -->
                <div class="container" style="max-width: 1315px !important">
                    <div class="welcome-area fix area-padding">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="all-wel-services">

                                    <!-- single-well end-->
                                    <div class="well-services wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp; height:220px;">
                                        <div class="services-img">
                                            <a style="margin-left: -37px;margin-top: 8px;" class="big-icon" href=""><img src="{{ asset('egec_new/frontend/images/blck3.svg') }}" alt="" width="74"></a>
                                        </div>
                                        <div class="main-wel">
                                            <a href="http://egecmena.com/ar/about-us" class="wel-content">
                                                <h4>لماذا إي جي إي سي ؟</h4>
                                                <p style="font-weight: bold; word-spacing: 1px; letter-spacing: 0.5px;"> بصفتنا خبراء في التعليم الدولي ، يمكننا تحويل أحلامك بالدراسة في الخارج إلى خطة للنجاح. </p>                                            </a>
                                        </div>
                                    </div>
                                    <div class="well-services wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; height:220px;">
                                        <div class="services-img">
                                            <a style="margin-top: 8px" class="big-icon ml85ico" href="">
                                                <img src="{{ asset('frontend/images/blck2.svg') }}" alt="" width="89">
                                            </a>
                                        </div>
                                        <div class="main-wel">
                                            <a href="http://egecmena.com/ar/contact-us" class="wel-content">
                                                <h4>زورنا</h4>
                                                <p style="font-weight: bold; word-spacing: 1px; letter-spacing: 0.5px;"> هل لديك أسئلة؟ يمكننا مساعدتك! احجز موعدك مجاناً مع أحد مستشارينا.  </p>
                                             </a>
                                        </div>
                                    </div>
                                    <!-- single-well end-->
                                    <div class="well-services wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; height:220px;">
                                        <div class="services-img">
                                            <a style="margin-left: -45px;" class="big-icon ml82ico"><img src="{{ asset('egec_new/frontend/images/blck1.svg') }}" alt="" width="91"></a>
                                        </div>
                                        <div class="main-wel">
                                            <a href="http://egecmena.com/ar/مصر" data-toggle="modal" type="button" class="wel-content">
                                                <h4>البحث في الجامعات </h4>
                                                <p style="font-weight: bold; word-spacing: 1px; letter-spacing: 0.5px;"> على موقعنا ، يمكنك البحث عن الجامعة المناسبة واختيار التخصص </p>                                            </a>
                                        </div>
                                    </div>
                                    <!-- single-well end-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="search-section">
                    <div class="container">
                        <div class="sec-title2 text-center mb-45">
                            <div class="sub-title">البحث عن الجامعات</div>
                            <h2 class="title black-color">اختر الجامعة والكلية والتخصص المناسب</h2>
                        </div>
                        <div class="row mb-35">
                            <form id="uni-search-form" action="{{ route('search') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-3 mb-35 col-md-6 col-sm-12">
                                        <label for="country-list" style="float:right !important;"> الدوله :</label>
                                        <br>
                                        <select name="destination_id" class="form-control" id="destination_id" required>
                                            <option value="" style="float:right !important;">اختر الدوله</option>
                                            <br>
                                            @foreach($destinations as $destination)
                                                <option value="{{ $destination->id }}">{{ $destination->ar_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-35 col-md-6 col-sm-12">
                                        <label for="country-list" style="float:right !important;">الجامعه :</label>
                                        <br>
                                        <select name="university_id" class="form-control" id="university_id">
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-35 col-md-6 col-sm-12">
                                        <label for="country-list" style="float:right !important;"> الكلية :</label>
                                        <br>
                                        <select name="fac_uni_id" class="form-control" id="fac_uni_id">
                                        </select>
                                    </div>
                                    <div class="col-lg-3 mb-35 col-md-6 col-sm-12">
                                        <label for="country-list" style="float:right !important;"> التخصصات :</label>
                                        <br>
                                        <select name="fac_uni_major_id" class="form-control" id="fac_uni_major_id">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3 text-center">
                                    <input class="btn-send" type="submit" value="ابحث">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="country-section">
                    <div class="container">
                        <div class="sec-title2 text-center mb-45">
                            <div class="sub-title"> البحث عن الجامعات</div>
                            <h2 class="title black-color">اكتشف الجامعات حسب الدولة</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    @foreach($destinations as $destination)
                                    <div class="col-lg-4 country col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
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
                                    <div class="col-12 text-center">
                                        <a href="" id="loadmore" class="btn btn-send">عرض المزيد</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('frontend/images/meduim_banner_336.jpg') }}" class="meduim-adv" alt="">

                            </div>

                        </div>
                    </div>
                </div>


                <section class="about about-layout2 pb-40 wow zoomIn" data-wow-delay="500ms" data-wow-duration="1500ms" id="aboutLayout2" style="margin-top: 50px;">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="heading heading-3 mb-50"><span class="heading__subtitle mb-2 font-size-17" style="float:right !important;">أهلا في موقعنا</span>
                        <br>
                        <h2 class="heading__title color-green" style="float:right !important;text-align: justify;">المصرية الخليجية للاستشارات التربوية</h2>
                        <br>
                        <h3 class="font-size-16" style="float:right !important;text-align: justify;">الاتفاق مع كبرى الجامعات العالمية المعتمدة في سويسرا والمجر لتسجيل الطلاب من جميع واجهات الشرق الأوسط</h3>
                        <br>
                    </div>
                        <!-- /heading --></div>
                        <!-- /.col-xl-9 --></div>
                        <!-- /.row -->

                        <div class="row">
                        <div class="col-sm-12 col-md-10 col-lg-5 col-xl-5">
                        <div class="about__img mb-50"><img alt="about" class="img-fluid" src="{{ asset('egec_new/frontend/images/2.jpg') }}" style="">
                        <div class="cta__banner">
                        <div class="cta__icon">&nbsp;</div>

                        <h5 class="cta__title" style="float:right !important;text-align: justify;">كلمة للسيد<br>
                        <span class="font-size-17 color-white" style="float:right !important;text-align: justify;">رئيس مجلس الإدارة</span></h5>
                        <br>
                        </div>
                        <!-- /.cta__banner --></div>
                        <!-- /.about-img --></div>
                        <!-- /.col-xl-5 -->

                        <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
                        <div class="about__text mb-30">
                        <p style="float:right !important;text-align: justify;">شركة تعمل في مجال تطوير وتأهيل الكوادر البشرية وتقديم كافة الخدمات التعليمية ابتداء من التحاق الطلاب خلال فترة الدراسة وحتى حصولهم على البكالوريوس أو الترخيص بالإضافة إلى العديد من الخدمات الطلابية</p>

                        <p class="color-green" style="float:right !important;text-align: justify;">: تهدف الشركة إلى العديد من الأهداف</p>
                        </div>

                        <ul class="list-items list-items-layout2 list-unstyled mb-30">
                            <li style="float:right !important;text-align: justify;">تقديم أرقى أشكال المعرفة العلمية بأحدث وسائل تكنولوجيا الاتصال</li>
                            <li style="float:right !important;text-align: justify;">المساهمة في رفع المستوى العلمي والمعرفي لشعوب الوطن العربي</li>
                            <li style="float:right !important;text-align: justify;">المساهمة في الفكر والجهد في جعل عملية التنمية البشرية</li>
                            <li style="float:right !important;text-align: justify;">تأهيل الأفراد وتزويدهم بالمهارات والمعرفة</li>
                            <li style="float:right !important;text-align: justify;">دعم التفكير الإيجابي والإبداع العلمي</li>
                        </ul>
                        <br>

                        <div class="about__signature mb-30"><br><a class="btn btn__primary btn__bordered mr-40" href="#" style="float:right !important;">لمعرقة المزيد عنا </a></div>
                        </div>
                        </div>
                    </div>
                </section>
                <section class="ad-third py-5">
                    <div class="container  ">
                        <div class="row justify-content-center">
                            <img src="{{ asset('frontend/images/largeAdv.jpg') }}" alt="" class="large-adv">
                        </div>
                    </div>
                </section>
                <section class="social-media bg-gray py-5">

                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center mb-3" >
                                <div class="head_title text-center">
                                    <h2 class="mb-2">ابق مطلعا</h2>
                                    <span class="welcome">تعرف على اخر انشطتنا</span>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-6 mb-4 text-center">

                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEGEC.EDU&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=864935207738443" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="col-md-6 mb-4 text-center">

                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEGEC.EDU&tabs=messages&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=864935207738443" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

           @section('scripts')

            <script>
            var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?78533';
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url;
            var options = {
              "enabled":true,
              "chatButtonSetting":{
                  "backgroundColor":"#4dc247",
                  "ctaText":"",
                  "borderRadius":"25",
                  "marginLeft":"0",
                  "marginBottom":"50",
                  "marginRight":"50",

                  "position":"right"
              },
              "brandSetting":{
                  "brandName":"Egec",
                  "brandSubTitle":"يتم الرد عادة خلال دقائق قليلة",
                  "brandImg":"http://egecmena.com/frontend/images/pre-logo.png",
                  "welcomeText":"أهلًا بك!\nكيف يمكننا مساعدتك اليوم؟",
                  "messageText":"",
                  "backgroundColor":"#0a5f54",
                  "ctaText":"ابدأ المحادثة",
                  "borderRadius":"25",
                  "autoShow":false,
                  "phoneNumber":"971566306890"
              }
        };
            s.onload = function() {
                CreateWhatsappChatWidget(options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        </script>


                <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(195656)</script>
           @endsection
        @endif

        <!-- Main content End -->

    @include('frontend.layouts.footer')
@endsection

