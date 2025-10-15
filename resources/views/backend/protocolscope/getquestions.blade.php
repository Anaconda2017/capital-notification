@extends('backend.layouts.app')

@php $pageTitle = ' Qustion Control'; @endphp

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
               <a href="{{ route('createprotocolquestion' , $protocol->id) }}"><button class="btn light btn-primary ">Add</button></a> 
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    @if(count($rows))
                    <table id="example3" class="display dataTable no-footer " >
                        <thead>
                        <tr>
                        
                            <th>ID</th>
                            <th>Question </th>
                            <th>Protocol </th>
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

                                <td class="text-bold-500">
                                    {{ $coupon->protocol->title }}
                                </td>
                            
                                <!-- actions -->
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('editprotocolquestion', $coupon->id) }}" class="btn btn-primary "><i class="fas fa-pencil-alt"></i></a>
                                        @if($coupon->choices->count() > 0)

                                            <a href="{{ route('protocolchoices', $coupon->id) }}" class="btn btn-primary " style="margin-left:10px">Question Choises</a>
                                        @else 
                                            <a href="" class="btn btn-primary " style="margin-left:10px;background:green"> End Stage</a>

                                        @endif
                                            <a href="{{ route('protocoldigram', $coupon->id) }}" class="btn btn-primary " style="margin-left:10px">Question Digram</a>
                                    </div>
                                </td>												
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                 
                                @else
                                    <br>
                                    <h3 class="text-center">No Protocol Question Found</h3>
                                @endif
                </div>
              </div>
            </div>
          </div>

          
      

        </div>
      </div>
@endsection
