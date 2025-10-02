@extends('frontend.layouts.app')

@section('title')
	@if(app()->getLocale() == 'en')
        EGEC | Search | {{ $country->en_name }}
    @else
        EGEC | بحث | {{ $country->ar_name }}
	@endif
@endsection

@section('egec')
    @include('frontend.layouts.loader')

    @include('frontend.layouts.header')

        <!-- Main content Start -->
        @if(app()->getLocale() == 'en')


    <!-- page title area start -->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" style="background-image: url('{{ asset('frontend/img/about/Header.jpg') }}');">

        <div class="container">
        <div class="row">
            <div class="col-xxl-12">
            <div class="page__title-wrapper mt-110">
                <h3 class="page__title">
                    {{ $country->en_name }}
                </h3>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li  class="breadcrumb-item active" aria-current="page">
                    <a >
                        {{ $country->en_name }}
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

    <!-- course area start -->
    <section class="course__area pt-120 pb-120">
        <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-xl-9 col-lg-9">

            <div class="row">
                <!-- <ng-container *ngIf="(destinations  | searchDestination: term) as destinations"> -->
                    @foreach($country->universities as $university)
                <div class="col-lg-6 university-item wow animate__animated animate__slideInUp" >
                    <div class="course__item white-bg mb-30 fix">
                    <div class="row gx-0 align-items-center">
                        <div class=" col-3">
                        <div class="course__thumb course__thumb-list w-img p-relative fix text-center">
                            <a >
                            <img src="{{ asset('universities/' . $university->logo) }}" alt="">
                            </a>
                            <!-- <div class="course__tag">
                            <a href="#">Art & Design</a>
                            </div> -->
                        </div>
                        </div>
                        <div class=" col-9">
                        <div class="course__right">
                            <div class="course__content course__content-4">

                            <h3 class="course__title" title="{{ $university->en_name }}">
                                <a>
                                    {{ $university->en_name }}
                                </a>
                            </h3>

                            </div>
                            <div
                            class="course__more d-flex justify-content-between align-items-center">

                            <div class="course__btn">
                                <a href="{{ route('university', [$country->en_slug, $university->en_slug]) }}"  class="link-btn">
                                    Explore university
                                <i class="far fa-arrow-right" ></i>
                                <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach

            </div>

            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3">
            <div class="course__sidebar">
                <div class="course__sidebar-search mb-50">
                <input type="text" class="search_text" placeholder="Search for university...">
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- course area end -->
        @else

    <!-- page title area start -->
    <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" style="background-image: url('{{ asset('frontend/img/about/Header.jpg') }}');">

        <div class="container">
        <div class="row">
            <div class="col-xxl-12">
            <div class="page__title-wrapper mt-110">
                <h3 class="page__title">
                    {{ $country->ar_name }}
                </h3>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                    <li  class="breadcrumb-item active" aria-current="page">
                    <a >
                        {{ $country->ar_name }}
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

    <!-- course area start -->
    <section class="course__area pt-120 pb-120">
        <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-xl-9 col-lg-9">

            <div class="row">
                <!-- <ng-container *ngIf="(destinations  | searchDestination: term) as destinations"> -->
                    @foreach($country->universities as $university)
                <div class="col-lg-6 university-item wow animate__animated animate__slideInUp" >
                    <div class="course__item white-bg mb-30 fix">
                    <div class="row gx-0 align-items-center">
                        <div class=" col-3">
                        <div class="course__thumb course__thumb-list w-img p-relative fix text-center">
                            <a >
                            <img src="{{ asset('universities/' . $university->logo) }}" alt="">
                            </a>
                            <!-- <div class="course__tag">
                            <a href="#">Art & Design</a>
                            </div> -->
                        </div>
                        </div>
                        <div class=" col-9">
                        <div class="course__right">
                            <div class="course__content course__content-4">

                            <h3 class="course__title" title="{{ $university->ar_name }}">
                                <a>
                                    {{ $university->ar_name }}
                                </a>
                            </h3>

                            </div>
                            <div
                            class="course__more d-flex justify-content-between align-items-center">

                            <div class="course__btn">
                                <a href="{{ route('university', [$country->ar_slug, $university->ar_slug]) }}"  class="link-btn">
                                    تصفح الجامعة
                                <i class="far fa-arrow-left" ></i>
                                <i class="far fa-arrow-left"></i>
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>

            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3">
            <div class="course__sidebar">
                <div class="course__sidebar-search mb-50">
                <input type="text" class="search_text" placeholder="أبحث في الجامعات...">
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- course area end -->
        @endif
        <!-- Main content End -->

    @include('frontend.layouts.footer')
@endsection
@section('scripts')
<script>
    jQuery(document).ready(function($){

$('.university-item').each(function(){
    $(this).attr('data-search-term', $(this).text().toLowerCase());
});

$('.search_text').on('keyup', function(){

var searchTerm = $(this).val().toLowerCase();

    $('.university-item').each(function(){

        if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
            $(this).show();
            $('.university-no-item').hide()
        } else {

            $(this).hide();
            $('.university-no-item').show()

        }

    });

});

});
</script>
@endsection
