@extends('frontend.layouts.app')

@section('title')
    
 EHA || Protocol Search
 
@endsection

@section('ehanative')


    @include('frontend.layouts.header')

        <div class="pq-breadcrumb" style="background-image:url('{{ asset('medicatetheme/images/breadcrumb.jpg')}}');">
            <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="pq-breadcrumb-title">
                          <h2>Search Result</h2> </div>
                        <div class="pq-breadcrumb-container mt-2">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{ route('welcome') }}"><i class="fas fa-home mr-2"></i>Home</a></li>
                              <li class="breadcrumb-item active">Search Result </li>
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

        <section class="all-services pq-pb-210">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4">
                    <div class="pq-widget widget_block pq-widget_search">
                        <form role="search" method="POST" action="{{ route('protocolsearch') }}" class="pq-block-search__button-outside pq-block-search__text-button pq-block-search">
                           <label for="pq-block-search__input-1" class="pq-block-search__label">Search</label>
                           <div class="pq-block-search__inside-wrapper ">
                              <input type="search" id="pq-block-search__input-1" class="pq-block-search__input " name="protocolsearch" value="" placeholder="" required="">
                              <button type="submit" class="pq-block-search__button  ">Search</button>
                           </div>
                        </form>
                     </div> 

                      
                     <div class="pq-widget">
                        <h4 class="m-2">
                            Categories
                        </h4>
                        <div class="pq-widget pq-widget-port p-0">
                           <div class="menu-service-menu-container">
                              <ul id="menu-service-menu" class="menu">
                                @foreach ($otherCategory as $item)
                                    
                                    <li><a href="{{ route('protocols' , $item->id) }}">{{ $item->title }} </a> </li>

                                @endforeach

                              </ul>
                           </div>
                        </div>
                     </div>     
                  </div>
                  
                  <div class="col-lg-8 ps-3 mt-4 mt-lg-0">

                     <div class="pq-menu-content">
                        
                        <div class="row">  
                            
                           
                           <div class="row">
                              
                              <div class="pq-accordion-block ">
                                @if($protocols->count() > 0)
                                 @foreach ($protocols as $key => $item)
                                    <div class="pq-accordion-box  {{ $key+1 }}">
                                        <div class="pq-ad-title">
                                        <h6 class="ad-title-text">
                                                {{ $item->title }}
                                                <i aria-hidden="true" class="ion ion-ios-arrow-down active"></i><i
                                                    aria-hidden="true" class="ion ion-ios-arrow-up inactive"></i>
                                            </h6> </div>
                                        <div class="pq-accordion-details" style="display: none;">
                                        <p class="pq-detail-text">   {!! Str::limit($item->description, 50, ' ...') !!}</p>
                                        <div class="col-lg-12">
                                            <a class="pq-button pq-button-flat mt-3" >
                                               <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i
                                                     class="ion ion-plus-round"></i> </div>
                                            </a>
                                         </div>
                                        </div>
                                    </div>
                                     
                                 @endforeach   
                                @else 
                                    <h4 style="text-align: center">No Protocols Found</h4>
                                @endif
                                    
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>


    @include('frontend.layouts.footer')



@endsection
