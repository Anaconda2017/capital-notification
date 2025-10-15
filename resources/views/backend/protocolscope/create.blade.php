@extends('backend.layouts.app')

@php $pageTitle = 'Add Category'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')


    <!-- row -->
    <div class="container-fluid">
        <div class="row">

          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Protocol Inputs</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                  <form class="col-12" action="{{ route('protocolscope.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="row">

                    
                          <!--Promo Code-->
                          <div class="form-group col-lg-12">
                              <label for=""> Protocol Title </label>

                              <input type="text" class="form-control input-default" name="title" value="{{ old('title') }}" placeholder="Protocol Title"  required>
                          </div>
            

                        <div class="form-group col-lg-12 ">
                            <label for=""> Scope Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="description" class="form-control ckeditor" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ old('description') }}</textarea>
                            </div>

                            @if($errors->has('ar_text'))
                                <span class="text-danger">
                                    {{ $errors->first('ar_text') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-12">
                                <label>SubCategory</label>
                                <select class="form-control " name="sub_category_id" required >
                                    @foreach($getcategories as $getcategorie)
                                    <option value="{{ $getcategorie->id }}">{{ $getcategorie->title }}</option>
                                    @endforeach
                                </select>
                        </div>

                          <!--sumbit button -->
                          <div class="form-group col-lg-12 ">
                              <button type="submit" class="btn light btn-primary col-12 mt-2 mb-2">ADD</button>
                          </div>
                        

                      </div>

                  </form>
                </div>
            </div> 
          </div>     
      

        </div>
      </div>


@endsection
