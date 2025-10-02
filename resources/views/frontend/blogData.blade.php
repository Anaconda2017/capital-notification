@extends('frontend.layouts.app')

@if(app()->getLocale() == 'en')
    @section('canonicalData')
    <link rel="canonical" href="https://egecmena.com/en/blogData/{{ $blogData->en_slug }}"/>  
    @endsection
@else
    @section('canonicalData')
    <link rel="canonical" href="https://egecmena.com/ar/blogData/{{ $blogData->ar_slug }}"/>  
    @endsection
@endif

@if(app()->getLocale() == 'en')
    @section('meta_description', $blogData->en_tag_desc)
    @section('meta_title', $blogData->en_tag_title)
@else
    @section('meta_description', $blogData->ar_tag_desc)
    @section('meta_title', $blogData->ar_tag_title)
@endif

@section('title')
    @if (app()->getLocale() == 'en')
          {{ $blogData->en_tag_title }}
    @else
         {{ $blogData->ar_tag_title }}



    @endif
@endsection

@section('egec')
    @include('frontend.layouts.loader')

    @include('frontend.layouts.blogHeader')
    
    <style>
        p img {
            text-align:center;
        }
    </style>

    @if (app()->getLocale() == 'en')




         <!--page title area start -->
        <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" style="background-image: url('{{asset('frontend/img/about/Header.jpg') }}');">

            <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                <div class="page__title-wrapper mt-110">
                    <h3 class="page__title">
                        {{ $blogData->en_title }}
                    </h3>
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li  class="breadcrumb-item active" aria-current="page">
                        <a >
                            {{ $blogData->en_title }}
                        </a>
                        </li>

                    </ol>
                    </nav>
                </div>
                </div>
            </div>
            </div>
        </section>
         <!--page title area end -->



        <section class="blog_details pt-90 pb-90 position-relative">
        <div class="container">
            <div class="row">
            <div class="col-lg-9" >
                <h1 class="aboutImaggg">{{ $blogData->en_title }}</h1>
                <div class="blog__meta my-3 d-flex align-items-center">
                <div class="blog__author mr-3 d-flex align-items-center">

                    <div class="blog__author-info" style="margin-right:10px">
                    <i class="fas ml-2 fa-eye"></i>
                    <span class="number"> {{ $blogData->counter_view }} </span>
                    </div>
                </div>

                <div class="blog__date d-flex align-items-center">
                    <i class="fal ml-2 fa-clock"></i>
                    <span>{{ $blogData->created_at }} </span>
                    </div>
                </div>

                <div class="blog__details--img text-center">
                <img src="{{ asset('blog/' . $blogData->blog_main_image) }}" class="w-100"  alt="{{ $blogData->en_title }}">
                <span>{{ $blogData->en_title }}</span>
                </div>

                <p>
                    {!! $blogData->en_text !!}
                </p>
                <h4>
                    تود الدراسة في مصر؟ إليك الحل المثالي:
                    <a href="https://api.whatsapp.com/send?phone=2001000670590&text=">
                        تواصل عبر الواتساب مع مستشاري التعليم الدولي والخبراء الأكاديمين الآن
                    </a>
                    <form action="{{route('generalForm')}}" method="POST">
                        @scrf
                        <input type="hidden" name="blog_id" value="{{ $blogData->id }}">
                        <button class="admission__btn" type="submit" style="right: 0px; background-color: transparent !important; transform: translateY(-50%)" >
                            أو سجل بياناتك الآن عبر استمارة الالتحاق وسنقوم بالتواصل معك
                        </button>
                    </form>
                </h4>
                
            </div>
            <div class="col-lg-3" >
                <div class="course__sidebar-widget-2 white-bg" id="fixedsider">
                <div class="course__sidebar-course">
                    <h3 class="course__sidebar-title">Related blogs</h3>
                    <ul>
                     <ng-container *ngIf="universities.length > 1; else universityEmpty"> 
                        @foreach($blogother as $blogo)
                        <li>
                        <a href="{{route('blogDataaa'  , [$blogo->en_slug]) }}">

                            <div class="course__sm d-flex align-items-center mb-30">
                            <div class="course__sm-thumb mr-20">
                                <img src="{{ asset('blog/' . $blogo->blog_main_image) }}" alt="{{ $blogo->en_title  }}">
                            </div>
                            <div class="course__sm-content">

                                <h5>{{ $blogo->en_title  }} </h5>

                            </div>
                            </div>
                        </a>
                        </li>
                        @endforeach
                        
                     </ng-container> 


                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        
        </section>
        
         <div id="lastartical"></div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            let aboutOffset = $('.aboutImaggg').offset().top;
            let lastartical = $("#lastartical").offset().top;



            $(window).scroll(function () {

                let winScrollTop = $(window).scrollTop();
                if (winScrollTop > aboutOffset-100) {
                    $('#fixedsider').css({                      
                        position: 'fixed',
                    //   left: '0%',
                        left: '',
                        bottom: '4%',
                        width: '19.2rem',
                

                    });

                } else {
                    $('#fixedsider').css({                      
                        position: 'static',
                        width: '100%',
                        
                    });
                    
                }
            // console.log(window)

            })

            $(window).scroll(function() {

                let winScrollTop = $(window).scrollTop();
                if ((winScrollTop+740 > ($("#lastartical").offset().top)-$("#lastartical").height()) ) {
                $('#fixedsider').css({                      
                position: 'absolute',
                //   left: '0%',
                // left: '18.1%',
                bottom: '49px',
                width: '19.2rem',

                })
                }

            })
        </script>       



    @else
    @section('css')
        <link href="{{ asset('frontend/css/intlTelInput-ar.css') }}" rel="stylesheet">



    @endsection
        <!-- page title area start -->
        <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" style="background-image: url('{{asset('frontend/img/about/Header.jpg') }}');">

            <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                <div class="page__title-wrapper mt-110">
                    <h3 class="page__title">
                        {{ $blogData->ar_title }}
                    </h3>
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                        <li  class="breadcrumb-item active" aria-current="page">
                        <a >
                            {{ $blogData->ar_title }}
                        </a>
                        </li>

                    </ol>
                    </nav>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- page title area end -->



        <section class="blog_details pt-90 pb-90 position-relative">
        <div class="container">
            <div class="row">
            <div class="col-lg-9" >
                <h1 class="aboutImagg">{{ $blogData->ar_title }}</h1>
                <div class="blog__meta my-3 d-flex align-items-center">
                <div class="blog__author mr-3 d-flex align-items-center">

                    <div class="blog__author-info" style="margin-left:10px">
                    <i class="fas ml-2 fa-eye"></i>
                    <span class="number"> {{ $blogData->counter_view }} </span>
                    </div>
                </div>

                <div class="blog__date d-flex align-items-center ml-30">
                    <i class="fal ml-2 fa-clock"></i>
                    <span>{{ $blogData->created_at }} </span>
                    </div>
                </div>
                <div class="blog__details--img text-center">
                <img src="{{ asset('blog/' . $blogData->blog_main_image) }}" class="w-100"  alt="{{ $blogData->ar_title }}">
                <span>{{ $blogData->ar_title }}</span>
                </div>

                <div>
                    {!! $blogData->ar_text !!}
                </div>

                <h3>
                    تود الدراسة في مصر؟ إليك الحل المثالي:
                    <br>
                </h3>
                <p>
                    <button >
                    <a href="https://api.whatsapp.com/send?phone=2001000670590&text=" target="_blink">
                        تواصل عبر الواتساب مع مستشاري التعليم الدولي والخبراء الأكاديمين الآن
                    </a>
                    </button>
                </p>    
                
                <form action="{{route('generalForm')}}" method="POST">
                    @csrf
                    <input type="hidden" name="blog_id" value="{{ $blogData->id }}">
                    <p>
                        <button  type="submit"  >
                                <a>
                                أو سجل بياناتك الآن عبر استمارة الالتحاق وسنقوم بالتواصل معك
                            </a>    
                            </button>

                        </p>
                            
                    </form>
                
            </div>
            
            
            <div class="col-lg-3">
                <div class="course__sidebar-widget-2 white-bg" id="fixedsider">
                <div class="course__sidebar-course">
                    <h3 class="course__sidebar-title">مقالات ذات صلة</h3>
                    <ul>
                        @foreach($blogother as $blogo)
                        <li>
                        <a href="{{route('blogDataaa'  , [$blogo->ar_slug]) }}">

                            <div class="course__sm d-flex align-items-center mb-30">
                            <div class="course__sm-thumb ml-20">
                                <img src="{{ asset('blog/' . $blogo->blog_main_image) }}" alt="{{ $blogo->ar_title  }}">
                            </div>
                            <div class="course__sm-content">

                                <h5>{{ $blogo->ar_title  }} </h5>

                            </div>
                            </div>
                        </a>
                        </li>
                        @endforeach
                        


                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div id="lastartical"></div>
        </section>
        
        
        
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            let aboutOffset = $('.aboutImagg').offset().top;
            let lastartical = $("#lastartical").offset().top;



            $(window).scroll(function () {

                let winScrollTop = $(window).scrollTop();
                if (winScrollTop > aboutOffset-100) {
                    $('#fixedsider').css({                      
                        position: 'fixed',
                    //   left: '0%',
                        left: '',
                        bottom: '7%',
                        width: '19.2rem',
                

                    });

                } else {
                    $('#fixedsider').css({                      
                        position: 'static',
                        width: '100%',
                        
                    });
                    
                }
            // console.log(window)

            })

            $(window).scroll(function() {

                let winScrollTop = $(window).scrollTop();
                if ((winScrollTop+640 > ($("#lastartical").offset().top)-$("#lastartical").height()) ) {
                $('#fixedsider').css({                      
                position: 'absolute',
                //   left: '0%',
                // left: '18.1%',
                bottom: '49px',
                width: '19.2rem',

                })
                }

            })
        </script>

    @endif

    @include('frontend.layouts.footer')

@endsection

   

