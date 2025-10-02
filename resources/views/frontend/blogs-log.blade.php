@extends('frontend.layouts.app')

@section('title')
    
    مكلفون || مقالات			
 
@endsection

@section('classic-ecommerce')


    @include('frontend.layouts.header')


<section class="page-header position-relative " style="background-image: url({{  asset('website/assets/images/headers/Blogs.webp')}});">
  <div class="container">
      <div class="row d-flex justify-content-center align-items-center text-center">
          <div>
              
              <div class="page-title">
                  <p> مقالات </p>
              </div>
             
              <div class="d-flex justify-content-center align-items-center">
               <a  class="p-text-w ps-2"  href="{{ route('welcome') }}"> الرئيسية </a>
                  <span class="text-green fs-3 ps-2"> // </span>
                  <span class="p-text-w" > مقالات </span>
              </div>
          </div>
        
      </div>
  </div>

  <div class="icons">
    <div class="icons">
      <img src="{{  asset('website/assets/images/shared/star2.webp')}}" class="header-logo spin">  
    </div>

  </div>
</section>



<!-- blogs secion -->
<section class="blogs-secion overflow-hidden pb-4 bg-gray">
  <div class=" container ">
    <div class="row justify-content-center">

      <span class="p-size-subtitle text-yellow fw-bolder mb-2 text-center"  data-aos="fade-up"> ابق على اطلاع  </span>
      <span class="p-size-subtitle fw-bolder mb-5  text-center"  data-aos="fade-up">   تعرف على اخر الأخبار والمعلومات  </span>
     
      <!-- blogs -->
      <div class="row" >
        @foreach($blogs as $otherB)
        <div class="col-lg-4 col-md-6 col-12 mb-3"  data-aos="fade-up" >
          <a href="{{ route('blogdetail' , $otherB->ar_slug) }}" class="blog-item">
            <div class="blog-image">
              <img src="{{  asset('blogs/' . $otherB->main_image)}}" alt="{{ $otherB->ar_title }}" class="w-100">
            </div>
            <div class="date">
              <p class="p-size-large day mb-0 font-bold">{{ $otherB->day_date }}</p>
              <p class="mb-0 fw-bolder">{{ $otherB->month_date }}</p>
            </div>
            <div class="blog-text">
              <p class="font-bold slice text-black " data-max="53" title="{{ $otherB->ar_title }} " >{{ $otherB->ar_title }} </p>
              <span class="slice text-break  text-black-50 " data-max="110" title="{!! $otherB->ar_text !!} ">  {!! $otherB->ar_text !!}  </span>
            </div>
        

          </a>
   
        </div>
        @endforeach
      </div>

      

    </div>
  </div>

  <div class="icons">
    <img src="{{  asset('website/assets/images/shared/star.webp')}}" class="blogs-icon spin">

  </div>
</section>
<!-- End blogs secion -->

    @include('frontend.layouts.footer')



@endsection
