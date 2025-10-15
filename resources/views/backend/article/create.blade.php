@extends('backend.layouts.app')

@php $pageTitle = 'Add Guideline '; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')


    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Newsletter Inputs</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">

                        <form class="col-12" action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">

                            
                                <!--Promo Code-->
                                <div class="form-group col-lg-12">
                                    <label for=""> Guideline Title </label>

                                    <input type="text" class="form-control input-default" name="article_title" value="{{ old('article_title') }}" placeholder=" Title"  required>
                                </div>

                                <div class="form-group col-lg-12 ">
                                    <label for=""> Guideline Text </label>
                                    <div class="input-group">
        
                                        <textarea style="margin-bottom:30px" name="article_text" class="form-control ckeditor" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ old('description') }}</textarea>
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
                                
                                
                                <div class="form-group col-lg-12">
                                    <label for=""> Status </label>

                                    <select class="form-control " name="status" required >
                                        <option value="1"  >ON</option>
                                        <option value="0" >OFF</option>
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
            </div> 
      

        </div>
      </div>


@endsection
