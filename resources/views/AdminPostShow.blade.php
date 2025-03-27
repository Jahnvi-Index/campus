@extends('admin.admin_master')
@section('admin')


@foreach ($users as $post)
<div class="page-content">
    <div class="container-fluid">
       <div class="row">
           <div class="col-lg-6">
               <div class="card"><br><br>
   <center>               
                   <img class="rounded-circle avatar-xl" src="{{ asset('/upload/user/' . $post->image) }}" >
   </center>
               
                   <div class="card-body">
                     <h4 class="card-title">userid:{{ request()->session()->get('id') }}</h4> 
                       <hr>
                       <h4 class="card-title">Title:{{ $post->title }}</h4>
                       <hr>
                       <h4 class="card-title">short Description:{{ $post->short_desc }}</h4>
                       <hr>
                       <hr>
                       <h4 class="card-title">tell your story:{{ $post->story }}</h4>
                       <hr>
                       <a href="" class="btn btn-info btn-rounded waves-effect waves-light">okay</a>
                       </p>
                   </div>
               </div>
           </div>
   
          
   
       
   
        </div>
        @endforeach
@endsection