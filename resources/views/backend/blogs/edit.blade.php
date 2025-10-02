@extends('backend.layouts.app')

@php $pageTitle = 'Edit blog'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')


<div class="container-fluid">
    <div class="row">


      <form class="col-12" action="{{ route('blogs.update' , $row->id) }}" method="POST" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
          <div class="row">

         
               <!--Promo Code-->
               <div class="form-group col-lg-12">
                            <input type="text" class="form-control input-default" name="ar_title" value="{{ $row->ar_title }}" placeholder="SubCategory Title"  required>
                        </div>

                        <div class="form-group col-lg-12 ">
                            <label for=""> Sub Category Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="ar_text" class="form-control ckeditor" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->ar_text }}</textarea>
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

                        <div class="col-lg-1 col-md-2 col-3">

                            @if($row->main_image !== NULL)
                                <div class="col text-center">
                                    <img src="{{ asset('blogs/' . $row->main_image) }}" style="max-width: 50px; min-width: 50px; margin-top: 5px;" alt="">

                                </div>
                            @endif
                        </div>
                
                        <div class="form-group col-lg-12 ">
                            <label for=""> Meta Title </label>
                            <input style="margin-bottom:30px" type="text" name="ar_meta_title" id="ar_meta_title" class="form-control input-default" placeholder="Title" value="{{ $row->ar_meta_title }}" required>
                           
                            @if($errors->has('ar_meta_title'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_meta_title') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-12 ">
                            <label for=""> Meta Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="ar_meta_text" class="form-control" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->ar_meta_text }}</textarea>
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
                    <option value="1"  {{ $row->status == 1 ? 'selected' : null }}>ON</option>
                    <option value="0" {{ $row->status == 0 ? 'selected' : null }}>OFF</option>
                </select>
             </div>

             <div class="form-group col-12">
                        <label>Category</label>
                        <select class="form-control " name="blog_sub_category_id" required >
                            @foreach($getcategories as $getcategorie)
                            <option value="{{ $getcategorie->id }}" {{ $row->blog_category_id == $getcategorie->id ? 'selected' : null }}>{{ $getcategorie->ar_title }} ( {{ $getcategorie->blogcategory->ar_title }} ) </option>
                            @endforeach
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
