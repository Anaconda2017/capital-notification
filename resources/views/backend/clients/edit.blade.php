@extends('backend.layouts.app')

@php $pageTitle = 'Edit Partner'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')


<div class="container-fluid">
    <div class="row">


      <form class="col-12" action="{{ route('clients.update' , $row->id) }}" method="POST" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
          <div class="row">

         
              <!--Promo Code-->
              <div class="form-group col-lg-12">
                  <input type="text" class="form-control input-default" name="ar_title" value="{{ $row->ar_title }}" placeholder="Partner Title"  required>
              </div>

             

              <div  class="input-group mb-3 col-lg-12 col-md-12 col-12" style="margin-bottom:30px" >

                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="main_image" >
                                <label class="custom-file-label">  Logo</label>
                            </div>

                            @if($errors->has('main_image'))
                                <span class="text-danger">{{ $errors->first('main_image') }}</span>
                            @endif

                        </div>     

                        <div class="col-lg-1 col-md-2 col-3">

                            @if($row->main_image !== NULL)
                                <div class="col text-center">
                                    <img src="{{ asset('clients/' . $row->main_image) }}" style="max-width: 50px; min-width: 50px; margin-top: 5px;" alt="">

                                </div>
                            @endif
                        </div>

               <!--Status -->
               <div class="form-group col-12">
                <label>Status</label>
                <select class="form-control " name="status" required >
                    <option value="1"  {{ $row->status == 1 ? 'selected' : null }}>ON</option>
                    <option value="0" {{ $row->status == 0 ? 'selected' : null }}>OFF</option>
                </select>
             </div>

              <!--sumbit button -->
              <div class="form-group col-lg-12 ">
                  <button type="submit" class="btn light btn-primary col-12 mt-2 mb-2">Update</button>
              </div>
             

          </div>

      </form>
  

    </div>
  </div>

@endsection
