@extends('backend.layouts.app')

@php $pageTitle = ' Feedback Contact'; @endphp

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
                  <table id="example5" class="display min-w850">
                    <thead>
                  
                      <tr>
                      
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th style="background-image:none !important; cursor: default;"></th>
                      </tr>
                    
                    </thead>
                    <tbody>
                        @foreach($rows as $row)    
                      <tr>
                      
                        <td>
                            {{ $row->id }}
                        </td>
                        <td>
                            {{$row->name}}
                        </td>
                        <td>
                            @if($row->phone != null)
                            {{ $row->phone }}
                            @else 
                            No phone
                            @endif
                        </td>
                        <td>
                            {{$row->email}}
                        </td>
                        <td>
                            {{$row->created_at}}
                        </td>
                        <td>
                            <div class="dropdown ml-auto text-right">
                              <div class="btn-link" data-toggle="dropdown">
                                <svg  style="cursor: pointer;" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                              </div>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('feedback-contact.edit', $row->id) }}">View</a>
                              </div>
                            </div>
                          </td>
                      </tr>
                    @endforeach  
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          
      

        </div>
      </div>
      
@endsection
