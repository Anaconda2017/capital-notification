@extends('backend.layouts.app')

@php $pageTitle = 'الفيديوهات'; @endphp

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
                    <div class="col-md-8 col-4">
                        <h4 class="card-title text-white">{{ $pageTitle }} </h4>
                    </div>
                    <div class="col-md-4 col-8 text-right">
                        <a class="btn btn-white btn-round" href="{{ route('egec_video.create') }}">اضف فيديو</a>
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
                      العنوان باللغه الانجليزيه
                    </th>
                    <th>
                       العنوان باللغه العربية
                    </th>
                    <th>
                      صوره الفيديو
                    </th>
                    <th class="text-right">
                      التحكم
                    </th>
                  </thead>
                  @foreach ($rows as $egecVideo)
                  <tbody>
                    <tr>
                      <td>
                        {{$egecVideo->id}}
                      </td>
                      <td>
                        {{$egecVideo->en_title}}
                      </td>
                      <td>
                        {{$egecVideo->ar_title}}
                      </td>
                      <td>
                        <img src="{{ asset('egec_video/' . $egecVideo->video_image) }}" width="100px" height="100px">
                      </td>
                      <td class="td-actions row justify-content-center no-gutters py-5">
                        <div class="col-6">
                          <a href="{{ route('egec_video.edit', $egecVideo->id) }}">
                                <button title="" class="btn btn-icon rounded-circle btn-info mr-3" type="button" data-original-title="Edit Video" rel="tooltip">
                                <i class="material-icons">edit</i>
                                </button>
                            </a>
                        </div>
                        <div class="col-6">
                          <form action="{{ route('egec_video.destroy', $egecVideo->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button title="" class="btn btn-icon rounded-circle btn-danger" type="submit" data-original-title="Remove Video" rel="tooltip" onclick="return confirm('Are you sure you want to delete this item?');">
                                <i class="material-icons">close</i>
                                </button>
                            </form>
                        </div>
                            
                            
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
               
                    @else
                    <h3 class="text-center">لا يوجد فيديوهات حاليا</h3>
                @endif
              </div>
            </div>
          </div>
        </div>
@endsection


