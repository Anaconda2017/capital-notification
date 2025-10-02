<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/job-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Aug 2023 13:41:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/mahgoz/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/mahgoz/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/mahgoz/css/fontawesome-all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/mahgoz/font/flaticon.css')}}">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/mahgoz/css/intlTelInput.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/mahgoz/style.css')}}">
    
    <style>
        .error-message {
            color: red;
        }

        /* .fxt-template-layout35 .fxt-form-content .radio-box.style-2 input[type="radio"]:checked + label::before {
            background-color: red;
            border-color: red;
        } */
    </style>
</head>

<body>
   
    <div id="preloader" class="preloader" >
        <div  class='d-flex justify-content-center align-items-center flex-column' style="position: fixed; top:0px; left: 0px; right: 0px; bottom: 0px;">
                <img src="{{ asset('frontend/mahgoz/img/logo-33.webp')}}" alt="">
                <span class="loader "></span>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout35">
        <div class="fxt-content-wrap">
            <div class="fxt-heading-content">
                <div class="fxt-inner-wrap">
                    <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                        <a href="" class="fxt-logo"><img src="{{ asset('frontend/mahgoz/img/logo-33.webp')}}" alt="Logo"></a>
                    </div>
                    <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                        <div class="fxt-middle-content">
                            <h1 class="fxt-main-title">Eager to begin? Sign up and let's dive into the action! 🚀🌟</h1>
                            <p class="fxt-description">Craft Your Site with Ease! Elevate your restaurant’s online presence effortlessly with our user-friendly web app. No tech wizardry is required, just a sprinkle of creativity and all will be set!</p>
                        </div>
                    </div>
                    <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                        <div class="fxt-switcher-description text-white">Do have an account? <br> <a href="{{ route('login') }}" class="fxt-switcher-text  text-white " style="font-weight: 900;">Login</a></div>
                    </div>
                    <div class="fxt-transformX-R-50 xx fxt-transition-delay-10">
                        <div class="d-flex align-items-center flex-wrap justify-content-between">
                            <ul class="fxt-socials">
                                <li class=" fxt-whatsapp fxt-transformY-50 fxt-transition-delay-9" >
                                    <a href="https://api.whatsapp.com/send?phone=2001021551322&text="   target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                                </li>
                                <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-9">
                                    <a href="https://www.facebook.com/DigitalBondMena/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>

                                <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-12">
                                    <a href="https://www.linkedin.com/company/digital-bond/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-13">
                                    <a href="https://www.instagram.com/digitalbondmena/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                                </li>

                                <li class=" fxt-tiktok   fxt-transformY-50 fxt-transition-delay-14" >
                                    <a href="https://www.tiktok.com/@digitalbondmena"  target="_blank" title="Tiktok"><i class="fa-brands fa-tiktok"></i></a>
                                </li>
                                
                            </ul>
                            <div class="fxt-copyright-text">Copyright © 2023 <a href="https://digitalbondmena.com" target="_blank"><img  src="{{ asset('frontend/digitalbond-white.webp')}}" ></a>. All Rights Reserved</div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="fxt-form-content">
                <div class="fxt-main-form">
                    <div class="fxt-inner-wrap fxt-opacity fxt-transition-delay-13">

                        <div class="">
                            <!-- Progressbar -->
                          
                            <!-- Form -->
                            <form id="myForm" class="needs-validation" action="{{ route('register') }}" method="POST">
                                @csrf
                                
                                <!-- Personal Information -->
                                <div class="fxt-form-step">
                                    <div class="fxt-steps">
                                        <span class=""></span> 1 of
                                        <span class=""></span> completed 7
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-solid progress-bar-animated" style="background-color: #e9ecef;" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <h2 class="fxt-page-title">Step 1: Set Up Your Appetizing Account</h2>
                                    <div class="form-group">
                                        <input id="name" type="text" class="form-control " style="margin-bottom: 0px;" name="name" placeholder="What’s Your Full Name"  onkeydown="handleKeydown(event)" onpaste="handlePaste(event)" >
                                        <!-- alert -->
                                        <div class=" alertx">
                                            <div id="requiredName" class="text-danger d-none fs-6 " role="alert">
                                                <span>The name is required</span>
                                            </div>

                                            <div id="nameAlert" class="text-danger d-none mb-0 fs-6 " role="alert">
                                                <span>The name must contain letters</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xl-12 col-12">
                                            <input id="phone" onkeydown="return isNumberKey(event)" style="margin-bottom: 0px;" onpaste="onPaste(event)" type="number" class="form-control" name="phone" placeholder="Write Your Phone Number" >
                                    
                                            <div class="alertx " dir="ltr" >
                                                <div id="requiredPhoneNumber" class="text-danger d-none fs-6 " role="alert">
                                                    <span> Phone number is required</span>
                                                </div> 

                                                <span id="valid-msg" class="hide" style="font-size: 14px;"></span>
										        <span id="error-msg" class="hidden" style="font-size: 14px;"></span>

                                                
                                                    
                                                <span id="phoneNumberAlert" class=" text-danger d-none opacity-0"  >Phone number is invalid</span>
                                              
                                               
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-xl-12 col-12">
                                                <input id="email" type="email" class="form-control" style="margin-bottom: 0px;" name="email" placeholder="We Need Your Email " oninput="checkInputs()" >
                                           
                                                <div class="alertx">
                                                    <div id="requiredEmail" class="text-danger d-none  fs-6 " role="alert">
                                                        <span>Email is required</span>
                                                    </div>
                                                    
                                                    <div id="emailAlert" class="text-danger d-none  fs-6 " role="alert">
                                                        <span> Email is not valid</span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="col-xl-12 col-12">
                                                <input id="password" type="password" class="form-control" style="margin-bottom: 0px;" name="password" placeholder="Choose A Strong Password" >
                                            </div>

                                            <div class=" alertx">
                                                <div id="requiredpassword" class="text-danger d-none fs-6 " role="alert">
                                                    <span>The password is required</span>
                                                </div>
    
                                                <div id="passwordAlert" class="text-danger d-none mb-0 fs-6 " role="alert">
                                                    <span>The password aleast 8 letters</span>
                                                </div>
                                            </div>
                                       
                                    </div>

                                    <h3 class="fxt-page-title">Do You Have A Domain ?</h3>
                                    <div class="form-group">
                                        <div class="radio-box style-2">
                                            <input id="domain_yes"  name="account_domain_status" value="yes"  type="radio" checked>
                                            <label for="domain_yes" style="margin-right: 20px;" >Yes</label>
                                            <input id="domain_no"   name="account_domain_status" value="no" type="radio" class="domain_no">
                                            <label for="domain_no">No</label>
                                        </div>
                                    </div>
                               
                                    <div class="form-group">
                                        <div class="d-flex align-items-center gap-2 mt-5">
                                            <!-- <button type="submit" id="nextButtonFirstAdd" name="next" onclick="emptyInputs()"  class="fxt-btn-fill" value="Next"  >Next</button> -->

                                            <button type="button" id="nextButtonFirst" name=""  onclick="emptyInputs()"  class=" fxt-btn-fill" value="Next" >Next</button>
                                            <button type="submit" id="nextButtonFirstAdd" name="next"   class="fxt-btn-fill" value="Next"  style="opacity: 0; position: absolute;left: 142%; "  >Next</button>


                                        </div>
                                    </div>
                                </div>


                             
                                
                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="{{ asset('frontend/mahgoz/js/jquery.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('frontend/mahgoz/js/bootstrap.min.js')}}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ asset('frontend/mahgoz/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Validator js -->
    <script src="{{ asset('frontend/mahgoz/js/validator.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('frontend/mahgoz/js/main.js')}}"></script>
    <script src="{{ asset('frontend/mahgoz/js/intlTelInput.js')}}"></script>
    <script src="{{ asset('frontend/mahgoz/js/plugin22.js')}}"></script>

    <script>
        
  const name = document.getElementById('name');
  let nameAlert = document.getElementById('nameAlert');
  let requiredName = document.getElementById('requiredName');

  const PhoneNumberInput = document.getElementById('phone');
  let phoneNumberAlert = document.getElementById('phoneNumberAlert');
  let requiredPhoneNumber = document.getElementById('requiredPhoneNumber');


  const emailInput = document.getElementById('email');
  let emailAlert = document.getElementById('emailAlert');
  let requiredEmail = document.getElementById('requiredEmail');


  const password = document.getElementById('password');
  let passwordAlert = document.getElementById('passwordAlert');
  let requiredpassword = document.getElementById('requiredpassword');

  let nextButtonFirst = document.getElementById('nextButtonFirst');

  let vaildFirst = false

  

  
name.addEventListener('keydown', function(event){
  if((/\d/g).test(event.key)) event.preventDefault();
})

// Address Input validation 
function validationName() {

    var regexName =/^([a-zA-Z0-9\s@,=%$#&_\u0600-\u06FF]).{2,30}$/;
    var isMatch = regexName.test(name.value);

    if (isMatch==true) {
        name.classList.add("is-valid");
        name.classList.remove("is-invalid");
        nameAlert.classList.replace('d-block','d-none');
        vaildFirst = true
        return true;

        
    } else {
        name.classList.add("is-invalid");
        name.classList.remove("is-valid");
        nameAlert.classList.replace('d-none','d-block');
        vaildFirst = false

        return false;

        
    }
    
}

name.addEventListener("keyup",validationName);

// // Phone Number Input validation 
// function validationPhoneNumber() {

//     var regexName = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{5})$/
//     var isMatch = regexName.test(PhoneNumberInput.value);

//     if (isMatch==true) {
//         // PhoneNumberInput.classList.add("is-valid");
//         // PhoneNumberInput.classList.remove("is-invalid");
//         phoneNumberAlert.classList.replace('d-block','d-none');
//         vaildFirst = true
//         return true;

        
//     } else {
//         // PhoneNumberInput.classList.add("is-invalid");
//         // PhoneNumberInput.classList.remove("is-valid");
//         phoneNumberAlert.classList.replace('d-none','d-block');
//         requiredPhoneNumber.classList.replace('d-block','d-none');
//         vaildFirst = false

//         return false;
        
//     }
    
// }

// PhoneNumberInput.addEventListener("keyup",validationPhoneNumber);

PhoneNumberInput.addEventListener("keyup",function () {
    requiredPhoneNumber.classList.replace('d-block','d-none');
    if (PhoneNumberInput.value=='') {
        PhoneNumberInput.classList.remove("is-valid"); 
}

});



//  Email Input validation 
function validationEmail() {

  var regexName = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,5}$/;
  var isMatch = regexName.test(emailInput.value);

  if (isMatch==true) {
      emailInput.classList.add("is-valid");
      emailInput.classList.remove("is-invalid");
      emailAlert.classList.replace('d-block','d-none');
      vaildFirst = true
      return true;

      
  } else {
      emailInput.classList.add("is-invalid");
      emailInput.classList.remove("is-valid");
      emailAlert.classList.replace('d-none','d-block');
      vaildFirst = false
      return false;
      
  }
  
}

emailInput.addEventListener("keyup",validationEmail);



// Address Input validation 
function validationPassowrd() {

  var regexName =/^([a-zA-Z0-9\s@,=%$#&_\u0600-\u06FF]).{7,300}$/;
  var isMatch = regexName.test(password.value);

  if (isMatch==true) {
    password.classList.add("is-valid");
    password.classList.remove("is-invalid");
    passwordAlert.classList.replace('d-block','d-none');
    vaildFirst = true

      return true;

      
  } else {
    password.classList.add("is-invalid");
    password.classList.remove("is-valid");
    passwordAlert.classList.replace('d-none','d-block');
    vaildFirst = false
    return false;
      
  }
  
}

password.addEventListener("keyup",validationPassowrd);


//validation for empty input
function emptyInputs() {

  // Name Input required
  if(name.value == ''){
    requiredName.classList.replace('d-none','d-flex');
    nameAlert.classList.replace('d-block','d-none');

  }

  name.addEventListener("keydown",()=>{
    requiredName.classList.replace('d-flex','d-none');
  });

  // Phone Number Input required
  if(PhoneNumberInput.value == ''){
      requiredPhoneNumber.classList.replace('d-none','d-flex');
      phoneNumberAlert.classList.replace('d-block','d-none');
      

  }

  PhoneNumberInput.addEventListener("keydown",()=>{
      requiredPhoneNumber.classList.replace('d-flex','d-none');

  });

  // email Input required
  if(emailInput.value == ''){
    requiredEmail.classList.replace('d-none','d-flex');
    emailAlert.classList.replace('d-block','d-none');

  }

  emailInput.addEventListener("keydown",()=>{
      requiredEmail.classList.replace('d-flex','d-none');

  });

  
  // email Input required
  if(password.value == ''){
    requiredpassword.classList.replace('d-none','d-flex');
    passwordAlert.classList.replace('d-block','d-none');

  }

  password.addEventListener("keydown",()=>{
      requiredpassword.classList.replace('d-flex','d-none');
  });
  

}

nextButtonFirst.addEventListener("click",()=>{
  if (name.value!='' && PhoneNumberInput.value!='' && emailInput.value!=''   && password.value!=''    ) {
  if (vaildFirst == true) {
    nextButtonFirst.classList.add("next");
    $("#nextButtonFirstAdd").disabled = false;
    $("#nextButtonFirstAdd").click()
  }else{
    nextButtonFirst.classList.remove("next");
    $("#nextButtonFirstAdd").disabled = true;

  }
  }
});



    


    </script>
</body>


</html>