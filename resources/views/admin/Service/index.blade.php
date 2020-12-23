@extends('admin.layouts.app')
@section('title')
 All Services
@endsection

@section('content')
<div class="card">
            <div class="card-body">
              <h4 class="card-title">Services</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                    
                            <th>Name</th>
                            <th>Description</th>
                            <th> Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if($services->count()>0)
                   
                   
                   @foreach($services as $service)
                       <tr>
                           
                           <td>
                               {{ $service->name }}
                           </td>
                           <td>
                               {{ $service->description }}
                           </td>
                           <td>
                               <img src="{{asset($service->image)}}" alt="" width="600px">
                            </td>
                           <td>
                               <a href="{{ route('service.edit', ['id' => $service->id ]) }}" class="btn  btn-info">
                                   <!-- <span class="glyphicon glyphicon-pencil"></span> -->
                                   Edit
                               </a>
                           </td>

                           <td>
                               <a href="{{ route('service.delete', ['id' => $service->id ]) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                   Delete
                               </a>
                           </td>
                       </tr>
                   @endforeach
               
               @else
                   <tr>
                       <th colspan="5" class="text-center">No data Yet..</th>
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