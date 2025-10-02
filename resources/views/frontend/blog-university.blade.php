@extends('frontend.layouts.app')

@section('title')
    @if (app()->getLocale() == 'en')
        EGEC |  Blogs
    @else
        EGEC |  مقالات
    @endif
@endsection

@section('egec')
    @include('frontend.layouts.loader')

    @include('frontend.layouts.header')

    @if (app()->getLocale() == 'en')




         <!--page title area start -->
        <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" style="background-image: url('{{asset('frontend/img/about/Header.jpg') }}');">

            <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                <div class="page__title-wrapper mt-110">
                    <h3 class="page__title">
                        Blogs
                    </h3>
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('destination', [$otherCountry->en_slug]) }}">{{ $otherCountry->en_name }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('university', [$otherCountry->en_slug , $otherUniversity->en_slug]) }}">{{ $otherUniversity->en_name }}</a></li>
                        <li  class="breadcrumb-item active" aria-current="page">
                        <a >
                            Blogs
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
         
         
         <!-- blog area start -->
    <section class="blog__area pt-50 pb-130 mb--120"
        style="background-image: url(' {{ asset('frontend/img/main_images/blogs_cover.webp') }}');">
        <div class="container">
            <div class="row mb-30">
                
                <div class="col-xl-12 col-lg-12 mb-4 wow  animate__animated animate__fadeInRight ">
                    <div class="row">
                        @foreach($desBlogs as $blogDataV)
                        <div class="col-md-3 blog__data" style="margin-top:10px;">
                            <div class="blog__item white-bg transition-3 fix" style="height:400px !important">
                                <div class="blog__thumb w-img fix">
                                    <a>
                                        <img loading="lazy"src="{{ asset('blog/' . $blogDataV->blog_main_image) }}" class="w-100" alt=" {{ $blogDataV->en_title }}" height="230">
                                    </a>
                                </div>
                                <div class="blog__content">

                                    <h3 class="blog__title"><a href="{{route('blogDataaa'  , [$blogDataV->en_slug]) }}"
                                            title="{{ $blogDataV->en_title }} ">
                                         {{ $blogDataV->en_title }}   
                                        </a>
                                    </h3>

                                    <div class="blog__meta">
                                        <div class="blog__author mr-3 d-flex align-items-center">

                                            <div class="blog__author-info">
                                                <i class="fas fa-eye"
                                                    [ngClass]="currentLanguage === 'ar' ? 'ml-2' : 'mr-2' "></i>
                                                <span class="number"> {{ $blogDataV->counter_view }} </span>
                                            </div>
                                        </div>
                                        <div class="blog__date d-flex align-items-center">
                                            <i class="fal ml-2 fa-clock"></i>
                                            <span>{{ $blogDataV->created_at }}</span>

                                        </div>
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
    <!-- blog area end -->






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
                        مقالات
                    </h3>
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('destination', [$otherCountry->ar_slug]) }}">{{ $otherCountry->ar_name }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('university', [$otherCountry->ar_slug , $otherUniversity->ar_slug]) }}">{{ $otherUniversity->ar_name }}</a></li>
                        <li  class="breadcrumb-item active" aria-current="page">
                        <a >
                            مقالات
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
        
        <!-- blog area start -->
            <section class="blog__area pt-50 pb-130 mb--120"
                style="background-image: url(' {{ asset('frontend/img/main_images/blogs_cover.webp') }}');">
                <div class="container">
                    
            <div class="row mb-30">
               
                <div class="col-xl-12 col-lg-12 mb-4 wow  animate__animated animate__fadeInRight ">
                    <div class="row">
                        @foreach($desBlogs as $blogDataV)
                        <div class="col-md-3 blog__data" style="margin-top:10px;">
                            <div class="blog__item white-bg transition-3 fix" style="height:380px !important">
                                <div class="blog__thumb w-img fix">
                                    <a>
                                        <img loading="lazy"src="{{ asset('blog/' . $blogDataV->blog_main_image) }}" class="w-100" alt=" {{ $blogDataV->ar_title }}" height="230">
                                    </a>
                                </div>
                                <div class="blog__content">

                                    <h3 class="blog__title"><a href="{{route('blogDataaa'  , [$blogDataV->ar_slug]) }}"
                                            title="{{ $blogDataV->ar_title }} ">
                                         {{ $blogDataV->ar_title }}   
                                        </a>
                                    </h3>

                                    <div class="blog__meta">
                                        <div class="blog__author mr-3 d-flex align-items-center">

                                            <div class="blog__author-info">
                                                <i class="fas fa-eye"
                                                    [ngClass]="currentLanguage === 'ar' ? 'ml-2' : 'mr-2' "></i>
                                                <span class="number"> {{ $blogDataV->counter_view }} </span>
                                            </div>
                                        </div>
                                        <div class="blog__date d-flex align-items-center">
                                            <i class="fal ml-2 fa-clock"></i>
                                            <span>{{ $blogDataV->created_at }}   </span>

                                        </div>
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



        

    @endif

    @include('frontend.layouts.footer')

@endsection

   

