@extends('backend.layouts.app')

@php $pageTitle = 'show'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Form Inputs</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">

                    <form class="col-12" action="" method="POST" enctype="multipart/form-data">
                       
                        <div class="row">


                            <div class="form-group col-lg-12">
                                <label for="">  Name </label>

                                <input type="text" class="form-control input-default" name="newsletter_title" value="{{ $row->name }}" placeholder=" Title"  disabled>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="">  Phone </label>

                                <input type="text" class="form-control input-default" name="newsletter_title" value="{{ $row->phone }}" placeholder=" Title"  disabled>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="">  Email </label>

                                <input type="text" class="form-control input-default" name="newsletter_title" value="{{ $row->email }}" placeholder=" Title"  disabled>
                            </div>

                            <div class="form-group col-lg-12 ">
                                <label for=""> Message </label>
                                <div class="input-group">
    
                                    <textarea style="margin-bottom:30px" name="newsletter_text" class="form-control " placeholder="Description" style="min-height: 100px; max-height: 100px;" readonly>{{ $row->message }}</textarea>
                                </div>
    
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
  

    </div>
  </div>

@endsection
