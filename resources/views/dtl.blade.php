@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
       <div class="row">
           <div class="col-lg-6">
               <div class="card"><br><br>
     
                   <div class="card-body">
                       <h4 class="card-title">unique_id:{{ $adminData->uniq_id }}</h4>
                       <hr>
                       <h4 class="card-title">password:{{ $adminData->password}}</h4>
                       <hr>
                       <a href="" class="btn btn-info btn-rounded waves-effect waves-light">store login details</a>
                       </p>
                   </div>
               </div>
           </div>
   
          
   
           {{-- card-img-topimg-fluid , for square image--}}
   
       </div>
       @endsection