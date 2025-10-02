@extends('backend.layouts.app')

@php $pageTitle = 'Edit About'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')
  

    <div class="container-fluid">
        @if(Session::has('flash_message'))
                <div class="alert alert-success col-12">
                    {{ Session::get('flash_message') }}
                </div>
                @endif
        <div class="row">

            <form action="{{ route('homeAbout.update', $row->id) }}" method="POST" class="col-12"  enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                    <div class="row">

                        <div class="form-group col-lg-6 ">
                            <label for=""> About Small Title </label>
                            <input style="margin-bottom:30px" type="text" name="ar_small_title" id="ar_small_title" class="form-control input-default" placeholder="Title" value="{{ $row->ar_small_title }}" required>
                           
                            @if($errors->has('ar_small_title'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_small_title') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-6 ">
                            <label for=""> About Main Title </label>
                            <input style="margin-bottom:30px" type="text" name="ar_main_title" id="ar_main_title" class="form-control input-default" placeholder="Title" value="{{ $row->ar_main_title }}" required>
                           
                            @if($errors->has('ar_main_title'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_main_title') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-12 ">
                            <label for=""> About Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="ar_text" class="form-control" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->ar_text }}</textarea>
                            </div>

                            @if($errors->has('ar_text'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_text') }}
                                </span>
                            @endif
                        </div> 

                        <div  class="input-group mb-3 col-lg-12 col-md-12 col-12" style="margin-bottom:30px" >

                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="main_image" >
                                <label class="custom-file-label"> About Image</label>
                            </div>

                            @if($errors->has('main_image'))
                                <span class="text-danger">{{ $errors->first('main_image') }}</span>
                            @endif

                        </div>     

                        <div class="col-lg-1 col-md-2 col-3">

                            @if($row->main_image !== NULL)
                                <div class="col text-center">
                                    <img src="{{ asset('about/' . $row->main_image) }}" style="max-width: 50px; min-width: 50px; margin-top: 5px;" alt="">

                                </div>
                            @endif
                        </div>

                        <div  class="input-group mb-3 col-lg-12 col-md-12 col-12" style="margin-bottom:30px" >

                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="second_image" >
                                <label class="custom-file-label"> About Second Image</label>
                            </div>

                            @if($errors->has('second_image'))
                                <span class="text-danger">{{ $errors->first('second_image') }}</span>
                            @endif

                        </div>     

                        <div class="col-lg-1 col-md-2 col-3">

                            @if($row->second_image !== NULL)
                                <div class="col text-center">
                                    <img src="{{ asset('about/' . $row->second_image) }}" style="max-width: 50px; min-width: 50px; margin-top: 5px;" alt="">

                                </div>
                            @endif
                        </div>

                           

                        <div class="form-group col-lg-12 ">
                            <label for=""> About counter</label>
                            <input style="margin-bottom:30px" type="number" name="about_numer" id="about_numer" min="1" class="form-control input-default" placeholder="Title" value="{{ $row->about_numer }}" required>
                           
                            @if($errors->has('about_numer'))
                                <span class="text-danger">
                                    {{ $errors->first('about_numer') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-12 ">
                            <label for=""> About Meta Title </label>
                            <input style="margin-bottom:30px" type="text" name="ar_meta_title" id="ar_meta_title" class="form-control input-default" placeholder="Title" value="{{ $row->ar_meta_title }}" required>
                           
                            @if($errors->has('ar_meta_title'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_meta_title') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-12 ">
                            <label for=""> About Meta Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="ar_meta_text" class="form-control" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->ar_meta_text }}</textarea>
                            </div>

                            @if($errors->has('ar_meta_text'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_meta_text') }}
                                </span>
                            @endif
                        </div> 


                    </div>

                    <div class="form-group col-lg-12 ">
                        <button type="submit" class="btn light btn-primary col-12 mt-2 mb-2" style="margin-top:30px">Update</button>
                    </div>
            </form>
        </div>
    </div>
    <!-- DOM - jQuery events table -->
@endsection
