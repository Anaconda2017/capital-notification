@extends('backend.layouts.app')

@php $pageTitle = 'معرض الصور'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@push('css')
    <style>

    </style>
@endpush

@section('content')

    @if (auth()->user()->role === 'super-admin')
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
                        <div class="col-md-8 col-4 ">
                            <h4 class="card-title text-white">{{ $pageTitle }} </h4>
                        </div>
                        <div class="col-md-4 col-8 text-right">
                          <a class="btn btn-white btn-round" href="{{ route('gallery.create') }}">اضافة صور</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    @if(count($rows))
                    <table class="table table-striped table-bordered">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Control
                        </th>
                      </thead>
                      <tbody>
                      @foreach ($rows as $gallery)
                        <tr>
                          <td>
                            {{$gallery->id}}
                          </td>
                          <td>
                            <img src="{{ asset('gallery/' . $gallery->image) }}" width="100px" height="100px">
                          </td>
                          <td class="td-actions row no-gutters justify-content-center py-5">
                            <div class="col-6">
                              <a href="{{ route('gallery.edit', $gallery->id) }}">
                                    <button title="" class="btn btn-icon rounded-circle btn-info" type="button" data-original-title="Edit Gallery" rel="tooltip">
                                    <i class="material-icons">edit</i>
                                    </button>
                                </a>
                            </div>
                            <div class="col-6">
                              <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                                      {{ csrf_field() }}
                                      {{ method_field('delete') }}
                                      <button title="" class="btn btn-icon rounded-circle btn-danger" type="submit" data-original-title="Remove Gallery" rel="tooltip" onclick="return confirm('Are you sure you want to delete this item?');">
                                      <i class="material-icons">close</i>
                                      </button>
                                  </form>
                            </div>
                                
                                  
                        </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                    {{ $rows->links() }} 
                        @else
                        <h3 class="text-center">No Gallery Found</h3>
                    @endif
                  </div>
                </div>
              </div>
            </div>
        </div>      
    @endif

    @if (auth()->user()->role === 'admin')
        @if (auth()->user()->admin_status == 1)
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
                        <div class="col-md-8 col-4 ">
                            <h4 class="card-title text-white">{{ $pageTitle }} </h4>
                        </div>
                        <div class="col-md-4 col-8 text-right">
                          <a class="btn btn-white btn-round" href="{{ route('gallery.create') }}">اضافة صور</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    @if(count($rows))
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Control
                        </th>
                      </thead>
                      @foreach ($rows as $gallery)
                      <tbody>
                        <tr>
                          <td>
                            {{$gallery->id}}
                          </td>
                          <td>
                            <img src="{{ asset('gallery/' . $gallery->image) }}" width="100px" height="100px">
                          </td>
                          <td class="td-actions row no-gutters justify-content-center py-5">
                            <div class="col-6">
                              <a href="{{ route('gallery.edit', $gallery->id) }}">
                                    <button title="" class="btn btn-icon rounded-circle btn-info" type="button" data-original-title="Edit Gallery" rel="tooltip">
                                    <i class="material-icons">edit</i>
                                    </button>
                                </a>
                            </div>
                            <div class="col-6">
                              <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                                      {{ csrf_field() }}
                                      {{ method_field('delete') }}
                                      <button title="" class="btn btn-icon rounded-circle btn-danger" type="submit" data-original-title="Remove Gallery" rel="tooltip" onclick="return confirm('Are you sure you want to delete this item?');">
                                      <i class="material-icons">close</i>
                                      </button>
                                  </form>
                            </div>
                                
                                  
                        </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    {{ $rows->links() }} 
                        @else
                        <h3 class="text-center">No Gallery Found</h3>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>         
        @else
          <h3>Access Denied</h3>  
        @endif
    @endif
@endsection