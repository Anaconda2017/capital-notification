@extends('backend.layouts.app')

@php $pageTitle = 'تعديل الاعلان'; @endphp

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
                            <form action="{{ route('advertises.update', $row->id) }}" method="POST" enctype="multipart/form-data">
                                {{ method_field('put') }}
                                {{ csrf_field() }}
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> لينك اول اعلان </label>
                                            <input type="text" name="first_link_adv" id="first_link_adv" class="form-control" value="{{ $row->first_link_adv }}">
                                        </div>
                                        @if($errors->has('first_link_adv'))
                                            <span class="text-danger">{{ $errors->first('first_link_adv') }}</span>
                                        @endif
                                    </div>


                                    <div class="col-md-6">
                                        <div>
                                            <label class="bmd-label-floating"> صوره اول عنوان <span style="color:red"> الابعاد(728*90)</span> </label>
                                            <input type="file" name="first_image_adv" id="first_image_adv">
                                            @if($row->first_image_adv !== NULL)
                                                <div class="col text-center">
                                                    <img src="{{ asset('advertises/' . $row->first_image_adv) }}" width="100px" height="100px;">
                                                </div>
                                            @endif
                                        </div>
                                        @if($errors->has('first_image_adv'))
                                            <span class="text-danger">{{ $errors->first('first_image_adv') }}</span>
                                        @endif
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> لينك ثاني اعلان </label>
                                            <input type="text" name="second_link_adv" id="second_link_adv" class="form-control" value="{{ $row->second_link_adv }}">
                                        </div>
                                        @if($errors->has('second_link_adv'))
                                            <span class="text-danger">{{ $errors->first('second_link_adv') }}</span>
                                        @endif
                                    </div>


                                    <div class="col-md-6">
                                        <div>
                                            <label class="bmd-label-floating">صوره ثاني عنوان <span style="color:red"> الابعاد(300*250)</span></label>
                                            <input type="file" name="second_image_adv" id="second_image_adv">
                                            @if($row->second_image_adv !== NULL)
                                                <div class="col text-center">
                                                    <img src="{{ asset('advertises/' . $row->second_image_adv) }}" width="100px" height="100px;">
                                                </div>
                                            @endif
                                        </div>
                                        @if($errors->has('second_image_adv'))
                                            <span class="text-danger">{{ $errors->first('second_image_adv') }}</span>
                                        @endif
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> لينك ثالث اعلان </label>
                                            <input type="text" name="third_link_adv" id="third_link_adv" class="form-control" value="{{ $row->third_link_adv }}">
                                        </div>
                                        @if($errors->has('third_link_adv'))
                                            <span class="text-danger">{{ $errors->first('third_link_adv') }}</span>
                                        @endif
                                    </div>


                                    <div class="col-md-6">
                                        <div>
                                            <label class="bmd-label-floating"> صوره ثالث عنوان<span style="color:red"> الابعاد(728*90)</span></label>
                                            <input type="file" name="third_image_adv" id="third_image_adv">
                                            @if($row->third_image_adv !== NULL)
                                                <div class="col text-center">
                                                    <img src="{{ asset('advertises/' . $row->third_image_adv) }}" width="100px" height="100px;">
                                                </div>
                                            @endif
                                        </div>
                                        @if($errors->has('third_image_adv'))
                                            <span class="text-danger">{{ $errors->first('third_image_adv') }}</span>
                                        @endif
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> الصفحه الخاصه بالاعلان </label>
                                            <select name="type_adv" class="form-control">
                                                <option value="">اختر الصفحه</option>
                                                <option value="home" {{ $row->type_adv == 'home' ? 'selected' : null }}>الصفحه الرئيسية</option>
                                                <option value="aboutUs" {{ $row->type_adv == 'aboutUs' ? 'selected' : null }}>من نحن</option>
                                                <option value="destination" {{ $row->type_adv == 'destination' ? 'selected' : null }}>البلاد</option>
                                                <option value="university" {{ $row->type_adv == 'university' ? 'selected' : null }}>الجامعات</option>
                                                <option value="college" {{ $row->type_adv == 'college' ? 'selected' : null }}>الكليات</option>
                                                <option value="contactUs" {{ $row->type_adv == 'contactUs' ? 'selected' : null }}>تواصل معنا</option>
                                            </select>
                                        </div>
                                        @if($errors->has('type_adv'))
                                            <span class="text-danger">{{ $errors->first('type_adv') }}</span>
                                        @endif
                                    </div>

                                    
                                </div>
                            <button type="submit" class="btn btn-primary pull-right">تعديل الاعلان</button>
                            <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection