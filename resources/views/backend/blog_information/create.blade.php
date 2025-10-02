@extends('backend.layouts.app')

@php $pageTitle = 'Add Blog'; @endphp

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
                        <form action="{{ route('blog_information.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div>
                                        <label class="bmd-label-floating"> Image</label>
                                        <input type="file" name="arrayOfImages[]" multiple>
                                    </div>
                                    @if($errors->has('arrayOfImages'))
                                        <span class="text-danger">{{ $errors->first('arrayOfImages') }}</span>
                                    @endif
                                </div>
                                
                                
                            </div>


                        <button type="submit" class="btn btn-primary pull-right">Add Blog</button>
                        <div class="clearfix"></div>
                        </form>
                    </div>
                    </div>
            </div>
            </div>
@endsection