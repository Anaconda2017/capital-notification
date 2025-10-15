@extends('frontend.layouts.app')

@section('title')
    
 EHA || Login
 
@endsection

@section('ehanative')


    @include('frontend.layouts.header')

        <div class="pq-breadcrumb" style="background-image:url('{{ asset('medicatetheme/images/breadcrumb.jpg')}}');">
            <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                          <h2>Login</h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{ route('welcome') }}"><i class="fas fa-home mr-2"></i>Home</a></li>
                              <li class="breadcrumb-item active">Login</li>
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


        <section class="get-in-touch  m-5" style="margin-bottom:50px !important ">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-md-8  pq-form-box">
                     <div class="form-container">
                        <div class="pq-section pq-style-1 text-center p-0"> <span class="pq-section-sub-title">Login </span>
                           <h5 class="pq-section-title">Login</h5> </div>
                     </div>
                     <div class="pq-applyform-whitebg text-start">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                           <div class="row">
                             
                                <div class="col-lg-12 col-md-12">
                                    <input type="text"  name="email" class="e-mail-field" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Email"> 
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <input type="password" id="subject" name="password" class="subject-field" size="40" aria-required="true" aria-invalid="false" placeholder="Enter Your Password"> 
                                </div>

                              <div class="col-lg-12 col-md-12">
                                 <button class="pq-button form-btn">
                                    <div class="pq-button-block">
                                       <span class="pq-button-text me-0">Sign In </span>
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
