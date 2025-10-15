@extends('backend.layouts.app')

@php $pageTitle = 'Edit Feedback Information'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')

    
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-white">{{ $pageTitle }}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user_feedback.update' , $row->id) }}" method="POST" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" value="{{ $row->name }}">
                                    </div>
                                    @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">email</label>
                                        <input type="email" name="email" id="email" class="form-control" value="{{ $row->email }}">
                                    </div>
                                    @if($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                
                                
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Phone</label>
                                        <input type="number" name="phone" id="phone" class="form-control" value="{{ $row->phone }}">
                                    </div>
                                    @if($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Message</label>
                                        <textarea cols="5" rows="10" name="message" id="message" class="ckeditor form-control">{{ $row->message }}</textarea>
                                    </div>
                                    @if($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>


                                <div class="col-md-6">
                                    <div>
                                        <label class="bmd-label-floating">User Image</label>
                                        <input type="file" name="user_image">
                                            @if($row->user_image !== NULL)
                                                <div class="col text-center">
                                                    <img src="{{ asset('contact/' . $row->user_image) }}" width="100px" height="100px;">
                                                </div>
                                            @endif
                                    </div>
                                    @if($errors->has('user_image'))
                                        <span class="text-danger">{{ $errors->first('user_image') }}</span>
                                    @endif
                                </div>


                                
                            </div>
                        <button type="submit" class="btn btn-primary pull-right">Edit Feedback Information</button>
                        <div class="clearfix"></div>
                        </form>
                    </div>
                    </div>
            </div>
            </div>
@endsection