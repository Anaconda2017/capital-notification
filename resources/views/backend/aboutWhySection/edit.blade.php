@extends('backend.layouts.app')

@php $pageTitle = ' Edit Why Section'; @endphp

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
                        <form action="{{ route('aboutWhySection.update', $row->id) }}" method="POST" enctype="multipart/form-data">
                            {{ method_field('put') }}
                            {{ csrf_field() }}
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title in English</label>
                                        <input type="text" name="en_title" id="en_title" class="form-control" value="{{ $row->en_title }}">
                                    </div>
                                    @if($errors->has('en_title'))
                                        <span class="text-danger">{{ $errors->first('en_title') }}</span>
                                    @endif
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title in Arabic</label>
                                        <input type="text" name="ar_title" id="ar_title" class="form-control" value="{{ $row->ar_title }}">
                                    </div>
                                    @if($errors->has('ar_title'))
                                        <span class="text-danger">{{ $errors->first('ar_title') }}</span>
                                    @endif
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Text in english</label>
                                        <textarea type="text" name="en_text" id="en_text" class="form-control ckeditor" value="{{ $row->en_text }}"></textarea>
                                    </div>
                                    @if($errors->has('en_text'))
                                        <span class="text-danger">{{ $errors->first('en_text') }}</span>
                                    @endif
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Text in arabic</label>
                                        <textarea type="text" name="ar_text" id="ar_text" class="form-control ckeditor" value="{{ $row->ar_text }}"></textarea>
                                    </div>
                                    @if($errors->has('ar_text'))
                                        <span class="text-danger">{{ $errors->first('ar_text') }}</span>
                                    @endif
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <div >
                                        <label class="bmd-label-floating">Main Image</label>
                                        <input type="file" name="section_image" id="section_image">
                                        @if($row->section_image !== NULL)
                                            <div class="col text-center">
                                                <img src="{{ asset('about/' . $row->section_image) }}" width="100px" height="100px;">
                                            </div>
                                        @endif
                                    </div>
                                    @if($errors->has('section_image'))
                                        <span class="text-danger">{{ $errors->first('section_image') }}</span>
                                    @endif
                                </div>

                               
                              

                            </div>
                        <button type="submit" class="btn btn-primary pull-right">Edit Why Section </button>
                        <div class="clearfix"></div>
                        </form>
                    </div>
                    </div>
            </div>
            </div>
@endsection