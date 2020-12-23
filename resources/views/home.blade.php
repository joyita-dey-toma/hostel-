@extends('admin.layouts.app')
@section('title')
   Dashboard
@endsection

@section('content')

<div class="row mt-5">
        
        <div class="col-md-3">
           <div class="card bg-info py-3 text-white ">
               <div class="card-heading text-center">
                  
                  Facilities
                  
               </div>
       
                   <div class="card-body">
                      
                      <h1 class="text-center">{{$facilities_count}}</h1>
                      
                   </div>
           </div>
           
           </div>
           
           
           <div class="col-md-3">
           <div class="card bg-danger  py-3 text-white ">
               <div class="card-heading text-center">
                  
                  Services
                  
               </div>
       
                   <div class="card-body">
                      
                      <h1 class="text-center">{{$services_count}}</h1>
                      
                   </div>
           </div>
           
           </div>
           
           
           <div class="col-md-3">
           <div class="card bg-warning  py-3">
               <div class="card-heading text-center text-white">
                  
                  Users
                  
               </div>
       
                   <div class="card-body">
                      
                      <h1 class="text-center text-white">{{$users_count}}</h1>
                      
                   </div>
           </div>
           
           </div>
    
  </div>   
    
    
    
@endsection
