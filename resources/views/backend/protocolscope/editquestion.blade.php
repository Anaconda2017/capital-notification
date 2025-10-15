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
                  <form class="col-12" action="{{ route('updateprotocolquestion' , $row->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="row">

                    
                          <!--Promo Code-->
                          <div class="form-group col-lg-12">
                              <label for=""> Protocol Question </label>

                              <input type="text" class="form-control input-default" name="title" value="{{ $row->title }}" placeholder="Protocol Question"  required>
                          </div>
            

                        <div class="form-group col-lg-12 ">
                            <label for=""> Question Text </label>
                            <div class="input-group">

                                <textarea style="margin-bottom:30px" name="description" class="form-control ckeditor" placeholder="Description" style="min-height: 100px; max-height: 100px;" required>{{ $row->description }}</textarea>
                            </div>

                        </div>
                        
                        <div class="form-group col-12">
                                    <label>Danger Status</label>
                                    <select class="form-control " name="danger_status"  >
                                        <option value="1">Danger</option>
                                        <option value="0">Not Danger</option>
                                    </select>
                            </div>
                            
                            <div class="form-group col-lg-12">
                                <label for=""> Danger Time </label>
    
                                <input type="number" class="form-control input-default" min="0" name="danger_timer" value="0" placeholder="Danger Timer"  required>
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
