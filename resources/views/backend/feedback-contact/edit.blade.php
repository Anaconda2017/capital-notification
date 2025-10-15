@extends('backend.layouts.app')

@php $pageTitle = 'Form Information'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')
    <!-- row -->
    <div class="container-fluid">
        <div class="row">


          <!-- Form Information table -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ $pageTitle }}</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-responsive-sm">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Date</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            {{ $row->name }}
                        </td>
                        <td>
                            @if($row->phone != null)
                            {{ $row->phone }}
                        @else 
                            No phone
                            @endif
                        </td>
                        <td>
                            {{ $row->email }}
                        </td>
                        <td>
                            {{ $row->created_at }}
                        </td>
                      </tr>
                 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- Form Message table -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Form Message</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-responsive-sm">
                    <thead>
                      <tr>
                        <th>Message</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            {{ $row->message }}
                        </td>
                      </tr>
                 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>


@endsection
