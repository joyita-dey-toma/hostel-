@extends('admin.layouts.app')
@section('title')
 Update Facility
@endsection
@section('content')
@include('admin.layouts.errors')
<div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update  Facility </h4>
                  <form class="cmxform" id="commentForm" method="post" enctype="multipart/form-data" action="{{ route('facility.update',['id'=>$facility->id]) }}">
                    {{ csrf_field() }}  
                   <fieldset>
                      <div class="form-group">
                        <label for="pname">Title </label>
                        <input id="pname" value="{{$facility->title}}" class="form-control" name="title" minlength="2" type="text" required>
                      </div>
                    
                    
                      <div class="form-group">
                        <label for="pimage">Image:</label>
                        <input id="pimage" class="form-control" name="image" type="file">
                      </div>  
                    <div class="form-group">
                        <label for="content">Description</label>
                        <textarea name="description" id="content" cols="5" rows="5" class="form-control">{{$facility->description}}</textarea>
                   </div> 
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection