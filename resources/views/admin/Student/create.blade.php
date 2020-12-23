@extends('admin.layouts.app')
@section('title')
 Add Student
@endsection
@section('content')
@include('admin.layouts.errors')
<div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add  Student </h4>
                  <form class="cmxform" id="commentForm" method="post" enctype="multipart/form-data" action="{{ route('student.store') }}">
                    {{ csrf_field() }}  
                   <fieldset>
                      <div class="form-group">
                        <label for="pname">Name </label>
                        <input id="pname" class="form-control" name="name" minlength="2" type="text" required>
                      </div>
                    
                    
                      <div class="form-group">
                        <label for="pimage">Image:</label>
                        <input id="pimage" class="form-control" name="image" type="file" required>
                      </div>  
                        
                      
                      <div class="form-group">
                        <label for="contact">Contact:</label>
                        <input id="contact" class="form-control" name="contact" type="text" required>
                      </div>  

                      <input class="btn btn-primary" type="submit" value="Submit">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection