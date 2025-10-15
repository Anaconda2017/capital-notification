@if(app()->getLocale() == 'en')
<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from webhunt.store/themeforest/edukat/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 15:53:03 GMT -->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Learna - Education and LMS Template">

        <!-- ========== Page Title ========== -->
        <title>EDUGATE</title>

        <!-- ========== Favicon Icon ========== -->


        <!-- ========== Start Stylesheet ========== -->
        <link href="{{ asset('frontend/edugateform/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/themify-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/flaticon-set.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/elegant-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/magnific-popup.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/owl.carousel.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/edugateform/css/animate.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/bootsnav.css')}}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/responsive.css')}}" rel="stylesheet" />

        <link href="{{ asset('frontend/css/intlTelInput.css') }}" rel="stylesheet" />

         <link href="{{ asset('frontend/edugateform/css/responsive_en.css') }}" rel="stylesheet">

        <link href="{{ asset('frontend/edugateform/css/bootsnav_en.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/edugateform/css/style.css') }}" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">






        <!-- ========== End Stylesheet ========== -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="assets/js/html5/html5shiv.min.js"></script>
          <script src="assets/js/html5/respond.min.js"></script>
        <![endif]-->

        <!-- ========== Google Fonts ========== -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap" rel="stylesheet">
        <style>

            .image-beautiful{
                object-fit: cover;
                object-position: center;
            }
            .h-200px{
                height: 200px;
            }
            .w-800{
                width: 800px;
            }
            .h-500{
                height: 500px;
            }
            /* .max-height-500px{
                max-height: 500px;
            }
            .overflow-auto{
                overflow: auto;
            } */
            .card{
                border-radius: 10px;
            }
            .card-image{
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
            }
            .card-shadow{
                box-shadow:     0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                                0 12.5px 10px rgba(0, 0, 0, 0.06),
                                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                                0 100px 80px rgba(0, 0, 0, 0.12);
            }
            @media screen and (max-width:500px){
                .responsive-image{
                    display: none;
                }
            }
            .text-main{
                color: #111d30 !important ;
            }
            .bg-bluemain{
                background-color: #111d30  ;
            }
            .bg-bluemain-light{
                background-color: #111D2F;
            }
            .card-shadow{
                -webkit-box-shadow: -30px 30px 0px 0 rgba(0,0,0, 0.08);
                box-shadow: -30px 30px 0px 0 rgba(0,0,0, 0.08);
            }
            .box {
                padding: 40px;
                background: #111d30  ;
            }
            .styled-form .form-group label{
                color:#fff !important;
            }
            label {
                color:#fff !important;
            }


            .register-box .form-control-validation {
                margin-bottom: 10px;
                padding-bottom: 20px;
                position: relative;
            }


            .register-box .form-control-validation.success input {
                border-color: #2ecc71;
                width:100%;
            }

            .register-box .form-control-validation.error input {
                border-color: #e74c3c;
                width:100%;
            }
            .register-box .form-control-validation.success select {
                border-color: #2ecc71;
                width:100%;
            }

            .register-box .form-control-validation.error select {
                border-color: #e74c3c;
                width:100%;
            }
            .register-box .form-control-validation i {
                display: none;
                position: absolute;
                top: 54%;
                transform: translate(-50%,-50%);
                right: 40px;
            }
            .register-box .form-control-validation input{
                width: 100%;
            }
            .register-box .form-control-validation select{
                width: 100%;
            }
            .register-box .form-control-validation.success i.fa-check-circle {
                color: #2ecc71;
                display: block;
            }

            .register-box .form-control-validation.error i.fa-exclamation-circle {
                color: #e74c3c;
                display: block;
            }

            .register-box .form-control-validation small {
                color: #e74c3c;
                position: absolute;
                bottom: -5px;
                left: 15px;
                display: none;
            }

            .register-box .form-control-validation.error small {
                display: block;
            }
            @media screen and (min-width:800px){
                .box{

                    max-height: 525px;
                    overflow: auto;
                }
                .card-description{
                    padding: 1rem;
                }
            }
            @media screen and (max-width:800px){
                .card-description{
                    padding: 3rem 1rem;
                }
            }
            .intl-tel-input {
            position: relative;
            display: inline-block;
            }

            .intl-tel-input * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            }

            .intl-tel-input .hide {
            display: none;
            }

            .intl-tel-input .v-hide {
            visibility: hidden;
            }

            .intl-tel-input input,
            .intl-tel-input input[type=text],
            .intl-tel-input input[type=tel] {
            position: relative;
            z-index: 0;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            padding-right: 36px;
            margin-right: 0;
            }

            .intl-tel-input .flag-container {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            padding: 1px;
            }

            .intl-tel-input .selected-flag {
            z-index: 1;
            position: relative;
            width: 36px;
            height: 100%;
            padding: 0 0 0 8px;
            }

            .intl-tel-input .selected-flag .iti-flag {
            position: absolute;
            top: 0;
            bottom: 0;
            left:10px;
            margin: auto;
            }

            .intl-tel-input .selected-flag .iti-arrow {
            position: absolute;
            top: 50%;
            margin-top: -2px;
            right: 40px;
            width: 0;
            height: 0;
            border-left: 3px solid transparent;
            border-right: 3px solid transparent;
            border-top: 4px solid #555;
            }

            .intl-tel-input .selected-flag .iti-arrow.up {
            border-top: none;
            border-bottom: 4px solid #555;
            }

            .intl-tel-input .country-list {
            position: absolute;
            z-index: 2;
            list-style: none;
            text-align: left;
            right: -200px;
            padding: 0;
            margin: 0 0 0 -1px;
            box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
            background-color: white;
            border: 1px solid #CCC;
            white-space: nowrap;
            max-height: 200px;
            overflow-y: scroll;
            }

            .intl-tel-input .country-list.dropup {
            bottom: 100%;
            margin-bottom: -1px;
            }

            .intl-tel-input .country-list .flag-box {
            display: inline-block;
            width: 20px;
            }

            @media (max-width: 500px) {
            .intl-tel-input .country-list {
            white-space: normal;
            }
            }

            .intl-tel-input .country-list .divider {
            padding-bottom: 5px;
            margin-bottom: 5px;
            border-bottom: 1px solid #CCC;
            }

            .intl-tel-input .country-list .country {
            padding: 5px 10px;
            text-align: right;
            }

            .intl-tel-input .country-list .country .dial-code {
            color: #999;
            }

            .intl-tel-input .country-list .country.highlight {
            background-color: rgba(0, 0, 0, 0.05);
            }

            .intl-tel-input .country-list .flag-box,
            .intl-tel-input .country-list .country-name,
            .intl-tel-input .country-list .dial-code {
            vertical-align: middle;
            }

            .intl-tel-input .country-list .flag-box,
            .intl-tel-input .country-list .country-name {
            margin-right: 6px;
            }

            .intl-tel-input.allow-dropdown input,
            .intl-tel-input.allow-dropdown input[type=text],
            .intl-tel-input.allow-dropdown input[type=tel],
            .intl-tel-input.separate-dial-code input,
            .intl-tel-input.separate-dial-code input[type=text],
            .intl-tel-input.separate-dial-code input[type=tel] {
            padding-right: 6px;
            padding-left: 52px;
            margin-left: 0;
            }

            .intl-tel-input.allow-dropdown .flag-container,
            .intl-tel-input.separate-dial-code .flag-container {
            right: auto;
            left: 0;
            }

            .intl-tel-input.allow-dropdown .selected-flag,
            .intl-tel-input.separate-dial-code .selected-flag {
            width: 46px;
            }

            .intl-tel-input.allow-dropdown .flag-container:hover {
            cursor: pointer;
            }

            .intl-tel-input.allow-dropdown .flag-container:hover .selected-flag {
            background-color: rgba(0, 0, 0, 0.05);
            }

            .intl-tel-input.allow-dropdown input[disabled] + .flag-container:hover,
            .intl-tel-input.allow-dropdown input[readonly] + .flag-container:hover {
            cursor: default;
            }

            .intl-tel-input.allow-dropdown input[disabled] + .flag-container:hover .selected-flag,
            .intl-tel-input.allow-dropdown input[readonly] + .flag-container:hover .selected-flag {
            background-color: transparent;
            }

            .intl-tel-input.separate-dial-code .selected-flag {
            background-color: rgba(0, 0, 0, 0.05);
            display: table;
            }

            .intl-tel-input.separate-dial-code .selected-dial-code {
            display: table-cell;
            vertical-align: middle;
            padding-left: 28px;
            }

            .intl-tel-input.separate-dial-code.iti-sdc-2 input,
            .intl-tel-input.separate-dial-code.iti-sdc-2 input[type=text],
            .intl-tel-input.separate-dial-code.iti-sdc-2 input[type=tel] {
            padding-left: 66px;
            }

            .intl-tel-input.separate-dial-code.iti-sdc-2 .selected-flag {
            width: 60px;
            }

            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input,
            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input[type=text],
            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input[type=tel] {
            padding-left: 76px;
            }

            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 .selected-flag {
            width: 70px;
            }

            .intl-tel-input.separate-dial-code.iti-sdc-3 input,
            .intl-tel-input.separate-dial-code.iti-sdc-3 input[type=text],
            .intl-tel-input.separate-dial-code.iti-sdc-3 input[type=tel] {
            padding-left: 74px;
            }

            .intl-tel-input.separate-dial-code.iti-sdc-3 .selected-flag {
            width: 68px;
            }

            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input,
            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=text],
            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=tel] {
            padding-left: 84px;
            }

            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 .selected-flag {
            width: 78px;
            }

            .intl-tel-input.separate-dial-code.iti-sdc-4 input,
            .intl-tel-input.separate-dial-code.iti-sdc-4 input[type=text],
            .intl-tel-input.separate-dial-code.iti-sdc-4 input[type=tel] {
            padding-left: 82px;
            }

            .intl-tel-input.separate-dial-code.iti-sdc-4 .selected-flag {
            width: 76px;
            }

            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 input,
            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 input[type=text],
            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 input[type=tel] {
            padding-left: 92px;
            }

            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 .selected-flag {
            width: 86px;
            }

            .intl-tel-input.separate-dial-code.iti-sdc-5 input,
            .intl-tel-input.separate-dial-code.iti-sdc-5 input[type=text],
            .intl-tel-input.separate-dial-code.iti-sdc-5 input[type=tel] {
            padding-left: 90px;
            }

            .intl-tel-input.separate-dial-code.iti-sdc-5 .selected-flag {
            width: 84px;
            }

            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-5 input,
            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-5 input[type=text],
            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-5 input[type=tel] {
            padding-left: 100px;
            }

            .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-5 .selected-flag {
            width: 94px;
            }

            .intl-tel-input.iti-container {
            position: absolute;
            top: -1000px;
            left: -1000px;
            z-index: 1060;
            padding: 1px;
            }

            .intl-tel-input.iti-container:hover {
            cursor: pointer;
            }

            .iti-mobile .intl-tel-input.iti-container {
            top: 30px;
            bottom: 30px;
            left: 30px;
            right: 30px;
            position: fixed;
            }

            .iti-mobile .intl-tel-input .country-list {
            max-height: 100%;
            width: 100%;
            }

            .iti-mobile .intl-tel-input .country-list .country {
            padding: 10px 10px;
            line-height: 1.5em;
            }

            .iti-flag {
            width: 20px;
            }

            .iti-flag {
            width: 20px;
            height: 15px;
            box-shadow: 0px 0px 1px 0px #888;
            background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/img/flags.png");
            background-repeat: no-repeat;
            background-color: transparent;
            background-position: 20px 0;
            }

            @media only screen and (-webkit-min-device-pixel-ratio: 2),
            only screen and (min--moz-device-pixel-ratio: 2),
            only screen and (-o-min-device-pixel-ratio: 2 / 1),
            only screen and (min-device-pixel-ratio: 2),
            only screen and (min-resolution: 192dpi),
            only screen and (min-resolution: 2dppx) {
            .iti-flag {
            background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/img/flags@2x.png");
            }
            }

            .iti-flag.np {
            background-color: transparent;
            }



            .hide {
            display: none;
            }

            pre {
            margin: 0 !important;
            display: inline-block;
            }

            .token.operator,
            .token.entity,
            .token.url,
            .language-css .token.string,
            .style .token.string,
            .token.variable {
            background: none;
            }

            input,
            button,
            select {
            height: 35px;
            margin: 0;
            padding: 6px 12px;
            border-radius: 2px;
            font-family: inherit;
            font-size: 100%;
            color: inherit;
            }
            select{
                height: 50px;
            }
            input[disabled],
            button[disabled] {
            background-color: #eee;
            }

            input,
            select {
            border: 1px solid #CCC;
            width: 250px;
            }

            ::-webkit-input-placeholder {
            color: #BBB;
            }

            ::-moz-placeholder {
            /* Firefox 19+ */
            color: #BBB;
            opacity: 1;
            }

            :-ms-input-placeholder {
            color: #BBB;
            }

            button {
            color: #FFF;
            background-color: #428BCA;
            border: 1px solid #357EBD;
            }

            button:hover {
            background-color: #3276B1;
            border-color: #285E8E;
            cursor: pointer;
            }

            #result {
            margin-bottom: 100px;
            }
        </style>
    </head>

    <body>

        <!-- Preloader Start -->

        <!-- Preloader Ends -->


        <!-- start top area -->
        <div class="top-bar-area bg-dark text-light inline">
            <div class="container-full">
                <div class="row align-center">

                    <div class="col-lg-7 col-md-12 left-info">
                        <div class="item-flex">
                            <ul class="list">
                               

                                <li>
                                    <i class="fas fa-envelope"></i> <a href="mailto:info@edugate-eg.com">info@edugate-eg.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12 right-info">
                        <div class="item-flex">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https:/www.twitter.com"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https:/www.instagram.com"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="button">
                                <a href="http://digitalbondmena.com/egec_new_new/en/edugate-google-form-uae" class="btn text-white px-3 py-2">Addmission Form</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- start top area -->
        <!-- Header
        ============================================= -->



        <header id="home">

            <!-- Start Navigation -->
            <nav class="navbar navbar-default attr-border navbar-fixed white bootsnav on no-full no-background">



                <div class="container">

                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav ">
                        <ul>
                            <li class="Language"><a href="http://digitalbondmena.com/egec_new_new/ar/edugate-google-form-uae">عربي</a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="https://edugateuae.com/en">
                             <img src="{{asset('frontend/edugateform/img/edugate logo final.png')}}" class="logo logo-display" alt="Logo">
                            <img src="{{asset('frontend/edugateform/img/edugate logo final.png')}}" class="logo logo-scrolled" alt="Logo">
                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">


                           <li>
                                <a href="https://edugateuae.com/en">Home</a>
                            </li>
                            <li>
                                <a href="https://edugateuae.com/en/about-us">About us</a>
                            </li>
                            <li>
                                <a href="https://edugateuae.com/en/clients">Partners</a>
                            </li>

                            <li class="dropdown">
                                <a href="http://digitalbondmena.com/edugate/en" class="dropdown-toggle " data-toggle="dropdown">Events</a>
                                <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                                                                  
                                                                        <li class="dropdown">
                                            <a href="https://edugateuae.com/en/winter-2019">Winter 2019</a>
                                        </li>
                                                                        <li class="dropdown">
                                            <a href="https://edugateuae.com/en/summer-2019">Summer 2019</a>
                                        </li>



                                </ul>
                            </li>
                            <li>
                                <a href="https://edugateuae.com/en/media">Media</a>
                            </li>
                            <li>
                                <a href="https://edugateuae.com/en/contact-us">Contact</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>

            </nav>
            <!-- End Navigation -->

        </header>

            <!-- start section bread crumb -->
            <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url({{asset('frontend/edugateform/img/banner/banner5.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h2>Admission Request</h1>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end section bread crumb -->
                <!-- End Header -->
            <div class="main-content my-5">
                <div class="container">
                    <div class="row shadow no-gutters">
                        <div class="col-md-6">
                          <div class="row no-gutters">
                            <img src="{{asset('frontend/edugateform/img/university.png')}}" class="image-beautiful h-200px w-100" alt="">

                            </div>
                            <div class="card-description px-4 pt-4 ">
                                <h3 class="text-center text-main">To get a suitable opportunity for studying abroad besides attending international exhibitions, please fill the following registration form</h3>

                                <p>EDUGATE is the perfect solution to get a suitable opportunity to study abroad, and it offers international exhibitions for education "especially the higher education" that brings together schools and universities in addition to scholars to meet students who are looking for educational opportunities.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 ">
                            <div class="box">
                                <div class="register-box">

                                                    <div class="styled-form">

                                                        <form id="form" action="{{ route('google-form-admission-info-edugate') }}" method="post">
                                                            @csrf
                                                            <div class="row clearfix align-items-center">
                                                                <div class="col-12 my-3">
                                                                    <img src="" class="w-100" alt="">
                                                                </div>

                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Full Name</label>
                                                                    <input type="text" id="name" name="name">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Email</label>
                                                                    <input type="email" id="email" name="email" >
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                   
                                                                </div>
                                                                
                                                                @error('email')

                                                                    <span role="alert" class="alert alert-danger col-12">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                
                                                                <div class="form-group form-control-validation col-lg-12">
                                                                    <label>Phone Number</label>
                                                                    <input type="number" id="phone" class="tel-input w-100" name="phone" pattern="^[0-9]+$">
                                                                    <span id="valid-msg" class="hide">✓ Valid</span>
                                                                    <span id="error-msg" class="hide"></span>
                                                                    <i class="fa fa-check-circle" style="top: 44%;"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                    

                                                                </div>
                                                                
                                                                @error('phone')

                                                                    <span role="alert" class="alert alert-danger col-12">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Area</label>
                                                                    <select id="area" name="area" >
                                                                        <option value="">Choose Area</option>
                                                                        @foreach($adFormAreas as $adFormArea)
                                                                            <option value="{{ $adFormArea->en_name }}">{{ $adFormArea->en_name }}</option>
                                                                        @endforeach

                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>

                                                                                                                    </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Date of Birth</label>
                                                                    <input type="date" id="birthdate" name="birthdate" >
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>

                                                                </div>

                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Place of Residence</label>
                                                                    <select id="nation" name="nation">

                                                                        <option value="">Choose</option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>

                                                                </div>

                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Nationality</label>
                                                                    <select id="nationality" name="nationality">
                                                                        <option value="">Choose</option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>

                                                                </div>



                                                            </div>
                                                            <div class="row">

                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Required Qualification</label>
                                                                    <br>
                                                                    <select name="degree_needed" id="degree_needed" class="d-block" >
                                                                        <option value="" >Choose</option>
                                                                        <option value="Bachelor">Bachelor</option>
                                                                        <option value="Master">M.A.</option>
                                                                        <option value="PhD">PhD</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>

                                                            </div>
                                                            <div class="row align-items-end clearfix" id="show-bachelor-form" style="display:none">
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Pre-university academic qualification</label>
                                                                    <select  id="school_degree_name" class="d-block">
                                                                        <option value="">Choose</option>
                                                                        <option value="Intermediate Diploma">Intermediate Secondary Diploma</option>
                                                                        <option value="Diploma above average">Upper Intermediate Secondary  Diploma</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Graduation Year</label>
                                                                    <select  id="school_degree_year" class="d-block">
                                                                        <option value="">Choose</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2015">2015</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2012">2012</option>
                                                                        <option value="2011">2011</option>
                                                                        <option value="2010">2010</option>
                                                                        <option value="2009">2009</option>
                                                                        <option value="2008">2008</option>
                                                                        <option value="2007">2007</option>
                                                                        <option value="2006">2006</option>
                                                                        <option value="2005">2005</option>
                                                                        <option value="2004">2004</option>
                                                                        <option value="2003">2003</option>
                                                                        <option value="2002">2002</option>
                                                                        <option value="2001">2001</option>
                                                                        <option value="2000">2000</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Academic Country before University</label>
                                                                    <select id="school_degree_country" name="school_degree_country">
                                                                        <option value="">Choose</option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>

                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Percentage %</label>
                                                                    <input type="number" class="d-block" id="percentage"  step=".01">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Educational System</label>
                                                                    <select class="d-block"  id="education_system">
                                                                        <option value="">Choose</option>
                                                                        <option value="Scientific Section">Scientific Section</option>
                                                                        <option value="Mathematical Section">Mathematical Section</option>
                                                                        <option value="Literary Section">Literary Section</option>

                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-end clearfix" id="show-master-form" style="display:none">
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>University Qualification</label>
                                                                    <select  id="bachelor_degree_name" class="d-block">
                                                                        <option value="" selected="">Choose</option>
                                                                        <option value="Bachelor">Bachelor</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Graduation Year</label>
                                                                    <select  id="bachelor_degree_year" class="d-block">
                                                                        <option value="">Choose</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2015">2015</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2012">2012</option>
                                                                        <option value="2011">2011</option>
                                                                        <option value="2010">2010</option>
                                                                        <option value="2009">2009</option>
                                                                        <option value="2008">2008</option>
                                                                        <option value="2007">2007</option>
                                                                        <option value="2006">2006</option>
                                                                        <option value="2005">2005</option>
                                                                        <option value="2004">2004</option>
                                                                        <option value="2003">2003</option>
                                                                        <option value="2002">2002</option>
                                                                        <option value="2001">2001</option>
                                                                        <option value="2000">2000</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>University Country</label>
                                                                    <select id="bachelor_degree_country"  class="d-block">
                                                                        <option value="">Choose</option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>University</label>
                                                                    <input type="text"  id="bachelor_university_name" class="d-block">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Collage</label>
                                                                    <input type="text"  id="bachelor_faculty_name" class="d-block">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>

                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>GPA</label>
                                                                    <input type="number" class="d-block" id="bachelor_gpa_precentage"  step=".01">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Educational System</label>
                                                                    <select class="d-block" id="bachelor_education_system">
                                                                        <option value="">Choose</option>
                                                                        <option value="Internal Education">Internal Education</option>
                                                                        <option value="External Education">External Education</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-end clearfix" id="show-phd-form" style="display:none">
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>University Qualification</label>
                                                                    <select  id="master_degree_name" class="d-block">
                                                                        <option value="">Choose</option>
                                                                        <option value="Master">Master</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Graduation Year</label>
                                                                    <select  id="master_degree_year" class="d-block">
                                                                        <option value=""> Choose</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2015">2015</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2012">2012</option>
                                                                        <option value="2011">2011</option>
                                                                        <option value="2010">2010</option>
                                                                        <option value="2009">2009</option>
                                                                        <option value="2008">2008</option>
                                                                        <option value="2007">2007</option>
                                                                        <option value="2006">2006</option>
                                                                        <option value="2005">2005</option>
                                                                        <option value="2004">2004</option>
                                                                        <option value="2003">2003</option>
                                                                        <option value="2002">2002</option>
                                                                        <option value="2001">2001</option>
                                                                        <option value="2000">2000</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>University Country</label>
                                                                    <select id="master_degree_country"  class="d-block">
                                                                        <option value="">Choose</option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>University</label>
                                                                    <input type="text"  id="master_university_name" class="d-block">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Collage</label>
                                                                    <input type="text"  id="master_faculty_name" class="d-block">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>Department</label>
                                                                    <input type="text"  id="master_name" class="d-block">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>
                                                                <div class="form-group form-control-validation col-lg-6">
                                                                    <label>GPA</label>
                                                                    <input type="number" class="d-block" id="master_gpa_precentage"  step=".01">
                                                                    <i class="fa fa-check-circle"></i>
                                                                    <i class="fa fa-exclamation-circle"></i>
                                                                    <small>Error message</small>
                                                                </div>


                                                                </div>

                                                            </div>



                                                            <div class="col-12">
                                                                <button class="btn btn-success w-100" name="" type="submit">Send</button>
                                                            </div>


                                                        </form>
                                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>





    <!-- Star Footer
    ============================================= -->


        <footer class="bg-dark text-light">
            <div class="container">
                <div class="f-items py-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 item">
                            <div class="f-item about">
                                                            <h4 class="widget-title">About us</h4>

                                <p>
                                    EDUGATE is the perfect solution to get a suitable opportunity to study inside and outside UAE, and it offers international exhibitions for students who are looking for educational opportunities

                                </p>


                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 item">
                            <div class="f-item link">
                                <h4 class="widget-title">Events</h4>
                                <ul>
                                    <li>
                                         <a href="https://edugateuae.com/en/winter-2019">Winter 2019</a>
                                    </li>
                                    <li>
                                        <a href="https://edugateuae.com/en/summer-2019">Summer 2019</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 item">
                            <div class="f-item link">
                                <h4 class="widget-title">Links</h4>
                                <ul>
                                    <li>
                                        <a href="https://edugateuae.com/en">Home</a>
                                    </li>
                                    <li>
                                        <a href="https://edugateuae.com/en/about-us">About us</a>
                                    </li>
                                    <li>
                                    <a href="https://edugateuae.com/en/clients">Partners</a>
                                    </li>
                                     <li>
                                        <a href="https://edugateuae.com/en/media">Media</a>
                                    </li>
                                    <li>
                                        <a href="https://edugateuae.com/en/contact-us">Contact</a>
                                    </li>


                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 item">
                            <div class="f-item contact">
                                <h4 class="widget-title">Contact Info</h4>
                                <div class="address">
                                    <ul>
                                        <li>
                                            <strong>Email:</strong> Sales@edugateuae.com
                                        </li>
                                        <li>
                                            <strong>Address:</strong>Dubai - United Arab Emirates

                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="socialmedi-links d-flex">
                                <a href="https://www.facebook.com/" class="text-white mr-4 mt-3">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/" class="text-white mr-4 mt-3">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com/" class="text-white mr-4 mt-3">
                                    <i class="fab fa-instgram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row align-items-end">
                                <p>All copyrights reserved by  © 2020
                                </p>
                                <a class="mx-2 mb-1" href="http://www.digitalbondmena.com/"><img style="height: 30px;" src="assets/img/db.png" alt=""></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </footer>
  <!-- End Footer-->

  <!-- jQuery Frameworks
  ============================================= -->
  <script src="{{ asset('frontend/edugateform/js/jquery-1.12.4.min.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/popper.min.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/bootstrap.min.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/jquery.appear.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/jquery.easing.min.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/jquery.magnific-popup.min.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/modernizr.custom.13711.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/owl.carousel.min.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/wow.min.js' )}}"></script>
  <script src="{{ asset('frontend/js/intlTelInput.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/imagesloaded.pkgd.min.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/YTPlayer.min.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/jquery.nice-select.min.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/loopcounter.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/count-to.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/bootsnav.js' )}}"></script>
  <script src="{{ asset('frontend/edugateform/js/main.js' )}}"></script>

  <script>

    $(document).ready(function () {



                    $("#degree_needed").change(function () {
                        var val = $(this).val();
                        if (val == "Bachelor") {

                            $("#show-bachelor-form").show();
                            $("#show-phd-form").hide();
                            $("#show-master-form").hide();
                            $("#degree_needed option").attr("disabled","disabled");
                            $("#degree_needed option:selected").removeAttr("disabled");
                            // $("#degree_needed option:seleted").removeAttr("disabled");
                            let schoolDegreeName = document.getElementById("school_degree_name");
                            let schoolDegreeYear = document.getElementById("school_degree_year");
                            let schoolDegreeCountry = document.getElementById("school_degree_country");
                            let percentage = document.getElementById("percentage");
                            let educationSystem = document.getElementById("education_system");
                            schoolDegreeName.setAttribute("name","school_degree_name");
                            schoolDegreeYear.setAttribute("name","school_degree_year");
                            schoolDegreeCountry.setAttribute("name","school_degree_country");
                            percentage.setAttribute("name","percentage");
                            educationSystem.setAttribute("name","education_system");
                            var formErrors = [];

                            form.addEventListener('submit', e => {
                                checkInputsSchool();
                                if(formErrors.length) {
                                    e.preventDefault();
                                }
                            });


                            function checkInputsSchool() {
                                formErrors = [];

                                let schoolDegreeNameValue = schoolDegreeName.value.trim();
                                let schoolDegreeYearValue = schoolDegreeYear.value.trim();
                                let schoolDegreeCountryValue = schoolDegreeCountry.value.trim();
                                let percentageValue = percentage.value.trim();
                                let educationSystemValue = educationSystem.value.trim();



                                if (schoolDegreeNameValue === "") {
                                    formErrors.push("Pre-university is required");
                                    setErrorForSchool(schoolDegreeName, "Pre-university is required");
                                } else {
                                    setSuccessForSchool(schoolDegreeName);
                                }
                                if (schoolDegreeYearValue === "") {
                                    formErrors.push("Graduation Year is required");
                                    setErrorForSchool(schoolDegreeYear, "Graduation Year is required");
                                } else {
                                    setSuccessForSchool(schoolDegreeYear);
                                }
                                if (schoolDegreeCountryValue === "") {
                                    formErrors.push("Academic is required");
                                    setErrorForSchool(schoolDegreeCountry, "Academic is required");
                                } else {
                                    setSuccessForSchool(schoolDegreeCountry);
                                }

                                if (percentageValue === "") {
                                    formErrors.push("Percentage is required");
                                    setErrorForSchool(percentage, "Percentage is required");
                                } else {
                                    setSuccessForSchool(percentage);
                                }
                                if (educationSystemValue === "") {
                                    formErrors.push("Educational System is required");
                                    setErrorForSchool(educationSystem, "Educational System is required");
                                } else {
                                    setSuccessForSchool(educationSystem);
                                }
                            }

                            function setErrorForSchool(input, message) {
                                const formControl = input.parentElement;
                                const small = formControl.querySelector('small');
                                formControl.className = 'form-group form-control-validation error  col-lg-6';
                                small.innerText = message;
                            }

                            function setSuccessForSchool(input) {
                                const formControl = input.parentElement;
                                formControl.className = 'form-group  form-control-validation success col-lg-6';
                            }

                        }
                         else if (val == "Master") {
                            $("#show-bachelor-form").hide();
                            $("#show-phd-form").hide();
                            $("#show-master-form").show();
                            $("#degree_needed option").attr("disabled","disabled");
                            $("#degree_needed option:selected").removeAttr("disabled");
                            // $("#degree_needed option").attr("disabled","disabled");
                            // $("#degree_needed option:seleted").removeAttr("disabled");

                            let bachelor_degree_name = document.getElementById("bachelor_degree_name");
                            let bachelor_degree_year = document.getElementById("bachelor_degree_year");
                            let bachelor_degree_country = document.getElementById("bachelor_degree_country");
                            let bachelor_university_name = document.getElementById("bachelor_university_name");
                            let bachelor_faculty_name = document.getElementById("bachelor_faculty_name");
                            let bachelor_gpa_precentage = document.getElementById("bachelor_gpa_precentage");
                            let bachelor_education_system = document.getElementById("bachelor_education_system");
                            bachelor_degree_name.setAttribute("name","bachelor_degree_name");
                            bachelor_degree_year.setAttribute("name","bachelor_degree_year");
                            bachelor_degree_country.setAttribute("name","bachelor_degree_country");
                            bachelor_university_name.setAttribute("name","bachelor_university_name");
                            bachelor_faculty_name.setAttribute("name","bachelor_faculty_name");
                            bachelor_gpa_precentage.setAttribute("name","bachelor_gpa_precentage");
                            bachelor_education_system.setAttribute("name","bachelor_education_system");
                            var formErrors = [];

                            form.addEventListener('submit', e => {
                                checkInputs();
                                if(formErrors.length) {
                                    e.preventDefault();
                                }
                            });

                            function checkInputs()
                            {
                                formErrors = [];

                                let bachelor_degree_nameValue = bachelor_degree_name.value.trim();
                                let bachelor_degree_yearValue = bachelor_degree_year.value.trim();
                                let bachelor_degree_countryValue = bachelor_degree_country.value.trim();
                                let bachelor_university_nameValue = bachelor_university_name.value.trim();
                                let bachelor_faculty_nameValue = bachelor_faculty_name.value.trim();
                                let bachelor_gpa_precentageValue = bachelor_gpa_precentage.value.trim();
                                let bachelor_education_systemValue =bachelor_education_system.value.trim();



                                    if (bachelor_degree_nameValue === "") {
                                        formErrors.push("University Qualification is required");
                                        setErrorFor(bachelor_degree_name, "University Qualification is required");
                                    } else {
                                        setSuccessFor(bachelor_degree_name);
                                    }
                                    if (bachelor_degree_yearValue === "") {
                                        formErrors.push("Graduation Year is required");
                                        setErrorFor(bachelor_degree_year, "Graduation Year is required");
                                    } else {
                                        setSuccessFor(bachelor_degree_year);
                                    }
                                    if (bachelor_degree_countryValue === "") {
                                        formErrors.push("University Country is required");
                                        setErrorFor(bachelor_degree_country, "University Country is required");
                                    } else {
                                        setSuccessFor(bachelor_degree_country);
                                    }
                                    if (bachelor_university_nameValue === "") {
                                        formErrors.push("University is required");
                                        setErrorFor(bachelor_university_name, "University is required");
                                    } else {
                                        setSuccessFor(bachelor_university_name);
                                    }
                                    if (bachelor_faculty_nameValue === "") {
                                        formErrors.push("Collage is required");
                                        setErrorFor(bachelor_faculty_name, "Collage is required");
                                    } else {
                                        setSuccessFor(bachelor_faculty_name);
                                    }

                                    if (bachelor_gpa_precentageValue === "") {
                                        formErrors.push("Gpa is required");
                                        setErrorFor(bachelor_gpa_precentage, "Gpa is required");
                                    } else {
                                        setSuccessFor(bachelor_gpa_precentage);
                                    }
                                    if (bachelor_education_systemValue === "") {
                                        formErrors.push("Educational System is required");
                                        setErrorFor(bachelor_education_system, "Educational System is required");
                                    } else {
                                        setSuccessFor(bachelor_education_system);
                                    }

                                }



                            function setErrorFor(input, message) {
                                const formControl = input.parentElement;
                                const small = formControl.querySelector('small');
                                formControl.className = 'form-group form-control-validation error  col-lg-6';
                                small.innerText = message;
                            }

                            function setSuccessFor(input) {
                                const formControl = input.parentElement;
                                formControl.className = 'form-group  form-control-validation success col-lg-6';
                            }



                            }
                        else if (val == "PhD") {
                            $("#show-bachelor-form").hide();
                            $("#show-phd-form").show();
                            $("#show-master-form").hide();
                            $("#degree_needed option").attr("disabled","disabled");
                            $("#degree_needed option:selected").removeAttr("disabled");

                            let master_degree_name = document.getElementById("master_degree_name");
                            let master_degree_year = document.getElementById("master_degree_year");
                            let master_degree_country = document.getElementById("master_degree_country");
                            let master_university_name = document.getElementById("master_university_name");
                            let master_faculty_name = document.getElementById("master_faculty_name");
                            let master_name = document.getElementById("master_name");
                            let master_gpa_precentage = document.getElementById("master_gpa_precentage");
                            master_degree_name.setAttribute("name","master_degree_name");
                            master_degree_year.setAttribute("name","master_degree_year");
                            master_degree_country.setAttribute("name","master_degree_country");
                            master_university_name.setAttribute("name","master_university_name");
                            master_faculty_name.setAttribute("name","master_faculty_name");
                            master_name.setAttribute("name","master_name");
                            master_gpa_precentage.setAttribute("name","master_gpa_precentage");
                          var formErrors = [];

                          form.addEventListener('submit', e => {
                              checkInputsPhd();
                              if(formErrors.length) {
                                  e.preventDefault();
                              }
                          });

                          function checkInputsPhd()
                          {
                              formErrors = [];

                              let master_degree_nameValue = master_degree_name.value.trim();
                              let master_degree_yearValue = master_degree_year.value.trim();
                              let master_degree_countryValue = master_degree_country.value.trim();
                              let master_university_nameValue = master_university_name.value.trim();
                              let master_faculty_nameValue = master_faculty_name.value.trim();
                              let master_nameValue = master_name.value.trim();
                              let master_gpa_precentageValue = master_gpa_precentage.value.trim();


                                if (master_degree_nameValue === "") {
                                    formErrors.push("University Qualification is required");
                                    setErrorForPhd(master_degree_name, "University Qualification is required");
                                } else {
                                    setSuccessForPhd(master_degree_name);
                                }
                                if (master_degree_yearValue === "") {
                                    formErrors.push("Graduation Year is required");
                                    setErrorForPhd(master_degree_year, "Graduation Year is required");
                                } else {
                                    setSuccessForPhd(master_degree_year);
                                }
                                if (master_degree_countryValue === "") {
                                    formErrors.push("University Country is required");
                                    setErrorForPhd(master_degree_country, "University Country is required");
                                } else {
                                    setSuccessForPhd(master_degree_country);
                                }
                                if (master_university_nameValue === "") {
                                    formErrors.push("University is required");
                                    setErrorForPhd(master_university_name, "University is required");
                                } else {
                                    setSuccessForPhd(master_university_name);
                                }
                                if (master_faculty_nameValue === "") {
                                    formErrors.push("Collage is required");
                                    setErrorForPhd(master_faculty_name, "Collage is required");
                                } else {
                                    setSuccessForPhd(master_faculty_name);
                                }
                                if (master_nameValue === "") {
                                    formErrors.push("Departement is required");
                                    setErrorForPhd(master_name, "Departement is required");
                                } else {
                                    setSuccessForPhd(master_name);
                                }
                                if (master_gpa_precentageValue === "") {
                                    formErrors.push("Gpa is required");
                                    setErrorForPhd(master_gpa_precentage, " Gpa is required");
                                } else {
                                    setSuccessForPhd(master_gpa_precentage);
                                }




                          }

                          function setErrorForPhd(input, message) {
                              const formControl = input.parentElement;
                              const small = formControl.querySelector('small');
                              formControl.className = 'form-group form-control-validation error  col-lg-6';
                              small.innerText = message;
                          }

                          function setSuccessForPhd(input) {
                              const formControl = input.parentElement;
                              formControl.className = 'form-group  form-control-validation success col-lg-6';
                          }



                        }else if(val == ""){
                            $("#show-bachelor-form").hide();
                            $("#show-phd-form").hide();
                            $("#show-master-form").hide();
                        }
                    });
                });
</script>

<script>


    var input = document.querySelector("#phone"),
    errorMsg = document.querySelector("#error-msg"),
    validMsg = document.querySelector("#valid-msg");
  // initialise plugin
  var iti = window.intlTelInput(input, {
    preferredCountries: ['ae','eg', 'sa','qa','kw','jo'],
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js",
  });
  // here, the index maps to the error code returned from getValidationError - see readme
  var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

  // initialise plugin


  var reset = function() {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    errorMsg.classList.add("text-danger");
    validMsg.classList.add("hide");
    validMsg.classList.add("text-success");

  };

  // on blur: validate
  input.addEventListener('blur', function() {
    reset();
    if (input.value.trim()) {
      if (iti.isValidNumber()) {
        validMsg.classList.remove("hide");

      } else {
        input.classList.add("error");
        var errorCode = iti.getValidationError();
        errorMsg.innerHTML = errorMap[errorCode];
        errorMsg.classList.remove("hide");
      }
    }
    const form = document.getElementById('form');





    var formErrors = [];

    form.addEventListener('submit', e => {
        checkInputs();
        if(formErrors.length) {
            e.preventDefault();
        }
    });

    function checkInputs() {
        formErrors = [];
        // trim to remove the whitespaces

        const phoneValue = input.value.trim();



        if(phoneValue === '') {
            formErrors.push('Phone number is required');
            setErrorFor(input, 'Phone number is required');
        } else {
            setSuccessFor(input);
        }

    }

    function setErrorFor(input, message) {
        const formControl = input.parentElement.parentElement;
        const small = formControl.querySelector('small');
        formControl.className = 'form-group form-control-validation error  col-lg-12';
        small.innerText = message;
    }

    function setSuccessFor(input) {
        const formControl = input.parentElement.parentElement;
        formControl.className = 'form-group  form-control-validation success col-lg-12';
    }
  });

  // on keyup / change flag: reset
  input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);
  //phone melsh da3wa

      const form = document.getElementById('form');
      const fullName = document.getElementById('name');

      const area = document.getElementById('area');
      const birthdate = document.getElementById('birthdate');
      const nation = document.getElementById('nation');
      const nationality = document.getElementById('nationality');
      const degreeNeeded = document.getElementById('degree_needed');

    var formErrors = [];

    form.addEventListener('submit', e => {
        checkInputs();
        if(formErrors.length) {
            e.preventDefault();
        }
    });

    function checkInputs()
    {
        formErrors = [];
        // trim to remove the whitespaces
        const fullNameValue = fullName.value.trim();

        const emailValue = email.value.trim();
        const areaValue = area.value.trim();
        const birthdateValue = birthdate.value.trim();
        const nationValue = nation.value.trim();
        const nationalityValue = nationality.value.trim();

        const degreeNeededValue = degreeNeeded.value.trim();

        if(fullNameValue === '') {
            formErrors.push('Full name is required');
            setErrorFor(fullName, 'Full name is required');
        } else {
            setSuccessFor(fullName);
        }

        if(emailValue === '') {
            formErrors.push('Email is required');
            setErrorFor(email, 'Email is required');
        } else if (!isEmail(emailValue)) {
            formErrors.push('Email is invalid');
            setErrorFor(email, 'Email is invalid');
        } else {
            setSuccessFor(email);
        }
        if(areaValue === '') {
            formErrors.push('Area is required');
            setErrorFor(area, 'Area is required');
        } else {
            setSuccessFor(area);
        }
        if(birthdateValue === '') {
            formErrors.push('Birthdate is required');
            setErrorFor(birthdate, 'Birthdate is required');
        } else {
            setSuccessFor(birthdate);
        }
        if(nationValue === '') {
            formErrors.push('Country is required');
            setErrorFor(nation, 'Country is required');
        } else {
            setSuccessFor(nation);
        }
        if(nationalityValue === '') {
            formErrors.push('Nationality is required');
            setErrorFor(nationality, 'Nationality is required');
        } else {
            setSuccessFor(nationality);
        }

        if(degreeNeededValue === '') {
            formErrors.push('Qualification is required');
            setErrorFor(degreeNeeded, 'Qualification is required');
        } else {
            setSuccessFor(degreeNeeded);

        }



    }

    function setErrorFor(input, message) {
        const formControl = input.parentElement;
        const small = formControl.querySelector('small');
        formControl.className = 'form-group form-control-validation error  col-lg-6';
        small.innerText = message;
    }

    function setSuccessFor(input) {
        const formControl = input.parentElement;
        formControl.className = 'form-group  form-control-validation success col-lg-6';
    }

    function isEmail(email) {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }


</script>

  </body>


</html>
    @else
    <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from webhunt.store/themeforest/edukat/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 15:53:03 GMT -->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Learna - Education and LMS Template">

        <!-- ========== Page Title ========== -->
            <title>EDUGATE</title>

        <!-- ========== Favicon Icon ========== -->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!-- ========== Start Stylesheet ========== -->
         <link href="{{ asset('frontend/edugateform/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/themify-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/flaticon-set.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/elegant-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/magnific-popup.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/owl.carousel.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/edugateform/css/animate.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/bootsnav.css') }}" rel="stylesheet" />
        <link href="{{ asset('frontend/edugateform/css/responsive.css') }}" rel="stylesheet" />

        <link href="{{ asset('frontend/css/intlTelInput.css') }}" rel="stylesheet" />

         <link href="{{ asset('frontend/edugateform/css/responsive_ar.css') }}" rel="stylesheet">

        <link href="{{ asset('frontend/edugateform/css/bootsnav_ar.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/edugateform/css/style_ar.css') }}" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>

        .image-beautiful{
            object-fit: cover;
            object-position: center;
        }
        .h-200px{
            height: 200px;
        }
        .w-800{
            width: 800px;
        }
        .h-500{
            height: 500px;
        }
        /* .max-height-500px{
            max-height: 500px;
        }
        .overflow-auto{
            overflow: auto;
        } */
        .card{
            border-radius: 10px;
        }
        .card-image{
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .card-shadow{
            box-shadow:     0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                            0 12.5px 10px rgba(0, 0, 0, 0.06),
                            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                            0 100px 80px rgba(0, 0, 0, 0.12);
        }
        @media screen and (max-width:500px){
            .responsive-image{
                display: none;
            }
        }
        .text-main{
            color: #111d30 !important ;
        }
        .bg-bluemain{
            background-color: #111d30  ;
        }
        .bg-bluemain-light{
            background-color: #111D2F;
        }
        .card-shadow{
            -webkit-box-shadow: -30px 30px 0px 0 rgba(0,0,0, 0.08);
            box-shadow: -30px 30px 0px 0 rgba(0,0,0, 0.08);
        }
        .box {
            padding: 40px;
            background: #111d30  ;
        }
        .styled-form .form-group label{
            color:#fff !important;
        }
        label {
            color:#fff !important;
        }


        .register-box .form-control-validation {
            margin-bottom: 10px;
            padding-bottom: 20px;
            position: relative;
        }


        .register-box .form-control-validation.success input {
            border-color: #2ecc71;
            width:100%;
        }

        .register-box .form-control-validation.error input {
            border-color: #e74c3c;
            width:100%;
        }
        .register-box .form-control-validation.success select {
            border-color: #2ecc71;
            width:100%;
        }

        .register-box .form-control-validation.error select {
            border-color: #e74c3c;
            width:100%;
        }
        .register-box .form-control-validation i {
            display: none;
            position: absolute;
            top: 54%;
            transform: translate(-50%,-50%);
            left: 40px;
        }
        .register-box .form-control-validation input{
            width: 100%;
        }
        .register-box .form-control-validation select{
            width: 100%;
        }
        .register-box .form-control-validation.success i.fa-check-circle {
            color: #2ecc71;
            display: block;
        }

        .register-box .form-control-validation.error i.fa-exclamation-circle {
            color: #e74c3c;
            display: block;
        }

        .register-box .form-control-validation small {
            color: #e74c3c;
            position: absolute;
            bottom: -5px;
            right: 15px;
            display: none;
        }

        .register-box .form-control-validation.error small {
            display: block;
        }
        @media screen and (min-width:800px){
            .box{

                max-height: 525px;
                overflow: auto;
            }
            .card-description{
                padding: 1rem;
            }
        }
        @media screen and (max-width:800px){
            .card-description{
                padding: 3rem 1rem;
            }
        }
        .intl-tel-input {
        position: relative;
        display: inline-block;
        }

        .intl-tel-input * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        }

        .intl-tel-input .hide {
        display: none;
        }

        .intl-tel-input .v-hide {
        visibility: hidden;
        }

        .intl-tel-input input,
        .intl-tel-input input[type=text],
        .intl-tel-input input[type=tel] {
        position: relative;
        z-index: 0;
        margin-top: 0 !important;
        margin-bottom: 0 !important;
        padding-right: 36px;
        margin-right: 0;
        }

        .intl-tel-input .flag-container {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        padding: 1px;
        }

        .intl-tel-input .selected-flag {
        z-index: 1;
        position: relative;
        width: 36px;
        height: 100%;
        padding: 0 0 0 8px;
        }

        .intl-tel-input .selected-flag .iti-flag {
        position: absolute;
        top: 0;
        bottom: 0;
        left:10px;
        margin: auto;
        }

        .intl-tel-input .selected-flag .iti-arrow {
        position: absolute;
        top: 50%;
        margin-top: -2px;
        right: 40px;
        width: 0;
        height: 0;
        border-left: 3px solid transparent;
        border-right: 3px solid transparent;
        border-top: 4px solid #555;
        }

        .intl-tel-input .selected-flag .iti-arrow.up {
        border-top: none;
        border-bottom: 4px solid #555;
        }

        .intl-tel-input .country-list {
        position: absolute;
        z-index: 2;
        list-style: none;
        text-align: left;
        right: -200px;
        padding: 0;
        margin: 0 0 0 -1px;
        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
        background-color: white;
        border: 1px solid #CCC;
        white-space: nowrap;
        max-height: 200px;
        overflow-y: scroll;
        }

        .intl-tel-input .country-list.dropup {
        bottom: 100%;
        margin-bottom: -1px;
        }

        .intl-tel-input .country-list .flag-box {
        display: inline-block;
        width: 20px;
        }

        @media (max-width: 500px) {
        .intl-tel-input .country-list {
        white-space: normal;
        }
        }

        .intl-tel-input .country-list .divider {
        padding-bottom: 5px;
        margin-bottom: 5px;
        border-bottom: 1px solid #CCC;
        }

        .intl-tel-input .country-list .country {
        padding: 5px 10px;
        text-align: right;
        }

        .intl-tel-input .country-list .country .dial-code {
        color: #999;
        }

        .intl-tel-input .country-list .country.highlight {
        background-color: rgba(0, 0, 0, 0.05);
        }

        .intl-tel-input .country-list .flag-box,
        .intl-tel-input .country-list .country-name,
        .intl-tel-input .country-list .dial-code {
        vertical-align: middle;
        }

        .intl-tel-input .country-list .flag-box,
        .intl-tel-input .country-list .country-name {
        margin-right: 6px;
        }

        .intl-tel-input.allow-dropdown input,
        .intl-tel-input.allow-dropdown input[type=text],
        .intl-tel-input.allow-dropdown input[type=tel],
        .intl-tel-input.separate-dial-code input,
        .intl-tel-input.separate-dial-code input[type=text],
        .intl-tel-input.separate-dial-code input[type=tel] {
        padding-right: 6px;
        padding-left: 52px;
        margin-left: 0;
        }

        .intl-tel-input.allow-dropdown .flag-container,
        .intl-tel-input.separate-dial-code .flag-container {
        right: auto;
        left: 0;
        }

        .intl-tel-input.allow-dropdown .selected-flag,
        .intl-tel-input.separate-dial-code .selected-flag {
        width: 46px;
        }

        .intl-tel-input.allow-dropdown .flag-container:hover {
        cursor: pointer;
        }

        .intl-tel-input.allow-dropdown .flag-container:hover .selected-flag {
        background-color: rgba(0, 0, 0, 0.05);
        }

        .intl-tel-input.allow-dropdown input[disabled] + .flag-container:hover,
        .intl-tel-input.allow-dropdown input[readonly] + .flag-container:hover {
        cursor: default;
        }

        .intl-tel-input.allow-dropdown input[disabled] + .flag-container:hover .selected-flag,
        .intl-tel-input.allow-dropdown input[readonly] + .flag-container:hover .selected-flag {
        background-color: transparent;
        }

        .intl-tel-input.separate-dial-code .selected-flag {
        background-color: rgba(0, 0, 0, 0.05);
        display: table;
        }

        .intl-tel-input.separate-dial-code .selected-dial-code {
        display: table-cell;
        vertical-align: middle;
        padding-left: 28px;
        }

        .intl-tel-input.separate-dial-code.iti-sdc-2 input,
        .intl-tel-input.separate-dial-code.iti-sdc-2 input[type=text],
        .intl-tel-input.separate-dial-code.iti-sdc-2 input[type=tel] {
        padding-left: 66px;
        }

        .intl-tel-input.separate-dial-code.iti-sdc-2 .selected-flag {
        width: 60px;
        }

        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input,
        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input[type=text],
        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 input[type=tel] {
        padding-left: 76px;
        }

        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 .selected-flag {
        width: 70px;
        }

        .intl-tel-input.separate-dial-code.iti-sdc-3 input,
        .intl-tel-input.separate-dial-code.iti-sdc-3 input[type=text],
        .intl-tel-input.separate-dial-code.iti-sdc-3 input[type=tel] {
        padding-left: 74px;
        }

        .intl-tel-input.separate-dial-code.iti-sdc-3 .selected-flag {
        width: 68px;
        }

        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input,
        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=text],
        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 input[type=tel] {
        padding-left: 84px;
        }

        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-3 .selected-flag {
        width: 78px;
        }

        .intl-tel-input.separate-dial-code.iti-sdc-4 input,
        .intl-tel-input.separate-dial-code.iti-sdc-4 input[type=text],
        .intl-tel-input.separate-dial-code.iti-sdc-4 input[type=tel] {
        padding-left: 82px;
        }

        .intl-tel-input.separate-dial-code.iti-sdc-4 .selected-flag {
        width: 76px;
        }

        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 input,
        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 input[type=text],
        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 input[type=tel] {
        padding-left: 92px;
        }

        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-4 .selected-flag {
        width: 86px;
        }

        .intl-tel-input.separate-dial-code.iti-sdc-5 input,
        .intl-tel-input.separate-dial-code.iti-sdc-5 input[type=text],
        .intl-tel-input.separate-dial-code.iti-sdc-5 input[type=tel] {
        padding-left: 90px;
        }

        .intl-tel-input.separate-dial-code.iti-sdc-5 .selected-flag {
        width: 84px;
        }

        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-5 input,
        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-5 input[type=text],
        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-5 input[type=tel] {
        padding-left: 100px;
        }

        .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-5 .selected-flag {
        width: 94px;
        }

        .intl-tel-input.iti-container {
        position: absolute;
        top: -1000px;
        left: -1000px;
        z-index: 1060;
        padding: 1px;
        }

        .intl-tel-input.iti-container:hover {
        cursor: pointer;
        }

        .iti-mobile .intl-tel-input.iti-container {
        top: 30px;
        bottom: 30px;
        left: 30px;
        right: 30px;
        position: fixed;
        }

        .iti-mobile .intl-tel-input .country-list {
        max-height: 100%;
        width: 100%;
        }

        .iti-mobile .intl-tel-input .country-list .country {
        padding: 10px 10px;
        line-height: 1.5em;
        }

        .iti-flag {
        width: 20px;
        }

        .iti-flag {
        width: 20px;
        height: 15px;
        box-shadow: 0px 0px 1px 0px #888;
        background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/img/flags.png");
        background-repeat: no-repeat;
        background-color: transparent;
        background-position: 20px 0;
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 2),
        only screen and (min--moz-device-pixel-ratio: 2),
        only screen and (-o-min-device-pixel-ratio: 2 / 1),
        only screen and (min-device-pixel-ratio: 2),
        only screen and (min-resolution: 192dpi),
        only screen and (min-resolution: 2dppx) {
        .iti-flag {
        background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/img/flags@2x.png");
        }
        }

        .iti-flag.np {
        background-color: transparent;
        }



        .hide {
        display: none;
        }

        pre {
        margin: 0 !important;
        display: inline-block;
        }

        .token.operator,
        .token.entity,
        .token.url,
        .language-css .token.string,
        .style .token.string,
        .token.variable {
        background: none;
        }

        input,
        button,
        select {
        height: 35px;
        margin: 0;
        padding: 6px 12px;
        border-radius: 2px;
        font-family: inherit;
        font-size: 100%;
        color: inherit;
        }
        select{
            height: 50px;
        }
        input[disabled],
        button[disabled] {
        background-color: #eee;
        }

        input,
        select {
        border: 1px solid #CCC;
        width: 250px;
        }

        ::-webkit-input-placeholder {
        color: #BBB;
        }

        ::-moz-placeholder {
        /* Firefox 19+ */
        color: #BBB;
        opacity: 1;
        }

        :-ms-input-placeholder {
        color: #BBB;
        }

        button {
        color: #FFF;
        background-color: #428BCA;
        border: 1px solid #357EBD;
        }

        button:hover {
        background-color: #3276B1;
        border-color: #285E8E;
        cursor: pointer;
        }

        #result {
        margin-bottom: 100px;
        }
    </style>

        <!-- ========== End Stylesheet ========== -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="assets/js/html5/html5shiv.min.js"></script>
          <script src="assets/js/html5/respond.min.js"></script>
        <![endif]-->

        <!-- ========== Google Fonts ========== -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap" rel="stylesheet">

    </head>

    <body>




        <div class="top-bar-area bg-dark text-light inline p-0">
            <div class="container-full">
                <div class="row align-center">

                    <div class="col-lg-7 col-md-12 left-info">
                        <div class="item-flex">
                            <ul class="list">
                              

                                <li>
                                    <i class="fas fa-envelope"></i> <a href="mailto:Sales@edugateuae.com">Sales@edugateuae.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12 right-info">
                        <div class="item-flex">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/"><i class="fab fa-instgram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="button">
                                <a href="http://digitalbondmena.com/egec_new_new/ar/edugate-google-form-uae" class="btn btn-gradient px-3 py-2">طلب القبول الجامعي</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Header
        ============================================= -->
    <header id="home">

            <!-- Start Navigation -->
            <nav class="navbar navbar-default attr-border navbar-fixed white no-background bootsnav">



                <div class="container">

                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav float-left">
                        <ul>
                            <li class="search"><a href="http://digitalbondmena.com/egec_new_new/en/edugate-google-form-uae">English</a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="http://digitalbondmena.com/edugate/en">
                            <img src="{{asset('frontend/edugateform/img/edugate logo final.png')}}" class="logo logo-display" alt="Logo">
                            <img src="{{asset('frontend/edugateform/img/edugate logo final.png')}}" class="logo logo-scrolled" alt="Logo">
                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">








                            <li>
                                <a href="http://digitalbondmena.com/edugate/ar/contact-us">تواصل معنا
                                </a>
                            </li>

                            <li>
                                <a href="http://digitalbondmena.com/edugate/ar/media">الاعلام</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" >الأحداث</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="http://digitalbondmena.com/edugate/ar/%D8%B4%D8%AA%D8%A7%D8%A1-2019" class="dropdown-toggle" data-toggle="dropdown" >شتاء 2019</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="http://digitalbondmena.com/edugate/ar/%D8%B5%D9%8A%D9%81-2019" class="dropdown-toggle" data-toggle="dropdown" >صيف 2019</a>
                                        
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="http://digitalbondmena.com/edugate/ar/clients">شركاؤنا
                                </a>
                            </li>
                            <li>
                                <a href="http://digitalbondmena.com/edugate/ar/about-us">من نحن
                                </a>
                            </li>
                            <li>
                                <a href="http://digitalbondmena.com/edugate/ar" > الرئيسية</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>

            </nav>
            <!-- End Navigation -->

        </header>
        <!-- End Header -->

             <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url({{asset('frontend/edugateform/img/banner/banner5.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>استماره التحاق</h1>

                </div>
            </div>
        </div>
    </div>


        <div class="main-content my-5">
            <div class="container">
                <div class="row shadow no-gutters">

                    <div class="col-md-6">

                      <div class="row no-gutters">
                        <img src="{{asset('frontend/edugateform/img/university.png')}}" class="image-beautiful h-200px w-100" alt="">

                      </div>
                      <div class="card-description p-5">
                          <h3 class="text-center text-main">لإيجاد فرصة مناسبة للدراسة خارج الإمارات وحضور معارض دولية للتعليم يرجى ملئ استمارة التسجيل التالية</h3>

                          <p>
                              إديوجيت هو الحل الأمثل للطلاب لإيجاد فرصة مناسبة للدراسة خارج الإمارات، ويوفر معارض دولية للتعليم "وبالأخص التعليم العالي" يجمع المدارس والجامعات والمؤسسات التعليمية المختلفة بالإضافة إلى أهم خبراء ومسئولي التعليم العالي الدوليين والآف الزوار الباحثين عن فرص تعليمية مختلفة.
                          </p>
                      </div>

                    </div>

                    <div class="col-md-6 ">
                        <div class="box">
                            <div class="register-box">

                                                <div class="styled-form">

                                                    <form id="form" action="{{ route('google-form-admission-info-edugate') }}" method="post">
                                                        @csrf
                                                        <div class="row clearfix align-items-end">
                                                            <div class="col-12 my-3">
                                                                <img src="" class="w-100" alt="">
                                                            </div>

                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>الاسم الكامل</label>
                                                                <input type="text" id="name" name="name"  placeholder="الاسم الكامل" >
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>البريد الالكتروني</label>
                                                                <input type="email" id="email" name="email"  placeholder="البريد الالكتروني" >
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                                @error('email')

                                                                    <span role="alert" class="alert alert-danger col-12">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            <div class="form-group form-control-validation col-lg-12">
                                                                <label>رقم التليفون</label>
                                                                <input type="number" id="phone" class="tel-input w-100" name="phone" pattern="^[0-9]+$">
                                                                <span id="valid-msg" class="hide">صحيح</span>
                                                                <span id="error-msg" class="hide"></span>
                                                                <i class="fa fa-check-circle" style="top: 44%;"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                                

                                                            </div>  
                                                            
                                                                @error('phone')

                                                                    <span role="alert" class="alert alert-danger col-12">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            <!-- <div class="form-group form-control-validation col-lg-6">
                                                                <label>العنوان</label>
                                                                <input type="text" id="address" name="address" placeholder="العنوان" >
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>

                                                            </div>  -->
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>المنطقة</label>
                                                                <select id="area" name="area" >
                                                                    <option value="">اختر المنطقة</option>
                                                                    @foreach($adFormAreas as $adFormArea)
                                                                        <option value="{{ $adFormArea->ar_name }}">{{ $adFormArea->ar_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>

                                                                                                                </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>تاريخ الولادة</label>
                                                                <input type="date" id="birthdate" name="birthdate" >
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>

                                                            </div>
                                                            <!-- <div class="form-group form-control-validation col-lg-6">
                                                                <label>الجنس</label>
                                                                <select name="gender" id="gender" class="d-block" >
                                                                    <option value="">اختر</option>
                                                                    <option value="ذكر">ذكر</option>
                                                                    <option value="انثي">انثي</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>

                                                            </div> -->
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>مكان الاقامة</label>
                                                                <select id="nation" name="nation" class="d-block" >
                                                                    <option value="">إختر</option>
                                                                    <option value="أفغانستان">أفغانستان</option>
                                                                    <option value="ألبانيا">ألبانيا</option>
                                                                    <option value="الجزائر">الجزائر</option>
                                                                    <option value="أندورا">أندورا</option>
                                                                    <option value="أنغولا">أنغولا</option>
                                                                    <option value="أنتيغوا وباربودا">أنتيغوا وباربودا</option>
                                                                    <option value="الأرجنتين">الأرجنتين</option>
                                                                    <option value="أرمينيا">أرمينيا</option>
                                                                    <option value="أستراليا">أستراليا</option>
                                                                    <option value="النمسا">النمسا</option>
                                                                    <option value="أذربيجان">أذربيجان</option>
                                                                    <option value="البهاما">البهاما</option>
                                                                    <option value="البحرين">البحرين</option>
                                                                    <option value="بنغلاديش">بنغلاديش</option>
                                                                    <option value="باربادوس">باربادوس</option>
                                                                    <option value="بيلاروسيا">بيلاروسيا</option>
                                                                    <option value="بلجيكا">بلجيكا</option>
                                                                    <option value="بليز">بليز</option>
                                                                    <option value="بنين">بنين</option>
                                                                    <option value="بوتان">بوتان</option>
                                                                    <option value="بوليفيا">بوليفيا</option>
                                                                    <option value="البوسنة والهرسك ">البوسنة والهرسك </option>
                                                                    <option value="بوتسوانا">بوتسوانا</option>
                                                                    <option value="البرازيل">البرازيل</option>
                                                                    <option value="بروناي">بروناي</option>
                                                                    <option value="بلغاريا">بلغاريا</option>
                                                                    <option value="بوركينا فاسو ">بوركينا فاسو </option>
                                                                    <option value="بوروندي">بوروندي</option>
                                                                    <option value="كمبوديا">كمبوديا</option>
                                                                    <option value="الكاميرون">الكاميرون</option>
                                                                    <option value="كندا">كندا</option>
                                                                    <option value="الرأس الأخضر">الرأس الأخضر</option>
                                                                    <option value="جمهورية أفريقيا الوسطى ">جمهورية أفريقيا الوسطى </option>
                                                                    <option value="تشاد">تشاد</option>
                                                                    <option value="تشيلي">تشيلي</option>
                                                                    <option value="الصين">الصين</option>
                                                                    <option value="كولومبيا">كولومبيا</option>
                                                                    <option value="جزر القمر">جزر القمر</option>
                                                                    <option value="كوستاريكا">كوستاريكا</option>
                                                                    <option value="ساحل العاج">ساحل العاج</option>
                                                                    <option value="كرواتيا">كرواتيا</option>
                                                                    <option value="كوبا">كوبا</option>
                                                                    <option value="قبرص">قبرص</option>
                                                                    <option value="التشيك">التشيك</option>
                                                                    <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
                                                                    <option value="الدنمارك">الدنمارك</option>
                                                                    <option value="جيبوتي">جيبوتي</option>
                                                                    <option value="دومينيكا">دومينيكا</option>
                                                                    <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
                                                                    <option value="تيمور الشرقية ">تيمور الشرقية </option>
                                                                    <option value="الإكوادور">الإكوادور</option>
                                                                    <option value="مصر">مصر</option>
                                                                    <option value="السلفادور">السلفادور</option>
                                                                    <option value="غينيا الاستوائية">غينيا الاستوائية</option>
                                                                    <option value="إريتريا">إريتريا</option>
                                                                    <option value="إستونيا">إستونيا</option>
                                                                    <option value="إثيوبيا">إثيوبيا</option>
                                                                    <option value="فيجي">فيجي</option>
                                                                    <option value="فنلندا">فنلندا</option>
                                                                    <option value="فرنسا">فرنسا</option>
                                                                    <option value="الغابون">الغابون</option>
                                                                    <option value="غامبيا">غامبيا</option>
                                                                    <option value="جورجيا">جورجيا</option>
                                                                    <option value="ألمانيا">ألمانيا</option>
                                                                    <option value="غانا">غانا</option>
                                                                    <option value="اليونان">اليونان</option>
                                                                    <option value="جرينادا">جرينادا</option>
                                                                    <option value="غواتيمالا">غواتيمالا</option>
                                                                    <option value="غينيا">غينيا</option>
                                                                    <option value="غينيا بيساو">غينيا بيساو</option>
                                                                    <option value="غويانا">غويانا</option>
                                                                    <option value="هايتي">هايتي</option>
                                                                    <option value="هندوراس">هندوراس</option>
                                                                    <option value="المجر">المجر</option>
                                                                    <option value="آيسلندا">آيسلندا</option>
                                                                    <option value="الهند">الهند</option>
                                                                    <option value="إندونيسيا">إندونيسيا</option>
                                                                    <option value="إيران">إيران</option>
                                                                    <option value="العراق">العراق</option>
                                                                    <option value="جمهورية أيرلندا ">جمهورية أيرلندا </option>
                                                                    <option value="فلسطين">فلسطين</option>
                                                                    <option value="إيطاليا">إيطاليا</option>
                                                                    <option value="جامايكا">جامايكا</option>
                                                                    <option value="اليابان">اليابان</option>
                                                                    <option value="الأردن">الأردن</option>
                                                                    <option value="كازاخستان">كازاخستان</option>
                                                                    <option value="كينيا">كينيا</option>
                                                                    <option value="كيريباتي">كيريباتي</option>
                                                                    <option value="الكويت">الكويت</option>
                                                                    <option value="قرغيزستان">قرغيزستان</option>
                                                                    <option value="لاوس">لاوس</option>
                                                                    <option value="لاوس">لاوس</option>
                                                                    <option value="لاتفيا">لاتفيا</option>
                                                                    <option value="لبنان">لبنان</option>
                                                                    <option value="ليسوتو">ليسوتو</option>
                                                                    <option value="ليبيريا">ليبيريا</option>
                                                                    <option value="ليبيا">ليبيا</option>
                                                                    <option value="ليختنشتاين">ليختنشتاين</option>
                                                                    <option value="ليتوانيا">ليتوانيا</option>
                                                                    <option value="لوكسمبورغ">لوكسمبورغ</option>
                                                                    <option value="مدغشقر">مدغشقر</option>
                                                                    <option value="مالاوي">مالاوي</option>
                                                                    <option value="ماليزيا">ماليزيا</option>
                                                                    <option value="جزر المالديف">جزر المالديف</option>
                                                                    <option value="مالي">مالي</option>
                                                                    <option value="مالطا">مالطا</option>
                                                                    <option value="جزر مارشال">جزر مارشال</option>
                                                                    <option value="موريتانيا">موريتانيا</option>
                                                                    <option value="موريشيوس">موريشيوس</option>
                                                                    <option value="المكسيك">المكسيك</option>
                                                                    <option value="مايكرونيزيا">مايكرونيزيا</option>
                                                                    <option value="مولدوفا">مولدوفا</option>
                                                                    <option value="موناكو">موناكو</option>
                                                                    <option value="منغوليا">منغوليا</option>
                                                                    <option value="الجبل الأسود">الجبل الأسود</option>
                                                                    <option value="المغرب">المغرب</option>
                                                                    <option value="موزمبيق">موزمبيق</option>
                                                                    <option value="بورما">بورما</option>
                                                                    <option value="ناميبيا">ناميبيا</option>
                                                                    <option value="ناورو">ناورو</option>
                                                                    <option value="نيبال">نيبال</option>
                                                                    <option value="هولندا">هولندا</option>
                                                                    <option value="نيوزيلندا">نيوزيلندا</option>
                                                                    <option value="نيكاراجوا">نيكاراجوا</option>
                                                                    <option value="النيجر">النيجر</option>
                                                                    <option value="نيجيريا">نيجيريا</option>
                                                                    <option value="كوريا الشمالية ">كوريا الشمالية </option>
                                                                    <option value="النرويج">النرويج</option>
                                                                    <option value="سلطنة عمان">سلطنة عمان</option>
                                                                    <option value="باكستان">باكستان</option>
                                                                    <option value="بالاو">بالاو</option>
                                                                    <option value="بنما">بنما</option>
                                                                    <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                                                                    <option value="باراغواي">باراغواي</option>
                                                                    <option value="بيرو">بيرو</option>
                                                                    <option value="الفلبين">الفلبين</option>
                                                                    <option value="بولندا">بولندا</option>
                                                                    <option value="البرتغال">البرتغال</option>
                                                                    <option value="قطر">قطر</option>
                                                                    <option value="جمهورية الكونغو">جمهورية الكونغو</option>
                                                                    <option value="جمهورية مقدونيا">جمهورية مقدونيا</option>
                                                                    <option value="رومانيا">رومانيا</option>
                                                                    <option value="روسيا">روسيا</option>
                                                                    <option value="رواندا">رواندا</option>
                                                                    <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
                                                                    <option value="سانت لوسيا">سانت لوسيا</option>
                                                                    <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>
                                                                    <option value="ساموا">ساموا</option>
                                                                    <option value="سان مارينو">سان مارينو</option>
                                                                    <option value="ساو تومي وبرينسيب">ساو تومي وبرينسيب</option>
                                                                    <option value="السعودية">السعودية</option>
                                                                    <option value="السنغال">السنغال</option>
                                                                    <option value="صربيا">صربيا</option>
                                                                    <option value="سيشيل">سيشيل</option>
                                                                    <option value="سيراليون">سيراليون</option>
                                                                    <option value="سنغافورة">سنغافورة</option>
                                                                    <option value="سلوفاكيا">سلوفاكيا</option>
                                                                    <option value="سلوفينيا">سلوفينيا</option>
                                                                    <option value="جزر سليمان">جزر سليمان</option>
                                                                    <option value="الصومال">الصومال</option>
                                                                    <option value="جنوب أفريقيا">جنوب أفريقيا</option>
                                                                    <option value="كوريا الجنوبية">كوريا الجنوبية</option>
                                                                    <option value="جنوب السودان">جنوب السودان</option>
                                                                    <option value="إسبانيا">إسبانيا</option>
                                                                    <option value="سريلانكا">سريلانكا</option>
                                                                    <option value="السودان">السودان</option>
                                                                    <option value="سورينام">سورينام</option>
                                                                    <option value="سوازيلاند">سوازيلاند</option>
                                                                    <option value="السويد">السويد</option>
                                                                    <option value="سويسرا">سويسرا</option>
                                                                    <option value="سوريا">سوريا</option>
                                                                    <option value="طاجيكستان">طاجيكستان</option>
                                                                    <option value="تنزانيا">تنزانيا</option>
                                                                    <option value="تايلاند">تايلاند</option>
                                                                    <option value="توغو">توغو</option>
                                                                    <option value="تونجا">تونجا</option>
                                                                    <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
                                                                    <option value="تونس">تونس</option>
                                                                    <option value="تركيا">تركيا</option>
                                                                    <option value="تركمانستان">تركمانستان</option>
                                                                    <option value="توفالو">توفالو</option>
                                                                    <option value="أوغندا">أوغندا</option>
                                                                    <option value="أوكرانيا">أوكرانيا</option>
                                                                    <option value="الإمارات العربية المتحدة">الإمارات العربية المتحدة</option>
                                                                    <option value="المملكة المتحدة">المملكة المتحدة</option>
                                                                    <option value="الولايات المتحدة">الولايات المتحدة</option>
                                                                    <option value="أوروغواي">أوروغواي</option>
                                                                    <option value="أوزبكستان">أوزبكستان</option>
                                                                    <option value="فانواتو">فانواتو</option>
                                                                    <option value="فنزويلا">فنزويلا</option>
                                                                    <option value="فيتنام">فيتنام</option>
                                                                    <option value="اليمن">اليمن</option>
                                                                    <option value="زامبيا">زامبيا</option>
                                                                    <option value="زيمبابوي">زيمبابوي</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>

                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>الجنسيه</label>
                                                                <select id="nationality" name="nationality" class="d-block" >
                                                                    <option value="">إختر</option>
                                                                    <option value="أفغانستان">أفغانستان</option>
                                                                    <option value="ألبانيا">ألبانيا</option>
                                                                    <option value="الجزائر">الجزائر</option>
                                                                    <option value="أندورا">أندورا</option>
                                                                    <option value="أنغولا">أنغولا</option>
                                                                    <option value="أنتيغوا وباربودا">أنتيغوا وباربودا</option>
                                                                    <option value="الأرجنتين">الأرجنتين</option>
                                                                    <option value="أرمينيا">أرمينيا</option>
                                                                    <option value="أستراليا">أستراليا</option>
                                                                    <option value="النمسا">النمسا</option>
                                                                    <option value="أذربيجان">أذربيجان</option>
                                                                    <option value="البهاما">البهاما</option>
                                                                    <option value="البحرين">البحرين</option>
                                                                    <option value="بنغلاديش">بنغلاديش</option>
                                                                    <option value="باربادوس">باربادوس</option>
                                                                    <option value="بيلاروسيا">بيلاروسيا</option>
                                                                    <option value="بلجيكا">بلجيكا</option>
                                                                    <option value="بليز">بليز</option>
                                                                    <option value="بنين">بنين</option>
                                                                    <option value="بوتان">بوتان</option>
                                                                    <option value="بوليفيا">بوليفيا</option>
                                                                    <option value="البوسنة والهرسك ">البوسنة والهرسك </option>
                                                                    <option value="بوتسوانا">بوتسوانا</option>
                                                                    <option value="البرازيل">البرازيل</option>
                                                                    <option value="بروناي">بروناي</option>
                                                                    <option value="بلغاريا">بلغاريا</option>
                                                                    <option value="بوركينا فاسو ">بوركينا فاسو </option>
                                                                    <option value="بوروندي">بوروندي</option>
                                                                    <option value="كمبوديا">كمبوديا</option>
                                                                    <option value="الكاميرون">الكاميرون</option>
                                                                    <option value="كندا">كندا</option>
                                                                    <option value="الرأس الأخضر">الرأس الأخضر</option>
                                                                    <option value="جمهورية أفريقيا الوسطى ">جمهورية أفريقيا الوسطى </option>
                                                                    <option value="تشاد">تشاد</option>
                                                                    <option value="تشيلي">تشيلي</option>
                                                                    <option value="الصين">الصين</option>
                                                                    <option value="كولومبيا">كولومبيا</option>
                                                                    <option value="جزر القمر">جزر القمر</option>
                                                                    <option value="كوستاريكا">كوستاريكا</option>
                                                                    <option value="ساحل العاج">ساحل العاج</option>
                                                                    <option value="كرواتيا">كرواتيا</option>
                                                                    <option value="كوبا">كوبا</option>
                                                                    <option value="قبرص">قبرص</option>
                                                                    <option value="التشيك">التشيك</option>
                                                                    <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
                                                                    <option value="الدنمارك">الدنمارك</option>
                                                                    <option value="جيبوتي">جيبوتي</option>
                                                                    <option value="دومينيكا">دومينيكا</option>
                                                                    <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
                                                                    <option value="تيمور الشرقية ">تيمور الشرقية </option>
                                                                    <option value="الإكوادور">الإكوادور</option>
                                                                    <option value="مصر">مصر</option>
                                                                    <option value="السلفادور">السلفادور</option>
                                                                    <option value="غينيا الاستوائية">غينيا الاستوائية</option>
                                                                    <option value="إريتريا">إريتريا</option>
                                                                    <option value="إستونيا">إستونيا</option>
                                                                    <option value="إثيوبيا">إثيوبيا</option>
                                                                    <option value="فيجي">فيجي</option>
                                                                    <option value="فنلندا">فنلندا</option>
                                                                    <option value="فرنسا">فرنسا</option>
                                                                    <option value="الغابون">الغابون</option>
                                                                    <option value="غامبيا">غامبيا</option>
                                                                    <option value="جورجيا">جورجيا</option>
                                                                    <option value="ألمانيا">ألمانيا</option>
                                                                    <option value="غانا">غانا</option>
                                                                    <option value="اليونان">اليونان</option>
                                                                    <option value="جرينادا">جرينادا</option>
                                                                    <option value="غواتيمالا">غواتيمالا</option>
                                                                    <option value="غينيا">غينيا</option>
                                                                    <option value="غينيا بيساو">غينيا بيساو</option>
                                                                    <option value="غويانا">غويانا</option>
                                                                    <option value="هايتي">هايتي</option>
                                                                    <option value="هندوراس">هندوراس</option>
                                                                    <option value="المجر">المجر</option>
                                                                    <option value="آيسلندا">آيسلندا</option>
                                                                    <option value="الهند">الهند</option>
                                                                    <option value="إندونيسيا">إندونيسيا</option>
                                                                    <option value="إيران">إيران</option>
                                                                    <option value="العراق">العراق</option>
                                                                    <option value="جمهورية أيرلندا ">جمهورية أيرلندا </option>
                                                                    <option value="فلسطين">فلسطين</option>
                                                                    <option value="إيطاليا">إيطاليا</option>
                                                                    <option value="جامايكا">جامايكا</option>
                                                                    <option value="اليابان">اليابان</option>
                                                                    <option value="الأردن">الأردن</option>
                                                                    <option value="كازاخستان">كازاخستان</option>
                                                                    <option value="كينيا">كينيا</option>
                                                                    <option value="كيريباتي">كيريباتي</option>
                                                                    <option value="الكويت">الكويت</option>
                                                                    <option value="قرغيزستان">قرغيزستان</option>
                                                                    <option value="لاوس">لاوس</option>
                                                                    <option value="لاوس">لاوس</option>
                                                                    <option value="لاتفيا">لاتفيا</option>
                                                                    <option value="لبنان">لبنان</option>
                                                                    <option value="ليسوتو">ليسوتو</option>
                                                                    <option value="ليبيريا">ليبيريا</option>
                                                                    <option value="ليبيا">ليبيا</option>
                                                                    <option value="ليختنشتاين">ليختنشتاين</option>
                                                                    <option value="ليتوانيا">ليتوانيا</option>
                                                                    <option value="لوكسمبورغ">لوكسمبورغ</option>
                                                                    <option value="مدغشقر">مدغشقر</option>
                                                                    <option value="مالاوي">مالاوي</option>
                                                                    <option value="ماليزيا">ماليزيا</option>
                                                                    <option value="جزر المالديف">جزر المالديف</option>
                                                                    <option value="مالي">مالي</option>
                                                                    <option value="مالطا">مالطا</option>
                                                                    <option value="جزر مارشال">جزر مارشال</option>
                                                                    <option value="موريتانيا">موريتانيا</option>
                                                                    <option value="موريشيوس">موريشيوس</option>
                                                                    <option value="المكسيك">المكسيك</option>
                                                                    <option value="مايكرونيزيا">مايكرونيزيا</option>
                                                                    <option value="مولدوفا">مولدوفا</option>
                                                                    <option value="موناكو">موناكو</option>
                                                                    <option value="منغوليا">منغوليا</option>
                                                                    <option value="الجبل الأسود">الجبل الأسود</option>
                                                                    <option value="المغرب">المغرب</option>
                                                                    <option value="موزمبيق">موزمبيق</option>
                                                                    <option value="بورما">بورما</option>
                                                                    <option value="ناميبيا">ناميبيا</option>
                                                                    <option value="ناورو">ناورو</option>
                                                                    <option value="نيبال">نيبال</option>
                                                                    <option value="هولندا">هولندا</option>
                                                                    <option value="نيوزيلندا">نيوزيلندا</option>
                                                                    <option value="نيكاراجوا">نيكاراجوا</option>
                                                                    <option value="النيجر">النيجر</option>
                                                                    <option value="نيجيريا">نيجيريا</option>
                                                                    <option value="كوريا الشمالية ">كوريا الشمالية </option>
                                                                    <option value="النرويج">النرويج</option>
                                                                    <option value="سلطنة عمان">سلطنة عمان</option>
                                                                    <option value="باكستان">باكستان</option>
                                                                    <option value="بالاو">بالاو</option>
                                                                    <option value="بنما">بنما</option>
                                                                    <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                                                                    <option value="باراغواي">باراغواي</option>
                                                                    <option value="بيرو">بيرو</option>
                                                                    <option value="الفلبين">الفلبين</option>
                                                                    <option value="بولندا">بولندا</option>
                                                                    <option value="البرتغال">البرتغال</option>
                                                                    <option value="قطر">قطر</option>
                                                                    <option value="جمهورية الكونغو">جمهورية الكونغو</option>
                                                                    <option value="جمهورية مقدونيا">جمهورية مقدونيا</option>
                                                                    <option value="رومانيا">رومانيا</option>
                                                                    <option value="روسيا">روسيا</option>
                                                                    <option value="رواندا">رواندا</option>
                                                                    <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
                                                                    <option value="سانت لوسيا">سانت لوسيا</option>
                                                                    <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>
                                                                    <option value="ساموا">ساموا</option>
                                                                    <option value="سان مارينو">سان مارينو</option>
                                                                    <option value="ساو تومي وبرينسيب">ساو تومي وبرينسيب</option>
                                                                    <option value="السعودية">السعودية</option>
                                                                    <option value="السنغال">السنغال</option>
                                                                    <option value="صربيا">صربيا</option>
                                                                    <option value="سيشيل">سيشيل</option>
                                                                    <option value="سيراليون">سيراليون</option>
                                                                    <option value="سنغافورة">سنغافورة</option>
                                                                    <option value="سلوفاكيا">سلوفاكيا</option>
                                                                    <option value="سلوفينيا">سلوفينيا</option>
                                                                    <option value="جزر سليمان">جزر سليمان</option>
                                                                    <option value="الصومال">الصومال</option>
                                                                    <option value="جنوب أفريقيا">جنوب أفريقيا</option>
                                                                    <option value="كوريا الجنوبية">كوريا الجنوبية</option>
                                                                    <option value="جنوب السودان">جنوب السودان</option>
                                                                    <option value="إسبانيا">إسبانيا</option>
                                                                    <option value="سريلانكا">سريلانكا</option>
                                                                    <option value="السودان">السودان</option>
                                                                    <option value="سورينام">سورينام</option>
                                                                    <option value="سوازيلاند">سوازيلاند</option>
                                                                    <option value="السويد">السويد</option>
                                                                    <option value="سويسرا">سويسرا</option>
                                                                    <option value="سوريا">سوريا</option>
                                                                    <option value="طاجيكستان">طاجيكستان</option>
                                                                    <option value="تنزانيا">تنزانيا</option>
                                                                    <option value="تايلاند">تايلاند</option>
                                                                    <option value="توغو">توغو</option>
                                                                    <option value="تونجا">تونجا</option>
                                                                    <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
                                                                    <option value="تونس">تونس</option>
                                                                    <option value="تركيا">تركيا</option>
                                                                    <option value="تركمانستان">تركمانستان</option>
                                                                    <option value="توفالو">توفالو</option>
                                                                    <option value="أوغندا">أوغندا</option>
                                                                    <option value="أوكرانيا">أوكرانيا</option>
                                                                    <option value="الإمارات العربية المتحدة">الإمارات العربية المتحدة</option>
                                                                    <option value="المملكة المتحدة">المملكة المتحدة</option>
                                                                    <option value="الولايات المتحدة">الولايات المتحدة</option>
                                                                    <option value="أوروغواي">أوروغواي</option>
                                                                    <option value="أوزبكستان">أوزبكستان</option>
                                                                    <option value="فانواتو">فانواتو</option>
                                                                    <option value="فنزويلا">فنزويلا</option>
                                                                    <option value="فيتنام">فيتنام</option>
                                                                    <option value="اليمن">اليمن</option>
                                                                    <option value="زامبيا">زامبيا</option>
                                                                    <option value="زيمبابوي">زيمبابوي</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>

                                                            </div>



                                                        </div>
                                                        <div class="row">

                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>المؤهل المطلوب</label>
                                                                <br>
                                                                <select name="degree_needed" id="degree_needed" class="d-block" >
                                                                    <option value="" >اختر</option>
                                                                    <option value="Bachelor">بكالوريوس</option>
                                                                    <option value="Master">الماجستير</option>
                                                                    <option value="PhD">الدكتوراه</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>

                                                        </div>
                                                        <div class="row align-items-end clearfix" id="show-bachelor-form" style="display:none">
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>المؤهل الأكاديمي قبل الجامعي</label>
                                                                <select  id="school_degree_name" class="d-block">
                                                                    <option value="">اختر</option>
                                                                    <option value="Intermediate Diploma">دبلوم متوسط</option>
                                                                    <option value="Diploma above average">دبلوم فوق المتوسط</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>سنة التخرج</label>
                                                                <select  id="school_degree_year" class="d-block">
                                                                    <option value="">اختر</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>بلد أكاديمي قبل الجامعة</label>
                                                                <select  id="school_degree_country" class="d-block">
                                                                    <option  value="">إختر</option>
                                                                    <option value="أفغانستان">أفغانستان</option>
                                                                    <option value="ألبانيا">ألبانيا</option>
                                                                    <option value="الجزائر">الجزائر</option>
                                                                    <option value="أندورا">أندورا</option>
                                                                    <option value="أنغولا">أنغولا</option>
                                                                    <option value="أنتيغوا وباربودا">أنتيغوا وباربودا</option>
                                                                    <option value="الأرجنتين">الأرجنتين</option>
                                                                    <option value="أرمينيا">أرمينيا</option>
                                                                    <option value="أستراليا">أستراليا</option>
                                                                    <option value="النمسا">النمسا</option>
                                                                    <option value="أذربيجان">أذربيجان</option>
                                                                    <option value="البهاما">البهاما</option>
                                                                    <option value="البحرين">البحرين</option>
                                                                    <option value="بنغلاديش">بنغلاديش</option>
                                                                    <option value="باربادوس">باربادوس</option>
                                                                    <option value="بيلاروسيا">بيلاروسيا</option>
                                                                    <option value="بلجيكا">بلجيكا</option>
                                                                    <option value="بليز">بليز</option>
                                                                    <option value="بنين">بنين</option>
                                                                    <option value="بوتان">بوتان</option>
                                                                    <option value="بوليفيا">بوليفيا</option>
                                                                    <option value="البوسنة والهرسك ">البوسنة والهرسك </option>
                                                                    <option value="بوتسوانا">بوتسوانا</option>
                                                                    <option value="البرازيل">البرازيل</option>
                                                                    <option value="بروناي">بروناي</option>
                                                                    <option value="بلغاريا">بلغاريا</option>
                                                                    <option value="بوركينا فاسو ">بوركينا فاسو </option>
                                                                    <option value="بوروندي">بوروندي</option>
                                                                    <option value="كمبوديا">كمبوديا</option>
                                                                    <option value="الكاميرون">الكاميرون</option>
                                                                    <option value="كندا">كندا</option>
                                                                    <option value="الرأس الأخضر">الرأس الأخضر</option>
                                                                    <option value="جمهورية أفريقيا الوسطى ">جمهورية أفريقيا الوسطى </option>
                                                                    <option value="تشاد">تشاد</option>
                                                                    <option value="تشيلي">تشيلي</option>
                                                                    <option value="الصين">الصين</option>
                                                                    <option value="كولومبيا">كولومبيا</option>
                                                                    <option value="جزر القمر">جزر القمر</option>
                                                                    <option value="كوستاريكا">كوستاريكا</option>
                                                                    <option value="ساحل العاج">ساحل العاج</option>
                                                                    <option value="كرواتيا">كرواتيا</option>
                                                                    <option value="كوبا">كوبا</option>
                                                                    <option value="قبرص">قبرص</option>
                                                                    <option value="التشيك">التشيك</option>
                                                                    <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
                                                                    <option value="الدنمارك">الدنمارك</option>
                                                                    <option value="جيبوتي">جيبوتي</option>
                                                                    <option value="دومينيكا">دومينيكا</option>
                                                                    <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
                                                                    <option value="تيمور الشرقية ">تيمور الشرقية </option>
                                                                    <option value="الإكوادور">الإكوادور</option>
                                                                    <option value="مصر">مصر</option>
                                                                    <option value="السلفادور">السلفادور</option>
                                                                    <option value="غينيا الاستوائية">غينيا الاستوائية</option>
                                                                    <option value="إريتريا">إريتريا</option>
                                                                    <option value="إستونيا">إستونيا</option>
                                                                    <option value="إثيوبيا">إثيوبيا</option>
                                                                    <option value="فيجي">فيجي</option>
                                                                    <option value="فنلندا">فنلندا</option>
                                                                    <option value="فرنسا">فرنسا</option>
                                                                    <option value="الغابون">الغابون</option>
                                                                    <option value="غامبيا">غامبيا</option>
                                                                    <option value="جورجيا">جورجيا</option>
                                                                    <option value="ألمانيا">ألمانيا</option>
                                                                    <option value="غانا">غانا</option>
                                                                    <option value="اليونان">اليونان</option>
                                                                    <option value="جرينادا">جرينادا</option>
                                                                    <option value="غواتيمالا">غواتيمالا</option>
                                                                    <option value="غينيا">غينيا</option>
                                                                    <option value="غينيا بيساو">غينيا بيساو</option>
                                                                    <option value="غويانا">غويانا</option>
                                                                    <option value="هايتي">هايتي</option>
                                                                    <option value="هندوراس">هندوراس</option>
                                                                    <option value="المجر">المجر</option>
                                                                    <option value="آيسلندا">آيسلندا</option>
                                                                    <option value="الهند">الهند</option>
                                                                    <option value="إندونيسيا">إندونيسيا</option>
                                                                    <option value="إيران">إيران</option>
                                                                    <option value="العراق">العراق</option>
                                                                    <option value="جمهورية أيرلندا ">جمهورية أيرلندا </option>
                                                                    <option value="فلسطين">فلسطين</option>
                                                                    <option value="إيطاليا">إيطاليا</option>
                                                                    <option value="جامايكا">جامايكا</option>
                                                                    <option value="اليابان">اليابان</option>
                                                                    <option value="الأردن">الأردن</option>
                                                                    <option value="كازاخستان">كازاخستان</option>
                                                                    <option value="كينيا">كينيا</option>
                                                                    <option value="كيريباتي">كيريباتي</option>
                                                                    <option value="الكويت">الكويت</option>
                                                                    <option value="قرغيزستان">قرغيزستان</option>
                                                                    <option value="لاوس">لاوس</option>
                                                                    <option value="لاوس">لاوس</option>
                                                                    <option value="لاتفيا">لاتفيا</option>
                                                                    <option value="لبنان">لبنان</option>
                                                                    <option value="ليسوتو">ليسوتو</option>
                                                                    <option value="ليبيريا">ليبيريا</option>
                                                                    <option value="ليبيا">ليبيا</option>
                                                                    <option value="ليختنشتاين">ليختنشتاين</option>
                                                                    <option value="ليتوانيا">ليتوانيا</option>
                                                                    <option value="لوكسمبورغ">لوكسمبورغ</option>
                                                                    <option value="مدغشقر">مدغشقر</option>
                                                                    <option value="مالاوي">مالاوي</option>
                                                                    <option value="ماليزيا">ماليزيا</option>
                                                                    <option value="جزر المالديف">جزر المالديف</option>
                                                                    <option value="مالي">مالي</option>
                                                                    <option value="مالطا">مالطا</option>
                                                                    <option value="جزر مارشال">جزر مارشال</option>
                                                                    <option value="موريتانيا">موريتانيا</option>
                                                                    <option value="موريشيوس">موريشيوس</option>
                                                                    <option value="المكسيك">المكسيك</option>
                                                                    <option value="مايكرونيزيا">مايكرونيزيا</option>
                                                                    <option value="مولدوفا">مولدوفا</option>
                                                                    <option value="موناكو">موناكو</option>
                                                                    <option value="منغوليا">منغوليا</option>
                                                                    <option value="الجبل الأسود">الجبل الأسود</option>
                                                                    <option value="المغرب">المغرب</option>
                                                                    <option value="موزمبيق">موزمبيق</option>
                                                                    <option value="بورما">بورما</option>
                                                                    <option value="ناميبيا">ناميبيا</option>
                                                                    <option value="ناورو">ناورو</option>
                                                                    <option value="نيبال">نيبال</option>
                                                                    <option value="هولندا">هولندا</option>
                                                                    <option value="نيوزيلندا">نيوزيلندا</option>
                                                                    <option value="نيكاراجوا">نيكاراجوا</option>
                                                                    <option value="النيجر">النيجر</option>
                                                                    <option value="نيجيريا">نيجيريا</option>
                                                                    <option value="كوريا الشمالية ">كوريا الشمالية </option>
                                                                    <option value="النرويج">النرويج</option>
                                                                    <option value="سلطنة عمان">سلطنة عمان</option>
                                                                    <option value="باكستان">باكستان</option>
                                                                    <option value="بالاو">بالاو</option>
                                                                    <option value="بنما">بنما</option>
                                                                    <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                                                                    <option value="باراغواي">باراغواي</option>
                                                                    <option value="بيرو">بيرو</option>
                                                                    <option value="الفلبين">الفلبين</option>
                                                                    <option value="بولندا">بولندا</option>
                                                                    <option value="البرتغال">البرتغال</option>
                                                                    <option value="قطر">قطر</option>
                                                                    <option value="جمهورية الكونغو">جمهورية الكونغو</option>
                                                                    <option value="جمهورية مقدونيا">جمهورية مقدونيا</option>
                                                                    <option value="رومانيا">رومانيا</option>
                                                                    <option value="روسيا">روسيا</option>
                                                                    <option value="رواندا">رواندا</option>
                                                                    <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
                                                                    <option value="سانت لوسيا">سانت لوسيا</option>
                                                                    <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>
                                                                    <option value="ساموا">ساموا</option>
                                                                    <option value="سان مارينو">سان مارينو</option>
                                                                    <option value="ساو تومي وبرينسيب">ساو تومي وبرينسيب</option>
                                                                    <option value="السعودية">السعودية</option>
                                                                    <option value="السنغال">السنغال</option>
                                                                    <option value="صربيا">صربيا</option>
                                                                    <option value="سيشيل">سيشيل</option>
                                                                    <option value="سيراليون">سيراليون</option>
                                                                    <option value="سنغافورة">سنغافورة</option>
                                                                    <option value="سلوفاكيا">سلوفاكيا</option>
                                                                    <option value="سلوفينيا">سلوفينيا</option>
                                                                    <option value="جزر سليمان">جزر سليمان</option>
                                                                    <option value="الصومال">الصومال</option>
                                                                    <option value="جنوب أفريقيا">جنوب أفريقيا</option>
                                                                    <option value="كوريا الجنوبية">كوريا الجنوبية</option>
                                                                    <option value="جنوب السودان">جنوب السودان</option>
                                                                    <option value="إسبانيا">إسبانيا</option>
                                                                    <option value="سريلانكا">سريلانكا</option>
                                                                    <option value="السودان">السودان</option>
                                                                    <option value="سورينام">سورينام</option>
                                                                    <option value="سوازيلاند">سوازيلاند</option>
                                                                    <option value="السويد">السويد</option>
                                                                    <option value="سويسرا">سويسرا</option>
                                                                    <option value="سوريا">سوريا</option>
                                                                    <option value="طاجيكستان">طاجيكستان</option>
                                                                    <option value="تنزانيا">تنزانيا</option>
                                                                    <option value="تايلاند">تايلاند</option>
                                                                    <option value="توغو">توغو</option>
                                                                    <option value="تونجا">تونجا</option>
                                                                    <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
                                                                    <option value="تونس">تونس</option>
                                                                    <option value="تركيا">تركيا</option>
                                                                    <option value="تركمانستان">تركمانستان</option>
                                                                    <option value="توفالو">توفالو</option>
                                                                    <option value="أوغندا">أوغندا</option>
                                                                    <option value="أوكرانيا">أوكرانيا</option>
                                                                    <option value="الإمارات العربية المتحدة">الإمارات العربية المتحدة</option>
                                                                    <option value="المملكة المتحدة">المملكة المتحدة</option>
                                                                    <option value="الولايات المتحدة">الولايات المتحدة</option>
                                                                    <option value="أوروغواي">أوروغواي</option>
                                                                    <option value="أوزبكستان">أوزبكستان</option>
                                                                    <option value="فانواتو">فانواتو</option>
                                                                    <option value="فنزويلا">فنزويلا</option>
                                                                    <option value="فيتنام">فيتنام</option>
                                                                    <option value="اليمن">اليمن</option>
                                                                    <option value="زامبيا">زامبيا</option>
                                                                    <option value="زيمبابوي">زيمبابوي</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                                                                            </div>

                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>النسبة المئوية %</label>
                                                                <input type="number" class="d-block" id="percentage"  step=".01" placeholder="اكتب النسبة المئوية">
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>نظام التعليم</label>
                                                                <select class="d-block"  id="education_system">
                                                                    <option value="">اختر</option>
                                                                    <option value="علمي علوم">علمي علوم</option>
                                                                    <option value="علمي رياضة">علمي رياضة</option>
                                                                    <option value="ادبي">ادبي</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                                                                            </div>
                                                        </div>

                                                        <div class="row align-items-end clearfix" id="show-master-form" style="display:none">
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>المؤهل الجامعي</label>
                                                                <select  id="bachelor_degree_name" class="d-block">
                                                                    <option value="">اختر</option>
                                                                    <option value="Bachelor">البكالوريس</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>سنة التخرج الجامعية</label>
                                                                <select  id="bachelor_degree_year" class="d-block">
                                                                    <option value=""> اختر</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>بلد الجامعة</label>
                                                                <select id="bachelor_degree_country"  class="d-block">
                                                                    <option  disabled="" value="" selected="">إختر</option>
                                                                    <option value="أفغانستان">أفغانستان</option>
                                                                    <option value="ألبانيا">ألبانيا</option>
                                                                    <option value="الجزائر">الجزائر</option>
                                                                    <option value="أندورا">أندورا</option>
                                                                    <option value="أنغولا">أنغولا</option>
                                                                    <option value="أنتيغوا وباربودا">أنتيغوا وباربودا</option>
                                                                    <option value="الأرجنتين">الأرجنتين</option>
                                                                    <option value="أرمينيا">أرمينيا</option>
                                                                    <option value="أستراليا">أستراليا</option>
                                                                    <option value="النمسا">النمسا</option>
                                                                    <option value="أذربيجان">أذربيجان</option>
                                                                    <option value="البهاما">البهاما</option>
                                                                    <option value="البحرين">البحرين</option>
                                                                    <option value="بنغلاديش">بنغلاديش</option>
                                                                    <option value="باربادوس">باربادوس</option>
                                                                    <option value="بيلاروسيا">بيلاروسيا</option>
                                                                    <option value="بلجيكا">بلجيكا</option>
                                                                    <option value="بليز">بليز</option>
                                                                    <option value="بنين">بنين</option>
                                                                    <option value="بوتان">بوتان</option>
                                                                    <option value="بوليفيا">بوليفيا</option>
                                                                    <option value="البوسنة والهرسك ">البوسنة والهرسك </option>
                                                                    <option value="بوتسوانا">بوتسوانا</option>
                                                                    <option value="البرازيل">البرازيل</option>
                                                                    <option value="بروناي">بروناي</option>
                                                                    <option value="بلغاريا">بلغاريا</option>
                                                                    <option value="بوركينا فاسو ">بوركينا فاسو </option>
                                                                    <option value="بوروندي">بوروندي</option>
                                                                    <option value="كمبوديا">كمبوديا</option>
                                                                    <option value="الكاميرون">الكاميرون</option>
                                                                    <option value="كندا">كندا</option>
                                                                    <option value="الرأس الأخضر">الرأس الأخضر</option>
                                                                    <option value="جمهورية أفريقيا الوسطى ">جمهورية أفريقيا الوسطى </option>
                                                                    <option value="تشاد">تشاد</option>
                                                                    <option value="تشيلي">تشيلي</option>
                                                                    <option value="الصين">الصين</option>
                                                                    <option value="كولومبيا">كولومبيا</option>
                                                                    <option value="جزر القمر">جزر القمر</option>
                                                                    <option value="كوستاريكا">كوستاريكا</option>
                                                                    <option value="ساحل العاج">ساحل العاج</option>
                                                                    <option value="كرواتيا">كرواتيا</option>
                                                                    <option value="كوبا">كوبا</option>
                                                                    <option value="قبرص">قبرص</option>
                                                                    <option value="التشيك">التشيك</option>
                                                                    <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
                                                                    <option value="الدنمارك">الدنمارك</option>
                                                                    <option value="جيبوتي">جيبوتي</option>
                                                                    <option value="دومينيكا">دومينيكا</option>
                                                                    <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
                                                                    <option value="تيمور الشرقية ">تيمور الشرقية </option>
                                                                    <option value="الإكوادور">الإكوادور</option>
                                                                    <option value="مصر">مصر</option>
                                                                    <option value="السلفادور">السلفادور</option>
                                                                    <option value="غينيا الاستوائية">غينيا الاستوائية</option>
                                                                    <option value="إريتريا">إريتريا</option>
                                                                    <option value="إستونيا">إستونيا</option>
                                                                    <option value="إثيوبيا">إثيوبيا</option>
                                                                    <option value="فيجي">فيجي</option>
                                                                    <option value="فنلندا">فنلندا</option>
                                                                    <option value="فرنسا">فرنسا</option>
                                                                    <option value="الغابون">الغابون</option>
                                                                    <option value="غامبيا">غامبيا</option>
                                                                    <option value="جورجيا">جورجيا</option>
                                                                    <option value="ألمانيا">ألمانيا</option>
                                                                    <option value="غانا">غانا</option>
                                                                    <option value="اليونان">اليونان</option>
                                                                    <option value="جرينادا">جرينادا</option>
                                                                    <option value="غواتيمالا">غواتيمالا</option>
                                                                    <option value="غينيا">غينيا</option>
                                                                    <option value="غينيا بيساو">غينيا بيساو</option>
                                                                    <option value="غويانا">غويانا</option>
                                                                    <option value="هايتي">هايتي</option>
                                                                    <option value="هندوراس">هندوراس</option>
                                                                    <option value="المجر">المجر</option>
                                                                    <option value="آيسلندا">آيسلندا</option>
                                                                    <option value="الهند">الهند</option>
                                                                    <option value="إندونيسيا">إندونيسيا</option>
                                                                    <option value="إيران">إيران</option>
                                                                    <option value="العراق">العراق</option>
                                                                    <option value="جمهورية أيرلندا ">جمهورية أيرلندا </option>
                                                                    <option value="فلسطين">فلسطين</option>
                                                                    <option value="إيطاليا">إيطاليا</option>
                                                                    <option value="جامايكا">جامايكا</option>
                                                                    <option value="اليابان">اليابان</option>
                                                                    <option value="الأردن">الأردن</option>
                                                                    <option value="كازاخستان">كازاخستان</option>
                                                                    <option value="كينيا">كينيا</option>
                                                                    <option value="كيريباتي">كيريباتي</option>
                                                                    <option value="الكويت">الكويت</option>
                                                                    <option value="قرغيزستان">قرغيزستان</option>
                                                                    <option value="لاوس">لاوس</option>
                                                                    <option value="لاوس">لاوس</option>
                                                                    <option value="لاتفيا">لاتفيا</option>
                                                                    <option value="لبنان">لبنان</option>
                                                                    <option value="ليسوتو">ليسوتو</option>
                                                                    <option value="ليبيريا">ليبيريا</option>
                                                                    <option value="ليبيا">ليبيا</option>
                                                                    <option value="ليختنشتاين">ليختنشتاين</option>
                                                                    <option value="ليتوانيا">ليتوانيا</option>
                                                                    <option value="لوكسمبورغ">لوكسمبورغ</option>
                                                                    <option value="مدغشقر">مدغشقر</option>
                                                                    <option value="مالاوي">مالاوي</option>
                                                                    <option value="ماليزيا">ماليزيا</option>
                                                                    <option value="جزر المالديف">جزر المالديف</option>
                                                                    <option value="مالي">مالي</option>
                                                                    <option value="مالطا">مالطا</option>
                                                                    <option value="جزر مارشال">جزر مارشال</option>
                                                                    <option value="موريتانيا">موريتانيا</option>
                                                                    <option value="موريشيوس">موريشيوس</option>
                                                                    <option value="المكسيك">المكسيك</option>
                                                                    <option value="مايكرونيزيا">مايكرونيزيا</option>
                                                                    <option value="مولدوفا">مولدوفا</option>
                                                                    <option value="موناكو">موناكو</option>
                                                                    <option value="منغوليا">منغوليا</option>
                                                                    <option value="الجبل الأسود">الجبل الأسود</option>
                                                                    <option value="المغرب">المغرب</option>
                                                                    <option value="موزمبيق">موزمبيق</option>
                                                                    <option value="بورما">بورما</option>
                                                                    <option value="ناميبيا">ناميبيا</option>
                                                                    <option value="ناورو">ناورو</option>
                                                                    <option value="نيبال">نيبال</option>
                                                                    <option value="هولندا">هولندا</option>
                                                                    <option value="نيوزيلندا">نيوزيلندا</option>
                                                                    <option value="نيكاراجوا">نيكاراجوا</option>
                                                                    <option value="النيجر">النيجر</option>
                                                                    <option value="نيجيريا">نيجيريا</option>
                                                                    <option value="كوريا الشمالية ">كوريا الشمالية </option>
                                                                    <option value="النرويج">النرويج</option>
                                                                    <option value="سلطنة عمان">سلطنة عمان</option>
                                                                    <option value="باكستان">باكستان</option>
                                                                    <option value="بالاو">بالاو</option>
                                                                    <option value="بنما">بنما</option>
                                                                    <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                                                                    <option value="باراغواي">باراغواي</option>
                                                                    <option value="بيرو">بيرو</option>
                                                                    <option value="الفلبين">الفلبين</option>
                                                                    <option value="بولندا">بولندا</option>
                                                                    <option value="البرتغال">البرتغال</option>
                                                                    <option value="قطر">قطر</option>
                                                                    <option value="جمهورية الكونغو">جمهورية الكونغو</option>
                                                                    <option value="جمهورية مقدونيا">جمهورية مقدونيا</option>
                                                                    <option value="رومانيا">رومانيا</option>
                                                                    <option value="روسيا">روسيا</option>
                                                                    <option value="رواندا">رواندا</option>
                                                                    <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
                                                                    <option value="سانت لوسيا">سانت لوسيا</option>
                                                                    <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>
                                                                    <option value="ساموا">ساموا</option>
                                                                    <option value="سان مارينو">سان مارينو</option>
                                                                    <option value="ساو تومي وبرينسيب">ساو تومي وبرينسيب</option>
                                                                    <option value="السعودية">السعودية</option>
                                                                    <option value="السنغال">السنغال</option>
                                                                    <option value="صربيا">صربيا</option>
                                                                    <option value="سيشيل">سيشيل</option>
                                                                    <option value="سيراليون">سيراليون</option>
                                                                    <option value="سنغافورة">سنغافورة</option>
                                                                    <option value="سلوفاكيا">سلوفاكيا</option>
                                                                    <option value="سلوفينيا">سلوفينيا</option>
                                                                    <option value="جزر سليمان">جزر سليمان</option>
                                                                    <option value="الصومال">الصومال</option>
                                                                    <option value="جنوب أفريقيا">جنوب أفريقيا</option>
                                                                    <option value="كوريا الجنوبية">كوريا الجنوبية</option>
                                                                    <option value="جنوب السودان">جنوب السودان</option>
                                                                    <option value="إسبانيا">إسبانيا</option>
                                                                    <option value="سريلانكا">سريلانكا</option>
                                                                    <option value="السودان">السودان</option>
                                                                    <option value="سورينام">سورينام</option>
                                                                    <option value="سوازيلاند">سوازيلاند</option>
                                                                    <option value="السويد">السويد</option>
                                                                    <option value="سويسرا">سويسرا</option>
                                                                    <option value="سوريا">سوريا</option>
                                                                    <option value="طاجيكستان">طاجيكستان</option>
                                                                    <option value="تنزانيا">تنزانيا</option>
                                                                    <option value="تايلاند">تايلاند</option>
                                                                    <option value="توغو">توغو</option>
                                                                    <option value="تونجا">تونجا</option>
                                                                    <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
                                                                    <option value="تونس">تونس</option>
                                                                    <option value="تركيا">تركيا</option>
                                                                    <option value="تركمانستان">تركمانستان</option>
                                                                    <option value="توفالو">توفالو</option>
                                                                    <option value="أوغندا">أوغندا</option>
                                                                    <option value="أوكرانيا">أوكرانيا</option>
                                                                    <option value="الإمارات العربية المتحدة">الإمارات العربية المتحدة</option>
                                                                    <option value="المملكة المتحدة">المملكة المتحدة</option>
                                                                    <option value="الولايات المتحدة">الولايات المتحدة</option>
                                                                    <option value="أوروغواي">أوروغواي</option>
                                                                    <option value="أوزبكستان">أوزبكستان</option>
                                                                    <option value="فانواتو">فانواتو</option>
                                                                    <option value="فنزويلا">فنزويلا</option>
                                                                    <option value="فيتنام">فيتنام</option>
                                                                    <option value="اليمن">اليمن</option>
                                                                    <option value="زامبيا">زامبيا</option>
                                                                    <option value="زيمبابوي">زيمبابوي</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>اسم الجامعة</label>
                                                                <input type="text"  id="bachelor_university_name" class="d-block">
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>اسم الكلية</label>
                                                                <input type="text"  id="bachelor_faculty_name" class="d-block">
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>

                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>المعدل التراكمي</label>
                                                                <input type="number" class="d-block" id="bachelor_gpa_precentage"  step=".01" placeholder="اكتب المعدل التراكمي">
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>نظام التعليم</label>
                                                                <select class="d-block" id="bachelor_education_system">
                                                                    <option value="">اختر</option>
                                                                    <option value="انتظام">انتظام</option>
                                                                    <option value="انتساب">انتساب</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                        </div>

                                                        <div class="row align-items-end clearfix" id="show-phd-form" style="display:none">
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>المؤهل الجامعي</label>
                                                                <select  id="master_degree_name" class="d-block">
                                                                    <option value="">اختر</option>
                                                                    <option value="Master">الماجستير</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>سنة التخرج الجامعية</label>
                                                                <select  id="master_degree_year" class="d-block">
                                                                    <option value=""> اختر</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2006">2006</option>
                                                                    <option value="2005">2005</option>
                                                                    <option value="2004">2004</option>
                                                                    <option value="2003">2003</option>
                                                                    <option value="2002">2002</option>
                                                                    <option value="2001">2001</option>
                                                                    <option value="2000">2000</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>بلد الجامعة</label>
                                                                <select id="master_degree_country"  class="d-block">
                                                                    <option  disabled="" value="" selected="">إختر</option>
                                                                    <option value="أفغانستان">أفغانستان</option>
                                                                    <option value="ألبانيا">ألبانيا</option>
                                                                    <option value="الجزائر">الجزائر</option>
                                                                    <option value="أندورا">أندورا</option>
                                                                    <option value="أنغولا">أنغولا</option>
                                                                    <option value="أنتيغوا وباربودا">أنتيغوا وباربودا</option>
                                                                    <option value="الأرجنتين">الأرجنتين</option>
                                                                    <option value="أرمينيا">أرمينيا</option>
                                                                    <option value="أستراليا">أستراليا</option>
                                                                    <option value="النمسا">النمسا</option>
                                                                    <option value="أذربيجان">أذربيجان</option>
                                                                    <option value="البهاما">البهاما</option>
                                                                    <option value="البحرين">البحرين</option>
                                                                    <option value="بنغلاديش">بنغلاديش</option>
                                                                    <option value="باربادوس">باربادوس</option>
                                                                    <option value="بيلاروسيا">بيلاروسيا</option>
                                                                    <option value="بلجيكا">بلجيكا</option>
                                                                    <option value="بليز">بليز</option>
                                                                    <option value="بنين">بنين</option>
                                                                    <option value="بوتان">بوتان</option>
                                                                    <option value="بوليفيا">بوليفيا</option>
                                                                    <option value="البوسنة والهرسك ">البوسنة والهرسك </option>
                                                                    <option value="بوتسوانا">بوتسوانا</option>
                                                                    <option value="البرازيل">البرازيل</option>
                                                                    <option value="بروناي">بروناي</option>
                                                                    <option value="بلغاريا">بلغاريا</option>
                                                                    <option value="بوركينا فاسو ">بوركينا فاسو </option>
                                                                    <option value="بوروندي">بوروندي</option>
                                                                    <option value="كمبوديا">كمبوديا</option>
                                                                    <option value="الكاميرون">الكاميرون</option>
                                                                    <option value="كندا">كندا</option>
                                                                    <option value="الرأس الأخضر">الرأس الأخضر</option>
                                                                    <option value="جمهورية أفريقيا الوسطى ">جمهورية أفريقيا الوسطى </option>
                                                                    <option value="تشاد">تشاد</option>
                                                                    <option value="تشيلي">تشيلي</option>
                                                                    <option value="الصين">الصين</option>
                                                                    <option value="كولومبيا">كولومبيا</option>
                                                                    <option value="جزر القمر">جزر القمر</option>
                                                                    <option value="كوستاريكا">كوستاريكا</option>
                                                                    <option value="ساحل العاج">ساحل العاج</option>
                                                                    <option value="كرواتيا">كرواتيا</option>
                                                                    <option value="كوبا">كوبا</option>
                                                                    <option value="قبرص">قبرص</option>
                                                                    <option value="التشيك">التشيك</option>
                                                                    <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
                                                                    <option value="الدنمارك">الدنمارك</option>
                                                                    <option value="جيبوتي">جيبوتي</option>
                                                                    <option value="دومينيكا">دومينيكا</option>
                                                                    <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
                                                                    <option value="تيمور الشرقية ">تيمور الشرقية </option>
                                                                    <option value="الإكوادور">الإكوادور</option>
                                                                    <option value="مصر">مصر</option>
                                                                    <option value="السلفادور">السلفادور</option>
                                                                    <option value="غينيا الاستوائية">غينيا الاستوائية</option>
                                                                    <option value="إريتريا">إريتريا</option>
                                                                    <option value="إستونيا">إستونيا</option>
                                                                    <option value="إثيوبيا">إثيوبيا</option>
                                                                    <option value="فيجي">فيجي</option>
                                                                    <option value="فنلندا">فنلندا</option>
                                                                    <option value="فرنسا">فرنسا</option>
                                                                    <option value="الغابون">الغابون</option>
                                                                    <option value="غامبيا">غامبيا</option>
                                                                    <option value="جورجيا">جورجيا</option>
                                                                    <option value="ألمانيا">ألمانيا</option>
                                                                    <option value="غانا">غانا</option>
                                                                    <option value="اليونان">اليونان</option>
                                                                    <option value="جرينادا">جرينادا</option>
                                                                    <option value="غواتيمالا">غواتيمالا</option>
                                                                    <option value="غينيا">غينيا</option>
                                                                    <option value="غينيا بيساو">غينيا بيساو</option>
                                                                    <option value="غويانا">غويانا</option>
                                                                    <option value="هايتي">هايتي</option>
                                                                    <option value="هندوراس">هندوراس</option>
                                                                    <option value="المجر">المجر</option>
                                                                    <option value="آيسلندا">آيسلندا</option>
                                                                    <option value="الهند">الهند</option>
                                                                    <option value="إندونيسيا">إندونيسيا</option>
                                                                    <option value="إيران">إيران</option>
                                                                    <option value="العراق">العراق</option>
                                                                    <option value="جمهورية أيرلندا ">جمهورية أيرلندا </option>
                                                                    <option value="فلسطين">فلسطين</option>
                                                                    <option value="إيطاليا">إيطاليا</option>
                                                                    <option value="جامايكا">جامايكا</option>
                                                                    <option value="اليابان">اليابان</option>
                                                                    <option value="الأردن">الأردن</option>
                                                                    <option value="كازاخستان">كازاخستان</option>
                                                                    <option value="كينيا">كينيا</option>
                                                                    <option value="كيريباتي">كيريباتي</option>
                                                                    <option value="الكويت">الكويت</option>
                                                                    <option value="قرغيزستان">قرغيزستان</option>
                                                                    <option value="لاوس">لاوس</option>
                                                                    <option value="لاوس">لاوس</option>
                                                                    <option value="لاتفيا">لاتفيا</option>
                                                                    <option value="لبنان">لبنان</option>
                                                                    <option value="ليسوتو">ليسوتو</option>
                                                                    <option value="ليبيريا">ليبيريا</option>
                                                                    <option value="ليبيا">ليبيا</option>
                                                                    <option value="ليختنشتاين">ليختنشتاين</option>
                                                                    <option value="ليتوانيا">ليتوانيا</option>
                                                                    <option value="لوكسمبورغ">لوكسمبورغ</option>
                                                                    <option value="مدغشقر">مدغشقر</option>
                                                                    <option value="مالاوي">مالاوي</option>
                                                                    <option value="ماليزيا">ماليزيا</option>
                                                                    <option value="جزر المالديف">جزر المالديف</option>
                                                                    <option value="مالي">مالي</option>
                                                                    <option value="مالطا">مالطا</option>
                                                                    <option value="جزر مارشال">جزر مارشال</option>
                                                                    <option value="موريتانيا">موريتانيا</option>
                                                                    <option value="موريشيوس">موريشيوس</option>
                                                                    <option value="المكسيك">المكسيك</option>
                                                                    <option value="مايكرونيزيا">مايكرونيزيا</option>
                                                                    <option value="مولدوفا">مولدوفا</option>
                                                                    <option value="موناكو">موناكو</option>
                                                                    <option value="منغوليا">منغوليا</option>
                                                                    <option value="الجبل الأسود">الجبل الأسود</option>
                                                                    <option value="المغرب">المغرب</option>
                                                                    <option value="موزمبيق">موزمبيق</option>
                                                                    <option value="بورما">بورما</option>
                                                                    <option value="ناميبيا">ناميبيا</option>
                                                                    <option value="ناورو">ناورو</option>
                                                                    <option value="نيبال">نيبال</option>
                                                                    <option value="هولندا">هولندا</option>
                                                                    <option value="نيوزيلندا">نيوزيلندا</option>
                                                                    <option value="نيكاراجوا">نيكاراجوا</option>
                                                                    <option value="النيجر">النيجر</option>
                                                                    <option value="نيجيريا">نيجيريا</option>
                                                                    <option value="كوريا الشمالية ">كوريا الشمالية </option>
                                                                    <option value="النرويج">النرويج</option>
                                                                    <option value="سلطنة عمان">سلطنة عمان</option>
                                                                    <option value="باكستان">باكستان</option>
                                                                    <option value="بالاو">بالاو</option>
                                                                    <option value="بنما">بنما</option>
                                                                    <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                                                                    <option value="باراغواي">باراغواي</option>
                                                                    <option value="بيرو">بيرو</option>
                                                                    <option value="الفلبين">الفلبين</option>
                                                                    <option value="بولندا">بولندا</option>
                                                                    <option value="البرتغال">البرتغال</option>
                                                                    <option value="قطر">قطر</option>
                                                                    <option value="جمهورية الكونغو">جمهورية الكونغو</option>
                                                                    <option value="جمهورية مقدونيا">جمهورية مقدونيا</option>
                                                                    <option value="رومانيا">رومانيا</option>
                                                                    <option value="روسيا">روسيا</option>
                                                                    <option value="رواندا">رواندا</option>
                                                                    <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
                                                                    <option value="سانت لوسيا">سانت لوسيا</option>
                                                                    <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>
                                                                    <option value="ساموا">ساموا</option>
                                                                    <option value="سان مارينو">سان مارينو</option>
                                                                    <option value="ساو تومي وبرينسيب">ساو تومي وبرينسيب</option>
                                                                    <option value="السعودية">السعودية</option>
                                                                    <option value="السنغال">السنغال</option>
                                                                    <option value="صربيا">صربيا</option>
                                                                    <option value="سيشيل">سيشيل</option>
                                                                    <option value="سيراليون">سيراليون</option>
                                                                    <option value="سنغافورة">سنغافورة</option>
                                                                    <option value="سلوفاكيا">سلوفاكيا</option>
                                                                    <option value="سلوفينيا">سلوفينيا</option>
                                                                    <option value="جزر سليمان">جزر سليمان</option>
                                                                    <option value="الصومال">الصومال</option>
                                                                    <option value="جنوب أفريقيا">جنوب أفريقيا</option>
                                                                    <option value="كوريا الجنوبية">كوريا الجنوبية</option>
                                                                    <option value="جنوب السودان">جنوب السودان</option>
                                                                    <option value="إسبانيا">إسبانيا</option>
                                                                    <option value="سريلانكا">سريلانكا</option>
                                                                    <option value="السودان">السودان</option>
                                                                    <option value="سورينام">سورينام</option>
                                                                    <option value="سوازيلاند">سوازيلاند</option>
                                                                    <option value="السويد">السويد</option>
                                                                    <option value="سويسرا">سويسرا</option>
                                                                    <option value="سوريا">سوريا</option>
                                                                    <option value="طاجيكستان">طاجيكستان</option>
                                                                    <option value="تنزانيا">تنزانيا</option>
                                                                    <option value="تايلاند">تايلاند</option>
                                                                    <option value="توغو">توغو</option>
                                                                    <option value="تونجا">تونجا</option>
                                                                    <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
                                                                    <option value="تونس">تونس</option>
                                                                    <option value="تركيا">تركيا</option>
                                                                    <option value="تركمانستان">تركمانستان</option>
                                                                    <option value="توفالو">توفالو</option>
                                                                    <option value="أوغندا">أوغندا</option>
                                                                    <option value="أوكرانيا">أوكرانيا</option>
                                                                    <option value="الإمارات العربية المتحدة">الإمارات العربية المتحدة</option>
                                                                    <option value="المملكة المتحدة">المملكة المتحدة</option>
                                                                    <option value="الولايات المتحدة">الولايات المتحدة</option>
                                                                    <option value="أوروغواي">أوروغواي</option>
                                                                    <option value="أوزبكستان">أوزبكستان</option>
                                                                    <option value="فانواتو">فانواتو</option>
                                                                    <option value="فنزويلا">فنزويلا</option>
                                                                    <option value="فيتنام">فيتنام</option>
                                                                    <option value="اليمن">اليمن</option>
                                                                    <option value="زامبيا">زامبيا</option>
                                                                    <option value="زيمبابوي">زيمبابوي</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>اسم الجامعة</label>
                                                                <input type="text"  id="master_university_name" class="d-block">
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>اسم الكلية</label>
                                                                <input type="text"  id="master_faculty_name" class="d-block">
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>اسم القسم</label>
                                                                <input type="text"  id="master_name" class="d-block">
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            <div class="form-group form-control-validation col-lg-6">
                                                                <label>المعدل التراكمي</label>
                                                                <input type="number" class="d-block" id="master_gpa_precentage"  step=".01" placeholder="اكتب المعدل التراكمي">
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>


                                                            </div>

                                                        </div>



                                                        <div class="col-12">
                                                            <button class="btn btn-success w-100" name="" type="submit">ارسل</button>
                                                        </div>


                                                    </form>

                                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Star Footer
        ============================================= -->
        <footer class="bg-dark text-light">
            <div class="container">
                <div class="f-items py-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 item">
                            <div class="f-item about">
                                <h4 class="widget-title">من نحن
                                </h4>

                                <p>
                                    إديوجيت هو الحل الأمثل للطلاب لإيجاد فرصة مناسبة للدراسة داخل وخارج الإمارات، كما يوفر معارض دولية للتعليم ويجمع المؤسسات التعليمية المختلفة
                                </p>


                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 item">
                            <div class="f-item link">
                                <h4 class="widget-title">الأحداث</h4>
                                <ul>
                                    <li class="dropdown">
                                        <a href="http://digitalbondmena.com/edugate/ar/%D8%B4%D8%AA%D8%A7%D8%A1-2019" class="dropdown-toggle" data-toggle="dropdown" >شتاء 2019</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="http://digitalbondmena.com/edugate/ar/%D8%B5%D9%8A%D9%81-2019" class="dropdown-toggle" data-toggle="dropdown" >صيف 2019</a>
                                        
                                    </li>


                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 item">
                            <div class="f-item link">
                                <h4 class="widget-title">روابط
                                </h4>
                                <ul>
                                <li>
                                    <a href="http://digitalbondmena.com/edugate/ar" > الرئيسية</a>
                                </li>
                                <li>
                                    <a href="http://digitalbondmena.com/edugate/ar/about-us">من نحن
                                    </a>
                                </li>
                                <li>
                                <a href="http://digitalbondmena.com/edugate/ar/clients">شركاؤنا
                                </a>
                                </li>
                                    
                                <li>
                                    <a href="http://digitalbondmena.com/edugate/ar/contact-us">تواصل معنا
                                    </a>
                                </li>
    
                                <li>
                                    <a href="http://digitalbondmena.com/edugate/ar/media">الاعلام</a>
                                </li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 item">
                            <div class="f-item contact">
                                <h4 class="widget-title">تواصل معنا</h4>
                                <div class="address">
                                    <ul>
                                        <li>
                                            <strong>البريد الإلكتروني:</strong>Sales@edugateuae.com
                                        </li>
                                        
                                        <li>
                                            <strong>العنوان
                                                :</strong>دبي – الإمارات العربية المتحدة

                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="socialmedi-links d-flex">
                                <a href="https://www.facebook.com/" class="text-white mr-4 mt-3">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/" class="text-white mr-4 mt-3">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com/" class="text-white mr-4 mt-3">
                                    <i class="fab fa-instgram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>&copy; حقوق الطبع والنشر لعام 2021. جميع الحقوق محفوظة <a href="http://www.digitalbondmena.com/">Digitalbond</a></p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </footer>
      <!-- End Footer-->

      <!-- jQuery Frameworks
      ============================================= -->
      <script src="{{ asset('frontend/edugateform/js/jquery-1.12.4.min.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/popper.min.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/bootstrap.min.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/jquery.appear.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/jquery.easing.min.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/jquery.magnific-popup.min.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/modernizr.custom.13711.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/owl.carousel.min.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/wow.min.js' )}}"></script>
      <script src="{{ asset('frontend/js/intlTelInput.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/imagesloaded.pkgd.min.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/YTPlayer.min.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/jquery.nice-select.min.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/loopcounter.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/count-to.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/bootsnav.js' )}}"></script>
      <script src="{{ asset('frontend/edugateform/js/main.js' )}}"></script>

      <script>


            var input = document.querySelector("#phone"),
            errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");
          // initialise plugin
            var iti = window.intlTelInput(input, {
                preferredCountries: ['eg','ae','qa','kw','jo'],
                separateDialCode: true,
                utilsScript:"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js"
            });
            // here, the index maps to the error code returned from getValidationError - see readme
            var errorMap = ["رقم خطأ", "رمز الدولة غير صحيح", "من فضلك ادخل الرقم صحيح", "من فضلك ادخل الرقم صحيح", "رقم غير صحيح"];

          // initialise plugin


          var reset = function() {
            input.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
            errorMsg.classList.add("text-danger");
            validMsg.classList.add("hide");
            validMsg.classList.add("text-success");

          };

          // on blur: validate
          input.addEventListener('blur', function() {
            reset();
            if (input.value.trim()) {
              if (iti.isValidNumber()) {
                validMsg.classList.remove("hide");

              } else {
                input.classList.add("error");
                var errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
              }
            }
            const form = document.getElementById('form');





            var formErrors = [];

            form.addEventListener('submit', e => {
                checkInputs();
                if(formErrors.length) {
                    e.preventDefault();
                }
            });

            function checkInputs() {
                formErrors = [];
                // trim to remove the whitespaces

                const phoneValue = input.value.trim();



                if(phoneValue === '') {
                    formErrors.push('الهاتف مطلوب');
                    setErrorFor(input, 'الهاتف مطلوب');
                } else {
                    setSuccessFor(input);
                }

            }

            function setErrorFor(input, message) {
                const formControl = input.parentElement.parentElement;
                const small = formControl.querySelector('small');
                formControl.className = 'form-group form-control-validation error  col-lg-12';
                small.innerText = message;
            }

            function setSuccessFor(input) {
                const formControl = input.parentElement.parentElement;
                formControl.className = 'form-group  form-control-validation success col-lg-12';
            }
          });

          // on keyup / change flag: reset
          input.addEventListener('change', reset);
            input.addEventListener('keyup', reset);
          //phone melsh da3wa

              const form = document.getElementById('form');
              const fullName = document.getElementById('name');

              const area = document.getElementById('area');
              const birthdate = document.getElementById('birthdate');
              const nation = document.getElementById('nation');
              const nationality = document.getElementById('nationality');
              const degreeNeeded = document.getElementById('degree_needed');

            var formErrors = [];

            form.addEventListener('submit', e => {
                checkInputs();
                if(formErrors.length) {
                    e.preventDefault();
                }
            });

            function checkInputs()
            {
                formErrors = [];
                // trim to remove the whitespaces
                const fullNameValue = fullName.value.trim();

                const emailValue = email.value.trim();
                const areaValue = area.value.trim();
                const birthdateValue = birthdate.value.trim();
                const nationValue = nation.value.trim();
                const nationalityValue = nationality.value.trim();

                const degreeNeededValue = degreeNeeded.value.trim();

                if(fullNameValue === '') {
                    formErrors.push('الاسم مطلوب');
                    setErrorFor(fullName, 'الاسم مطلوب');
                } else {
                    setSuccessFor(fullName);
                }

                if(emailValue === '') {
                    formErrors.push('البريد الالكتروني مطلوب');
                    setErrorFor(email, 'البريد الالكتروني مطلوب');
                } else if (!isEmail(emailValue)) {
                    formErrors.push('البريد الالكتروني غير صحيح');
                    setErrorFor(email, 'البريد الالكتروني غير صحيح');
                } else {
                    setSuccessFor(email);
                }
                if(areaValue === '') {
                    formErrors.push('المنطقة مطلوبة');
                    setErrorFor(area, 'المنطقة مطلوبة');
                } else {
                    setSuccessFor(area);
                }
                if(birthdateValue === '') {
                    formErrors.push('تاريخ الميلاد مطلوب');
                    setErrorFor(birthdate, 'تاريخ الميلاد مطلوب');
                } else {
                    setSuccessFor(birthdate);
                }
                if(nationValue === '') {
                    formErrors.push('البلد مطلوبة');
                    setErrorFor(nation, 'البلد مطلوبة');
                } else {
                    setSuccessFor(nation);
                }
                if(nationalityValue === '') {
                    formErrors.push('الجنسية مطلوبة');
                    setErrorFor(nationality, 'الجنسية مطلوبة');
                } else {
                    setSuccessFor(nationality);
                }

                if(degreeNeededValue === '') {
                    formErrors.push('لا بد من اختيار الدرجة العلمية ');
                    setErrorFor(degreeNeeded, 'لا بد من اختيار الدرجة العلمية ');
                } else {
                    setSuccessFor(degreeNeeded);

                }



            }

            function setErrorFor(input, message) {
                const formControl = input.parentElement;
                const small = formControl.querySelector('small');
                formControl.className = 'form-group form-control-validation error  col-lg-6';
                small.innerText = message;
            }

            function setSuccessFor(input) {
                const formControl = input.parentElement;
                formControl.className = 'form-group  form-control-validation success col-lg-6';
            }

            function isEmail(email) {
                return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
            }


    </script>

        <script>
            $(document).ready(function () {



                            $("#degree_needed").change(function () {
                                var val = $(this).val();
                                if (val == "Bachelor") {

                                    $("#show-bachelor-form").show();
                                    $("#show-phd-form").hide();
                                    $("#show-master-form").hide();

                                    $("#degree_needed option").attr("disabled","disabled");
                                    $("#degree_needed option:selected").removeAttr("disabled");

                                    let schoolDegreeName = document.getElementById("school_degree_name");
                                    let schoolDegreeYear = document.getElementById("school_degree_year");
                                    let schoolDegreeCountry = document.getElementById("school_degree_country");
                                    let percentage = document.getElementById("percentage");
                                    let educationSystem = document.getElementById("education_system");
                                    schoolDegreeName.setAttribute("name","school_degree_name");
                                    schoolDegreeYear.setAttribute("name","school_degree_year");
                                    schoolDegreeCountry.setAttribute("name","school_degree_country");
                                    percentage.setAttribute("name","percentage");
                                    educationSystem.setAttribute("name","education_system");



                                    var formErrors = [];

                                    form.addEventListener('submit', e => {
                                        checkInputsSchool();
                                        if(formErrors.length) {
                                            e.preventDefault();
                                        }
                                    });


                                    function checkInputsSchool() {
                                        formErrors = [];

                                        let schoolDegreeNameValue = schoolDegreeName.value.trim();
                                        let schoolDegreeYearValue = schoolDegreeYear.value.trim();
                                        let schoolDegreeCountryValue = schoolDegreeCountry.value.trim();
                                        let percentageValue = percentage.value.trim();
                                        let educationSystemValue = educationSystem.value.trim();



                                        if (schoolDegreeNameValue === "") {
                                            formErrors.push("المؤهل الأكاديمي قبل الجامعي مطلوب");
                                            setErrorForSchool(schoolDegreeName, "المؤهل الأكاديمي قبل الجامعي مطلوب");
                                        } else {
                                            setSuccessForSchool(schoolDegreeName);
                                        }
                                        if (schoolDegreeYearValue === "") {
                                            formErrors.push("سنة التخرج مطلوب");
                                            setErrorForSchool(schoolDegreeYear, "سنة التخرج مطلوب");
                                        } else {
                                            setSuccessForSchool(schoolDegreeYear);
                                        }
                                        if (schoolDegreeCountryValue === "") {
                                            formErrors.push("البلد الأكاديمي قبل الجامعة مطلوبة");
                                            setErrorForSchool(schoolDegreeCountry, "البلد الأكاديمي قبل الجامعة مطلوبة");
                                        } else {

                                            setSuccessForSchool(schoolDegreeCountry);
                                        }

                                        if (percentageValue === "") {
                                            formErrors.push("النسبة المئوية مطلوبة");
                                            setErrorForSchool(percentage, "النسبة المئوية مطلوبة");
                                        } else {
                                            setSuccessForSchool(percentage);
                                        }
                                        if (educationSystemValue === "") {
                                            formErrors.push("النظام التعليم مطلوبة");
                                            setErrorForSchool(educationSystem, "النظام التعليم مطلوبة");
                                        } else {
                                            setSuccessForSchool(educationSystem);
                                        }
                                    }

                                  function setErrorForSchool(input, message) {
                                      const formControl = input.parentElement;
                                      const small = formControl.querySelector('small');
                                      formControl.className = 'form-group form-control-validation error  col-lg-6';
                                      small.innerText = message;
                                  }

                                  function setSuccessForSchool(input) {
                                      const formControl = input.parentElement;
                                      formControl.className = 'form-group  form-control-validation success col-lg-6';
                                  }

                                }
                                 else if (val == "Master") {
                                    $("#show-bachelor-form").hide();
                                    $("#show-phd-form").hide();
                                    $("#show-master-form").show();
                                    $("#degree_needed option").attr("disabled","disabled");
                                    $("#degree_needed option:selected").removeAttr("disabled");


                                    let bachelor_degree_name = document.getElementById("bachelor_degree_name");
                                    let bachelor_degree_year = document.getElementById("bachelor_degree_year");
                                    let bachelor_degree_country = document.getElementById("bachelor_degree_country");
                                    let bachelor_university_name = document.getElementById("bachelor_university_name");
                                    let bachelor_faculty_name = document.getElementById("bachelor_faculty_name");
                                    let bachelor_gpa_precentage = document.getElementById("bachelor_gpa_precentage");
                                    let bachelor_education_system = document.getElementById("bachelor_education_system");
                                    bachelor_degree_name.setAttribute("name","bachelor_degree_name");
                                    bachelor_degree_year.setAttribute("name","bachelor_degree_year");
                                    bachelor_degree_country.setAttribute("name","bachelor_degree_country");
                                    bachelor_university_name.setAttribute("name","bachelor_university_name");
                                    bachelor_faculty_name.setAttribute("name","bachelor_faculty_name");
                                    bachelor_gpa_precentage.setAttribute("name","bachelor_gpa_precentage");
                                    bachelor_education_system.setAttribute("name","bachelor_education_system");
                                    var formErrors = [];

                                    form.addEventListener('submit', e => {
                                        checkInputs();
                                        if(formErrors.length) {
                                            e.preventDefault();
                                        }
                                    });

                                    function checkInputs()
                                    {
                                        formErrors = [];

                                        let bachelor_degree_nameValue = bachelor_degree_name.value.trim();
                                        let bachelor_degree_yearValue = bachelor_degree_year.value.trim();
                                        let bachelor_degree_countryValue = bachelor_degree_country.value.trim();
                                        let bachelor_university_nameValue = bachelor_university_name.value.trim();
                                        let bachelor_faculty_nameValue = bachelor_faculty_name.value.trim();
                                        let bachelor_gpa_precentageValue = bachelor_gpa_precentage.value.trim();
                                        let bachelor_education_systemValue =bachelor_education_system.value.trim();



                                            if (bachelor_degree_nameValue === "") {
                                                formErrors.push("المؤهل الجامعي مطلوب");
                                                setErrorFor(bachelor_degree_name, "المؤهل الجامعي مطلوب");
                                            } else {
                                                setSuccessFor(bachelor_degree_name);
                                            }
                                            if (bachelor_degree_yearValue === "") {
                                                formErrors.push("سنة التخرج الجامعية مطلوبة");
                                                setErrorFor(bachelor_degree_year, "سنة التخرج الجامعية مطلوبة");
                                            } else {
                                                setSuccessFor(bachelor_degree_year);
                                            }
                                            if (bachelor_degree_countryValue === "") {
                                                formErrors.push("بلد الجامعة مطلوبة");
                                                setErrorFor(bachelor_degree_country, "بلد الجامعة مطلوبة");
                                            } else {
                                                setSuccessFor(bachelor_degree_country);
                                            }
                                            if (bachelor_university_nameValue === "") {
                                                formErrors.push("اسم الجامعة مطلوب");
                                                setErrorFor(bachelor_university_name, "اسم الجامعة مطلوب");
                                            } else {
                                                setSuccessFor(bachelor_university_name);
                                            }
                                            if (bachelor_faculty_nameValue === "") {
                                                formErrors.push("اسم الكلية مطلوب");
                                                setErrorFor(bachelor_faculty_name, "اسم الكلية مطلوب");
                                            } else {
                                                setSuccessFor(bachelor_faculty_name);
                                            }

                                            if (bachelor_gpa_precentageValue === "") {
                                                formErrors.push(" المعدل التراكمي مطلوب");
                                                setErrorFor(bachelor_gpa_precentage, " المعدل التراكمي مطلوب");
                                            } else {
                                                setSuccessFor(bachelor_gpa_precentage);
                                            }
                                            if (bachelor_education_systemValue === "") {
                                                formErrors.push("  نظام التعليم مطلوب");
                                                setErrorFor(bachelor_education_system, " نظام التعليم مطلوب");
                                            } else {
                                                setSuccessFor(bachelor_education_system);
                                            }

                                        }



                                    function setErrorFor(input, message) {
                                        const formControl = input.parentElement;
                                        const small = formControl.querySelector('small');
                                        formControl.className = 'form-group form-control-validation error  col-lg-6';
                                        small.innerText = message;
                                    }

                                    function setSuccessFor(input) {
                                        const formControl = input.parentElement;
                                        formControl.className = 'form-group  form-control-validation success col-lg-6';
                                    }



                                    }
                                else if (val == "PhD") {
                                    $("#show-bachelor-form").hide();
                                    $("#show-phd-form").show();
                                    $("#show-master-form").hide();
                                     $("#degree_needed option").attr("disabled","disabled");
                                    $("#degree_needed option:selected").removeAttr("disabled");

                                    let master_degree_name = document.getElementById("master_degree_name");
                                    let master_degree_year = document.getElementById("master_degree_year");
                                    let master_degree_country = document.getElementById("master_degree_country");
                                    let master_university_name = document.getElementById("master_university_name");
                                    let master_faculty_name = document.getElementById("master_faculty_name");
                                    let master_name = document.getElementById("master_name");
                                    let master_gpa_precentage = document.getElementById("master_gpa_precentage");
                                    master_degree_name.setAttribute("name","master_degree_name");
                                    master_degree_year.setAttribute("name","master_degree_year");
                                    master_degree_country.setAttribute("name","master_degree_country");
                                    master_university_name.setAttribute("name","master_university_name");
                                    master_faculty_name.setAttribute("name","master_faculty_name");
                                    master_name.setAttribute("name","master_name");
                                    master_gpa_precentage.setAttribute("name","master_gpa_precentage");
                                  var formErrors = [];

                                  form.addEventListener('submit', e => {
                                      checkInputsPhd();
                                      if(formErrors.length) {
                                          e.preventDefault();
                                      }
                                  });

                                  function checkInputsPhd()
                                  {
                                      formErrors = [];

                                      let master_degree_nameValue = master_degree_name.value.trim();
                                      let master_degree_yearValue = master_degree_year.value.trim();
                                      let master_degree_countryValue = master_degree_country.value.trim();
                                      let master_university_nameValue = master_university_name.value.trim();
                                      let master_faculty_nameValue = master_faculty_name.value.trim();
                                      let master_nameValue = master_name.value.trim();
                                      let master_gpa_precentageValue = master_gpa_precentage.value.trim();


                                        if (master_degree_nameValue === "") {
                                            formErrors.push("المؤهل الجامعي مطلوب");
                                            setErrorForPhd(master_degree_name, "المؤهل الجامعي مطلوب");
                                        } else {
                                            setSuccessForPhd(master_degree_name);
                                        }
                                        if (master_degree_yearValue === "") {
                                            formErrors.push("سنة التخرج الجامعية مطلوبة");
                                            setErrorForPhd(master_degree_year, "سنة التخرج الجامعية مطلوبة");
                                        } else {
                                            setSuccessForPhd(master_degree_year);
                                        }
                                        if (master_degree_countryValue === "") {
                                            formErrors.push("بلد الجامعية مطلوبة");
                                            setErrorForPhd(master_degree_country, "بلد الجامعية مطلوبة");
                                        } else {
                                            setSuccessForPhd(master_degree_country);
                                        }
                                        if (master_university_nameValue === "") {
                                            formErrors.push("اسم الجامعة مطلوب");
                                            setErrorForPhd(master_university_name, "اسم الجامعة مطلوب");
                                        } else {
                                            setSuccessForPhd(master_university_name);
                                        }
                                        if (master_faculty_nameValue === "") {
                                            formErrors.push("اسم الكلية مطلوب");
                                            setErrorForPhd(master_faculty_name, "اسم الكلية مطلوب");
                                        } else {
                                            setSuccessForPhd(master_faculty_name);
                                        }
                                        if (master_nameValue === "") {
                                            formErrors.push("اسم القسم مطلوب");
                                            setErrorForPhd(master_name, "اسم القسم مطلوب");
                                        } else {
                                            setSuccessForPhd(master_name);
                                        }
                                        if (master_gpa_precentageValue === "") {
                                            formErrors.push(" المعدل التراكمي مطلوب");
                                            setErrorForPhd(master_gpa_precentage, " المعدل التراكمي مطلوب");
                                        } else {
                                            setSuccessForPhd(master_gpa_precentage);
                                        }




                                  }

                                  function setErrorForPhd(input, message) {
                                      const formControl = input.parentElement;
                                      const small = formControl.querySelector('small');
                                      formControl.className = 'form-group form-control-validation error  col-lg-6';
                                      small.innerText = message;
                                  }

                                  function setSuccessForPhd(input) {
                                      const formControl = input.parentElement;
                                      formControl.className = 'form-group  form-control-validation success col-lg-6';
                                  }



                                }else if(val == ""){
                                    $("#show-bachelor-form").hide();
                                    $("#show-phd-form").hide();
                                    $("#show-master-form").hide();
                                }
                            });
                        });
    </script>
    </body>
</html>
    @endif

    <!-- Main content End -->




