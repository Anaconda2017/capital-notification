@extends('backend.layouts.app')

@php $pageTitle = ' Patients  Control'; @endphp

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
                    @if(count($userHistorys))
                    <table id="example3" class="display dataTable no-footer " >
                        <thead>
                        <tr>
                        
                            <th>ID</th>
                            <th>Patient Name</th>
                            <th>Category</th>
                            <th>Protocol</th>
                            <th>Doctor Name</th>
                            <th>Doctor Department</th>
                            <th>
                                control
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($userHistorys as $key => $coupon)
                            <tr>

                                <td>
                                    {{ $key+1 }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $coupon['patient_name']  }} - {{ $coupon['patient_case']  }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $coupon['sub_category_name'] }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $coupon['protocol_name'] }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $coupon['user_name'] }} 
                                </td>
                                <td class="text-bold-500">
                                    {{ $coupon['user_department'] }} 
                                </td>
                            
                                <!-- actions -->
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('patientdetails', [  $coupon['patient_name'] ,  $coupon['patient_case'] ]) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
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
