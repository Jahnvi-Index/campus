@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
{{-- {{ echo $request->session()->get('email'); }} --}}
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
               
                <!-- end page title -->
                 @foreach ($user as $userregi)
                 
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Sending mail to user</h4>
                                <br>
                                <form method="get" action="/send/mail" enctype="multipart/form-data">
                                    @csrf
                        
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="name" type="text" value="{{ $userregi->name }}"id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">EmaiId</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="text" value="{{ $userregi->email }}"id="example-text-input">
                                    </div>
                      
                               <!-- end row -->
                            </div>
                              <div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Send Mail">
                            </div>
                                </form>
                            
                
            </div> <!-- container-fluid -->
        </div>
   
         @endforeach 
   
           {{-- card-img-topimg-fluid , for square image--}}
   
       {{-- <script type="text/javascript">
         $(document).ready(function(){
          $('#image').change(function(e){

            var reader=new FileReader();
            reader.onload=function(e){
                $('#showImage').attr('src',e.target.result)
            }
            reader.readAsDataURL(e.target.files['0'])
          });

         });
     --}}
   @endsection