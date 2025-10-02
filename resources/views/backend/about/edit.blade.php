@extends('backend.layouts.app')

@php $pageTitle = 'Edit about'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')


<div class="container-fluid">
    <div class="row">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">about Inputs</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form class="col-12" action="{{ route('about.update' , $row->id) }}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="row">

                        
                                        <!--Promo Code-->
                                        <div class="form-group col-lg-12">
                                            <label for=""> About title </label>

                                            <input type="text" class="form-control input-default" name="about_title" value="{{ $row->about_title }}" placeholder="About Title"  required>
                                        </div>

                                        <div class="form-group col-lg-12 ">
                                            <label for=""> About Text </label>
                                            <div class="input-group">
                    
                                                <textarea style="margin-bottom:30px" name="about_text" class="form-control ckeditor" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->about_text }}</textarea>
                                            </div>
                                          </div>


                                        <div  class="input-group mb-3 col-lg-12 col-md-12 col-12" style="margin-bottom:30px" >
                                                            
                                            <label for=""> Choose Image </label>
                                            
                                            <div class="input-group custom_file_input">
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control" name="about_image">
                                                </div>
                                            </div>
                                            

                                            @if($errors->has('about_image'))
                                                <span class="text-danger">{{ $errors->first('about_image') }}</span>
                                            @endif

                                        </div>

                                        <div class="col-lg-1 col-md-2 col-3">

                                            @if($row->about_image !== NULL)
                                                <div class="col text-center">
                                                    <img src="{{ asset('about/' . $row->about_image) }}" style="max-width: 50px; min-width: 50px; margin-top: 5px;" alt="">

                                                </div>
                                            @endif
                                        </div>


                                        <div class="form-group col-lg-12">
                                            <label for=""> Home About title </label>

                                            <input type="text" class="form-control input-default" name="second_title" value="{{ $row->second_title }}" placeholder="About Title"  required>
                                        </div>

                                        <div class="form-group col-lg-12 ">
                                            <label for=""> Home About Text </label>
                                            <div class="input-group">
                    
                                                <textarea style="margin-bottom:30px" name="second_text" class="form-control ckeditor" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->second_text }}</textarea>
                                            </div>
                                        </div>


                                        <div  class="input-group mb-3 col-lg-12 col-md-12 col-12" style="margin-bottom:30px" >
                                                            
                                            <label for=""> Choose Image </label>
                                            
                                            <div class="input-group custom_file_input">
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control" name="second_image">
                                                </div>
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
                                            <label for=""> Privacy Policy Text </label>
                                            <div class="input-group">
                    
                                                <textarea style="margin-bottom:30px" name="privacy_policy" class="form-control ckeditor" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->privacy_policy }}</textarea>
                                            </div>
                                        </div>
                                        

                                        

                            <!--sumbit button -->
                            <div class="form-group col-lg-12 ">
                                <button type="submit" class="btn light btn-primary col-12 mt-2 mb-2">Update</button>
                            </div>
                            

                        </div>

                    </form>
                </div>
            </div>
        </div>            

    </div>
  </div>

@endsection
