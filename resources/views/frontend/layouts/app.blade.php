 <!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ asset('medicatetheme/images/app_logo.png')}}">

    <!-- note: must title come from seo function -->
    <title>  @yield('title')  </title>

    <link rel="stylesheet" href="{{ asset('medicatetheme/css/bootstrap.min.css')}}">
    <!-- LOADING FONTS AND ICONS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('medicatetheme/rev/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('medicatetheme/rev/fonts/font-awesome/css/font-awesome.css')}}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('medicatetheme/rev/css/rs6.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('medicatetheme/css/owl.carousel.min.css')}}">
    <!-- Progressbar CSS -->
    <link rel="stylesheet" href="{{ asset('medicatetheme/css/progressbar.css')}}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('medicatetheme/css/animations.min.css')}}">
    <!-- Magnefic Popup CSS -->
    <link rel="stylesheet" href="{{ asset('medicatetheme/css/magnific-popup.min.css')}}">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('medicatetheme/fonts/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('medicatetheme/fonts/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('medicatetheme/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('medicatetheme/fonts/themify-icons/themify-icons.css')}}">
    <!--  Style CSS -->
    <link rel="stylesheet" href="{{ asset('medicatetheme/css/style.css')}}">
    <!--  Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('medicatetheme/css/responsive.css')}}">

    

    <style>
        .pq-process-pb {
            padding-bottom: 100px !important;
        }
    </style>
   
</head>
<body >


    <!--loading start-->
    <div id="pq-loading">
        <div id="pq-loading-center">
        <img src="{{ asset('medicatetheme/images/HCAEn.png')}}"  width="200"  alt="loading">
        </div>
    </div>
    <!--loading End-->

    @yield('ehanative')


    <!--Back To Top start-->
    <div id="back-to-top">
        <a class="topbtn" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!--Back To Top End-->

    <!--jquery js-->
   <script src="{{ asset('medicatetheme/js/jquery.min.js')}}"></script>
   <!--bootstrap js-->
   <script src="{{ asset('medicatetheme/js/bootstrap.min.js')}}"></script>
   <!--owl-carousal-->
   <script src="{{ asset('medicatetheme/js/owl.carousel.min.js')}}"></script>
   <!--progress-bar js-->
   <script src="{{ asset('medicatetheme/js/progressbar.js')}}"></script>
   <!--isotope js-->
   <script src="{{ asset('medicatetheme/js/isotope.pkgd.min.js')}}"></script>
   <!--countTo js-->
   <script src="{{ asset('medicatetheme/js/jquery.countTo.min.js')}}"></script>
   <!--Maginfic-Popup js-->
   <script src="{{ asset('medicatetheme/js/jquery.magnific-popup.min.js')}}"></script>
   <!-- Animation JS -->
   <script src="{{ asset('medicatetheme/js/wow.min.js')}}"></script>
   <!-- Rev-Slider -->
   <script src="{{ asset('medicatetheme/rev/js/rbtools.min.js')}}"></script>
   <script src="{{ asset('medicatetheme/rev/js/rs6.min.js')}}"></script>
   <script src="{{ asset('medicatetheme/js/rev-custom.js')}}"></script>
   <!--custom js-->
   <script src="{{ asset('medicatetheme/js/custom.js')}}"></script>


</html>
