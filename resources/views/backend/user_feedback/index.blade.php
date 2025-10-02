@extends('backend.layouts.app')

@php $pageTitle = 'Feedback Information Control'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@push('css')
    <style>

    </style>
@endpush

@section('content')

    <div class="row">
        <div class="col-md-12">
        @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
        @endif
          <div class="card">
            <div class="card-header card-header-primary">
                <div class="row align-items-center">
                    <div class="col-md-8 col-6">
                        <h4 class="card-title ">{{ $pageTitle }} </h4>
                    </div>
                    <div class="col-md-4 col-6 text-right">
                        <a class="btn btn-white btn-round" href="{{ route('user_feedback.create') }}">Add Feedback Information</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                @if(count($abouts))
                <table class="table table-bordered table-striped">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Title
                    </th>
                    <th>
                      Text
                    </th>
                    <th class="text-right">
                      Control
                    </th>
                  </thead>
                  <tbody>
                  @foreach ($abouts as $feedback)
                    <tr>
                      <td>
                        {{$feedback->id}}
                      </td>
                      <td>
                        {{$feedback->name}}
                      </td>
                      <td>
                        {{$feedback->email}}
                      </td>
                      <td class="td-actions row no-gutters align-items-center justify-content-center">
                            <div class="col-6">
                                <a href="{{ route('user_feedback.edit', $feedback->id) }}">
                                    <button title="" class="btn btn-success btn-sm" type="button" data-original-title="Edit feedback" rel="tooltip">
                                    <i class="material-icons">edit</i>
                                    </button>
                                </a>
                            </div>
                            <div class="col-6">
                                <form action="{{ route('user_feedback.destroy', $feedback->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button title="" class="btn btn-danger btn-sm" type="submit" data-original-title="Remove feedback" rel="tooltip" onclick="return confirm('Are you sure you want to delete this feedback?');">
                                    <i class="material-icons">close</i>
                                    </button>
                                </form>
                            </div>
                     </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                
                    @else
                    <h3 class="text-center">No Feedback Information Found</h3>
                @endif
              </div>
            </div>
          </div>
        </div>
@endsection


