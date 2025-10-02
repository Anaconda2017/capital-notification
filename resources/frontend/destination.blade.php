@extends('frontend.layouts.app')

@section('title')
	@if(app()->getLocale() == 'en')
        EGEC | {{ $country->en_name }}
    @else
        EGEC | {{ $country->ar_name }}
	@endif
@endsection

@section('egec')
    @include('frontend.layouts.loader')

    @include('frontend.layouts.header')

        <!-- Main content Start -->
        @if(app()->getLocale() == 'en')
            <div class="main-content">
                <div class="inner-hdr" style="background-image:url({{ '../egec_new/destinations/'. $country->banner_image }} )">
                    <!--small-banner-->
                    <div class="small-banner">
                        <div class="container">
                            <!--title-->
                            <div class="title">
                                <h3>{{ $country->en_name }}</h3>
                            </div>
                            <!--End title-->

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a style="color: #8cc63f" href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a style="color: #8cc63f" href="">{{ $country->en_name }}</a></li>
                                        {{-- <li class="breadcrumb-item active" aria-current="page"> Faculty </li> --}}
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--End small-banner-->
                </div>

                <div class="search-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mb-5 text-center">
                                <img src="{{ asset('frontend/images/largeAdv.jpg') }}" class="large-adv" alt="">

                            </div>
                            <div class="col-lg-3 wow fadeInUp"data-wow-delay="100ms" data-wow-duration="2000ms">
                                    <div class="btn-part">

                                    <a class="nav-expander apply-btn btn btn-primary text-white " style="font-size: 16px !important;" id="nav-expander">Admission Request</a>

                                    </div>
                                <div class="search-sidebar" style="margin-top: 35px;">
                                <h5 >Search In Universities</h5>
                                <form id="uni-search-form"  action="{{ route('search') }}" method="POST">
                                    @csrf
                                    <div class="mb-20">
                                        <label for="country-list">Country:</label>
                                        <select name="destination_id" class="form-control" id="destination_id" required>
                                            <option value="">Select a Country</option>
                                            @foreach($destinations as $destination)
                                                <option value="{{ $destination->id }}">{{ $destination->en_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="country-list">University:</label>
                                        <select name="university_id" class="form-control" id="university_id">
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="country-list">College:</label>
                                        <select name="fac_uni_id" class="form-control" id="fac_uni_id">
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="country-list">Major:</label>
                                        <select name="major_id" class="form-control" id="major_id">
                                        </select>
                                    </div>
                                    <div class="form-group mb-3 text-center">
                                        <input class="btn-send" type="submit" value="Search">
                                    </div>
                                </form>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center my-3">
                                        <a href="#">
                                            <img src="{{ asset('frontend/images/meduim_banner_336.jpg') }}" class="meduim-adv " alt="">

                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 result-section wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="row">
                                    @foreach($country->universities as $university)
                                        <div class="col-md-6 mb-30">
                                            <a class="university-item" href="{{ route('university', [$country->en_slug, $university->en_slug]) }}">
                                                <div class="uni-img">
                                                    <img class="lazy_load" data-src="{{ asset('egec_new/universities/' . $university->logo) }}" alt="">
                                                </div>
                                                <div class="content-part">
                                                    <h4 class="title">{{ $university->en_name }}</h4>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

                                               @foreach($destinations as $destination)

                                                    @if($country->id == $destination->id)

                                                    <option value="" >Select Distination</option>
                                                    <option value="{{ $destination->id }}" >{{ $destination->en_name }}</option>

                                                    @endif

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



            <div class="main-content">
                <div class="inner-hdr" style="background-image:url({{ '../egec_new/destinations/'. $country->banner_image }} )">
                    <!--small-banner-->
                    <div class="small-banner">
                        <div class="container">
                            <!--title-->
                            <div class="title">
                                <h3>{{ $country->ar_name }}</h3>
                            </div>
                            <!--End title-->

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a style="color: #8cc63f" href="{{ route('home') }}">الرئيسية</a></li>
                                    <li class="breadcrumb-item"><a style="color: #8cc63f" href="">{{ $country->ar_name }}</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--End small-banner-->
                </div>

                <div class="search-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mb-5 text-center">
                                <img src="{{ asset('frontend/images/largeAdv.jpg') }}" class="large-adv" alt="">

                            </div>
                            @include('frontend.layouts.search')
                            <div class="col-lg-9 result-section wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="row">
                                    @foreach($country->universities as $university)
                                        <div class="col-md-6  mb-30">
                                            <a class="university-item" href="{{ route('university', [$country->ar_slug, $university->ar_slug]) }}">
                                                <div class="uni-img">
                                                    <img class="lazy_load" data-src="{{ asset('egec_new/universities/' . $university->logo) }}" alt="">
                                                </div>
                                                <div class="content-part">
                                                    <h4 class="title">{{ $university->ar_name }}</h4>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

                                               @foreach($destinations as $destination)
                                                    @if($country->id == $destination->id)
                                                    <option value="">اختر الدوله</option>
                                                    <option value="{{ $destination->id }}">{{ $destination->ar_name }}</option>
                                                    @endif

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
        <!-- Main content End -->

    @include('frontend.layouts.footer')
@endsection

@section('scripts')

    <script>

        $('#destination_id').change(function() {
          var destination_id = $('#destination_id').val();
          $.ajax({
            url: "{{ url('/filterUniversities') }}",
            method: 'GET',
            data: {destination_id:destination_id},
            success:function(data) {
              $('#university_id option').remove();
              $('#fac_uni_id option').remove();
              $('#major_id option').remove();
              $('#university_id').append("<option value=''>Select a University</option>");
                data.forEach(d => {
                  for($i = 0; $i < d['id'].length; $i++) {
                    $("#university_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
                  }
                });
            }
          })
        });

        $('#university_id').change(function() {
          var university_id = $('#university_id').val();
          $.ajax({
            url: "{{ url('/filterColleges') }}",
            method: 'GET',
            data: {university_id:university_id},
            success:function(data) {
              $('#fac_uni_id option').remove();
              $('#major_id option').remove();
              $('#fac_uni_id').append("<option value=''>Select a College</option>");
                data.forEach(d => {
                  for($i = 0; $i < d['id'].length; $i++) {
                    $("#fac_uni_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] + " (" + d['university_name'] +")</option>");
                  }
                });
            }
          })
        });

        $('#fac_uni_id').change(function() {
          var fac_uni_id = $('#fac_uni_id').val();
          $.ajax({
            url: "{{ url('/filterMajors') }}",
            method: 'GET',
            data: {fac_uni_id:fac_uni_id},
            success:function(data) {
              $('#major_id option').remove();
              $('#major_id').append("<option value=''>Select a Major</option>");
                data.forEach(d => {
                  for($i = 0; $i < d['id'].length; $i++) {
                    $("#major_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +" (" + d['faculty_name'] +" - "+ d['university_name'] +")</option>");
                  }
                });
            }
          })
        });
    </script>
@endsection
