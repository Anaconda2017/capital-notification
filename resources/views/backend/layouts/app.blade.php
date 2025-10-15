<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="Unm8UHlbZCvdZMv2Ya4EcKpDjB30sLdvx9brVlHN">
    <title>Dashboard</title>
	
	<meta name="description" content="Welcome to dashboard "/>
    <!-- Favicon icon -->
    <!--<link rel="icon" type="image/png" sizes="16x16" href="">-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/app_logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/app_logo.png')}}">
	<link rel="stylesheet" href="{{  asset('xhtml/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{  asset('xhtml/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

    <link href="{{  asset('xhtml/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{  asset('xhtml/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{  asset('xhtml/css/style.css')}}" rel="stylesheet">
    

    <style>
        body {
              zoom: 75% !important
        }

        .btn-buy-now , .dz-demo-panel .dz-demo-trigger , .sidebar-right .sidebar-right-trigger{
            display: none;
        }

        [data-sidebar-style="full"][data-layout="vertical"] .deznav .metismenu > li {
            padding: 10px 30px !important; 
        }

        .cke_chrome  {
            width: 100% !important
        }

        .cke_notification_warning {
            display: none !important
        }
    </style>

</head>

<body >

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">
    
            @include('backend.layouts.header')
    
            @include('backend.layouts.side-bar')
            <div class="content-body">
                @yield('content')
            </div>
            @include('backend.layouts.footer')
    </div>

    <!-- BEGIN: Footer-->


    <!-- END: Footer-->
  
     </div>
    
     <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
   <!-- Required vendors -->
	<script src="{{  asset('xhtml/vendor/global/global.min.js')}}"></script>
	<script src="{{  asset('xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{  asset('xhtml/vendor/chart.js/Chart.bundle.min.js')}}"></script>

	<!-- Chart piety plugin files -->
	<script src="{{  asset('xhtml/vendor/peity/jquery.peity.min.js')}}"></script>

	<!-- Apex Chart -->
	<script src="{{  asset('xhtml/vendor/apexchart/apexchart.js')}}"></script>

    <!-- Datatable -->
    <script src="{{  asset('xhtml/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{  asset('xhtml/js/plugins-init/datatables.init.js')}}"></script>

	<!-- Dashboard 1 -->
	<script src="{{  asset('xhtml/js/dashboard/dashboard-1.js')}}"></script>

	<script src="{{  asset('xhtml/vendor/owl-carousel/owl.carousel.js')}}"></script>
	<script src="{{  asset('xhtml/js/custom.min.js')}}"></script>
	<script src="{{  asset('xhtml/js/deznav-init.js')}}"></script>
	<script src="{{  asset('xhtml/js/demo.js')}}"></script>
	<script src="{{  asset('xhtml/js/styleSwitcher.js')}}"></script>
	<script>
		function carouselReview() {
			jQuery('.testimonial-one').owlCarousel({
				loop: true,
				autoplay: true,
				margin: 20,
				nav: false,
				rtl: true,
				dots: false,
				navText: ['', ''],
				responsive: {
					0: {
						items: 3
					},
					450: {
						items: 4
					},
					600: {
						items: 5
					},
					991: {
						items: 5
					},

					1200: {
						items: 7
					},
					1601: {
						items: 5
					}
				}
			})
		}
		jQuery(window).on('load', function () {
			setTimeout(function () {
				carouselReview();
			}, 1000);
		});			
	</script>
</body>
   
</html>
