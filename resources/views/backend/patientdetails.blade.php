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
                    <table id="example3" class="display no-footer " >
                        <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>Patient Code</th>
                            <th>Category</th>
                            <th>Protocol</th>
                            <th>Doctor Name</th>
                            <th>Doctor Department</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>
                                    {{ $userHistoryfirst->patient_name }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $userHistoryfirst->patient_code   ?? 'N/A' }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $userHistoryfirst->sub_category_name }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $userHistoryfirst->protocol_name }}
                                </td>
                                <td class="text-bold-500">
                                    {{ $userHistoryfirst->userdata->name }} 
                                </td>
                                <td class="text-bold-500">
                                    {{ $userHistoryfirst->userdata->subject_title   ?? 'N/A' }} 
                                </td>
                            											
                            </tr>
                        
                        </tbody>
                    </table>
                 
                </div>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                    @if(count($userHistorys))
                    <table id="example3" class="display dataTable no-footer " >
                        <thead>
                        <tr>
                        
                            <th>ID</th>
                            <th>Question </th>
                            <th>choice</th>
                            <th>
                                Danger Status
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
                                    {{ $coupon->title  }} 
                                </td>
                                @if($coupon->last_child_status == 0)
                                <td class="text-bold-500">
                                    {{ $coupon->choice_value }}
                                </td>
                                @else 
                                <td style="color:green">
                                    Coby Assestment
                                </td>
                                @endif
                                
                                @if($coupon->question->danger_status == 0)
                                <td class="text-bold-500" style="color: green">
                                   No Danger
                                </td>
                                @else 
                                <td style="color:red">
                                    Danger
                                </td>
                                @endif
                                
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                 
                                @else
                                    <br>
                                    <h3 class="text-center">No Path Found</h3>
                                @endif
                </div>
              </div>
            </div>
          </div>

          
      

        </div>
      </div>
@endsection
