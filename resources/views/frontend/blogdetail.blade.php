@extends('frontend.layouts.app')

@section('title')
    
    مكلفون ||  {{ $blogdata->ar_title }} 	
 
@endsection

@section('classic-ecommerce')


    @include('frontend.layouts.header')


<section class="page-header position-relative " style="background-image: url({{  asset('website/assets/images/headers/blogs-details.webp')}});">
  <div class="container">
      <div class="row d-flex justify-content-center align-items-center text-center">
          <div>
           
              <div class="d-flex justify-content-center align-items-center">
              
                  <h1 class="p-text-w" >  {{ $blogdata->ar_title }}  </h1>
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


        <div class="col-lg-3 bg-white hidden-sm " style="min-height: 400px;  border: 1px solid #8080801c;  border-radius: 10px; " data-aos="fade-right">
        
          <p class="font-bold text-black mb-2">مقالات مقترحه</p>

          
          <div class="side-bar " >
            @if(count($otherBlog) > 0)
              @foreach($otherBlog as $otherB)
                <div class="bar-item mb-2" style=" background-color: rgb(0 0 0 / 6%); border-radius: 10px; padding: 10px;">
                  <a  href="" class="blog-text" style="text-decoration: none; color: black !important;">
                    <p class="font-bold slice " data-max="53" title="{{ route('blogdetail' , $otherB->ar_slug) }}" >{{ route('blogdetail' , $otherB->ar_slug) }}</p>
                    <span class="slice text-break" data-max="60" title="{!! $otherB->ar_text !!} ">  {!! $otherB->ar_text !!}  </span>
                  </a>
                </div>
              @endforeach  
            @else 
              <p class="h-100 d-flex justify-content-center align-items-center"> لا يوجد مقالات حاليآ</p> 
            @endif

          </div>
        </div>

        <div class=" col-lg-9 col-12" data-aos="fade-left">
            <div class="blogimage"  data-aos="fade-up" title=" {{ $blogdata->ar_title }}"  >
              <img src="{{  asset('blogs/' . $blogdata->main_image)}}" alt=" {{ $blogdata->ar_title }}"  class="w-100">
            </div>
            


        </div>

        <!-- blog text -->
        <div class="mt-3 "> 
              
          {!!  $blogdata->ar_text !!}
          
        </div>


        <div class="col-lg-3 bg-white d-none show-sm col-11 mb-3" style="min-height: 400px;  border: 1px solid #8080801c;  border-radius: 10px; " data-aos="fade-right">
        
          <p class="font-bold text-black mb-2">مقالات مقترحه</p>
          <div class="side-bar " >
            @if(count($otherBlog) > 0)
              @foreach($otherBlog as $otherB)
                <div class="bar-item mb-2" style=" background-color: rgb(0 0 0 / 6%); border-radius: 10px; padding: 10px;">
                  <a  href="" class="blog-text" style="text-decoration: none; color: black !important;">
                    <p class="font-bold slice " data-max="53" title="{{ route('blogdetail' , $otherB->ar_slug) }}" >{{ route('blogdetail' , $otherB->ar_slug) }}</p>
                    <span class="slice text-break" data-max="60" title="{!! $otherB->ar_text !!} ">  {!! $otherB->ar_text !!}  </span>
                  </a>
                </div>
              @endforeach  
            @else 
              <p class="h-100 d-flex justify-content-center align-items-center"> لا يوجد مقالات حاليآ</p> 
            @endif

          </div>
        </div>
      </div>
  </div>


</section>
<!-- End blogs secion -->



    @include('frontend.layouts.footer')



@endsection
