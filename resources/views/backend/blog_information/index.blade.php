@extends('backend.layouts.app')

@php $pageTitle = 'Blog Control'; @endphp

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
                        <a class="btn btn-white btn-round" href="{{ route('blog_information.create') }}">Add Blog</a>
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
                      Title in Arabic
                    </th>
                    <th>
                      Title in English
                    </th>
                    <th>
                      Blog Status
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
                        {{$feedback->ar_title}}
                      </td>
                      <td>
                        {{$feedback->en_title}}
                      </td>
                        @if($feedback->blog_status == 1)
                      <td style="color:green">
                            Active
                      </td>
                          @else
                    <td style="color:red">
                          Not  Active
                      </td>      
                          @endif
                      <td class="td-actions row no-gutters align-items-center justify-content-center">
                            <div class="col-6">
                                <a href="{{ route('blog_information.edit', $feedback->id) }}">
                                    <button title="" class="btn btn-success btn-sm" type="button" data-original-title="Edit Blog" rel="tooltip">
                                    <i class="material-icons">edit</i>
                                    </button>
                                </a>
                            </div>
                            <div class="col-6">
                                <form action="{{ route('blog_information.destroy', $feedback->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button title="" class="btn btn-danger btn-sm" type="submit" data-original-title="Remove Blog" rel="tooltip" onclick="return confirm('Are you sure you want to delete this Blog?');">
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
                    <h3 class="text-center">No Blogs Found</h3>
                @endif
              </div>
            </div>
          </div>
        </div>
@endsection


