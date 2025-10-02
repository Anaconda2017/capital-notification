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
<title> EGEC | استكمال التسجيل</title>
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
                                                    
                                                    <h2 style="text-align: center;color: #fff;"> استكمال التسجيل </h2>
                                                        <br>
                                                    
                                                    <form id="form" action="{{ route('submit-egec-second-google-form-info') }}" method="post">  
                                                        @csrf
                                                        <div class="row clearfix align-items-center">
                                                            
                                                            
                                                            <div class="form-group form-control-validation col-lg-12">
                                                                <label>المؤهل الأكاديمي قبل الجامعي</label>
                                                                <select name="pre_university_academic_qualification"  id="pre_university_academic_qualification" class="d-block">
                                                                    <option value="">أختر</option>
                                                                    <option value="ثانويه عامه">ثانويه عامه</option>
                                                                    <option value="ثانويه مقررات">ثانويه مقررات</option>
                                                                    <option value="ثانويه صناعيه">ثانويه صناعيه</option>
                                                                    <option value="ثانويه تجاريه">ثانويه تجاريه</option>
                                                                    <option value="ثانويه شرعي">ثانويه شرعي</option>
                                                                    <option value="ثانويه كويتيه">ثانويه كويتيه</option>
                                                                    <option value="ثانويه أزهريه">ثانويه أزهريه</option>
                                                                    <option value="دبلوم عامان">دبلوم عامان</option>
                                                                    <option value="دبلوم عامان ونصف">دبلوم عامان ونصف</option>
                                                                    <option value="دبلوم ثلاث سنوات">دبلوم ثلاث سنوات</option>
                                                                    <option value="دبلوم تمريض">دبلوم تمريض</option>
                                                                    <option value="بكالوريوس">بكالوريوس</option>
                                                                    <option value="ماجستير">ماجستير</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            

                                                            <div class="form-group form-control-validation col-lg-12">
                                                                <label>نظام التعليم</label>
                                                                <select class="d-block"  id="education_system" name="education_system">
                                                                    <option value="">أختر</option>
                                                                    <option value="علمي">علمي</option>
                                                                    <option value="أدبي">أدبي</option>
                                                                    <option value="علمي رياضه">علمي رياضه</option>
                                                                    <option value="علمي علوم">علمي علوم</option>
                                                                    <option value="علوم طبيعيه">علوم طبيعيه</option>
                                                                    <option value="علوم شرعيه">علوم شرعيه</option>
                                                                    <option value="مقررات">مقررات</option>
                                                                    <option value="صناعي">صناعي</option>
                                                                    <option value="تجاري">تجاري</option>
                                                                    
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            
                                                            
                                                            <div class="form-group form-control-validation col-lg-12">
                                                                <label>سنة التخرج</label>
                                                                <select  id="school_degree_year" name="school_degree_year" class="d-block">
                                                                    <option value="">أختر</option>
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
                                                            
                                                            <div class="form-group form-control-validation col-lg-12">
                                                                <label>المعدل</label>
                                                                <input id="bachelor_gpa_precentage" name="bachelor_gpa_precentage" class="d-block">
                
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            
                                                            <div class="form-group form-control-validation col-lg-12">
                                                                <label>الدرجه العلميه المطلوب دراستها في مصر</label>
                                                                <select name="degree_needed" id="degree_needed" class="d-block" >
                                                                    <option value="">أختر</option>
                                                                    <option value="بكالوريوس">بكالوريوس</option>
                                                                    <option value="ماجستير">ماجستير</option>
                                                                    <option value="دكتوراه">دكتوراه</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            
                                                            @if(session('user_password'))
                                                            <input type="hidden" id="user_password" name="user_password" value="{{ session('user_password') }}"class="d-block">
                                                            @endif
                                                            @if(session('user_id'))
                                                            <input type="hidden" id="user_id" name="user_id" value="{{ session('user_id') }}" class="d-block">
                                                            @endif
                                                        </div>
                                                        
                                                         
                                                         
                                                        <div class="col-12">
                                                            <button class="btn btn-success w-100" name="" type="submit">ارسال</button>
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
            ("button").attr("disabled",true);
            ("a").attr("disabled",true);
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
        const form = document.getElementById('form');
        const preUniversityAcademicQualification = document.getElementById('pre_university_academic_qualification');
        const educationSystem = document.getElementById('education_system');
        const graduationYear = document.getElementById('school_degree_year');
        const gpa = document.getElementById('bachelor_gpa_precentage');
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
            const preUniversityAcademicQualificationValue = preUniversityAcademicQualification.value.trim();
           
            const educationSystemValue = educationSystem.value.trim();
            const graduationYearValue = graduationYear.value.trim();
            const gpaValue = gpa.value.trim();

            const degreeNeededValue = degreeNeeded.value.trim();

            if(preUniversityAcademicQualificationValue === '') {
                formErrors.push('أخر مؤهل دراسي تم الحصول عليه مطلوب');
                setErrorFor(preUniversityAcademicQualification, 'أخر مؤهل دراسي تم الحصول عليه مطلوب');
            } else {
                setSuccessFor(preUniversityAcademicQualification);
            }
            

            if(educationSystemValue === '') {
                formErrors.push('التشعيب مطلوب');
                setErrorFor(educationSystem, 'التشعيب مطلوب');
            } else {
                setSuccessFor(educationSystem);
            }
            if(graduationYearValue === '') {
                formErrors.push('عام التخرج مطلوب');
                setErrorFor(graduationYear, 'عام التخرج مطلوب');
            } else {
                setSuccessFor(graduationYear);
            }
            if(gpaValue === '') {
                formErrors.push('المعدل مطلوب');
                setErrorFor(gpa, 'المعدل مطلوب');
            } else {
                setSuccessFor(gpa);
            }

            if(degreeNeededValue === '') {
                formErrors.push('المؤهل مطلوب');
                setErrorFor(degreeNeeded, 'المؤهل مطلوب');
            } else {
                setSuccessFor(degreeNeeded);
                
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
      .main-content{
          direction:rtl;
          text-align:right;
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
                left: 50px !important;
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
<body >
    
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
                /*right: 15px;*/
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
            <div class="container" dir="ltr">
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
                                                    <h2 style="text-align: center;color: #fff;">  Complete Your Information </h2>
                                    <br>
                                                    
                                                    <form id="form" action="{{ route('submit-egec-second-google-form-info') }}" method="post" dir="rtl">    
                                                        @csrf
                                                        <div class="row clearfix align-items-center">
                                                            
                                                            
                                                            <div class="form-group form-control-validation col-lg-12">
                                                                <label>Pre-university academic qualification</label>
                                                                <select name="pre_university_academic_qualification"  id="pre_university_academic_qualification" class="d-block">
                                                                    <option value="">Choose</option>
                                                                    <option value="Thanaweya Amma">Thanaweya Amma</option>
                                                                    <option value="Thanaweya Courses">Thanaweya Courses</option>
                                                                    <option value="Industrial High School">Industrial High School</option>
                                                                    <option value="Sharia high School">Business High School</option>
                                                                    <option value="Kuwaiti Thanaweya">Kuwaiti Thanaweya</option>
                                                                    <option value="azhar high school">Azhar Thanaweya</option>
                                                                    <option value="Two years Diploma">Two years Diploma</option>
                                                                    <option value="Two years and half Diploma">Two years and half Diploma</option>
                                                                    <option value="There years Diploma">There years Diploma</option>
                                                                    <option value="Nursing Diploma">Nursing Diploma</option>
                                                                    <option value="Bachelor Diploma">Bachelor Diploma</option>
                                                                    <option value="Master's Diploma">Master's Diploma</option>
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            
                                                            
                                                            <div class="form-group form-control-validation col-lg-12">
                                                                <label>Educational System</label>
                                                                <select class="d-block"  id="education_system" name="education_system">
                                                                    <option value="">Choose</option>
                                                                    <option value="Scientific Section">Scientific Section</option>
                                                                    <option value="Science Section">Science Section</option>
                                                                    <option value="Mathematical Section">Mathematical Section</option>
                                                                    <option value="Literary Section">Literary Section</option>
                                                                    <option value="National Section">National Section</option>
                                                                    <option value="Sharia Section">Sharia Section</option>
                                                                    <option value="Industrial Education">Industrial Education</option>
                                                                    <option value="Business Education">Business Education</option>
                                                                    
                                                                </select>
                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            
                                                            
                                                            <div class="form-group form-control-validation col-lg-12">
                                                                <label>Graduation Year</label>
                                                                <select  id="school_degree_year" name="school_degree_year" class="d-block">
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
                                                            
                                                            <div class="form-group form-control-validation col-lg-12">
                                                                <label>GPA</label>
                                                                <input type="number" id="bachelor_gpa_precentage" name="bachelor_gpa_precentage" class="d-block">

                                                                <i class="fa fa-check-circle"></i>
                                                                <i class="fa fa-exclamation-circle"></i>
                                                                <small>Error message</small>
                                                            </div>
                                                            
                                                            <div class="form-group form-control-validation col-lg-12">
                                                                <label>Required Qualification</label>
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
                                                            
                                                            @if(session('user_password'))
                                                            <input type="hidden" id="user_password" name="user_password" value="{{ session('user_password') }}"class="d-block">
                                                            @endif
                                                            @if(session('user_id'))
                                                            <input type="hidden" id="user_id" name="user_id" value="{{ session('user_id') }}" class="d-block">
                                                            @endif
                                                            
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
            ("button").attr("disabled",true);
            ("a").attr("disabled",true);
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
            
            


            const form = document.getElementById('form');
            const preUniversityAcademicQualification = document.getElementById('pre_university_academic_qualification');
            const educationSystem = document.getElementById('education_system');
            const graduationYear = document.getElementById('school_degree_year');
            const gpa = document.getElementById('bachelor_gpa_precentage');
            const specalization = document.getElementById('specalization');
            const adSource = document.getElementById('ad_source');
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
                const preUniversityAcademicQualificationValue = preUniversityAcademicQualification.value.trim();
               
                const educationSystemValue = educationSystem.value.trim();
                const graduationYearValue = graduationYear.value.trim();
                const gpaValue = gpa.value.trim();
                const specalizationValue = specalization.value.trim();
                const adSourceValue = adSource.value.trim();

                const degreeNeededValue = degreeNeeded.value.trim();

                if(preUniversityAcademicQualificationValue === '') {
                    formErrors.push('pre university academic qualification is required');
                    setErrorFor(preUniversityAcademicQualification, 'pre university academic qualification is required');
                } else {
                    setSuccessFor(preUniversityAcademicQualification);
                }
                

                if(educationSystemValue === '') {
                    formErrors.push('education System is required');
                    setErrorFor(educationSystem, 'education System  is required');
                } else {
                    setSuccessFor(educationSystem);
                }
                if(graduationYear === '') {
                    formErrors.push('Graduation Year is required');
                    setErrorFor(graduationYear, 'Graduation Year is required');
                } else {
                    setSuccessFor(graduationYear);
                }
                if(gpaValue === '') {
                    formErrors.push('Gpa is required');
                    setErrorFor(gpa, 'Gpa is required');
                } else {
                    setSuccessFor(gpa);
                }
                if(specalizationValue === '') {
                    formErrors.push('specalization is required');
                    setErrorFor(specalization, 'specalization is required');
                } else {
                    setSuccessFor(specalization);
                }
                if(adSourceValue === '') {
                    formErrors.push('Ad source is required');
                    setErrorFor(adSource, 'Ad source is required');
                } else {
                    setSuccessFor(adSource);
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
 
