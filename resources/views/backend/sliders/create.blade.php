@extends('backend.layouts.app')

@php $pageTitle = 'Add Slider'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')
  

    <!-- DOM - jQuery events table -->
    <section class="input-validation">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header bg-primary bg-darken-2 white text-center card-title-bold text-capitalize">{{ $pageTitle }}</div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="{{ route('sliders.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="row mt-2">

                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating"> Title In English </label>
                                        <input type="text" name="en_title" id="en_title" class="form-control" value="{{ old('en_title') }}">
                                    </div>
                                    @if($errors->has('en_title'))
                                        <span class="text-danger">{{ $errors->first('en_title') }}</span>
                                    @endif
                                </div>
                                
                                
                                

                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Title in Arabic </label>
                                        <input type="text" name="ar_title" id="ar_title" class="form-control" value="{{ old('ar_title') }}">
                                    </div>
                                    @if($errors->has('ar_title'))
                                        <span class="text-danger">{{ $errors->first('ar_title') }}</span>
                                    @endif
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating"> Alt of Image In English </label>
                                        <input type="text" name="image_alt" id="image_alt" class="form-control" value="{{ old('image_alt') }}">
                                    </div>
                                    @if($errors->has('image_alt'))
                                        <span class="text-danger">{{ $errors->first('image_alt') }}</span>
                                    @endif
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating"> Alt of Image In Arabic </label>
                                        <input type="text" name="image_alt_ar" id="image_alt_ar" class="form-control" value="{{ old('image_alt_ar') }}">
                                    </div>
                                    @if($errors->has('image_alt_ar'))
                                        <span class="text-danger">{{ $errors->first('image_alt_ar') }}</span>
                                    @endif
                                </div>

                                        <input type="hidden" name="en_text" id="en_text" class="form-control" value="-">
                                        <input type="hidden" name="ar_text" id="ar_text" class="form-control" value="-">
                                        <input type="hidden" name="en_ingredients" id="en_ingredients" class="form-control" value="-">

                                <div class="col-md-6">
                                    <div>
                                        <label class="bmd-label-floating">content in english </label>
                                        <textarea cols="5" rows="10" name="en_text" id="en_text" class="form-control" value="-">{{ old('en_text') }}</textarea>
                                    </div>
                                    @if($errors->has('en_text'))
                                        <span class="text-danger">{{ $errors->first('en_text') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Content in arabic </label>
                                        <textarea cols="5" rows="10" name="ar_text" id="ar_text" class="form-control" value="-">{{ old('ar_text') }}</textarea>
                                    </div>
                                    @if($errors->has('ar_text'))
                                        <span class="text-danger">{{ $errors->first('ar_text') }}</span>
                                    @endif
                                </div>

                                <!--<div class="col-md-6">-->
                                <!--    <div class="form-group bmd-form-group">-->
                                <!--        <label class="bmd-label-static">Ingredients In English</label>-->
                                <!--        <textarea rows="20" cols="5" name="en_ingredients" class="form-control" value="-"></textarea>-->
                                <!--    </div>-->

                                <!--</div>-->

                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Image</label>
                                        <input type="file" class="form-control" name="image"  id="image" >
                                    </div>
                                    @if($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>

                            </div>
                            <div class="row no-gutters justify-content-end">
                                <button class="btn btn-primary">Add Slider</button>
                            </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DOM - jQuery events table -->
@endsection
