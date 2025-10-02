@extends('frontend.layouts.app')

@section('title')
    
 EHA || Contact Us
 
@endsection

@section('ehanative')


    @include('frontend.layouts.header')

        <div class="pq-breadcrumb" style="background-image:url('{{ asset('medicatetheme/images/breadcrumb.jpg')}}');">
            <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                          <h2>Contact Us</h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{ route('welcome') }}"><i class="fas fa-home mr-2"></i>Home</a></li>
                              <li class="breadcrumb-item active">Contact Us</li>
                          </ol>
                        </div>
                    </nav>
                  </div>
                  <div class="col-lg-4">
                    <div class="pq-breadcrumb-img text-right wow fadeInRight"></div>
                  </div>
              </div>
            </div>
        </div>


        <section class="pq-contact-us">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="pq-contact-box">
                        <div class="pq-contact-box-icon">
                           <div class="icon animation-grow"> <i aria-hidden="true" class="ion ion-location"></i> </div>
                        </div>
                        <div class="pq-contact-box-info">
                           <h4 class="pq-contact-box-title">
                                    Our Location
                                 </h4>
                           <p class="pq-contact-box-description"> The Queen's Walk, Bishop's, London SE1 7PB, United Kingdom. </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-md-0 mt-4">
                     <div class="pq-contact-box">
                        <div class="pq-contact-box-icon">
                           <div class="icon animation-grow"> <i aria-hidden="true" class="ion ion-ios-telephone"></i> </div>
                        </div>
                        <div class="pq-contact-box-info">
                           <h4 class="pq-contact-box-title">
                                    Our Contact
                                 </h4>
                           <p class="pq-contact-box-description"> + (567) 1234-567-8900
                              <br>+ (567) 1234-567-8901 </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
                     <div class="pq-contact-box">
                        <div class="pq-contact-box-icon">
                           <div class="icon animation-grow"> <i aria-hidden="true" class="ion ion-email-unread"></i> </div>
                        </div>
                        <div class="pq-contact-box-info">
                           <h4 class="pq-contact-box-title">
                                    Mail Us
                                 </h4>
                           <p class="pq-contact-box-description"> info@peacefulthemes.com
                              <br>info2@peacefulthemes.com </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </section>

         <section class="get-in-touch p-0">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-md-8  pq-form-box">
                     <div class="form-container">
                        <div class="pq-section pq-style-1 text-center p-0"> <span class="pq-section-sub-title">contact us</span>
                           <h5 class="pq-section-title">Get in touch with us</h5> </div>
                     </div>
                     <div class="pq-applyform-whitebg text-start">
                        <form action="{{ route('sendMessage') }}" method="POST" class="">
                            @csrf
                           <div class="row">
                              <div class="col-lg-6 col-md-6"> 
                                 <input type="text"  name="name" class="name-field" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Name"> 
                              </div>
                              <div class="col-lg-6 col-md-6">
                                 <input type="email"  name="email" class="e-mail-field" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Email"> 
                              </div>
                              <div class="col-lg-6 col-md-6">
                                 <input type="text"  name="phone" class="phone-number-field" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Phone Number"> 
                              </div>
                              <div class="col-lg-12 col-md-12">
                                 <textarea name="your-message" id="message" cols="40" rows="10" aria-required="true" aria-invalid="false" placeholder="Write Your Message"></textarea>
                              </div>
                              <div class="col-lg-12 col-md-12">
                                 <button class="pq-button form-btn">
                                    <div class="pq-button-block">
                                       <span class="pq-button-text me-0">send message</span>
                                    </div>
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>



    @include('frontend.layouts.footer')



@endsection
