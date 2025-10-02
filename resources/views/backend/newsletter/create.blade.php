@extends('backend.layouts.app')

@php $pageTitle = 'Add NewsLetter'; @endphp

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

                        <form class="col-12" action="{{ route('newsletter.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">

                            
                                <!--Promo Code-->
                                <div class="form-group col-lg-12">
                                    <label for=""> Newsletter Title </label>

                                    <input type="text" class="form-control input-default" name="newsletter_title" value="{{ old('newsletter_title') }}" placeholder=" Title"  required>
                                </div>

                                <div class="form-group col-lg-12 ">
                                    <label for=""> Newsletter Text </label>
                                    <div class="input-group">
        
                                        <textarea style="margin-bottom:30px" name="newsletter_text" class="form-control ckeditor" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ old('description') }}</textarea>
                                    </div>
        
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
