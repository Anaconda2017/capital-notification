@extends('backend.layouts.app')

@php $pageTitle = ' SubCategory Control'; @endphp

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
               <a href="{{ route('blogSubCategory.create') }}"><button class="btn light btn-primary ">Add</button></a> 
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    @if(count($rows))
                    <table id="example5" class="display min-w850">
                        <thead>
                        <tr>
                        
                            <th>ID</th>
                            <th>SubCategory Title</th>
                            <th>Category Title</th>
                            <th>
                                Status
                            </th>
                            <th style="background-image:none !important; cursor: default;">
                                Control
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $coupon)
                            <tr>

                                <td>
                                    {{ $coupon->id }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $coupon->title }}
                                </td>

                                <td class="text-bold-500">
                                    {{ $coupon->category->title }}
                                </td>
                                
                                @if($coupon->active_status == 1)
                                <td class="text-bold-500" style="color:green">
                                    Active
                                </td> 
                                @else 
                                <td class="text-bold-500" style="color:red">
                                    Not Actvie
                                </td> 
                                @endif

                                
                            
                                <!-- actions -->
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('blogSubCategory.edit', $coupon->id) }}" class="btn btn-primary "><i class="fas fa-pencil-alt"></i></a>
                                        
                                        @if($coupon->active_status == 1)
                                            <form action="{{ route('blogSubCategoryDelete', $coupon->id)  }}" method="POST">
                                                
                                                @csrf
                                                <button type="submit" class="btn btn-primary" style="text-align: center;"><i class="fa-solid fa-xmark"></i></button>
                                            </form>
                                        @else
                                                <form action="{{ route('blogSubCategoryRecover', $coupon->id)  }}" method="POST">
                                                    @csrf 
                                                    <button type="submit" class=" btn btn-primary" style="text-align: center;"><i class="fa-solid fa-check"></i></button>
                                                </form>
                                        @endif
                                        
                                    </div>
                                </td>												
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                 
                                @else
                                    <br>
                                    <h3 class="text-center">No SubCategories Found</h3>
                                @endif
                </div>
              </div>
            </div>
          </div>

          
      

        </div>
      </div>
@endsection
