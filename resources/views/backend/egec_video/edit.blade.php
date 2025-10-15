@extends('backend.layouts.app')

@php $pageTitle = 'تعديل الفيديو'; @endphp

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
                        <form action="{{ route('egec_video.update', $row->id) }}" method="POST" enctype="multipart/form-data">
                            {{ method_field('put') }}
                            {{ csrf_field() }}
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">العنوان باللغه الانجليزيه</label>
                                        <input type="text" name="en_title" id="en_title" class="form-control" value="{{ $row->en_title }}">
                                    </div>
                                    @if($errors->has('en_title'))
                                        <span class="text-danger">{{ $errors->first('en_title') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">العنوان باللغه العربيه</label>
                                        <input type="text" name="ar_title" id="ar_title" class="form-control" value="{{ $row->ar_title }}">
                                    </div>
                                    @if($errors->has('ar_title'))
                                        <span class="text-danger">{{ $errors->first('ar_title') }}</span>
                                    @endif
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">لينك الفيديو</label>
                                        <input type="text" name="video_link" id="video_link" class="form-control" value="{{ $row->video_link }}">
                                    </div>
                                    @if($errors->has('video_link'))
                                        <span class="text-danger">{{ $errors->first('video_link') }}</span>
                                    @endif
                                </div>
                                

                                <div class="col-md-6">
                                    <div>
                                        <label class="bmd-label-floating">صوره الفيديو</label>
                                        <input type="file" name="video_image" id="video_image">
                                        @if($row->video_image !== NULL)
                                            <div class="col text-center">
                                                <img src="{{ asset('egec_video/' . $row->video_image) }}" width="100px" height="100px;">
                                            </div>
                                        @endif
                                    </div>
                                    @if($errors->has('video_image'))
                                        <span class="text-danger">{{ $errors->first('video_image') }}</span>
                                    @endif
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary pull-right">تعديل الفيديو</button>
                        <div class="clearfix"></div>
                        </form>
                    </div>
                    </div>
            </div>
            </div>
@endsection