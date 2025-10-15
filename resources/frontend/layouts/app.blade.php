<!DOCTYPE html>
<html lang="en">

<head>
<!-- Meta Tags
    ============================================= -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Digital Bond">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- Your Title Page
    ============================================= -->
<title>@yield('title')</title>
<!-- Favicon Icons
     ============================================= -->
<link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}">
<!-- Bootstrap Links
     ============================================= -->
<!-- Bootstrap CSS  -->
<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo:400,500,700%7cRajdhani:400,500,600,700&display=swap">
<!-- Plugins
     ============================================= -->
<!-- Owl Carousal -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="{{ asset('frontend/css/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/slick.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/off-canvas.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/fonts/linea-fonts.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/fonts/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet">

<link href="{{ asset('frontend/css/rsmenu-main.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/rs-spacing.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">

@if(app()->getLocale() == 'en')
  <link href="{{ asset('frontend/css/EGEC-style-EN.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/intlTelInput.css') }}" rel="stylesheet">
@else
<link href="{{ asset('frontend/css/EGEC-style-EN.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/intlTelInput-ar.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/EGEC-style-AR.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
@endif
    
    @yield('css')
</head>
<body class="device-touch">
    @yield('egec')

    <!-- Core JS Libraries -->
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QWYV8CCW2C"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-QWYV8CCW2C');
        </script>
        
    <script src="{{ asset('frontend/js/modernizr-2.8.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/rsmenu-main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/jquery.nav.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/skill.bars.jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/jquery.mb.YTPlayer.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/contact.form.js') }}" type="text/javascript"></script>
            <!-- jsDeliver -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

    <!-- cdnjs -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

    <script src="{{ asset('frontend/js/main.js') }}" type="text/javascript"></script>
    
    @if(app()->getLocale() == 'en')
    <script src="{{ asset('frontend/js/intlTelInput.js') }}"></script>
     @else
    <script src="{{ asset('frontend/js/intlTelInput-ar.js') }}"></script>
    @endif

<script>
    $(function () {
        $('.lazy_load').lazy();
    });
</script>

<script>
    function isInputNumber(event) {
                var char = String.fromCharCode(event.which);
                if(!(/[0-9]/.test(char))){
                    event.preventDefault();
                }
            }
</script>

    <script>
   $('.dropdown-toggle').ready( function(event) {
                if ($(window).width() > 800) {
                    $(".dropdown-toggle").removeAttr("data-toggle")
                }
            });
      var swiper = new Swiper('.swiper-container', {
          spaceBetween: 30,
          loop:true,
          autoplay: {
              delay: 2500,
              disableOnInteraction: false,
          },
          breakpoints: {
              
              768: {
                  slidesPerView: 1,
                  spaceBetween: 40,
              },
              1024: {
                  slidesPerView: 3,
                  spaceBetween: 50,
              },
          },
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
      });
    </script>
    
    

    @yield('scripts')
    
    @if(app()->getLocale() == 'en')
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
                $('#fac_uni_major_id option').remove();
                $('#university_id').append("<option value=''>Select a University</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#university_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
                    }
                  });
              }
            })
          });

          $('#admission_destination_id').change(function() {
            var admission_destination_id = $('#admission_destination_id').val();
            $.ajax({
              url: "{{ url('/admissionfilterUniversities') }}",
              method: 'GET',
              data: {admission_destination_id:admission_destination_id},
              success:function(data) {
                $('#admission_university_id option').remove();
                $('#admission_fac_uni_id option').remove();
                $('#admission_fac_uni_major_id option').remove();
                $('#admission_department_id option').remove();
                $('#admission_university_id').append("<option value=''>Select a University</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#admission_university_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
                    }
                  });
              }
            })
          });

          $('#ad_admission_destination_id').change(function() {
            var admission_destination_id = $('#ad_admission_destination_id').val();
            $.ajax({
              url: "{{ url('/admissionfilterUniversities') }}",
              method: 'GET',
              data: {admission_destination_id:admission_destination_id},
              success:function(data) {
                $('#ad_admission_university_id option').remove();
                $('#ad_admission_fac_uni_id option').remove();
                $('#ad_admission_fac_uni_major_id option').remove();
                $('#ad_admission_department_id option').remove();
                $('#ad_admission_university_id').append("<option value=''>Select a University</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#ad_admission_university_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
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
                $('#fac_uni_major_id option').remove();
                $('#fac_uni_id').append("<option value=''>Select a College</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#fac_uni_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] + " (" + d['university_name'] +")</option>");
                    }
                  });
              }
            })
          });

          $('#admission_university_id').change(function() {
            var admission_university_id = $('#admission_university_id').val();
            $.ajax({
              url: "{{ url('/admissionfilterColleges') }}",
              method: 'GET',
              data: {admission_university_id:admission_university_id},
              success:function(data) {
                $('#admission_fac_uni_id option').remove();
                $('#admission_fac_uni_major_id option').remove();
                $('#admission_department_id option').remove();
                $('#admission_fac_uni_id').append("<option value=''>Select a College</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#admission_fac_uni_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] + " (" + d['university_name'] +")</option>");
                    }
                  });
              }
            })
          });

          $('#ad_admission_university_id').change(function() {
            var admission_university_id = $('#ad_admission_university_id').val();
            $.ajax({
              url: "{{ url('/admissionfilterColleges') }}",
              method: 'GET',
              data: {admission_university_id:admission_university_id},
              success:function(data) {
                $('#ad_admission_fac_uni_id option').remove();
                $('#ad_admission_fac_uni_major_id option').remove();
                $('#ad_admission_department_id option').remove();
                $('#ad_admission_fac_uni_id').append("<option value=''>Select a College</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#ad_admission_fac_uni_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] + " (" + d['university_name'] +")</option>");
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
                $('#fac_uni_major_id option').remove();
                $('#fac_uni_major_id').append("<option value=''>Select a Major</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#fac_uni_major_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +" (" + d['faculty_name'] +" - "+ d['university_name'] +")</option>");
                    }
                  });
              }
            })
          });

          $('#admission_fac_uni_id').change(function() {
            var admission_fac_uni_id = $('#admission_fac_uni_id').val();
            $.ajax({
              url: "{{ url('/admissionfilterMajors') }}",
              method: 'GET',
              data: {admission_fac_uni_id:admission_fac_uni_id},
              success:function(data) {
                $('#admission_fac_uni_major_id option').remove();
                $('#admission_department_id option').remove();
                $('#admission_fac_uni_major_id').append("<option value=''>Select a Major</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#admission_fac_uni_major_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +" (" + d['faculty_name'] +" - "+ d['university_name'] +")</option>");
                    }
                  });
              }
            })
          });

          $('#ad_admission_fac_uni_id').change(function() {
            var admission_fac_uni_id = $('#ad_admission_fac_uni_id').val();
            $.ajax({
              url: "{{ url('/admissionfilterMajors') }}",
              method: 'GET',
              data: {admission_fac_uni_id:admission_fac_uni_id},
              success:function(data) {
                $('#ad_admission_fac_uni_major_id option').remove();
                $('#ad_admission_department_id option').remove();
                $('#ad_admission_fac_uni_major_id').append("<option value=''>Select a Major</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#ad_admission_fac_uni_major_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +" (" + d['faculty_name'] +" - "+ d['university_name'] +")</option>");
                    }
                  });
              }
            })
          });

          $('#fac_uni_major_id').change(function() {
            var fac_uni_major_id = $('#fac_uni_major_id').val();
            $.ajax({
              url: "{{ url('/filterDepartments') }}",
              method: 'GET',
              data: {fac_uni_major_id:fac_uni_major_id},
              success:function(data) {
                $('#department_id option').remove();
                $('#department_id').append("<option value=''>Select a Department</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#department_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
                    }
                  });
              }
            })
          });

          $('#admission_fac_uni_major_id').change(function() {
            var admission_fac_uni_major_id = $('#admission_fac_uni_major_id').val();
            $.ajax({
              url: "{{ url('/admissionfilterDepartments') }}",
              method: 'GET',
              data: {admission_fac_uni_major_id:admission_fac_uni_major_id},
              success:function(data) {
                $('#admission_department_id option').remove();
                $('#admission_department_id').append("<option value=''>Select a Department</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#admission_department_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
                    }
                  });
              }
            })
          });

          $('#ad_admission_fac_uni_major_id').change(function() {
            var admission_fac_uni_major_id = $('#ad_admission_fac_uni_major_id').val();
            $.ajax({
              url: "{{ url('/admissionfilterDepartments') }}",
              method: 'GET',
              data: {admission_fac_uni_major_id:admission_fac_uni_major_id},
              success:function(data) {
                $('#ad_admission_department_id option').remove();
                $('#ad_admission_department_id').append("<option value=''>Select a Department</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#ad_admission_department_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
                    }
                  });
              }
            })
          });
      </script>
      
   
            

            

    @else
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
              $('#fac_uni_major_id option').remove();
              $('#university_id').append("<option value=''>اختر جامعة</option>");
                data.forEach(d => {
                  for($i = 0; $i < d['id'].length; $i++) {
                    $("#university_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
                  }
                });
            }
          })
        });

        $('#admission_destination_id').change(function() {
          var admission_destination_id = $('#admission_destination_id').val();
          $.ajax({
            url: "{{ url('/admissionfilterUniversities') }}",
            method: 'GET',
            data: {admission_destination_id:admission_destination_id},
            success:function(data) {
              $('#admission_university_id option').remove();
              $('#admission_fac_uni_id option').remove();
              $('#admission_fac_uni_major_id option').remove();
              $('#admission_department_id option').remove();
              $('#admission_university_id').append("<option value=''>اختر جامعة</option>");
                data.forEach(d => {
                  for($i = 0; $i < d['id'].length; $i++) {
                    $("#admission_university_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
                  }
                });
            }
          })
        });

        $('#ad_admission_destination_id').change(function() {
              var admission_destination_id = $('#ad_admission_destination_id').val();
              $.ajax({
                url: "{{ url('/admissionfilterUniversities') }}",
                method: 'GET',
                data: {admission_destination_id:admission_destination_id},
                success:function(data) {
                  $('#ad_admission_university_id option').remove();
                  $('#ad_admission_fac_uni_id option').remove();
                  $('#ad_admission_fac_uni_major_id option').remove();
                  $('#ad_admission_department_id option').remove();
                  $('#ad_admission_university_id').append("<option value=''>اختر جامعة</option>");
                    data.forEach(d => {
                      for($i = 0; $i < d['id'].length; $i++) {
                        $("#ad_admission_university_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
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
              $('#fac_uni_major_id option').remove();
              $('#fac_uni_id').append("<option value=''>اختر الكلية</option>");
                data.forEach(d => {
                  for($i = 0; $i < d['id'].length; $i++) {
                    $("#fac_uni_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] + " (" + d['university_name'] +")</option>");
                  }
                });
            }
          })
        });

        $('#admission_university_id').change(function() {
          var admission_university_id = $('#admission_university_id').val();
          $.ajax({
            url: "{{ url('/admissionfilterColleges') }}",
            method: 'GET',
            data: {admission_university_id:admission_university_id},
            success:function(data) {
              $('#admission_fac_uni_id option').remove();
              $('#admission_fac_uni_major_id option').remove();
              $('#admission_department_id option').remove();
              $('#admission_fac_uni_id').append("<option value=''>اختر الكلية</option>");
                data.forEach(d => {
                  for($i = 0; $i < d['id'].length; $i++) {
                    $("#admission_fac_uni_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] + " (" + d['university_name'] +")</option>");
                  }
                });
            }
          })
        });

        $('#ad_admission_university_id').change(function() {
            var admission_university_id = $('#ad_admission_university_id').val();
            $.ajax({
              url: "{{ url('/admissionfilterColleges') }}",
              method: 'GET',
              data: {admission_university_id:admission_university_id},
              success:function(data) {
                $('#ad_admission_fac_uni_id option').remove();
                $('#ad_admission_fac_uni_major_id option').remove();
                $('#ad_admission_department_id option').remove();
                $('#ad_admission_fac_uni_id').append("<option value=''>اختر الكلية</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#ad_admission_fac_uni_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] + " (" + d['university_name'] +")</option>");
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
              $('#fac_uni_major_id option').remove();
              $('#fac_uni_major_id').append("<option value=''>اختر التخصص</option>");
                data.forEach(d => {
                  for($i = 0; $i < d['id'].length; $i++) {
                    $("#fac_uni_major_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +" (" + d['faculty_name'] +" - "+ d['university_name'] +")</option>");
                  }
                });
            }
          })
        });

        $('#admission_fac_uni_id').change(function() {
          var admission_fac_uni_id = $('#admission_fac_uni_id').val();
          $.ajax({
            url: "{{ url('/admissionfilterMajors') }}",
            method: 'GET',
            data: {admission_fac_uni_id:admission_fac_uni_id},
            success:function(data) {
              $('#admission_fac_uni_major_id option').remove();
              $('#admission_department_id option').remove();
              $('#admission_fac_uni_major_id').append("<option value=''>اختر التخصص</option>");
                data.forEach(d => {
                  for($i = 0; $i < d['id'].length; $i++) {
                    $("#admission_fac_uni_major_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +" (" + d['faculty_name'] +" - "+ d['university_name'] +")</option>");
                  }
                });
            }
          })
        });

        $('#ad_admission_fac_uni_id').change(function() {
            var admission_fac_uni_id = $('#ad_admission_fac_uni_id').val();
            $.ajax({
              url: "{{ url('/admissionfilterMajors') }}",
              method: 'GET',
              data: {admission_fac_uni_id:admission_fac_uni_id},
              success:function(data) {
                $('#ad_admission_fac_uni_major_id option').remove();
                $('#ad_admission_department_id option').remove();
                $('#ad_admission_fac_uni_major_id').append("<option value=''>اختر التخصص</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#ad_admission_fac_uni_major_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +" (" + d['faculty_name'] +" - "+ d['university_name'] +")</option>");
                    }
                  });
              }
            })
          });

        $('#fac_uni_major_id').change(function() {
          var fac_uni_major_id = $('#fac_uni_major_id').val();
          $.ajax({
            url: "{{ url('/filterDepartments') }}",
            method: 'GET',
            data: {fac_uni_major_id:fac_uni_major_id},
            success:function(data) {
              $('#department_id option').remove();
              $('#department_id').append("<option value=''>حدد القسم</option>");
                data.forEach(d => {
                  for($i = 0; $i < d['id'].length; $i++) {
                    $("#department_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
                  }
                });
            }
          })
        });

        $('#admission_fac_uni_major_id').change(function() {
          var admission_fac_uni_major_id = $('#admission_fac_uni_major_id').val();
          $.ajax({
            url: "{{ url('/admissionfilterDepartments') }}",
            method: 'GET',
            data: {admission_fac_uni_major_id:admission_fac_uni_major_id},
            success:function(data) {
              $('#admission_department_id option').remove();
              $('#admission_department_id').append("<option value=''>حدد القسم</option>");
                data.forEach(d => {
                  for($i = 0; $i < d['id'].length; $i++) {
                    $("#admission_department_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
                  }
                });
            }
          })
        });

        $('#ad_admission_fac_uni_major_id').change(function() {
            var admission_fac_uni_major_id = $('#ad_admission_fac_uni_major_id').val();
            $.ajax({
              url: "{{ url('/admissionfilterDepartments') }}",
              method: 'GET',
              data: {admission_fac_uni_major_id:admission_fac_uni_major_id},
              success:function(data) {
                $('#ad_admission_department_id option').remove();
                $('#ad_admission_department_id').append("<option value=''>حدد القسم</option>");
                  data.forEach(d => {
                    for($i = 0; $i < d['id'].length; $i++) {
                      $("#ad_admission_department_id").append("<option value=" + d['id'][$i] + ">"+ d['name'][$i] +"</option>");
                    }
                  });
              }
            })
          });
      </script>
      

        
    @endif
</body>
</html>