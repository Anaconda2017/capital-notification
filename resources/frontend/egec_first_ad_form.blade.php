<!DOCTYPE html>
@if(app()->getLocale() == 'ar')
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
<title> EGEC | استمارة التسجيل</title>
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

<link href="{{ asset('frontend/css/EGEC-style-EN.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/intlTelInput-ar.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/EGEC-style-AR.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/bootstrap.rtl.min.css') }}" rel="stylesheet">

    
   
    <style>
      .main-content{
          direction:rtl;
          text-align:right;
      }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        
        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
         .image-beautiful{
                object-fit: cover;
                object-position: center;
                border-top-right-radius:10px;
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
            .h-300px{
                height:300px;
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
                color: #3db166;
            }
            .bg-bluemain{
                background-color: #25315d;
            }
            .bg-bluemain-light{
                background-color: #434566;
            }
            .card-shadow{
                -webkit-box-shadow: -30px 30px 0px 0 rgba(0,0,0, 0.08);
                box-shadow: -30px 30px 0px 0 rgba(0,0,0, 0.08); 
            }
            .box {
                padding: 40px;
                background: #25315d;
            }
            .styled-form .form-group label{
                color:#fff !important;
            }
            label {
                color:#fff !important;
            }
            .styled-form .form-group select{
                box-shadow:none;
            }
            .styled-form .form-group input{
                box-shadow:none;
            }
            .register-box{
                background-color: #25315d !important;
            }
            .register-box .form-control-validation {
                margin-bottom: 10px;
                padding-bottom: 20px;
                position: relative;
            }


            .register-box .form-control-validation.success input {
                border-color: #2ecc71;
            }

            .register-box .form-control-validation.error input {
                border-color: #e74c3c;
            }
            .register-box .form-control-validation.success select {
                border-color: #2ecc71;
            }

            .register-box .form-control-validation.error select {
                border-color: #e74c3c;
            }
            .register-box .form-control-validation i {
                display: none;
                position: absolute;
                top: 40%;
                transform: translate(-50%,50%);
                left: 40px;
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

                    max-height: 754px;
                    overflow: auto;
                }
                .card-description{
                    padding: 2rem;
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

        .iti-flag.be {
          width: 18px;
        }

        .iti-flag.ch {
          width: 15px;
        }

        .iti-flag.mc {
          width: 19px;
        }

        .iti-flag.ne {
          width: 18px;
        }

        .iti-flag.np {
          width: 13px;
        }

        .iti-flag.va {
          width: 15px;
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 2),
        only screen and (min--moz-device-pixel-ratio: 2),
        only screen and (-o-min-device-pixel-ratio: 2 / 1),
        only screen and (min-device-pixel-ratio: 2),
        only screen and (min-resolution: 192dpi),
        only screen and (min-resolution: 2dppx) {
          .iti-flag {
            background-size: 5630px 15px;
          }
        }

        .iti-flag.ac {
          height: 10px;
          background-position: 0px 0px;
        }

        .iti-flag.ad {
          height: 14px;
          background-position: -22px 0px;
        }

        .iti-flag.ae {
          height: 10px;
          background-position: -44px 0px;
        }

        .iti-flag.af {
          height: 14px;
          background-position: -66px 0px;
        }

        .iti-flag.ag {
          height: 14px;
          background-position: -88px 0px;
        }

        .iti-flag.ai {
          height: 10px;
          background-position: -110px 0px;
        }

        .iti-flag.al {
          height: 15px;
          background-position: -132px 0px;
        }

        .iti-flag.am {
          height: 10px;
          background-position: -154px 0px;
        }

        .iti-flag.ao {
          height: 14px;
          background-position: -176px 0px;
        }

        .iti-flag.aq {
          height: 14px;
          background-position: -198px 0px;
        }

        .iti-flag.ar {
          height: 13px;
          background-position: -220px 0px;
        }

        .iti-flag.as {
          height: 10px;
          background-position: -242px 0px;
        }

        .iti-flag.at {
          height: 14px;
          background-position: -264px 0px;
        }

        .iti-flag.au {
          height: 10px;
          background-position: -286px 0px;
        }

        .iti-flag.aw {
          height: 14px;
          background-position: -308px 0px;
        }

        .iti-flag.ax {
          height: 13px;
          background-position: -330px 0px;
        }

        .iti-flag.az {
          height: 10px;
          background-position: -352px 0px;
        }

        .iti-flag.ba {
          height: 10px;
          background-position: -374px 0px;
        }

        .iti-flag.bb {
          height: 14px;
          background-position: -396px 0px;
        }

        .iti-flag.bd {
          height: 12px;
          background-position: -418px 0px;
        }

        .iti-flag.be {
          height: 15px;
          background-position: -440px 0px;
        }

        .iti-flag.bf {
          height: 14px;
          background-position: -460px 0px;
        }

        .iti-flag.bg {
          height: 12px;
          background-position: -482px 0px;
        }

        .iti-flag.bh {
          height: 12px;
          background-position: -504px 0px;
        }

        .iti-flag.bi {
          height: 12px;
          background-position: -526px 0px;
        }

        .iti-flag.bj {
          height: 14px;
          background-position: -548px 0px;
        }

        .iti-flag.bl {
          height: 14px;
          background-position: -570px 0px;
        }

        .iti-flag.bm {
          height: 10px;
          background-position: -592px 0px;
        }

        .iti-flag.bn {
          height: 10px;
          background-position: -614px 0px;
        }

        .iti-flag.bo {
          height: 14px;
          background-position: -636px 0px;
        }

        .iti-flag.bq {
          height: 14px;
          background-position: -658px 0px;
        }

        .iti-flag.br {
          height: 14px;
          background-position: -680px 0px;
        }

        .iti-flag.bs {
          height: 10px;
          background-position: -702px 0px;
        }

        .iti-flag.bt {
          height: 14px;
          background-position: -724px 0px;
        }

        .iti-flag.bv {
          height: 15px;
          background-position: -746px 0px;
        }

        .iti-flag.bw {
          height: 14px;
          background-position: -768px 0px;
        }

        .iti-flag.by {
          height: 10px;
          background-position: -790px 0px;
        }

        .iti-flag.bz {
          height: 14px;
          background-position: -812px 0px;
        }

        .iti-flag.ca {
          height: 10px;
          background-position: -834px 0px;
        }

        .iti-flag.cc {
          height: 10px;
          background-position: -856px 0px;
        }

        .iti-flag.cd {
          height: 15px;
          background-position: -878px 0px;
        }

        .iti-flag.cf {
          height: 14px;
          background-position: -900px 0px;
        }

        .iti-flag.cg {
          height: 14px;
          background-position: -922px 0px;
        }

        .iti-flag.ch {
          height: 15px;
          background-position: -944px 0px;
        }

        .iti-flag.ci {
          height: 14px;
          background-position: -961px 0px;
        }

        .iti-flag.ck {
          height: 10px;
          background-position: -983px 0px;
        }

        .iti-flag.cl {
          height: 14px;
          background-position: -1005px 0px;
        }

        .iti-flag.cm {
          height: 14px;
          background-position: -1027px 0px;
        }

        .iti-flag.cn {
          height: 14px;
          background-position: -1049px 0px;
        }

        .iti-flag.co {
          height: 14px;
          background-position: -1071px 0px;
        }

        .iti-flag.cp {
          height: 14px;
          background-position: -1093px 0px;
        }

        .iti-flag.cr {
          height: 12px;
          background-position: -1115px 0px;
        }

        .iti-flag.cu {
          height: 10px;
          background-position: -1137px 0px;
        }

        .iti-flag.cv {
          height: 12px;
          background-position: -1159px 0px;
        }

        .iti-flag.cw {
          height: 14px;
          background-position: -1181px 0px;
        }

        .iti-flag.cx {
          height: 10px;
          background-position: -1203px 0px;
        }

        .iti-flag.cy {
          height: 13px;
          background-position: -1225px 0px;
        }

        .iti-flag.cz {
          height: 14px;
          background-position: -1247px 0px;
        }

        .iti-flag.de {
          height: 12px;
          background-position: -1269px 0px;
        }

        .iti-flag.dg {
          height: 10px;
          background-position: -1291px 0px;
        }

        .iti-flag.dj {
          height: 14px;
          background-position: -1313px 0px;
        }

        .iti-flag.dk {
          height: 15px;
          background-position: -1335px 0px;
        }

        .iti-flag.dm {
          height: 10px;
          background-position: -1357px 0px;
        }

        .iti-flag.do {
          height: 13px;
          background-position: -1379px 0px;
        }

        .iti-flag.dz {
          height: 14px;
          background-position: -1401px 0px;
        }

        .iti-flag.ea {
          height: 14px;
          background-position: -1423px 0px;
        }

        .iti-flag.ec {
          height: 14px;
          background-position: -1445px 0px;
        }

        .iti-flag.ee {
          height: 13px;
          background-position: -1467px 0px;
        }

        .iti-flag.eg {
          height: 14px;
          background-position: -1489px 0px;
        }

        .iti-flag.eh {
          height: 10px;
          background-position: -1511px 0px;
        }

        .iti-flag.er {
          height: 10px;
          background-position: -1533px 0px;
        }

        .iti-flag.es {
          height: 14px;
          background-position: -1555px 0px;
        }

        .iti-flag.et {
          height: 10px;
          background-position: -1577px 0px;
        }

        .iti-flag.eu {
          height: 14px;
          background-position: -1599px 0px;
        }

        .iti-flag.fi {
          height: 12px;
          background-position: -1621px 0px;
        }

        .iti-flag.fj {
          height: 10px;
          background-position: -1643px 0px;
        }

        .iti-flag.fk {
          height: 10px;
          background-position: -1665px 0px;
        }

        .iti-flag.fm {
          height: 11px;
          background-position: -1687px 0px;
        }

        .iti-flag.fo {
          height: 15px;
          background-position: -1709px 0px;
        }

        .iti-flag.fr {
          height: 14px;
          background-position: -1731px 0px;
        }

        .iti-flag.ga {
          height: 15px;
          background-position: -1753px 0px;
        }

        .iti-flag.gb {
          height: 10px;
          background-position: -1775px 0px;
        }

        .iti-flag.gd {
          height: 12px;
          background-position: -1797px 0px;
        }

        .iti-flag.ge {
          height: 14px;
          background-position: -1819px 0px;
        }

        .iti-flag.gf {
          height: 14px;
          background-position: -1841px 0px;
        }

        .iti-flag.gg {
          height: 14px;
          background-position: -1863px 0px;
        }

        .iti-flag.gh {
          height: 14px;
          background-position: -1885px 0px;
        }

        .iti-flag.gi {
          height: 10px;
          background-position: -1907px 0px;
        }

        .iti-flag.gl {
          height: 14px;
          background-position: -1929px 0px;
        }

        .iti-flag.gm {
          height: 14px;
          background-position: -1951px 0px;
        }

        .iti-flag.gn {
          height: 14px;
          background-position: -1973px 0px;
        }

        .iti-flag.gp {
          height: 14px;
          background-position: -1995px 0px;
        }

        .iti-flag.gq {
          height: 14px;
          background-position: -2017px 0px;
        }

        .iti-flag.gr {
          height: 14px;
          background-position: -2039px 0px;
        }

        .iti-flag.gs {
          height: 10px;
          background-position: -2061px 0px;
        }

        .iti-flag.gt {
          height: 13px;
          background-position: -2083px 0px;
        }

        .iti-flag.gu {
          height: 11px;
          background-position: -2105px 0px;
        }

        .iti-flag.gw {
          height: 10px;
          background-position: -2127px 0px;
        }

        .iti-flag.gy {
          height: 12px;
          background-position: -2149px 0px;
        }

        .iti-flag.hk {
          height: 14px;
          background-position: -2171px 0px;
        }

        .iti-flag.hm {
          height: 10px;
          background-position: -2193px 0px;
        }

        .iti-flag.hn {
          height: 10px;
          background-position: -2215px 0px;
        }

        .iti-flag.hr {
          height: 10px;
          background-position: -2237px 0px;
        }

        .iti-flag.ht {
          height: 12px;
          background-position: -2259px 0px;
        }

        .iti-flag.hu {
          height: 10px;
          background-position: -2281px 0px;
        }

        .iti-flag.ic {
          height: 14px;
          background-position: -2303px 0px;
        }

        .iti-flag.id {
          height: 14px;
          background-position: -2325px 0px;
        }

        .iti-flag.ie {
          height: 10px;
          background-position: -2347px 0px;
        }

        .iti-flag.il {
          height: 15px;
          background-position: -2369px 0px;
        }

        .iti-flag.im {
          height: 10px;
          background-position: -2391px 0px;
        }

        .iti-flag.in {
          height: 14px;
          background-position: -2413px 0px;
        }

        .iti-flag.io {
          height: 10px;
          background-position: -2435px 0px;
        }

        .iti-flag.iq {
          height: 14px;
          background-position: -2457px 0px;
        }

        .iti-flag.ir {
          height: 12px;
          background-position: -2479px 0px;
        }

        .iti-flag.is {
          height: 15px;
          background-position: -2501px 0px;
        }

        .iti-flag.it {
          height: 14px;
          background-position: -2523px 0px;
        }

        .iti-flag.je {
          height: 12px;
          background-position: -2545px 0px;
        }

        .iti-flag.jm {
          height: 10px;
          background-position: -2567px 0px;
        }

        .iti-flag.jo {
          height: 10px;
          background-position: -2589px 0px;
        }

        .iti-flag.jp {
          height: 14px;
          background-position: -2611px 0px;
        }

        .iti-flag.ke {
          height: 14px;
          background-position: -2633px 0px;
        }

        .iti-flag.kg {
          height: 12px;
          background-position: -2655px 0px;
        }

        .iti-flag.kh {
          height: 13px;
          background-position: -2677px 0px;
        }

        .iti-flag.ki {
          height: 10px;
          background-position: -2699px 0px;
        }

        .iti-flag.km {
          height: 12px;
          background-position: -2721px 0px;
        }

        .iti-flag.kn {
          height: 14px;
          background-position: -2743px 0px;
        }

        .iti-flag.kp {
          height: 10px;
          background-position: -2765px 0px;
        }

        .iti-flag.kr {
          height: 14px;
          background-position: -2787px 0px;
        }

        .iti-flag.kw {
          height: 10px;
          background-position: -2809px 0px;
        }

        .iti-flag.ky {
          height: 10px;
          background-position: -2831px 0px;
        }

        .iti-flag.kz {
          height: 10px;
          background-position: -2853px 0px;
        }

        .iti-flag.la {
          height: 14px;
          background-position: -2875px 0px;
        }

        .iti-flag.lb {
          height: 14px;
          background-position: -2897px 0px;
        }

        .iti-flag.lc {
          height: 10px;
          background-position: -2919px 0px;
        }

        .iti-flag.li {
          height: 12px;
          background-position: -2941px 0px;
        }

        .iti-flag.lk {
          height: 10px;
          background-position: -2963px 0px;
        }

        .iti-flag.lr {
          height: 11px;
          background-position: -2985px 0px;
        }

        .iti-flag.ls {
          height: 14px;
          background-position: -3007px 0px;
        }

        .iti-flag.lt {
          height: 12px;
          background-position: -3029px 0px;
        }

        .iti-flag.lu {
          height: 12px;
          background-position: -3051px 0px;
        }

        .iti-flag.lv {
          height: 10px;
          background-position: -3073px 0px;
        }

        .iti-flag.ly {
          height: 10px;
          background-position: -3095px 0px;
        }

        .iti-flag.ma {
          height: 14px;
          background-position: -3117px 0px;
        }

        .iti-flag.mc {
          height: 15px;
          background-position: -3139px 0px;
        }

        .iti-flag.md {
          height: 10px;
          background-position: -3160px 0px;
        }

        .iti-flag.me {
          height: 10px;
          background-position: -3182px 0px;
        }

        .iti-flag.mf {
          height: 14px;
          background-position: -3204px 0px;
        }

        .iti-flag.mg {
          height: 14px;
          background-position: -3226px 0px;
        }

        .iti-flag.mh {
          height: 11px;
          background-position: -3248px 0px;
        }

        .iti-flag.mk {
          height: 10px;
          background-position: -3270px 0px;
        }

        .iti-flag.ml {
          height: 14px;
          background-position: -3292px 0px;
        }

        .iti-flag.mm {
          height: 14px;
          background-position: -3314px 0px;
        }

        .iti-flag.mn {
          height: 10px;
          background-position: -3336px 0px;
        }

        .iti-flag.mo {
          height: 14px;
          background-position: -3358px 0px;
        }

        .iti-flag.mp {
          height: 10px;
          background-position: -3380px 0px;
        }

        .iti-flag.mq {
          height: 14px;
          background-position: -3402px 0px;
        }

        .iti-flag.mr {
          height: 14px;
          background-position: -3424px 0px;
        }

        .iti-flag.ms {
          height: 10px;
          background-position: -3446px 0px;
        }

        .iti-flag.mt {
          height: 14px;
          background-position: -3468px 0px;
        }

        .iti-flag.mu {
          height: 14px;
          background-position: -3490px 0px;
        }

        .iti-flag.mv {
          height: 14px;
          background-position: -3512px 0px;
        }

        .iti-flag.mw {
          height: 14px;
          background-position: -3534px 0px;
        }

        .iti-flag.mx {
          height: 12px;
          background-position: -3556px 0px;
        }

        .iti-flag.my {
          height: 10px;
          background-position: -3578px 0px;
        }

        .iti-flag.mz {
          height: 14px;
          background-position: -3600px 0px;
        }

        .iti-flag.na {
          height: 14px;
          background-position: -3622px 0px;
        }

        .iti-flag.nc {
          height: 10px;
          background-position: -3644px 0px;
        }

        .iti-flag.ne {
          height: 15px;
          background-position: -3666px 0px;
        }

        .iti-flag.nf {
          height: 10px;
          background-position: -3686px 0px;
        }

        .iti-flag.ng {
          height: 10px;
          background-position: -3708px 0px;
        }

        .iti-flag.ni {
          height: 12px;
          background-position: -3730px 0px;
        }

        .iti-flag.nl {
          height: 14px;
          background-position: -3752px 0px;
        }

        .iti-flag.no {
          height: 15px;
          background-position: -3774px 0px;
        }

        .iti-flag.np {
          height: 15px;
          background-position: -3796px 0px;
        }

        .iti-flag.nr {
          height: 10px;
          background-position: -3811px 0px;
        }

        .iti-flag.nu {
          height: 10px;
          background-position: -3833px 0px;
        }

        .iti-flag.nz {
          height: 10px;
          background-position: -3855px 0px;
        }

        .iti-flag.om {
          height: 10px;
          background-position: -3877px 0px;
        }

        .iti-flag.pa {
          height: 14px;
          background-position: -3899px 0px;
        }

        .iti-flag.pe {
          height: 14px;
          background-position: -3921px 0px;
        }

        .iti-flag.pf {
          height: 14px;
          background-position: -3943px 0px;
        }

        .iti-flag.pg {
          height: 15px;
          background-position: -3965px 0px;
        }

        .iti-flag.ph {
          height: 10px;
          background-position: -3987px 0px;
        }

        .iti-flag.pk {
          height: 14px;
          background-position: -4009px 0px;
        }

        .iti-flag.pl {
          height: 13px;
          background-position: -4031px 0px;
        }

        .iti-flag.pm {
          height: 14px;
          background-position: -4053px 0px;
        }

        .iti-flag.pn {
          height: 10px;
          background-position: -4075px 0px;
        }

        .iti-flag.pr {
          height: 14px;
          background-position: -4097px 0px;
        }

        .iti-flag.ps {
          height: 10px;
          background-position: -4119px 0px;
        }

        .iti-flag.pt {
          height: 14px;
          background-position: -4141px 0px;
        }

        .iti-flag.pw {
          height: 13px;
          background-position: -4163px 0px;
        }

        .iti-flag.py {
          height: 11px;
          background-position: -4185px 0px;
        }

        .iti-flag.qa {
          height: 8px;
          background-position: -4207px 0px;
        }

        .iti-flag.re {
          height: 14px;
          background-position: -4229px 0px;
        }

        .iti-flag.ro {
          height: 14px;
          background-position: -4251px 0px;
        }

        .iti-flag.rs {
          height: 14px;
          background-position: -4273px 0px;
        }

        .iti-flag.ru {
          height: 14px;
          background-position: -4295px 0px;
        }

        .iti-flag.rw {
          height: 14px;
          background-position: -4317px 0px;
        }

        .iti-flag.sa {
          height: 14px;
          background-position: -4339px 0px;
        }

        .iti-flag.sb {
          height: 10px;
          background-position: -4361px 0px;
        }

        .iti-flag.sc {
          height: 10px;
          background-position: -4383px 0px;
        }

        .iti-flag.sd {
          height: 10px;
          background-position: -4405px 0px;
        }

        .iti-flag.se {
          height: 13px;
          background-position: -4427px 0px;
        }

        .iti-flag.sg {
          height: 14px;
          background-position: -4449px 0px;
        }

        .iti-flag.sh {
          height: 10px;
          background-position: -4471px 0px;
        }

        .iti-flag.si {
          height: 10px;
          background-position: -4493px 0px;
        }

        .iti-flag.sj {
          height: 15px;
          background-position: -4515px 0px;
        }

        .iti-flag.sk {
          height: 14px;
          background-position: -4537px 0px;
        }

        .iti-flag.sl {
          height: 14px;
          background-position: -4559px 0px;
        }

        .iti-flag.sm {
          height: 15px;
          background-position: -4581px 0px;
        }

        .iti-flag.sn {
          height: 14px;
          background-position: -4603px 0px;
        }

        .iti-flag.so {
          height: 14px;
          background-position: -4625px 0px;
        }

        .iti-flag.sr {
          height: 14px;
          background-position: -4647px 0px;
        }

        .iti-flag.ss {
          height: 10px;
          background-position: -4669px 0px;
        }

        .iti-flag.st {
          height: 10px;
          background-position: -4691px 0px;
        }

        .iti-flag.sv {
          height: 12px;
          background-position: -4713px 0px;
        }

        .iti-flag.sx {
          height: 14px;
          background-position: -4735px 0px;
        }

        .iti-flag.sy {
          height: 14px;
          background-position: -4757px 0px;
        }

        .iti-flag.sz {
          height: 14px;
          background-position: -4779px 0px;
        }

        .iti-flag.ta {
          height: 10px;
          background-position: -4801px 0px;
        }

        .iti-flag.tc {
          height: 10px;
          background-position: -4823px 0px;
        }

        .iti-flag.td {
          height: 14px;
          background-position: -4845px 0px;
        }

        .iti-flag.tf {
          height: 14px;
          background-position: -4867px 0px;
        }

        .iti-flag.tg {
          height: 13px;
          background-position: -4889px 0px;
        }

        .iti-flag.th {
          height: 14px;
          background-position: -4911px 0px;
        }

        .iti-flag.tj {
          height: 10px;
          background-position: -4933px 0px;
        }

        .iti-flag.tk {
          height: 10px;
          background-position: -4955px 0px;
        }

        .iti-flag.tl {
          height: 10px;
          background-position: -4977px 0px;
        }

        .iti-flag.tm {
          height: 14px;
          background-position: -4999px 0px;
        }

        .iti-flag.tn {
          height: 14px;
          background-position: -5021px 0px;
        }

        .iti-flag.to {
          height: 10px;
          background-position: -5043px 0px;
        }

        .iti-flag.tr {
          height: 14px;
          background-position: -5065px 0px;
        }

        .iti-flag.tt {
          height: 12px;
          background-position: -5087px 0px;
        }

        .iti-flag.tv {
          height: 10px;
          background-position: -5109px 0px;
        }

        .iti-flag.tw {
          height: 14px;
          background-position: -5131px 0px;
        }

        .iti-flag.tz {
          height: 14px;
          background-position: -5153px 0px;
        }

        .iti-flag.ua {
          height: 14px;
          background-position: -5175px 0px;
        }

        .iti-flag.ug {
          height: 14px;
          background-position: -5197px 0px;
        }

        .iti-flag.um {
          height: 11px;
          background-position: -5219px 0px;
        }

        .iti-flag.us {
          height: 11px;
          background-position: -5241px 0px;
        }

        .iti-flag.uy {
          height: 14px;
          background-position: -5263px 0px;
        }

        .iti-flag.uz {
          height: 10px;
          background-position: -5285px 0px;
        }

        .iti-flag.va {
          height: 15px;
          background-position: -5307px 0px;
        }

        .iti-flag.vc {
          height: 14px;
          background-position: -5324px 0px;
        }

        .iti-flag.ve {
          height: 14px;
          background-position: -5346px 0px;
        }

        .iti-flag.vg {
          height: 10px;
          background-position: -5368px 0px;
        }

        .iti-flag.vi {
          height: 14px;
          background-position: -5390px 0px;
        }

        .iti-flag.vn {
          height: 14px;
          background-position: -5412px 0px;
        }

        .iti-flag.vu {
          height: 12px;
          background-position: -5434px 0px;
        }

        .iti-flag.wf {
          height: 14px;
          background-position: -5456px 0px;
        }

        .iti-flag.ws {
          height: 10px;
          background-position: -5478px 0px;
        }

        .iti-flag.xk {
          height: 15px;
          background-position: -5500px 0px;
        }

        .iti-flag.ye {
          height: 14px;
          background-position: -5522px 0px;
        }

        .iti-flag.yt {
          height: 14px;
          background-position: -5544px 0px;
        }

        .iti-flag.za {
          height: 14px;
          background-position: -5566px 0px;
        }

        .iti-flag.zm {
          height: 14px;
          background-position: -5588px 0px;
        }

        .iti-flag.zw {
          height: 10px;
          background-position: -5610px 0px;
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
        button {
          height: 35px;
          margin: 0;
          padding: 6px 12px;
          border-radius: 2px;
          font-family: inherit;
          font-size: 100%;
          color: inherit;
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
 <body dir="rtl">   
    
         <div class="full-width-header header-style1 home1-modifiy">
        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Topbar Area Start -->
            <div class="topbar-area dark-parimary-bg">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-md-5">
                            <ul class="topbar-contact"  style="float:right !important;">
                                <li>
                                    <i class="flaticon-email"></i>
                                    <a href="mailto:info@egec.com">{{ $contact->email }}</a>
                                </li>
                                <li>
                                    <i class="flaticon-phone"></i>
                                    {{ $contact->phone }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 text-right">
                            <ul class="topbar-right" style="float:left !important;">
                                <li class="btn-part" style="margin-left: 30px;">
                                    <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="" style="color: white">English</a>
                                </li>
                                   
                                        <li class="btn-part">
                                            <a href="{{ route('login') }}" class="" style="color: white"> تسجيل الدخول </a><span style="color: white">
                                                 / </span><a href="{{ route('register') }}" class="" style="color: white"> إنشاء حساب </a>
                                            <i class="fa fa-sign-in" style="color: #3db166; margin-right: 5px;"></i>
                                        </li>
                                    
                                        
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Area End -->

            <!-- Menu Start -->
            
            <nav class="navbar navbar-expand-xl shadow navbar-light bg-white menu-sticky">
                <div class="container">
                        
                        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt=""></a>
                        <button class="navbar-toggler d-xl-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                
                                <li class="nav-item {{ request()->segment(2) === null ? 'current-menu-item active' : null }}">
                                    <a class="nav-link " href="{{ route('home') }}">الرئيسية</a>
                                </li>

                                <li class="nav-item {{ request()->segment(2) === 'about-us' ? 'current-menu-item active' : null }}">
                                    <a class="nav-link" href="{{ route('about-us') }}">من نحن  </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الدراسه بالخارج</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        @foreach($destinations as $destination)
                                            <a class="dropdown-item" href="{{ route('destination', $destination->ar_slug) }}">الدراسه في {{ $destination->ar_name }}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item {{ request()->segment(2) === 'clients' ? 'current-menu-item active' : null }}">
                                    <a class="nav-link" href="{{ route('clients') }}">شركائنا</a>
                                </li>

                                <li class="nav-item {{ request()->segment(2) === 'contact-us' ? 'current-menu-item active' : null }}">
                                    <a class="nav-link" href="{{ route('contact-us') }}">تواصل معنا </a>
                                </li>
                                
                            </ul>
                            
                        </div>
                </div>
            </nav>

            <!-- Menu End --> 

            <!-- Canvas Menu start -->
            <nav class="right_menu_togle hidden-md">
                <div class="close-btn">
                    <span id="nav-close">
                        <div class="line">
                            <span class="line1"></span><span class="line2"></span>
                        </div>
                    </span>
                </div>
                <div class="admision-text">
                    <h3>قدم الان </h3>
                    <p>سيتصل بك الموظف المسؤل...</p>
                </div>
                <div class="admision-form">
                    <form id="uni-search-form" action="{{ route('submit-admission-info') }}" method="POST">
                        @csrf
                        <div class="mb-20">
                            <label for="country-list">البلد: </label>
                            <select name="admission_destination_id" class="form-control" id="admission_destination_id" >
                                <option value=""> اختر البلد </option>
                                @foreach($destinations as $destination)
                                    <option value="{{ $destination->id }}">{{ $destination->ar_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-20">
                            <label for="university-list">الجامعه: </label>
                            <select name="admission_university_id" class="form-control" id="admission_university_id" >
                            </select>
                        </div>
                        <div class="mb-20">
                            <label for="collage-list">الكليه: </label>
                            <select name="admission_fac_uni_id" class="form-control" id="admission_fac_uni_id" >
                            </select>
                        </div>
                        <div class="mb-20">
                            <label for="collage-list">التخصص: </label>
                            <select name="admission_fac_uni_major_id" class="form-control" id="admission_fac_uni_major_id" >
                            </select>
                        </div>
                        <div class="mb-20">
                            <label for="collage-list">القسم: </label>
                            <select name="admission_department_id" class="form-control" id="admission_department_id" >
                            </select>
                        </div>
                        <div class="form-group mb-3 text-center">
                            <input class="btn-send" type="submit" value="قدم ">
                        </div>       
                    </form>
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </header>
        <!--Header End-->
    </div>
    
         <div class="main-content my-5">
            <div class="container">
                <div class="row shadow no-gutters">
                    
                    <div class="col-md-6">
                        
                        <div class="row no-gutters">
                            <img src="http://egecmena.com/egec_new/frontend/images/slider/37a378df-3805-48a2-81f8-a06229b14b61.jpg" class="image-beautiful h-200px w-100" alt="">
                        </div>
                        
                        <div class="card-description p-5">
                            <h3 class="text-center text-main">للتسجيل والدراسة بالجامعات المصرية المُعتمدة يرجى ملئ استمارة التسجيل التالية</h3>
                                            <p>تقوم الشركة المصرية الخليجية بتقديم الخدمات التالية:-</p>
                                            <ol class="px-3 mb-5">
                                                <li>تقديم الاستشارات التعليمية مجانًا وتحديد التخصصات المناسبة للطلبة المتقدمين</li>
                                                <li>إنهاء إجراءات التسجيل والقبول وإدارة الوافدين والتعليم العالي المصري</li>
                                                <li>إنهاء إجراءات الملحقيات الثقافية والقنصليات</li>
                                                <li>إنهاء إجراءات المعادلات بالمجلس الأعلى للجامعات وكذلك إجراءات المقاصة والتحويل</li>
                                                <li>إنهاء اجراءات الجامعات والكليات وتحديد التخصصات الدراسية</li>
                                                <li>سداد الرسوم الدراسية واستخراج القبول النهائي</li>
                                                <li>استخراج أرقام الجلوس وشهادات القيد وبيان الدرجات</li>
                                            </ol>
                        </div>
                        
                    </div>

                    <div class="col-md-6 ">
                        <div class="box">
                            <div class="register-box">
                                                
                                                <div class="styled-form">
                                                    
                                                    <h2 style="text-align: center;color: #fff;"> سجل الان </h2>
                                                        <br>
                                                    
                                                  
                                                        
                                                        <form id="form" action="{{ route('submit-egec-first-google-form-info') }}" method="post">  
                                        @csrf      
                                        <div class="row clearfix align-items-center">
                                            

                                            
                                            <div class="form-group form-control-validation col-lg-12">
                                                <label>البريد الالكتروني</label>
                                                <input type="text" id="email" name="email" >
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
                                                <label>الاسم الكامل</label>
                                                <input type="text" id="full_name" name="full_name">
                                                <i class="fa fa-check-circle"></i>
                                                <i class="fa fa-exclamation-circle"></i>
                                                <small>Error message</small>
                                            </div>

                                            <div class="form-group form-control-validation col-lg-12">
                                                <label>رقم التليفون</label>
                                                <input type="number" id="phone" class="tel-input w-100" name="phone" pattern="^[0-9]+$">
                                                <span id="error-msg" class="hide"></span>
                                                <i class="fa fa-check-circle"></i>
                                                <i class="fa fa-exclamation-circle"></i>
                                                <small>Error message</small>   
                                            </div>
                                            @error('phone')
                                                <span role="alert" class="alert alert-danger col-12">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <div class="form-group form-control-validation col-lg-12">
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
                                            <div class="form-group form-control-validation col-lg-12">
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
                                            
                                            <div class="form-group form-control-validation col-lg-12">
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
                                        </div>

                                        
                                        
                                        <div class="row">
                                            
                                            <div class="col-12">
                                                <button class="btn py-2 btn-success w-100" name="" type="submit">التالي</button>
                                            </div>
                                        </div>

                                        
                                    
                                    
                                    </form>
                                                    
                                                
                                                
                                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div> 
        
         <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 footer__widget footer__widget-about mb-30">
                        <div class="footer__widget-content">
                            <h6 class="footer__widget-title" style="float: right">المصرية الخليجية للخدمات التعليمية</h6>                            
                            <p style="text-align: justify;float:right;"> شركة تعمل في مجال تطوير وتأهيل الكوادر البشرية وتقديم كافة الخدمات التعليمية ابتداء من التحاق الطلاب خلال فترة الدراسة وحتى الحصول عليها </p>
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 footer__widget footer__widget-text" style="float:right !important;text-align: justify;">
                        <h6 class="footer__widget-title" > تواصل معنا  :</h6>
                        
                        <div class="footer__widget-content">
                            <p> عنوان المدينة -  {{ $contact->ar_address }}</p>

                            <h6 style="" class="footer__widget-title"> للاستفسارات ، اتصل بـ واتساب أو فايبر أو ايمو : </h6>
                            
                            <a href="tel:{{ $contact->phone }}" class="phone-link" style="direction:ltr; float:right;">
                                <span> {{ $contact->phone }} </span>
                            </a>


                        </div><!-- /.footer-widget-content -->
                        
                    </div><!-- /.col-lg-3 -->
                    <div class="col-sm-6 col-md-6 col-lg-2 footer__widget footer__widget-nav" style="float:right !important;text-align: justify;">
                        <h6 class="footer__widget-title" >  اختصارات :</h6>
                        <div class="footer__widget-content">  
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('home') }}" target="_self" style="color: white"> الرئيسية </a></li>
                                <li><a href="{{ route('about-us') }}" target="_self" style="color: white"> من نحن  </a></li>
                                <li><a href="{{ route('contact-us') }}" target="_self" style="color: white"> تواصل معنا </a></li>
                                <li><a href="{{ route('clients') }}" target="_self" style="color: white"> شركائنا </a></li>
                            </ul>
                        </div><!-- /.footer-widget-content -->
                        
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="footer__contact">
                            <div class="footer__contact-item">
                                <div class="footer__contact-item-icon">

                                    <i class="fa fa-phone"></i>
                                </div><!-- /.footer__contact-item-icon -->
                                <div class="footer__contact-item-text">
                                    <span style="float: right;"> تواصل معنا : </span>
                                    <br>
                                    <strong style="float: right"><a href="">{{ $contact->phone }}</a></strong>
                                </div><!-- /.footer__contact-item-text -->
                            </div><!-- /.footer__contact-item -->
                            <div class="footer__contact-item">
                                <div class="footer__contact-item-icon">
                                    <i class="fa fa-envelope"></i>
                                </div><!-- /.footer__contact-item-icon -->
                                <div class="footer__contact-item-text">
                                    <span style="float: right;"> ارسل لنا عبر البريد الإلكتروني :</span>
                                    
                                    <strong style="float: right"><a href="#">{{ $contact->email }} </a></strong>
                                    <!-- <strong><a href="#">EGEC@gulf_egy.com</a></strong> -->


                                </div><!-- /.footer__contact-item-text -->
                            </div><!-- /.footer__contact-item -->
                            <div class="footer__contact-item">
                                <div class="footer__contact-item-icon">
                                    <i class="fa fa-hourglass"></i>
                                </div><!-- /.footer__contact-item-icon -->
                                <div class="footer__contact-item-text">
                                    <span style="float: right;"> ساعات العمل الرسمية :</span>
                                    <strong style="float: right; text-align: justify;">من الاثنين الى الجمعة من ال 8 صباحا حتى ال 7 مساء</strong>
                                </div><!-- /.footer__contact-item-text -->
                            </div><!-- /.footer__contact-item -->
                            <ul class="social__icons list-unstyled mt-30 mb-30" style="float: right; text-align: justify; padding: 0 20px;">
                                <li style="float: right; text-align: justify;"><a href="{{ $contact->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                <li style="float: right; text-align: justify;"><a href="{{ $contact->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                <li style="float: right; text-align: justify;"><a href="{{ $contact->instagram }}"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div><!-- /.footer__contact -->
                        <div class="footer__copyright text-center">
                                                            <span> جميع الحقوق محفوظة لدى 
                                <a class="color1" href="http://www.digitalbondmena.com"> Digital Bond </a>
                                2020 ©
                            </span>

                                <div class="d-inline-block float-left mt-1" id="end_page_menu">
                                
                                <ul class="footer__sitemap-links list-unstyled">
                                    <li class="d-inline-block"><a href="{{ route('contact-us') }}" target="_self"> تواصل معنا</a></li>
                                    <li class="d-inline-block"><a href="{{ route('contact-us') }}" target="_self">  شركائنا</a></li>
                                </ul>


                        </div><!-- /.Footer-copyright -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.Footer-bottom -->
        </div>
    </footer>
    
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
        <script src="{{ asset('frontend/js/intlTelInput-ar.js') }}"></script>
        
        <script>
        $(function () {
            $('.lazy_load').lazy();
        });
    </script>
        <script>
        $("form").on("submit",function(){
            $("button").attr("disabled",true);
            $("a").attr("disabled",true);
        })
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
        
        <script>
            
            window.addEventListener("keydown", function(e) {
                if(["ArrowUp","ArrowDown"].indexOf(e.code) > -1) {
                    e.preventDefault();
                }
            }, false);
            var input = document.querySelector("#phone"),
            errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");
          // initialise plugin
            var iti = window.intlTelInput(input, {
                preferredCountries: ['eg','ae','qa','kw','jo'],
                separateDialCode: true,
                utilsScript: "{{ asset('frontend/js/utils.js') }}"
            });
            // here, the index maps to the error code returned from getValidationError - see readme
            var errorMap = ["رقم خطأ", "رمز الدولة غير صحيح", "قصير جدا", "طويل جدا", "رقم غير صحيح"];

          // initialise plugin


          var reset = function() {
            input.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
            errorMsg.classList.add("text-danger");

            
          };
          
          // on blur: validate
          input.addEventListener('blur', function() {
            reset();
            if (input.value.trim()) {
              if (iti.isValidNumber()) {
                
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
              const fullName = document.getElementById('full_name');
              
              const email = document.getElementById('email');
              const area = document.getElementById('area');
              const nation = document.getElementById('nation');
              const nationality = document.getElementById('nationality');
               
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
                const nationValue = nation.value.trim();
                const nationalityValue = nationality.value.trim();


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

  
                
                
                
            }
            
            function setErrorFor(input, message) {
                const formControl = input.parentElement;
                const small = formControl.querySelector('small');
                formControl.className = 'form-group form-control-validation error  col-lg-12';
                small.innerText = message;
            }
            
            function setSuccessFor(input) {
                const formControl = input.parentElement;
                formControl.className = 'form-group  form-control-validation success col-lg-12';
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
<title> EGEC | addmission Form</title>
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

<link href="{{ asset('frontend/css/EGEC-style-EN.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/intlTelInput.css') }}" rel="stylesheet">

    
   
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
            .register-box{
                background-color:transparent !important;
            }
            .card-shadow{
                box-shadow:     
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
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
                color: #25315d;
            }
            .bg-bluemain{
                background-color: #25315d;
            }
            .bg-bluemain-light{
                background-color: #434566;
            }
            .card-shadow{
                -webkit-box-shadow: -30px 30px 0px 0 rgba(0,0,0, 0.08);
                box-shadow: -30px 30px 0px 0 rgba(0,0,0, 0.08); 
            }
            .box {
                padding: 40px;
                background: #25315d;
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
            }

            .register-box .form-control-validation.error input {
                border-color: #e74c3c;
            }
            .register-box .form-control-validation.success select {
                border-color: #2ecc71;
            }

            .register-box .form-control-validation.error select {
                border-color: #e74c3c;
            }
            .register-box .form-control-validation i {
                display: none;
                position: absolute;
                top: 54%;
                transform: translate(-50%,-50%);
                right: 15px;
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

                    min-height: 740px;
                    max-height: 740px;
                    overflow: auto;
                }
                /* .card-description{
                    padding: 3rem;
                } */
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

            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
              -webkit-appearance: none;
              margin: 0;
            }
            
            /* Firefox */
            input[type=number] {
              -moz-appearance: textfield;
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
            button {
            height: 35px;
            margin: 0;
            padding: 6px 12px;
            border-radius: 2px;
            font-family: inherit;
            font-size: 100%;
            color: inherit;
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
<body >
    
        
        
        <div class="full-width-header header-style1 home1-modifiy">
        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Topbar Area Start -->
            <div class="topbar-area dark-parimary-bg">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-md-5">
                            <ul class="topbar-contact">
                                <li>
                                    <i class="flaticon-email"></i>
                                    <a href="mailto:info@egec.com">{{ $contact->email }}</a>
                                </li>
                                <li>
                                    <i class="flaticon-phone"></i>
                                    {{ $contact->phone }}
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 text-right">
                            <ul class="topbar-right">
                                    
                                        <li class="btn-part">
                                            <i class="fa fa-sign-in" style="color: #3db166; margin-right: 5px;"></i>
                                            <a href="{{ route('login') }}" class="" style="color: white">Login</a><span style="color: white">/</span><a href="{{ route('register') }}" class="" style="color: white">Register</a>
                                        </li>
                                    
                                    <li class="btn-part">
                                        <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}" class="" style="color: white">اللغة العربية</a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Area End -->

            <!-- Menu Start -->
            
            <nav class="navbar shadow navbar-expand-xl navbar-light bg-white menu-sticky">
                <div class="container">
                        
                        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt=""></a>
                        <button class="navbar-toggler d-xl-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                
                                <li class="nav-item {{ request()->segment(2) === null ? 'current-menu-item active' : null }}">
                                    <a class="nav-link " href="{{ route('home') }}">Home</a>
                                </li>

                                <li class="nav-item {{ request()->segment(2) === 'about-us' ? 'current-menu-item active' : null }}">
                                    <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Studying Abroad</a>
                                    <div class="dropdown-menu" style="right:0;" aria-labelledby="dropdownId">
                                        @foreach($destinations as $destination)
                                            <a class="dropdown-item" href="{{ route('destination', $destination->en_slug) }}">Study in {{ $destination->en_name }}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item {{ request()->segment(2) === 'clients' ? 'current-menu-item active' : null }}">
                                    <a class="nav-link" href="{{ route('clients') }}">Our Partners</a>
                                </li>

                                <li class="nav-item {{ request()->segment(2) === 'contact-us' ? 'current-menu-item active' : null }}">
                                    <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                                </li>
                                
                               
                                
                            </ul>
                            
                        </div>
                </div>
            </nav>

            <!-- Menu End --> 

            <!-- Canvas Menu start -->
            <nav class="right_menu_togle hidden-md">
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
                            <select name="admission_destination_id" class="form-control" id="admission_destination_id" >
                                <option value="">Select a Country</option>
                                @foreach($destinations as $destination)
                                    <option value="{{ $destination->id }}">{{ $destination->en_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-20">
                            <label for="university-list">University:</label>
                            <select name="admission_university_id" class="form-control" id="admission_university_id" >
                            </select>
                        </div>
                        <div class="mb-20">
                            <label for="collage-list">Faculty:</label>
                            <select name="admission_fac_uni_id" class="form-control" id="admission_fac_uni_id" >
                            </select>
                        </div>
                        <div class="mb-20">
                            <label for="collage-list">Major:</label>
                            <select name="admission_fac_uni_major_id" class="form-control" id="admission_fac_uni_major_id" >
                            </select>
                        </div>
                        <div class="mb-20">
                            <label for="collage-list">Department:</label>
                            <select name="admission_department_id" class="form-control" id="admission_department_id" >
                            </select>
                        </div>
                        <div class="form-group mb-3 text-center">
                            <input class="btn-send" type="submit" value="Apply">
                        </div>       
                    </form>
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </header>
        <!--Header End-->
    </div>
        
        <div class="main-content my-5" >
            <div class="container" >
                <div class="row shadow no-gutters">
                    <div class="col-md-6">
                        <div class="row no-gutters">
                            <img src="http://egecmena.com/egec_new/frontend/images/slider/37a378df-3805-48a2-81f8-a06229b14b61.jpg" class="image-beautiful h-200px w-100" alt="">
                            
                        </div>
                        <div class="card-description px-5 pt-4 ">
                            <h3 class="text-center text-main">To register and study at accredited Egyptian universities <br>Please fill the following registration form</h3>
                            <p>Egyptian Gulf for Educational Consultant provides the following services:-</p>
                            <ol class="px-3" style="text-align: initial !important;">
                                <li>Providing educational consultations for free and determining the appropriate specializations for the applicants</li>
                                <li>Completing registration and admission procedures, besides the Department of Expatriates and Egyptian Higher Education</li>
                                <li>Finishing the procedures of cultural attachés and consulates</li>
                                <li>Finishing the equivalence procedures at the Supreme Council of Universities, as well as transfer procedures</li>
                                <li>Finishing the procedures of universities and colleges and determining academic specializations</li>
                                <li>Paying the tuition fees and extract the final acceptance</li>
                                <li>Extracting certificates and grades</li>

                            </ol>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="box">
                            <div class="register-box">
                                                
                                                <div class="styled-form">
                                                    <h2 style="text-align: center;color: #fff;">  Apply Now </h2>
                                    <br>    
                                                    <form id="form" action="{{ route('submit-egec-first-google-form-info') }}" method="post" >    
                                                        @csrf
                                                        <div class="row clearfix align-items-center">
                                                            
                                                            
                                                            <div class="form-group form-control-validation col-lg-12">
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
                                                                <label>Full Name</label>
                                                                <input type="text" id="full_name" name="full_name">
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            
                                                            
                                                               
                                                                
                                                            <div class="form-group form-control-validation col-lg-12">
                                                                <label>Phone Number</label>
                                                                <input type="number" id="phone" class="tel-input w-100" min="0" name="phone" pattern="^[0-9]+$">
                                                                <span id="error-msg" class="hide"></span>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>   
                                                            
                                                            </div> 
                                                            
                                                            @error('phone')

                                                                    <span role="alert" class="alert alert-danger col-12">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                                
                                                                
                                                            
                                                            <div class="form-group form-control-validation col-lg-12">
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
                                                            
                                                            <div class="form-group form-control-validation col-lg-12">
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
                                                                
                                                            <div class="form-group form-control-validation col-lg-12">
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
                                                                                                                
                                                            
                                                            
                                                        </div>
            
                                                        <div class="col-12">
                                                            <button class="btn btn-success w-100" name="" type="submit">Next</button>
                                                        </div>
                                                    
                                                    
                                                    </form>
                                                    
                                                    
                                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
        <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 footer__widget footer__widget-about mb-30">
                        <div class="footer__widget-content">
                            <h6 class="footer__widget-title">Egyptian Gulf for Educational Consultant</h6>                            
                            <p> A company that works in the field of developing and qualifying human resources and providing all educational services starting from enrolling students through the study period until obtaining </p>
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 footer__widget footer__widget-text">
                        <h6 class="footer__widget-title">Connect With Us</h6>
                        <div class="footer__widget-content">
                            <p> City Address - {{ $contact->en_address }}</p>

                            <span style="color: #fff ; font-size: 14px">For inquiries, contact WhatsApp, Viber, or Emo</span>
                            <a href="tel:{{ $contact->phone }}" class="phone-link">
                                <span> {{ $contact->phone }} </span>
                            </a>


                        </div><!-- /.footer-widget-content -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-sm-6 col-md-6 col-lg-2 footer__widget footer__widget-nav">
                        <h6 class="footer__widget-title">Quick Links</h6>
                        <div class="footer__widget-content">
                            
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('home') }}" target="_self"> Home</a></li>
                                <li><a href="{{ route('about-us') }}" target="_self"> About us</a></li>
                                <li><a href="{{ route('contact-us') }}" target="_self"> Contact us</a></li>
                                <li><a href="{{ route('clients') }}" target="_self"> Our partners</a></li>
                            </ul>

                            
                        </div><!-- /.footer-widget-content -->
                    </div><!-- /.col-lg-2 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="footer__contact">
                            <div class="footer__contact-item">
                                <div class="footer__contact-item-icon">
                                    <i class="fa fa-phone"></i>
                                </div><!-- /.footer__contact-item-icon -->
                                <div class="footer__contact-item-text">
                                    <span>Contact Us:</span>
                                    <strong><a href="">{{ $contact->phone }}</a></strong>
                                </div><!-- /.footer__contact-item-text -->
                            </div><!-- /.footer__contact-item -->
                            <div class="footer__contact-item">
                                <div class="footer__contact-item-icon">
                                    <i class="fa fa-envelope"></i>
                                </div><!-- /.footer__contact-item-icon -->
                                <div class="footer__contact-item-text">
                                    <span>Email us:</span>
                                    
                                    <strong><a href="#">{{ $contact->email }} </a></strong>
                                    <!-- <strong><a href="#">EGEC@gulf_egy.com</a></strong> -->


                                </div><!-- /.footer__contact-item-text -->
                            </div><!-- /.footer__contact-item -->
                            <div class="footer__contact-item">
                                <div class="footer__contact-item-icon">
                                    <i class="fa fa-hourglass"></i>
                                </div><!-- /.footer__contact-item-icon -->
                                <div class="footer__contact-item-text">
                                    <span>Working Hours:</span>
                                    <strong>Mon-Fri: 8am – 7pm</strong>
                                </div><!-- /.footer__contact-item-text -->
                            </div><!-- /.footer__contact-item -->
                            <ul class="social__icons list-unstyled mt-30 mb-30">
                                <li><a href="{{ $contact->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ $contact->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ $contact->instagram }}"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div><!-- /.footer__contact -->
                        <div class="footer__copyright text-center">
                                                            <span> All Rights Reserved To
                                <a class="color1" href="http://www.digitalbondmena.com">Digital Bond</a>
                                2021 ©
                            </span>

                                <div class="d-inline-block mt-1" id="end_page_menu">
                                
                                <ul class="footer__sitemap-links list-unstyled">
                                    <li class="d-inline-block"><a href="{{ route('contact-us') }}" target="_self"> Contact us </a></li>
                                    {{-- <li class="d-inline-block"><a href="{{ route('about-us') }}" target="_self"> About us </a></li> --}}
                                    <li class="d-inline-block"><a href="{{ route('clients') }}" target="_self"> Our Partners </a></li>
                                </ul>


                        </div><!-- /.Footer-copyright -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.Footer-bottom -->
        </div>
    </footer>
    
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
    <script src="{{ asset('frontend/js/intlTelInput.js') }}"></script>
    <script>
        $(function () {
            $('.lazy_load').lazy();
        });
    </script>
        <script>
        $("form").on("submit",function(){
            $("button").attr("disabled",true);
            $("a").attr("disabled",true);
        })
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
        
        <script>
            window.addEventListener("keydown", function(e) {
                if(["ArrowUp","ArrowDown"].indexOf(e.code) > -1) {
                    e.preventDefault();
                }
            }, false);
          
            var input = document.querySelector("#phone"),
            errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");
          // initialise plugin
          var iti = window.intlTelInput(input, {
            preferredCountries: ['eg','ae', 'sa','qa','kw','jo'],
            separateDialCode: true,
            utilsScript: "{{ asset('frontend/js/utils.js') }}"
          });
          // here, the index maps to the error code returned from getValidationError - see readme
          var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

          // initialise plugin


            var reset = function() {
                input.classList.remove("error");
                errorMsg.innerHTML = "";
                errorMsg.classList.add("hide");
                errorMsg.classList.add("text-danger");

                
            };
          
          // on blur: validate
          input.addEventListener('blur', function() {
            reset();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    
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
              const fullName = document.getElementById('full_name');
              
              const area = document.getElementById('area');
              const nation = document.getElementById('nation');
              const nationality = document.getElementById('nationality');
               
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
                const nationValue = nation.value.trim();
                const nationalityValue = nationality.value.trim();


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


                
                
                
            }
            
            function setErrorFor(input, message) {
                const formControl = input.parentElement;
                const small = formControl.querySelector('small');
                formControl.className = 'form-group form-control-validation error col-lg-12';
                small.innerText = message;
            }
            
            function setSuccessFor(input) {
                const formControl = input.parentElement;
                formControl.className = 'form-group  form-control-validation success col-lg-12';
            }
            
            function isEmail(email) {
                return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
            }
            
                           
            </script> 
            
</body>  
</html>
 @endif
 
