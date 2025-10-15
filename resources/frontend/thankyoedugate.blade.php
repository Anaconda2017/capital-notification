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
        <div class="top-bar-area bg-dark text-light inline" style="height: 62.5px !important;">
            <div class="container-full">
                <div class="row align-center">

                    <div class="col-lg-7 col-md-12 left-info">
                        <div class="item-flex">
                            <ul class="list">
                               

                                <li>
                                    <i class="fas fa-envelope"></i> <a href="mailto:Sales@edugateuae.com">Sales@edugateuae.com </a>
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
                            <li class="Language"><a href="http://digitalbondmena.com/egec_new_new/ar/edugate-registration-success">عربي</a></li>
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



        @if (session('user_submitted_email'))
        <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url({{ asset('frontend/images/10.jpg')}});height: 387px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Thanks you</h1>
                    <ul class="breadcrumb">
                        <li><a href="http://digitalbondmena.com/edugate/en"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Thankyou</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
     @else
        
        <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url({{ asset('frontend/images/10.jpg')}});height: 387px !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Oops .. Something Wrong</h1>
                    <ul class="breadcrumb">
                        <li><a href="http://digitalbondmena.com/edugate/en"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Sorry</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
     
     @endif
    
    <main  class="main-content ">
        <section id="thanks-section" class="thanks-section">
            <div class="jumbotron bg-white text-center py-1">
                @if (session('user_submitted_email'))
                <img src="{{ asset('frontend/images/F.png')}}" class="h-150" alt="">
                <h1 class="display-3 text-success">Thank you</h1>
                <p class="thanks-paragraph">Your submission has been received and one of our academic guides will contact you soon!</p>
                <!-- <hr> -->
                <div class="row justify-content-center py-4">
                    <div class="col-md-3 text-center">
                        <h4>Email</h4>
                        <p>
                            <a id="email" href="mailto:{{ session('user_submitted_email') }}">{{ session('user_submitted_email') }}</a>
                            <button class="btn mx-2 p-2" onclick="copyToClipboard('#email')"><i class="far fa-copy"></i></button>
                        </p>
                        
                    </div>
                    <div class="col-md-3 text-center">
                        <h4>Password</h4>
                        <p id="password">
                            {{ session('user_submitted_password') }}
                            <button class="btn" onclick="copyToClipboard('#password')"><i class="far fa-copy"></i></button>
                        </p>
                    </div>
                </div>
                <!-- <p>
                  Having trouble? <a href="">Contact us</a>
                </p> -->
                <p class="lead">
                  <a class="btn btn-gradient" href="{{ route('login') }}" role="button">Continue to Login page</a>
                </p>
                @else
                
                <img src="{{ asset('frontend/images/F2.png')}}" class="h-150" alt="">
                <h1 class="display-3 text-success" style="color:red!important;">Oops ... Sorry</h1>
                <p class="thanks-paragraph">No submission has been received</p>
                <!-- <hr> -->
               
                <div class="row justify-content-center py-4">
                        <div class="col-md-3 text-center">
                            <h3 class="thanks-paragraph"><a href="{{ route('login')}}">Join Us Now</a></h3>
                        </div>
                        
                    </div>
                
                <!-- <p>
                  Having trouble? <a href="">Contact us</a>
                </p> -->
                <p class="lead">
                  <a class="btn btn-gradient" href="http://digitalbondmena.com/egec_new_new/en/edugate-google-form-uae" role="button">Continue to Admmision Request</a>
                </p>   
                @endif

            </div>
        </section>


    </main>

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
<script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
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
                            <li class="search"><a href="http://digitalbondmena.com/egec_new_new/en/edugate-registration-success">English</a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="http://digitalbondmena.com/edugate/ar">
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
     @if (session('user_submitted_email'))
              <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url({{ asset('frontend/images/10.jpg')}});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1> شكرا للتسجيل</h1>
                    <ul class="breadcrumb">
                        <li><a href="http://digitalbondmena.com/edugate/ar"><i class="fas fa-home"></i> الرئيسية</a></li>
                        <li class="active"> شكرا للتسجيل</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    @else
    
        <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url({{ asset('frontend/images/10.jpg')}});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1> عفوا .. نعتذر</h1>
                    <ul class="breadcrumb">
                        <li><a href="http://digitalbondmena.com/edugate/ar"><i class="fas fa-home"></i> الرئيسية</a></li>
                        <li class="active">عفوا</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    
    @endif
    
        <main class="main-content ">

        <section id="thanks-section" class="bg-white jumbotron text-center py-1">
            @if (session('user_submitted_email'))
            <img src="{{ asset('frontend/images/F.png')}}" class="h-150" alt="">
            <h1 class="display-top-bar3 text-success">شكرًا لتسجيلك</h1>
            <p class="thanks-paragraph">تم استلام طلبك وسيتصل بك أحد مرشدينا الأكاديميين قريبًا!</p>
            <!-- <hr> -->
            <div class="row justify-content-center py-4">
                <div class="col-md-3 text-center">
                    <h4>البريد الإلكتروني</h4>
                    <p>

                        <a id="email" href="mailto:{{ session('user_submitted_email') }}">{{ session('user_submitted_email') }}</a>
                        <button class="btn mx-2 p-2" onclick="copyToClipboard('#email')"><i class="far fa-copy"></i></button>
                        
                    </p>
                </div>
                <div class="col-md-3 text-center">
                    <h4>كلمة المرور</h4>
                    <p id="password">
                        {{ session('user_submitted_password') }}
                            <button class="btn" onclick="copyToClipboard('#password')"><i class="far fa-copy"></i></button>
                    </p>
                </div>
            </div>
            <!-- <p>
              Having trouble? <a href="">Contact us</a>
            </p> -->
            <p class="lead">
              <a class="btn btn-gradient" href="{{ route('login')}}" role="button">اذهب لتسجيل الدخول</a>
            </p>
            @else
            <img src="{{ asset('frontend/images/F2.png')}}" class="h-150" alt="">
                <h1 class="display-3 text-main" style="color:red !important;">عفوا .. نعتذر</h1>
                     <p class="thanks-paragraph">لم يتم استلام أي طلب حاليا</p>
                    <div class="row justify-content-center py-4">
                        <div class="col-md-3 text-center">
                            <h3 class="thanks-paragraph"><a href="{{ route('login') }}"> انضم إلينا الآن </a></h3>
                        </div>
                        
                    </div>
                <!-- <p>
                  Having trouble? <a href="">Contact us</a>
                </p> -->
                <p class="lead">
                      <a class="btn btn-gradient" href="http://digitalbondmena.com/egec_new_new/ar/edugate-google-form-uae" role="button">تابع إلى طلب الالتحاق</a>
                    </p>
            @endif        
            
          </section>


        
    </main>

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
    
    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }

    </script>
    </body>
</html>
    @endif

    <!-- Main content End -->




