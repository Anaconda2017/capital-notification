@extends('backend.layouts.app')

@php $pageTitle = 'Edit About'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')
  

    <div class="container-fluid">
        @if(Session::has('flash_message'))
                <div class="alert alert-success col-12">
                    {{ Session::get('flash_message') }}
                </div>
                @endif
        <div class="row">

            <form action="{{ route('about_page.update', $row->id) }}" method="POST" class="col-12"  enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                    <div class="row">

                        <div class="form-group col-lg-6 ">
                            <label for=""> About Small Title </label>
                            <input style="margin-bottom:30px" type="text" name="ar_about_small_title" id="ar_about_small_title" class="form-control input-default" placeholder="Title" value="{{ $row->ar_about_small_title }}" required>
                           
                            @if($errors->has('ar_about_small_title'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_about_small_title') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-6 ">
                            <label for=""> About Main Title </label>
                            <input style="margin-bottom:30px" type="text" name="ar_about_title" id="ar_about_title" class="form-control input-default" placeholder="Title" value="{{ $row->ar_about_title }}" required>
                           
                            @if($errors->has('ar_about_title'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_about_title') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-12 ">
                            <label for=""> About Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="ar_about_text" class="form-control" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->ar_about_text }}</textarea>
                            </div>

                            @if($errors->has('ar_about_text'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_about_text') }}
                                </span>
                            @endif
                        </div> 

                        <div  class="input-group mb-3 col-lg-12 col-md-12 col-12" style="margin-bottom:30px" >

                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="about_image" >
                                <label class="custom-file-label"> About Image</label>
                            </div>

                            @if($errors->has('about_image'))
                                <span class="text-danger">{{ $errors->first('about_image') }}</span>
                            @endif

                        </div>     

                        <div class="col-lg-1 col-md-2 col-3">

                            @if($row->about_image !== NULL)
                                <div class="col text-center">
                                    <img src="{{ asset('about/' . $row->about_image) }}" style="max-width: 50px; min-width: 50px; margin-top: 5px;" alt="">

                                </div>
                            @endif
                        </div>

                        <div  class="input-group mb-3 col-lg-12 col-md-12 col-12" style="margin-bottom:30px" >

                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="second_image" >
                                <label class="custom-file-label"> About Second Image</label>
                            </div>

                            @if($errors->has('second_image'))
                                <span class="text-danger">{{ $errors->first('second_image') }}</span>
                            @endif

                        </div>     

                        <div class="col-lg-1 col-md-2 col-3">

                            @if($row->second_image !== NULL)
                                <div class="col text-center">
                                    <img src="{{ asset('about/' . $row->second_image) }}" style="max-width: 50px; min-width: 50px; margin-top: 5px;" alt="">

                                </div>
                            @endif
                        </div>

                           

                        <div class="form-group col-lg-12 ">
                            <label for=""> About counter</label>
                            <input style="margin-bottom:30px" type="number" name="about_numer" id="about_numer" min="1" class="form-control input-default" placeholder="Title" value="{{ $row->about_numer }}" required>
                           
                            @if($errors->has('about_numer'))
                                <span class="text-danger">
                                    {{ $errors->first('about_numer') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-6 ">
                            <label for=""> About Vision Title </label>
                            <input style="margin-bottom:30px" type="text" name="ar_vision_title" id="ar_vision_title" class="form-control input-default" placeholder="Title" value="{{ $row->ar_vision_title }}" required>
                           
                            @if($errors->has('ar_vision_title'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_vision_title') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-6 ">
                            <label for=""> About Vision Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="ar_vision_text" class="form-control" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->ar_vision_text }}</textarea>
                            </div>

                            @if($errors->has('ar_vision_text'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_vision_text') }}
                                </span>
                            @endif
                        </div> 

                        
                    

                        <div class="form-group col-lg-6 ">
                            <label for=""> About Mission Title </label>
                            <input style="margin-bottom:30px" type="text" name="ar_mission_title" id="ar_mission_title" class="form-control input-default" placeholder="Title" value="{{ $row->ar_mission_title }}" required>
                           
                            @if($errors->has('ar_mission_title'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_mission_title') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-6 ">
                            <label for=""> About Mission Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="ar_mission_text" class="form-control" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->ar_mission_text }}</textarea>
                            </div>

                            @if($errors->has('ar_mission_text'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_mission_text') }}
                                </span>
                            @endif
                        </div> 

                       


                        <div class="form-group col-lg-6 ">
                            <label for=""> About Goal Title </label>
                            <input style="margin-bottom:30px" type="text" name="ar_goal_title" id="ar_goal_title" class="form-control input-default" placeholder="Title" value="{{ $row->ar_goal_title }}" required>
                           
                            @if($errors->has('ar_goal_title'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_goal_title') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-6 ">
                            <label for=""> About Goal Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="ar_goal_text" class="form-control" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->ar_goal_text }}</textarea>
                            </div>

                            @if($errors->has('ar_goal_text'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_goal_text') }}
                                </span>
                            @endif
                        </div> 


                        <div class="form-group col-lg-6 ">
                            <label for=""> Institution membership Title </label>
                            <input style="margin-bottom:30px" type="text" name="institution_membership_title" id="institution_membership_title" class="form-control input-default" placeholder="Title" value="{{ $row->institution_membership_title }}" required>
                           
                            @if($errors->has('institution_membership_title'))
                                <span class="text-danger">
                                    {{ $errors->first('institution_membership_title') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-6 ">
                            <label for=""> Institution membership Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="institution_membership_text" class="form-control" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->institution_membership_text }}</textarea>
                            </div>

                            @if($errors->has('institution_membership_text'))
                                <span class="text-danger">
                                    {{ $errors->first('institution_membership_text') }}
                                </span>
                            @endif
                        </div> 


                        <div  class="input-group mb-3 col-lg-12 col-md-12 col-12" style="margin-bottom:30px" >

                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="institution_membership_image" >
                                <label class="custom-file-label"> Institution membership Image</label>
                            </div>

                            @if($errors->has('institution_membership_image'))
                                <span class="text-danger">{{ $errors->first('institution_membership_image') }}</span>
                            @endif

                        </div>     

                        <div class="col-lg-1 col-md-2 col-3">

                            @if($row->institution_membership_image !== NULL)
                                <div class="col text-center">
                                    <img src="{{ asset('about/' . $row->institution_membership_image) }}" style="max-width: 50px; min-width: 50px; margin-top: 5px;" alt="">

                                </div>
                            @endif
                        </div>


                        <div class="form-group col-lg-12 ">
                            <label for=""> About footer Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="footer_text" class="form-control" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->footer_text }}</textarea>
                            </div>

                            @if($errors->has('footer_text'))
                                <span class="text-danger">
                                    {{ $errors->first('footer_text') }}
                                </span>
                            @endif
                        </div> 

                 

                        <div class="form-group col-lg-12 ">
                            <label for=""> About Meta Title </label>
                            <input style="margin-bottom:30px" type="text" name="ar_meta_title" id="ar_meta_title" class="form-control input-default" placeholder="Title" value="{{ $row->ar_meta_title }}" required>
                           
                            @if($errors->has('ar_meta_title'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_meta_title') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-lg-12 ">
                            <label for=""> About Meta Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="ar_meta_text" class="form-control" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->ar_meta_text }}</textarea>
                            </div>

                            @if($errors->has('ar_meta_text'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_meta_text') }}
                                </span>
                            @endif
                        </div> 


                    </div>

                    <div class="form-group col-lg-12 ">
                        <button type="submit" class="btn light btn-primary col-12 mt-2 mb-2" style="margin-top:30px">Update</button>
                    </div>
            </form>
        </div>
    </div>
    <!-- DOM - jQuery events table -->
@endsection
