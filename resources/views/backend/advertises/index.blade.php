@extends('backend.layouts.app')

@php $pageTitle = 'الاعلانات'; @endphp

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
                        <a class="btn btn-white btn-round" href="{{ route('advertises.create') }}">اضف اعلان</a>
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
                     صوره اول اعلان
                    </th>
                    <th>
                      صوره تاني اعلان
                    </th>
                    <th>
                      صوره ثالث عنوان
                    </th>
                    <th class="text-right">
                      التحكم
                    </th>
                  </thead>
                  @foreach ($rows as $advertise)
                  <tbody>
                    <tr>
                      <td>
                        {{$advertise->id}}
                      </td>
                      
                      <td>
                        <img src="{{ asset('advertises/' . $advertise->first_image_adv) }}" width="100px" height="100px">
                      </td>

                      <td>
                        <img src="{{ asset('advertises/' . $advertise->second_image_adv) }}" width="100px" height="100px">
                      </td>

                      <td>
                        <img src="{{ asset('advertises/' . $advertise->third_image_adv) }}" width="100px" height="100px">
                      </td>
                      <td class="td-actions row justify-content-center no-gutters py-5">
                        <div class="col-6">
                          <a href="{{ route('advertises.edit', $advertise->id) }}">
                                <button title="" class="btn btn-icon rounded-circle btn-info mr-3" type="button" data-original-title="Edit Advertise" rel="tooltip">
                                <i class="material-icons">edit</i>
                                </button>
                            </a>
                        </div>
                        <div class="col-6">
                          <form action="{{ route('advertises.destroy', $advertise->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button title="" class="btn btn-icon rounded-circle btn-danger" type="submit" data-original-title="Remove Advertise" rel="tooltip" onclick="return confirm('Are you sure you want to delete this item?');">
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
                    <h3 class="text-center">لا يوجد اعلانات حاليا</h3>
                @endif
              </div>
            </div>
          </div>
        </div>
@endsection


