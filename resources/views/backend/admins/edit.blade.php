@extends('backend.layouts.app')

@php $pageTitle = 'Edit Admin'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')

    
       
            
            
            <div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Newsletter Inputs</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">

                    <form class="col-12" action="{{ route('admins.update', $row->id) }}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="row">


                            <div class="form-group col-lg-12">
                                <label for=""> Doctor Name  </label>

                                <input type="text" class="form-control input-default" name="name" value="{{ $row->name }}" placeholder=" Title"  required>
                            </div>
                            
                            <div class="form-group col-lg-12">
                                <label for=""> Doctor Phone  </label>

                                <input type="number" class="form-control input-default" name="mobile" value="{{ $row->phone }}" placeholder=" phone" min="0"  required>
                            </div>
                            
                            <div class="form-group col-lg-12">
                                    <label for=""> Docotor Manager </label>

                                    <select class="form-control " name="user_id" required >
                                        <option value="">Choose Manager</option>
                                        @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ $row->manager_id == $user->id ? 'selected' : null }}>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            
                            <div class="form-group col-lg-12">
                                    <label for=""> Docotor Department </label>

                                    <select class="form-control " name="department_id" required >
                                        <option value="">Choose Department</option>
                                        @foreach($departments as $user)
                                        <option value="{{ $user->id }}" {{ $row->subject_id == $user->id ? 'selected' : null }}>{{ $user->title }}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group col-lg-12">
                                    <label for=""> Status </label>

                                    <select class="form-control " name="active_status" required >
                                        <option value="1" {{ $row->active_status == 1 ? 'selected' : null }}>Active</option>
                                        <option value="0" {{ $row->active_status == 0 ? 'selected' : null }}>Not Active</option>
                                    </select>
                            </div>



                            <!--sumbit button -->
                            <div class="form-group col-lg-12 ">
                                <button type="submit" class="btn light btn-primary col-12 mt-2 mb-2">Update</button>
                            </div>
                            

                        </div>

                    </form>
                </div>
            </div>
        </div>
  

    </div>
  </div>
@endsection