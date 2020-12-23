@extends('admin.layouts.app')
@section('title')
 Add Service
@endsection
@section('content')
@include('admin.layouts.errors')
<div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add  Service </h4>
                  <form class="cmxform" id="commentForm" method="post" enctype="multipart/form-data" action="{{ route('service.store') }}">
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
                        <label for="content">Description</label>
                        <textarea name="description" id="content" cols="5" rows="5" class="form-control"></textarea>
                   </div> 
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection