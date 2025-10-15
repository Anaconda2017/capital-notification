@extends('backend.layouts.app')

@php $pageTitle = 'Add Doctor '; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')

  <div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Doctor Inputs</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">

                    <form class="col-12" action="{{ route('admins.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">


                            <div class="form-group col-lg-12">
                                <label for=""> Doctor Name  </label>

                                <input type="text" class="form-control input-default" name="name" value="{{ old('name') }}" placeholder=" Title"  required>
                            </div>
                            
                            <div class="form-group col-lg-12">
                                <label for=""> Doctor Email  </label>

                                <input type="text" class="form-control input-default" name="email" value="{{ old('email') }}" placeholder=" email"  required>
                                @if($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group col-lg-12">
                                <label for=""> Doctor Phone  </label>

                                <input type="number" class="form-control input-default" name="phone" value="{{ old('phone') }}" placeholder=" phone" min="0"  required>
                            </div>
                            
                            <div class="form-group col-lg-12">
                                    <label for=""> Docotor Manager </label>

                                    <select class="form-control " name="user_id" required >
                                        <option value="">Choose Manager</option>
                                        @foreach($users as $user)
                                        <option value="{{ $user->id }}" >{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            
                            <div class="form-group col-lg-12">
                                    <label for=""> Docotor Department </label>

                                    <select class="form-control " name="department_id" required >
                                        <option value="">Choose Dapartment</option>
                                        @foreach($departments as $user)
                                        <option value="{{ $user->id }}" >{{ $user->title }}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group col-lg-12">
                                    <label for=""> Status </label>

                                    <select class="form-control " name="active_status" required >
                                        <option value="1">Active</option>
                                        <option value="0" >Not Active</option>
                                    </select>
                            </div>



                            <!--sumbit button -->
                            <div class="form-group col-lg-12 ">
                                <button type="submit" class="btn light btn-primary col-12 mt-2 mb-2">Add</button>
                            </div>
                            

                        </div>

                    </form>
                </div>
            </div>
        </div>
  

    </div>
  </div>
@endsection