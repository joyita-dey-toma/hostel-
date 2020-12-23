@extends('admin.layouts.app')
@section('title')
 All Facility
@endsection

@section('content')
<div class="card">
            <div class="card-body">
              <h4 class="card-title">Facilities</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                    
                            <th>Title</th>
                            <th>Description</th>
                            <th> Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if($facilities->count()>0)
                   
                   
                   @foreach($facilities as $facility)
                       <tr>
                           
                           <td>
                               {{ $facility->title }}
                           </td>
                           <td>
                               {{ $facility->description }}
                           </td>
                           <td>
                               <img src="{{asset($facility->image)}}" alt="" width="600px">
                            </td>
                           <td>
                               <a href="{{ route('facility.edit', ['id' => $facility->id ]) }}" class="btn  btn-info">
                                   <!-- <span class="glyphicon glyphicon-pencil"></span> -->
                                   Edit
                               </a>
                           </td>

                           <td>
                               <a href="{{ route('facility.delete', ['id' => $facility->id ]) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                   Delete
                               </a>
                           </td>
                       </tr>
                   @endforeach
               
               @else
                   <tr>
                       <th colspan="5" class="text-center">No Data Yet..</th>
                   </tr>
                @endif   
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection