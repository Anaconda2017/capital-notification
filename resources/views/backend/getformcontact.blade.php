@extends('backend.layouts.app')

@php $pageTitle = ' Contact Control'; @endphp

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
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    @if(count($rows))
                    <table id="example3" class="display dataTable no-footer " >
                        <thead>
                        <tr>
                        
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Date </th>
                            <th>
                                control
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $key => $coupon)
                            <tr>

                                <td>
                                    {{ $key+1 }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $coupon->name }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $coupon->phone }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $coupon->email }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $coupon->created_at->format('Y-m-d') }} 
                                </td>
                            
                                <!-- actions -->
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('getcontact', $coupon->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                                </td>												
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                 
                                @else
                                    <br>
                                    <h3 class="text-center">No Newsletters Found</h3>
                                @endif
                </div>
              </div>
            </div>
          </div>

          
      

        </div>
      </div>
@endsection
