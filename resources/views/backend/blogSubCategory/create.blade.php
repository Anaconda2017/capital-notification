@extends('backend.layouts.app')

@php $pageTitle = 'Add SubCategory'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')


    <!-- row -->
    <div class="container-fluid">
        <div class="row">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sub Category Inputs</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="col-12" action="{{ route('blogSubCategory.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">

                            
                                        <!--Promo Code-->
                                        <div class="form-group col-lg-12">
                                            <label for=""> Sub Category title </label>

                                            <input type="text" class="form-control input-default" name="title" value="{{ old('title') }}" placeholder="SubCategory Title"  required>
                                        </div>


                                        <div  class="input-group mb-3 col-lg-12 col-md-12 col-12" style="margin-bottom:30px" >
                                            
                                            <label for=""> Choose Image </label>
                                            
                                            <div class="input-group custom_file_input">
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control" name="main_image">
                                                </div>
                                            </div>
                                            

                                            @if($errors->has('main_image'))
                                                <span class="text-danger">{{ $errors->first('main_image') }}</span>
                                            @endif

                                        </div>
                                
                                
                                            <!--Status -->
                                        <div class="form-group col-12">
                                                <label>Category</label>
                                                <select class="form-control " name="category_id" required >
                                                    @foreach($getcategories as $getcategorie)
                                                    <option value="{{ $getcategorie->id }}">{{ $getcategorie->title }}</option>
                                                    @endforeach
                                                </select>
                                        </div>

                        

                                

                                
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
