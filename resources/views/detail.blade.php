@extends('admin.admin_master')
@section('admin')
<center>
    <br>
    <br>
    <br>
    
    <div class="page-content">
          <i><b>USER DETAILS</b></i>
        <div class="container-fluid">
    @foreach ($users as $userregi)
  
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">stream</th>
            <th scope="col">user image</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $userregi->id }}</th>
            <td>{{ $userregi->name }}</td>
            <td>{{ $userregi->email }}</td>
            <td>{{ $userregi->password }}</td>
            <td>{{ $userregi->stream}}</td>
            <td>{{ $userregi->u_image }}</td>
          </tr>
          <tr>
           
          </tr>
          <tr>
           
          </tr>
        </tbody>
      </table>
      @endforeach 
    
        </div>
    </div>


@endsection