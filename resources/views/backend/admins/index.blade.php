@extends('backend.layouts.app')

@php $pageTitle = 'Doctor Control '; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@push('css')
    <style>

    </style>
@endpush

@section('content')
    <div class="container-fluid">
        @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif
        @if (auth()->user()->role === 'admin')
          
          <div class="row">
    
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">{{ $pageTitle }}</h4>
                   <a href="{{ route('admins.create') }}"><button class="btn light btn-primary ">Add</button></a> 
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        @if(count($rows))
                        <table id="example3" class="display dataTable no-footer " >
                            <thead>
                                <tr>
                                      <th>
                                        ID
                                      </th>
                                      <th>
                                        Name
                                      </th>
                                      <th>
                                        Email
                                      </th>
                                      <th>Department Name</th>
                                      <th>
                                        Manager
                                      </th>
                                      @if(auth()->user()->role === 'admin')
                                        <th class="text-right">
                                          Control
                                        </th>
                                      @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rows as $coupon)
                                <tr>
    
                                    <td>
                                      {{$coupon->id}}
                                    </td>
                                    <td>
                                      {{$coupon->name}}
                                    </td>
                                    <td>
                                      {{$coupon->email}}
                                    </td>
                                    <td>
                                      {{$coupon->subject_title ?? 'N/A'}}
                                    </td>
                                    @if($coupon->manager)
                                    <td>
                                      {{$coupon->manager->name}}
                                    </td>
                                    @else 
                                    <td style="color:red">
                                        No Manager
                                    </td>
                                    @endif
                                    
                                    
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
                                            <a href="{{ route('admins.edit', $coupon->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            
                                            
                                            @if($coupon->active_status == 1)
                                                <form action="{{ route('admins.destroy', $coupon->id)  }}" method="POST">
                                                    {{ method_field('delete') }}
                                                    {{ csrf_field() }} 
                                                    <button type="submit" class="dropdown-item btn btn-primary shadow btn-xs sharp me-1" style="text-align: center;"><i class="fa-solid fa-xmark"></i></button>
                                                </form>
                                            @else
                                                    <form action="{{ route('adminsRecover', $coupon->id)  }}" method="POST">
                                                        @csrf 
                                                        <button type="submit" class="dropdown-item btn btn-primary shadow btn-xs sharp me-1" style="text-align: center;"><i class="fa-solid fa-check"></i></button>
                                                    </form>
                                            @endif
                                        </div>
                                    </td>												
                                </tr>
                            @endforeach
                            
                            </tbody>
                        </table>
                        
                            {{ $rows->links() }} 
                     
                                    @else
                                        <br>
                                        <h3 class="text-center">No Doctors Found</h3>
                                    @endif
                    </div>
                  </div>
                </div>
              </div>
    
              
          
    
            </div>
          
          
        @else 
          <h3>Access Denied</h3>  
        @endif
    </div>    
@endsection


