@extends('backend.layouts.app')

@php $pageTitle = 'Create Contact Information'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')

    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            @if(Session::has('flash_message'))
                <div class="alert alert-success col-12">
                    {{ Session::get('flash_message') }}
                </div>
            @endif


          <form class="col-12" action="{{ route('contact_us.store') }}" method="POST" enctype="multipart/form-data">
           
            {{ csrf_field() }}
              <div class="row">

                <!-- Facebook -->
                <div class="form-group col-lg-12 ">
                    <input type="url" class="form-control input-default" name="facebook" value="{{ old('facebook') }}"  placeholder="Facebook"  required>
                </div>

                <!-- Instagram -->
                <div class="form-group col-lg-12 ">
                  <input type="url" class="form-control input-default"   name="instagram" value="{{ old('instagram') }}" placeholder="Instagram" required>
                </div>

                <!-- TikTok -->
                <div class="form-group col-lg-12 ">
                  <input type="url" class="form-control input-default"   name="tiktok" value="{{ old('tiktok') }}" placeholder="TikTok"  required>
                </div>    
                
                <!-- YouTube  -->
                <div class="form-group col-lg-12 ">
                  <input type="url" class="form-control input-default"   name="youtube" value="{{ old('youtube') }}" placeholder="YouTube"  required>
                </div>  
              
                <!-- X  -->
                <div class="form-group col-lg-12 ">
                  <input type="url" class="form-control input-default"   name="tweet" value="{{ old('tweet') }}" placeholder="X"  required>
                </div> 
                
                <!--sumbit button -->
                <div class="form-group col-lg-12 ">
                    <button type="submit" class="btn light btn-primary col-12 mt-2 mb-2">Create</button>
                </div>
                 

              </div>

          </form>
      

        </div>
      </div>
@endsection