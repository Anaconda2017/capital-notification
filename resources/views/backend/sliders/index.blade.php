@extends('backend.layouts.app')

@php $pageTitle = ' Sliders'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@push('css')
    <style>

    </style>
@endpush

@section('content')


    <section id="dom">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12">
                    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
        @endif
                    <div class="card">
                        <div class="card-header row no-gutters bg-primary bg-darken-2  align-items-center card-title-bold text-capitalize">
                            <div class="col-md-10">
                                <h4 class="card-title text-white">{{ $pageTitle }} </h4>
                            </div>
                            <div class="col-md-2 text-right">
                                <a class="btn btn-light w-100 btn-round" href="{{ route('sliders.create') }}">Add Slider</a>
                            </div>

                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard table-responsive">
                                @if(count($rows))
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr>
                                        <th>
                                          #
                                        </th>
                                        <th>
                                          Title
                                        </th>
                                        
                                        <th>
                                          Image
                                        </th>

                                        <th>
                                          Control
                                        </th>
                                    </tr>
                                    </thead>
                                    @foreach($rows as $slider)
                                    <tbody>
                                    <tr>
                                        <td>
                                            {{$slider->id}}
                                        </td>
                                        <td class="text-bold-500">
                                            {{$slider->en_title}}
                                        </td>
                                        
                                        <td>
                                            <img src="{{ asset('sliders/' . $slider->image) }}" width="30px">
                                        </td>
                                        <td class="td_action d-flex align-items-center">
                                                <a href="{{ route('sliders.edit', $slider->id) }}" title="" class="btn btn-info" type="button" data-original-title=" Edit Slider" rel="tooltip" style="margin:1px">
                                                <i class="badge-circle badge-circle-info bx bx-edit text-white font-medium-1"></i>
                                                </a>
                                              <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
                                                  {{ csrf_field() }}
                                                  {{ method_field('delete') }}
                                                  <button title="" class="btn btn-danger" type="submit" data-original-title=" Delete Slider" rel="tooltip" onclick="return confirm('Are you sure ?');">
                                                  <i class="badge-circle badge-circle-danger bx bx-x text-white font-medium-1"></i>
                                                  </button>
                                              </form>
                                        </td>
                                    </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                {{ $rows->links() }}
                @else
                <br>
                    <h3 class="text-center">No Sliders Found</h3>
                @endif
                            </div>
                        </div>
                        <input type="hidden" name="request_date" id="request_date" value="">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
