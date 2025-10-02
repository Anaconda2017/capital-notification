@extends('backend.layouts.app')

@php $pageTitle = 'اضف فيديو'; @endphp

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
                        <form action="{{ route('egec_video.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">العنوان باللغه الانجليزيه</label>
                                        <input type="text" name="en_title" id="en_title" class="form-control" value="{{ old('en_title') }}">
                                    </div>
                                    @if($errors->has('en_title'))
                                        <span class="text-danger">{{ $errors->first('en_title') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">العنوان باللغه العربيه</label>
                                        <input type="text" name="ar_title" id="ar_title" class="form-control" value="{{ old('ar_title') }}">
                                    </div>
                                    @if($errors->has('ar_title'))
                                        <span class="text-danger">{{ $errors->first('ar_title') }}</span>
                                    @endif
                                </div>

                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">لينك الفيديو</label>
                                        <input type="url" name="video_link" id="video_link" class="form-control" value="{{ old('video_link') }}">
                                    </div>
                                    @if($errors->has('video_link'))
                                        <span class="text-danger">{{ $errors->first('video_link') }}</span>
                                    @endif
                                </div>
                                
                               
                                <div class="col-md-6">
                                    <div>
                                        <label class="bmd-label-floating">صوره الفيديو</label>
                                        <input type="file" name="video_image" id="video_image">
                                    </div>
                                    @if($errors->has('video_image'))
                                        <span class="text-danger">{{ $errors->first('video_image') }}</span>
                                    @endif
                                </div>

                            </div>
                        <button type="submit" class="btn btn-primary pull-right">اضف فيديو</button>
                        <div class="clearfix"></div>
                        </form>
                    </div>
                    </div>
            </div>
            </div>
@endsection