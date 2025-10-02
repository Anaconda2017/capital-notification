@extends('frontend.layouts.app')

@section('title')
    @if (app()->getLocale() == 'en')
        EGEC | About Us
    @else
        EGEC | من نحن
    @endif
@endsection

@section('egec')
    @include('frontend.layouts.loader')

    @include('frontend.layouts.header')

    @if (app()->getLocale() == 'en')
    <!-- page title area start -->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" style="background-image: url('assets/img/about/Header.jpg');">

        <div class="container">
        <div class="row">
            <div class="col-xxl-12">
            <div class="page__title-wrapper mt-110">
                <h3 class="page__title">
                    About us
                </h3>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li  class="breadcrumb-item active" aria-current="page">
                    <a >
                        About us
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

    <!-- about area start -->
    <section class="about__area pt-120 pb-150">
        <div class="container">
        <div class="row justify-content-around">
            <div class=" col-xl-4 col-lg-6">
                <div class="about__thumb-wrapper">


                    <div class="about__thumb">
                    <img src="{{ assets('frontend/img/about/about.jpg') }}" class="w-100" alt="">
                    </div>
                    <div class="about__banner mt--210">
                    <img src="{{ assets('frontend/img/about/about-banner.jpg') }}" class="w-100" alt="">
                    </div>

                </div>
            </div>
            <div class=" col-xl-8 col-lg-6">
                <div class="about__content pl-70 pr-60 pt-25">
                    <div class="section__title-wrapper mb-25">
                    <h2 class="section__title">Our story </h2>
                    <p >
                        {{ $about->en_story }}
                    </p>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- banner area start -->
    <section class="about__page banner__area pb-110">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="banner__item p-relative mb-40" style="background-image: url('{{ asset('frontend/img/banner/banner-bg-1.jpg') }}')">
                <div class="row no-gutters align-items-center">
                <div class="col-md-7">
                    <div class="banner__content">
                    <span class="orange">Mission</span>
                    <h3 class="banner__title">
                        <a >
                            تأهيل الأفراد لإكسابهم المهارات والمعارف لبناء جيل مبدع قادر على بناء مستقبل أفضل.
                        </a>
                        </h3>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="about__page--banner banner__thumb">
                    <img src="{{ asset('frontend/img/banner/banner-img-1.png') }}" class="w-100"  alt="">
                    </div>

                </div>
                </div>
            </div>

            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
            <div class="banner__item p-relative mb-40" style="background-image: url('{{ asset('frontend/img/banner/banner-bg-2.jpg') }}')">

                <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="banner__content">
                    <span class="orange">Vision</span>
                    <h3 class="banner__title">
                        <a >
                            بناء كيان متميز لتقديم أفضل أشكال المعرفة العلمية ورفع المستوى العلمي والمعرفي.
                        </a>
                    </h3>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="about__page--banner banner__thumb banner__thumb-2 ">
                    <img src="{{ asset('frontend/img/banner/banner-img-2.png') }}"  class="w-100" alt="">
                </div>
                </div>
                </div>

            </div>
            </div>
        </div>
    </div>
    </section>
    <!-- banner area end -->

    <!-- brand area start -->
    <section class="brand__area pb-110">
    <div class="container">
        <div class="row justify-content-center ">
        <div class="col-xl-6 ">
            <div class="section__title-wrapper text-center mb-60">
            <h2 class="section__title">Our partners</h2>
            <p class="">Check our success partners</p>

            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-xxl-12">
            <div class="brand__slider swiper-container">
                <div class="swiper-wrapper">


                    <div class="swiper-slide">
                        <div class="brand__item text-center">
                        <img src="https://digitalbondmena.com/egec_new_new/clients/1619516746BxeovCOs9b.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item text-center">
                        <img src="https://digitalbondmena.com/egec_new_new/clients/1619516540pXinQ37qwg.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item text-center">
                        <img src="https://digitalbondmena.com/egec_new_new/clients/16195204721ccBWqcEWD.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item text-center">
                        <img src="https://digitalbondmena.com/egec_new_new/clients/1619520487SG4WWgrb4T.png" alt="">
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </div>

    </div>
    </section>
    <!-- brand area end -->
    @else

    @endif

    @include('frontend.layouts.footer')
@endsection
