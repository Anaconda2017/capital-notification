@extends('backend.layouts.app')

@php $pageTitle = 'Edit Guideline'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Guideline Inputs</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">

                    <form class="col-12" action="{{ route('article.update' , $row->id) }}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="row">


                            <div class="form-group col-lg-12">
                                <label for=""> Guideline Title </label>

                                <input type="text" class="form-control input-default" name="article_title" value="{{ $row->article_title }}" placeholder=" Title"  required>
                            </div>

                            <div class="form-group col-lg-12 ">
                                <label for=""> Guideline Text </label>
                                <div class="input-group">
    
                                    <textarea style="margin-bottom:30px" name="article_text" class="form-control ckeditor" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->article_text }}</textarea>
                                </div>
    
                            </div>
                            
                            <div  class="input-group mb-3 col-lg-12 col-md-12 col-12" style="margin-bottom:30px" >

                            <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
    
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="article_image" >
                                    <label class="custom-file-label"> Guideline Image</label>
                                </div>
    
                                @if($errors->has('article_image'))
                                    <span class="text-danger">{{ $errors->first('article_image') }}</span>
                                @endif
    
                            </div>     
    
                            <div class="col-lg-1 col-md-2 col-3">
    
                                @if($row->article_image !== NULL)
                                    <div class="col text-center">
                                        <img src="{{ asset('articles/' . $row->article_image) }}" style="max-width: 50px; min-width: 50px; margin-top: 5px;" alt="">
    
                                    </div>
                                @endif
                            </div>
                            
                            
                            <div class="form-group col-lg-12">
                                    <label for=""> Status </label>

                                    <select class="form-control " name="article_status" required >
                                        <option value="1" {{ $row->article_status == 1 ? 'selected' : null }}>Active</option>
                                        <option value="0" {{ $row->article_status == 0 ? 'selected' : null }}>Not Active</option>
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
        </div>
  

    </div>
  </div>

@endsection
