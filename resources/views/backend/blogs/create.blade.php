@extends('backend.layouts.app')

@php $pageTitle = 'Add blog'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')


    <!-- row -->
    <div class="container-fluid">
        <div class="row">


          <form class="col-12" action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="row">

             
                        <!--Promo Code-->
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control input-default" name="ar_title" value="{{ old('ar_title') }}" placeholder="Blog Title"  required>
                        </div>

                        <div class="form-group col-lg-12 ">
                            <label for=""> Blog Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="ar_text" class="form-control ckeditor" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ old('ar_text') }}</textarea>
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
                                <label class="custom-file-label"> Main Image</label>
                            </div>

                            @if($errors->has('main_image'))
                                <span class="text-danger">{{ $errors->first('main_image') }}</span>
                            @endif

                        </div>
                
                        <div class="form-group col-lg-12 ">
                            <label for=""> Meta Title </label>
                            <input style="margin-bottom:30px" type="text" name="ar_meta_title" id="ar_meta_title" class="form-control input-default" placeholder="Title" value="{{ old('ar_meta_title') }}" required>
                           
                            @if($errors->has('ar_meta_title'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_meta_title') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-12 ">
                            <label for=""> Meta Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="ar_meta_text" class="form-control" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ old('ar_meta_text') }}</textarea>
                            </div>

                            @if($errors->has('ar_meta_text'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_meta_text') }}
                                </span>
                            @endif
                        </div> 


                   <!--Status -->
                   <div class="form-group col-12">
                        <label>Status</label>
                        <select class="form-control " name="status" required >
                            <option value="1">ON</option>
                            <option value="0">OFF</option>
                        </select>
                    </div>

                    <!--Status -->
                   <div class="form-group col-12">
                        <label>Category</label>
                        <select class="form-control " name="blog_sub_category_id" required >
                            @foreach($getcategories as $getcategorie)
                            <option value="{{ $getcategorie->id }}">{{ $getcategorie->ar_title }} ( {{ $getcategorie->blogcategory->ar_title }} )</option>
                            @endforeach
                        </select>
                    </div>

                  <!--sumbit button -->

                   

                 
                        <div class="form-group col-lg-12 ">
                      <button type="submit" class="btn light btn-primary col-12 mt-2 mb-2">ADD</button>
                  </div>
                 

              </div>

          </form>
      

        </div>
      </div>


@endsection
