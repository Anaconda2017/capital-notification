@extends('backend.layouts.app')

@php $pageTitle = 'About Control'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@push('css')
    <style>

    </style>
@endpush

@section('content')



    <!-- row -->
    <div class="container-fluid">
        @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif
        <div class="row">

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ $pageTitle }}</h4>
               <!--<a href="{{ route('coupons.create') }}"><button class="btn light btn-primary ">Add</button></a> -->
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    @if(count($rows))
                  <table id="example5" class="display min-w850">
                    <thead>
                      <tr>
                      
                        <th>ID</th>
                        <th>
                            Facebook
                        </th>
                        <th>
                            Instagram
                        </th>
                        @if(auth()->user()->role == 'admin')
                        <th>
                            Restaurant Name
                        </th>
                        <th>
                            Admin Name
                        </th>
                        @endif
                        <th style="background-image:none !important; cursor: default;"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $coupon)
                        <tr>
                        
                            

                            <td>
                                {{ $coupon->id }}
                            </td>
                            <td class="text-bold-500">
                                <a href="{{ $coupon->facebook }}" target="_blink">
                                    
                                {{ $coupon->facebook }}
                                </a>
                            </td>
                            <td class="text-bold-500">
                                <a href="{{ $coupon->instagram }}" target="_blink">
                                    
                                {{ $coupon->instagram }}
                                </a>
                            </td>
                            @if(auth()->user()->role == 'admin')
                            <td>
                                {{ $coupon->contactUsRestaurant->en_title }}
                            </td>
                            <td>
                                {{ $coupon->contactUsRestaurant->restaurantAdmin->name }}
                            </td>
                            @endif
                        
                            <!-- actions -->
                            <td>
                            <div class="dropdown ml-auto text-right">
                                <div class="btn-link" data-toggle="dropdown">
                                <svg  style="cursor: pointer;" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('about_page.edit', $coupon->id) }}">Update</a>
                            
                                </div>
                            </div>
                            </td>												
                        </tr>
                      @endforeach
                    
                    </tbody>
                  </table>
                 
                                @else
                                    <br>
                                    <h3 class="text-center">No About Found</h3>
                                @endif
                </div>
              </div>
            </div>
          </div>

          
      

        </div>
      </div>
@endsection
