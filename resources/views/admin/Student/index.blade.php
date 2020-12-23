@extends('admin.layouts.app')
@section('title')
 All Student
@endsection

@section('content')
<div class="card">
            <div class="card-body">
              <h4 class="card-title">Students</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                    
                            <th>Name</th>
                            <th>contact</th>
                            <th> Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if($students->count()>0)
                   
                   
                   @foreach($students as $student)
                       <tr>
                           
                           <td>
                               {{ $student->name }}
                           </td>
                           <td>
                               {{ $student->contact }}
                           </td>
                           <td>
                               <img src="{{asset($student->image)}}" alt="" width="600px">
                            </td>
                           <td>
                               <a href="{{ route('student.edit', ['id' => $student->id ]) }}" class="btn  btn-info">
                                   <!-- <span class="glyphicon glyphicon-pencil"></span> -->
                                   Edit
                               </a>
                           </td>

                           <td>
                               <a href="{{ route('student.delete', ['id' => $student->id ]) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">
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