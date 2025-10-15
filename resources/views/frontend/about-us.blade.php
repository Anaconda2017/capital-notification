@extends('frontend.layouts.app')

@section('title')
    
 EHA || About	Us
 
@endsection

@section('ehanative')


    @include('frontend.layouts.header')

        <div class="pq-breadcrumb" style="background-image:url('{{ asset('medicatetheme/images/breadcrumb.jpg')}}');">
            <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                          <h2>About Us</h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{ route('welcome') }}"><i class="fas fa-home mr-2"></i>Home</a></li>
                              <li class="breadcrumb-item active">About Us</li>
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

         <section class="about-us">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 pe-xl-5"> <img src="{{  asset('about/' . $about->about_image)}}" class="img-fluid wow fadeInLeft" alt="home"> </div>
                  <div class="col-xl-6 px-xl-4 mt-4 mt-xl-0">
                     <div class="pq-section pq-style-1 text-left"> <span class="pq-section-sub-title">What About Us</span>
                        <h5 class="pq-section-title">
                          {{ $about->about_title }}
                        </h5>
                        <p class="pq-section-description">
                           {!! $about->about_text !!}
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <section class="about-us">
          <div class="container">
             <div class="row">
                <div class="col-xl-6 px-xl-4 mt-4 mt-xl-0">
                  <div class="pq-section pq-style-1 text-left"> <span class="pq-section-sub-title">What About Us</span>
                    <h5 class="pq-section-title">
                      {{ $about->second_title }}
                    </h5>
                    <p class="pq-section-description">
                        {!! $about->second_text !!}
                    </p>
                  </div>
                </div>

                <div class="col-xl-6 pe-xl-5"> <img src="{{  asset('about/' . $about->second_image)}}" class="img-fluid wow fadeInLeft" alt="home"> </div>
                
             </div>
          </div>
       </section>

    @include('frontend.layouts.footer')



@endsection
