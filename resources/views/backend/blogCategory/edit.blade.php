@extends('backend.layouts.app')

@php $pageTitle = 'Edit Category'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Category Inputs</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">

                    <form class="col-12" action="{{ route('blogCategory.update' , $row->id) }}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="row">

                        
                            <!--Promo Code-->
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control input-default" name="title" value="{{ $row->title }}" placeholder="Category Title"  required>
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
