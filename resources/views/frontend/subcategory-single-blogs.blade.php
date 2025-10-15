@extends('frontend.layouts.app')

@section('title')
    
    مكلفون ||  {{ $subcategory->ar_title }} 			
 
@endsection

@section('classic-ecommerce')


    @include('frontend.layouts.header')


<section class="page-header position-relative " style="background-image: url({{  asset('website/assets/images/headers/blogs-details.webp')}});">
  <div class="container">
      <div class="row d-flex justify-content-center align-items-center text-center">
          <div>
           
              <div class="d-flex justify-content-center align-items-center">
              
                  <h1 class="p-text-w" >  {{ $subcategory->ar_title }}  </h1>
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
<section class="blog_detail position-relative pt-4 mb-4 bg-gray">
  <div class="container">
      <div class="row justify-content-center">



        <div class=" col-lg-12 col-12" data-aos="fade-left">
            <div class="blogimage"  data-aos="fade-up" title=" {{ $subcategory->ar_title }}"  >
              <img src="{{  asset('blogs/' . $subcategory->main_image)}}" alt=" {{ $subcategory->ar_title }}"  class="w-100">
            </div>
            


        </div>

        <!-- blog text -->
        <div class="mt-3 show-sm"> 
              
          {!!  $subcategory->ar_text !!}
          
        </div>

      </div>
  </div>


</section>
<!-- End blogs secion -->



    @include('frontend.layouts.footer')



@endsection
