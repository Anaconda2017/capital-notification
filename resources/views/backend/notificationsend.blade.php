@extends('backend.layouts.app')

@php $pageTitle = 'Add Notification'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')


    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Notification Inputs</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">

                        <form class="col-12" action="{{ route('sendPushNotification') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">

                            
                                <!--Promo Code-->
                                <div class="form-group col-lg-12">
                                    <label for=""> Notification Title </label>

                                    <input type="text" class="form-control input-default" name="titlemessage" value="{{ old('titlemessage') }}" placeholder=" Title"  required>
                                </div>

                                <div class="form-group col-lg-12 ">
                                    <label for=""> Notification Text </label>
                                    <div class="input-group">
        
                                        <textarea style="margin-bottom:30px" name="textmessage" class="form-control" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ old('textmessage') }}</textarea>
                                    </div>
        
                                </div>
                    

                                <!--sumbit button -->
                                <div class="form-group col-lg-12 ">
                                    <button type="submit" class="btn light btn-primary col-12 mt-2 mb-2">Send</button>
                                </div>
                                

                            </div>

                        </form>
                    </div>
                </div>
            </div> 
      

        </div>
      </div>


@endsection
