@extends('backend.layouts.app')

@php $pageTitle = 'Add Why Section'; @endphp

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
                    <form action="{{ route('aboutWhySection.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title in English</label>
                                        <input type="text" name="en_title" id="en_title" class="form-control" value="{{ old('en_title') }}">
                                    </div>
                                    @if($errors->has('en_title'))
                                        <span class="text-danger">{{ $errors->first('en_title') }}</span>
                                    @endif
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title in Arabic</label>
                                        <input type="text" name="ar_title" id="ar_title" class="form-control" value="{{ old('ar_title') }}">
                                    </div>
                                    @if($errors->has('ar_title'))
                                        <span class="text-danger">{{ $errors->first('ar_title') }}</span>
                                    @endif
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Text in english</label>
                                        <textarea type="text" name="en_text" id="en_text" class="form-control ckeditor" value="{{ old('en_text') }}"></textarea>
                                    </div>
                                    @if($errors->has('en_text'))
                                        <span class="text-danger">{{ $errors->first('en_text') }}</span>
                                    @endif
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Text in arabic</label>
                                        <textarea type="text" name="ar_text" id="ar_text" class="form-control ckeditor" value="{{ old('ar_text') }}"></textarea>
                                    </div>
                                    @if($errors->has('ar_text'))
                                        <span class="text-danger">{{ $errors->first('ar_text') }}</span>
                                    @endif
                                </div>


                                
                                
                                
                                
                                
                                <div class="col-md-6">
                                    <div >
                                        <label class="bmd-label-floating">Main Image</label>
                                        <input type="file" name="section_image" id="section_image">
                                    </div>
                                    @if($errors->has('section_image'))
                                        <span class="text-danger">{{ $errors->first('section_image') }}</span>
                                    @endif
                                </div>
                                
                                
                                
                            </div>
                        <button type="submit" class="btn btn-primary pull-right">Add Why section</button>
                        <div class="clearfix"></div>
                        </form>
                    </div>
                    </div>
            </div>
            </div>
@endsection