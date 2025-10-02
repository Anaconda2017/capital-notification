@extends('backend.layouts.app')

@php $pageTitle = ' blogs Control'; @endphp

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
               <a href="{{ route('blogs.create') }}"><button class="btn light btn-primary ">Add</button></a> 
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    @if(count($rows))
                    <table id="example5" class="display min-w850">
                        <thead>
                        <tr>
                        
                            <th>ID</th>
                            <th>blog Title</th>
                            <th>Category Title</th>
                            <th>Sub Category Title</th>
                            <th>
                                Status
                            </th>
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
                                    {{ $coupon->ar_title }}
                                </td>

                                <td class="text-bold-500">
                                    {{ $coupon->blogcategory->ar_title }}
                                </td>

                                <td class="text-bold-500">
                                    {{ $coupon->blogsubcategory->ar_title }}
                                </td>

                                @if($coupon->status == 1)
                                <td style="color:green">
                                    Active
                                </td>
                                @else 
                                <td style="color:red">
                                    Not Active
                                </td>
                                @endif
                            
                                <!-- actions -->
                                <td>
                                <div class="dropdown ml-auto text-right">
                                    <div class="btn-link" data-toggle="dropdown">
                                    <svg  style="cursor: pointer;" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('blogs.edit', $coupon->id) }}">Update</a>
                                    @if($coupon->status == 1)
                                            <form action="{{ route('blogs.destroy', $coupon->id)  }}" method="POST">
                                                {{ method_field('delete') }}
                                                {{ csrf_field() }} 
                                                <button type="submit" class="dropdown-item">Disable</button>
                                            </form>
                                    @else
                                            <form action="{{ route('blogsRecover', $coupon->id)  }}" method="POST">
                                            
                                                {{ csrf_field() }} 
                                                <button type="submit" class="dropdown-item">Enable</button>
                                            </form>
                                    @endif
                                    </div>
                                </div>
                                </td>												
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                 
                                @else
                                    <br>
                                    <h3 class="text-center">No Blogs Found</h3>
                                @endif
                </div>
              </div>
            </div>
          </div>

          
      

        </div>
      </div>
@endsection
