@extends('backend.layouts.app')

@php $pageTitle = 'Edit Contact Information'; @endphp

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


          <form class="col-12" action="{{ route('contact_us.update', $row->id) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('put') }}
            {{ csrf_field() }}
              <div class="row">

                <!-- Facebook -->
                <div class="form-group col-lg-4 ">
                    <label for="">facebook</label>
                    <input type="url" class="form-control input-default" name="facebook" value="{{ $row->facebook }}"  placeholder="Facebook"  >
                </div>

                <!-- Instagram -->
                <div class="form-group col-lg-4 ">
                  <label for="">instagram</label>
                  <input type="url" class="form-control input-default"   name="instagram" value="{{ $row->instagram }}" placeholder="Instagram" >
                </div>

                <!-- YouTube  -->
                <div class="form-group col-lg-4 ">
                <label for="">linkedIn</label>

                  <input type="url" class="form-control input-default"   name="linkedIn" value="{{ $row->linkedIn }}" placeholder="YouTube"  >
                </div> 

                <div class="form-group col-lg-4 ">
                <label for="">snapChat</label>

                  <input type="url" class="form-control input-default"   name="snapChat" value="{{ $row->snapChat }}" placeholder="TikTok"  >
                </div>   

                <!-- TikTok -->
                <div class="form-group col-lg-4 ">
                <label for="">tiktok</label>

                  <input type="url" class="form-control input-default"   name="tiktok" value="{{ $row->tiktok }}" placeholder="TikTok"  >
                </div>    
                
                 
              
                <!-- X  -->
                <div class="form-group col-lg-4 ">
                <label for="">tweet</label>

                  <input type="url" class="form-control input-default"   name="tweet" value="{{ $row->tweet }}" placeholder="X"  >
                </div> 
                
                <div class="form-group col-lg-4 ">
                <label for="">phone</label>

                  <input type="text" class="form-control input-default"   name="phone" value="{{ $row->phone }}" placeholder="Phone number"  >
                </div> 

                <div class="form-group col-lg-4 ">
                <label for="">email</label>

                  <input type="text" class="form-control input-default"   name="email" value="{{ $row->email }}" placeholder="Phone number"  >
                </div> 

                <div class="form-group col-lg-4 ">
                <label for="">address</label>

                  <input type="text" class="form-control input-default"   name="ar_address" value="{{ $row->ar_address }}" placeholder="Phone number"  >
                </div> 

                <div class="form-group col-lg-12 ">
                <label for="">Contact Text</label>

                  <input type="text" class="form-control input-default"   name="contact_text" value="{{ $row->contact_text }}" placeholder="Phone number"  >
                </div> 

                <div class="form-group col-lg-6 ">
                <label for="">meta Title</label>

                  <input type="text" class="form-control input-default"   name="ar_meta_title" value="{{ $row->ar_meta_title }}" placeholder="Phone number"  >
                </div> 

                <div class="form-group col-lg-6 ">
                <label for="">meta Text</label>

                  <input type="text" class="form-control input-default"   name="ar_meta_text" value="{{ $row->ar_meta_text }}" placeholder="Phone number"  >
                </div> 

                <div class="form-group col-lg-12 ">
                <label for="">Map Link</label>

                  <input type="text" class="form-control input-default"   name="map_link" value="{{ $row->map_link }}" placeholder="Phone number"  >
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