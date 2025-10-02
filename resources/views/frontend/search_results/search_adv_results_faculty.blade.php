@extends('frontend.layouts.app')

@section('title')
	@if(app()->getLocale() == 'en')
        EGEC | Search | {{ $universityFaculty->faculty->en_name }}
    @else
        EGEC | بحث | {{ $universityFaculty->faculty->ar_name }}
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
                    {{ $universityFaculty->faculty->en_name }}

                </h3>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li  class="breadcrumb-item active" aria-current="page">
                    <a >
                        {{ $universityFaculty->faculty->en_name }}

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
                    @foreach($universityFaculty->majors as $major)
                <div class="col-lg-6 university-item wow animate__animated animate__slideInUp" >
                    <div class="course__item white-bg mb-30 fix">
                    <div class="row gx-0 align-items-center">
                        <div class=" col-3">
                        <div class="course__thumb course__thumb-list w-img p-relative fix text-center">
                            <a >
                            <img src="{{ asset('faculties/' . $universityFaculty->logo) }}" alt="">
                            </a>
                            <!-- <div class="course__tag">
                            <a href="#">Art & Design</a>
                            </div> -->
                        </div>
                        </div>
                        <div class=" col-9">
                        <div class="course__right">
                            <div class="course__content course__content-4">

                            <h3 class="course__title" title="{{ $major->en_name }}">
                                <a>
                                    {{ $major->en_name }}
                                </a>
                            </h3>

                            </div>
                            <div
                            class="course__more d-flex justify-content-between align-items-center">

                            <div class="course__btn">
                                <a href="{{ route('faculty', [$universityFaculty->university->destination->en_slug, $universityFaculty->university->en_slug, $universityFaculty->faculty->en_slug]) }}"  class="link-btn">
                                    Explore major
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

                {{-- <div class="col-lg-6 university-no-item wow animate__animated animate__slideInUp" sty>
                    <p>No Majors found</p>
                </div> --}}
            </div>

            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3">
            <div class="course__sidebar">
                <div class="course__sidebar-search mb-50">
                <input type="text" placeholder="Search for majors...">
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
                                {{ $universityFaculty->faculty->ar_name }}
            
                            </h3>
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                                <li  class="breadcrumb-item active" aria-current="page">
                                <a >
                                    {{ $universityFaculty->faculty->ar_name }}
            
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
                                @foreach($universityFaculty->majors as $major)
                            <div class="col-lg-6 university-item wow animate__animated animate__slideInUp" >
                                <div class="course__item white-bg mb-30 fix">
                                <div class="row gx-0 align-items-center">
                                    <div class=" col-3">
                                    <div class="course__thumb course__thumb-list w-img p-relative fix text-center">
                                        <a >
                                        <img src="{{ asset('faculties/' . $universityFaculty->logo) }}" alt="">
                                        </a>
                                    </div>
                                    </div>
                                    <div class=" col-9">
                                    <div class="course__right">
                                        <div class="course__content course__content-4">
            
                                        <h3 class="course__title" title="{{ $major->ar_name }}">
                                            <a>
                                                {{ $major->ar_name }}
                                            </a>
                                        </h3>
            
                                        </div>
                                        <div
                                        class="course__more d-flex justify-content-between align-items-center">
            
                                        <div class="course__btn">
                                            <a href="{{ route('faculty', [$universityFaculty->university->destination->ar_slug, $universityFaculty->university->ar_slug, $universityFaculty->faculty->ar_slug]) }}"  class="link-btn">
                                                اكتشف التخصص
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
            
                            {{-- <div class="col-lg-6 university-no-item wow animate__animated animate__slideInUp" sty>
                                <p>No Majors found</p>
                            </div> --}}
                        </div>
            
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3">
                        <div class="course__sidebar">
                            <div class="course__sidebar-search mb-50">
                            <input type="text" class="search_text" placeholder="البحث فالتخصصات ...">
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
        } else {

            $(this).hide();

        }

    });

});

});
</script>
@endsection
