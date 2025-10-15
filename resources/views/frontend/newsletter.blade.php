@extends('frontend.layouts.app')

@section('title')
    
 EHA || Newsletter
 
@endsection

@section('ehanative')


    @include('frontend.layouts.header')

        <div class="pq-breadcrumb" style="background-image:url('{{ asset('medicatetheme/images/breadcrumb.jpg')}}');">
            <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                          <h2>Newsletter</h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{ route('welcome') }}"><i class="fas fa-home mr-2"></i>Home</a></li>
                              <li class="breadcrumb-item active">Newsletter</li>
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

        <section class="3-colume-grid pq-pb-210">
            <div class="container">
               <div class="row">
                    @foreach ($news as $item)  
                    <div class="col-lg-6">
                        <div class="pq-blog pq-blog-col-1">
                            <div class="row">
                            <div class="col-lg-12">
                                <div class="pq-blog-post">
                                    <div class="pq-blog-contain">
                                        
                                        <h5 class="pq-blog-title">
                                            <a href="get-the-exercise-limited-mobility.html">Get
                                                {{ $item->newsletter_title }}
                                            
                                            </a>
                                        </h5>
                                        <div class="pq-blog-info">
                                        <p>{!!  $item->newsletter_text !!} </p>
                                        </div>

                                        <div class="pq-post-meta">
                                            <ul>
                                                <li class="pq-post-author"><span>December 17, 2021</span></li>
                                            </ul>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach  
               </div>
            </div>
         </section>



    @include('frontend.layouts.footer')



@endsection
