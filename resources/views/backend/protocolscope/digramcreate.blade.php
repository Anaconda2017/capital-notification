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
              <h4 class="card-title">Digram Inputs</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                  <form class="col-12" action="{{ route('protocolstoredigram') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="row">

                    
                          <!--Promo Code-->
                          <div class="form-group col-lg-12">
                              <label for=""> Digram Title </label>

                              <input type="text" class="form-control input-default" name="title" value="{{ old('title') }}" placeholder="Digram Title"  required>
                          </div>
            

                        <div class="form-group col-12">
                                <label>Questions</label>
                                <select class="form-control " name="question_id"  >
                                    <option value="{{ $protocol->id }}">{{ $protocol->title }}</option>
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
