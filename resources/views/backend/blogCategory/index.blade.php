@extends('backend.layouts.app')

@php $pageTitle = ' Category Control'; @endphp

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
               <a href="{{ route('blogCategory.create') }}"><button class="btn light btn-primary ">Add</button></a> 
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    @if(count($rows))
                    <table id="example3" class="display dataTable no-footer " >
                        <thead>
                        <tr>
                        
                            <th>ID</th>
                            <th>Category Title</th>
                            <th>
                                control
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
                            
                                <!-- actions -->
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('blogCategory.edit', $coupon->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                                </td>												
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                 
                                @else
                                    <br>
                                    <h3 class="text-center">No Categories Found</h3>
                                @endif
                </div>
              </div>
            </div>
          </div>

          
      

        </div>
      </div>
@endsection
