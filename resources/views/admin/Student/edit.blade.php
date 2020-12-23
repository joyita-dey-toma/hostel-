@extends('admin.layouts.app')
@section('title')
 Update Student
@endsection
@section('content')
@include('admin.layouts.errors')
<div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update  Student </h4>
                  <form class="cmxform" id="commentForm" method="post" enctype="multipart/form-data" action="{{ route('student.update',['id'=>$student->id]) }}">
                    {{ csrf_field() }}  
                   <fieldset>
                      <div class="form-group">
                        <label for="pname">Name </label>
                        <input id="pname" value="{{$student->name}}" class="form-control" name="name" minlength="2" type="text" required>
                      </div>
                    
                    
                      <div class="form-group">
                        <label for="pimage">Image:</label>
                        <input id="pimage" class="form-control" name="image" type="file">
                      </div>  
                    <div class="form-group">
                        <label for="content">Contact</label>
                        <input id="contact" class="form-control" name="contact" value="{{$student->contact}}"  type="text">
                   </div> 
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection