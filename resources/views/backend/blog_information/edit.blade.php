@extends('backend.layouts.app')

@php $pageTitle = 'Edit Blog'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')


  
  <style>
        .note-editing-area{
            height: 400px;
        }
        
        #your_summernote{
            height: 400px;
        }
        
        .note-editable{
            height: 400px;
        }
        
        #your_summernote_second{
             height: 400px;
        }
        
        .note-editor.note-airframe .note-editing-area .note-editable, .note-editor.note-frame .note-editing-area .note-editable {
            background: #fff;   
        }
        
        .note-resizebar{
            display:none;
        }
        
        .note-editor .note-toolbar .note-color .dropdown-toggle, .note-popover .popover-content .note-color .dropdown-toggle {
            width: 40px !important;
        }
        
      div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
  </style>
<style>
    .ck.ck-editor{
        height: 500px !important;
    }
    .ck.ck-editor__main > .ck-editor__editable:not(.ck-focused) {
        height: 500px !important;
        max-height: 500px !important;
    }
    
     .ck-focused {
        height: 500px !important;
        max-height: 500px !important;
    }
</style>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 9999; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    
    
    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    table td {
      border-bottom: none !important;
      display: table-cell !important; 
    }
    
    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    </style>   
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header card-header-primary">
                        
                        <div class="row align-items-center">
                            <div class="col-md-8 col-6">
                                <h4 class="card-title ">{{ $pageTitle }} </h4>
                            </div>
                            <div class="col-md-4 col-6 text-right">
                                <a class="btn btn-white btn-round">
                                    <button id="myBtn" class="btn btn-primary pull-right" style="color:#2C6DE9 !important;background-color:#fff !important">Open Modal</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('blog_information.update' , $row->id) }}" method="POST" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title in arabic</label>
                                        <input type="text" name="ar_title" id="ar_title" class="form-control" value="{{ $row->ar_title }}" required>
                                    </div>
                                    @if($errors->has('ar_title'))
                                        <span class="text-danger">{{ $errors->first('ar_title') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title in english</label>
                                        <input type="text" name="en_title" id="en_title" class="form-control" value="{{ $row->en_title }}" required>
                                    </div>
                                    @if($errors->has('en_title'))
                                        <span class="text-danger">{{ $errors->first('en_title') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Text in arabic</label>
                                        <textarea type="text" name="ar_text"  class="form-control ckeditor" value="{{ $row->ar_text }}" >{{ $row->ar_text }}</textarea>
                                    </div>
                                    @if($errors->has('ar_text'))
                                        <span class="text-danger">{{ $errors->first('ar_text') }}</span>
                                    @endif
                                </div>
                                
                                 


                                <div class="col-md-12" style="margin-top:100px">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Text in english</label>
                                        <textarea type="text" name="en_text"  class="form-control ckeditor" value="{{ $row->en_text }}" >{{ $row->en_text }}</textarea>
                                    </div>
                                    @if($errors->has('en_text'))
                                        <span class="text-danger">{{ $errors->first('en_text') }}</span>
                                    @endif
                                </div>
                                
                                
                                <div class="col-md-6" style="margin-top:100px">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tag Title in arabic</label>
                                        <input type="text" name="ar_tag_title" id="ar_tag_title" class="form-control" value="{{ $row->ar_tag_title }}" required>
                                    </div>
                                    @if($errors->has('ar_tag_title'))
                                        <span class="text-danger">{{ $errors->first('ar_tag_title') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6" style="margin-top:100px">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tag Title in english</label>
                                        <input type="text" name="en_tag_title" id="en_tag_title" class="form-control" value="{{ $row->en_tag_title }}" required>
                                    </div>
                                    @if($errors->has('en_tag_title'))
                                        <span class="text-danger">{{ $errors->first('en_tag_title') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tag Text in arabic</label>
                                        <textarea type="text" name="ar_tag_desc" id="ar_tag_desc" class="form-control " value="{{ $row->ar_tag_desc }}" required>{{ $row->ar_tag_desc }}</textarea>
                                    </div>
                                    @if($errors->has('ar_tag_desc'))
                                        <span class="text-danger">{{ $errors->first('ar_tag_desc') }}</span>
                                    @endif
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tag Text in english</label>
                                        <textarea type="text" name="en_tag_desc" id="en_tag_desc" class="form-control " value="{{ $row->en_tag_desc }}" required>{{ $row->en_tag_desc }}</textarea>
                                    </div>
                                    @if($errors->has('en_tag_desc'))
                                        <span class="text-danger">{{ $errors->first('en_tag_desc') }}</span>
                                    @endif
                                </div>
                                
                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Destination</label>
                                      <select name="destination_id" class="form-control" required>
                                          <option value="">Select a Country</option>
                                          @foreach($destinations as $category)
                                              <option value="{{ $category->id }}" {{ $row->destination_id == $category->id ? 'selected' : null }}>{{ $category->en_name }}</option>
                                          @endforeach
                                      </select>
                                  </div>
                                  @if($errors->has('destination_id'))
                                      <span class="text-danger">{{ $errors->first('destination_id') }}</span>
                                  @endif
                                </div>


                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">University</label>
                                      <select name="university_id" class="form-control" required>
                                          <option value="">Select a University</option>
                                          @foreach($universities as $category)
                                              <option value="{{ $category->id }}" {{ $row->university_id == $category->id ? 'selected' : null }}>{{ $category->en_name }}</option>
                                          @endforeach
                                      </select>
                                  </div>
                                  @if($errors->has('university_id'))
                                      <span class="text-danger">{{ $errors->first('university_id') }}</span>
                                  @endif
                                </div>


                                <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Faculty</label>
                                      <select name="faculty_university_id" class="form-control" required>
                                          <option value="">Select a Faculty</option>
                                          @foreach($faculties as $category)
                                              <option value="{{ $category->id }}" {{ $row->faculty_university_id == $category->id ? 'selected' : null }}>{{ $category->faculty->en_name }} ( {{ $category->university->en_name }} )</option>
                                          @endforeach
                                      </select>
                                  </div>
                                  @if($errors->has('faculty_university_id'))
                                      <span class="text-danger">{{ $errors->first('faculty_university_id') }}</span>
                                  @endif
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Featured Image <span style="color:red"> </span></label>
                                        <br>
                                        <input type="file" name="blog_main_image">
                                        @if($row->blog_main_image !== NULL)
                                            <div class="col text-center">
                                                <img src="{{ asset('blog/' . $row->blog_main_image) }}" width="100px" height="100px;">
                                            </div>
                                        @endif
                                    </div>
                                    @if($errors->has('blog_main_image'))
                                        <span class="text-danger">{{ $errors->first('blog_main_image') }}</span>
                                    @endif
                                </div>

                              
                                <div class="col-md-6">
                                    <div>
                                        <label class="bmd-label-floating">More Images</label>
                                        <input type="file" name="arrayOfImages[]" multiple>
                                    </div>
                                    @if($errors->has('arrayOfImages'))
                                        <span class="text-danger">{{ $errors->first('arrayOfImages') }}</span>
                                    @endif
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Blog Status </label>
                                        <select name="blog_status" class="form-control">
                                            <option value="0" {{ $row->blog_status == 0 ? 'selected' : null }}> Not Active</option>
                                            <option value="1" {{ $row->blog_status == 1 ? 'selected' : null }}> Active</option>
                                           
                                        </select>
                                    </div>
                                    @if($errors->has('blog_status'))
                                        <span class="text-danger">{{ $errors->first('blog_status') }}</span>
                                    @endif
                                </div>


                                
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Edit Blog</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    </div>
            </div>
            </div>

            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  <span class="close">&times;</span>
                  @if(count($blogImages))
                <table class="table table-bordered table-striped">
                  <thead class=" text-primary table-data">
                    <th class="text-center" style="color:#fff">
                      ID
                    </th>
                    <th class="text-center" style="color:#fff">
                      Image 
                    </th>
                    <th class="text-center" style="color:#fff">
                      Link
                    </th>
                    <th class="text-center" style="color:#fff">
                      Control
                    </th>
                  </thead>
                  <tbody>
                  @foreach ($blogImages as $feedback)
                    <tr>
                      <td style="text-align: center">
                        {{$feedback->id}}
                      </td>
                      <td style="text-align: center">
                        <img src="{{ asset('blogImages/' . $feedback->image) }}" width="100px" height="100px;">
                      </td>
                      <td style="text-align: center">
                        {{-- <input type="text" value="https://egecmena.com/{{$feedback->image_url}}" style="width:300px" id="myInput" disabled> --}}
                        <button class="btn btn-primary pull-right" style="text-align: center" onclick="copyToClipboard('https://egecmena.com/{{$feedback->image_url}}')">https://egecmena.com/{{$feedback->image_url}}</button>
                      </td>
                      <td class="td-actions row no-gutters align-items-center justify-content-center" style="text-align: center">
                            <div class="col-6">
                                <!--<form action="{{ route('blog_information.destroy', $feedback->id) }}" method="POST">-->
                                <!--    {{ csrf_field() }}-->
                                <!--    {{ method_field('delete') }}-->
                                    <button title="" class="btn btn-danger btn-sm"  type="submit" data-original-title="Remove Blog" rel="tooltip" onclick="return confirm('Are you sure you want to delete this Blog?');">
                                    <i class="material-icons">close</i>
                                    </button>
                                <!--</form>-->
                            </div>
                     </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                
                    @else
                    <h3 class="text-center">No Blogs Found</h3>
                @endif
                </div>
              
              </div>
              
     


            <script>
            
            
                var modal = document.getElementById("myModal");
                
                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");
                
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];
                
                // When the user clicks the button, open the modal 
                btn.onclick = function() {
                  modal.style.display = "block";
                }
                
                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                  modal.style.display = "none";
                }
                
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                  if (event.target == modal) {
                    modal.style.display = "none";
                  }
                }
            </script>

            <script>
              function copyToClipboard(text) {
                const el = document.createElement('textarea');
                el.value = text;
                document.body.appendChild(el);
                el.select();
                document.execCommand('copy');
                document.body.removeChild(el);
              }
            </script>


@endsection