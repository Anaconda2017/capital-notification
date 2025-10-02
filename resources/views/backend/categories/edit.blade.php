@extends('backend.layouts.app')

@php $pageTitle = 'Edit Category'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')

    <!-- row -->
    <div class="container-fluid">
        <div class="row">


          <form class="col-12" action="{{ route('categories.update' , $row->id) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
              <div class="row">

             
                  <!--Category Name -->
                  <div class="form-group col-lg-12 ">
                      <input style="margin-bottom:30px" type="text" class="form-control input-default" name="en_name"  value="{{ $row->en_name }}" required>
                  </div>

              
                  <!--sumbit button -->
                  <div class="form-group col-lg-12 ">
                      <button type="submit" class="btn light btn-primary col-12 mt-2 mb-2" style="margin-top:30px">Add</button>
                  </div>
                 

              </div>

          </form>
      

        </div>
      </div>
    <!-- DOM - jQuery events table -->
@endsection