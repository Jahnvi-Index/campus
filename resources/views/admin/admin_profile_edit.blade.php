 @extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
               
                <!-- end page title -->
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Edit profile page</h4>
                                <br>
                                <form method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                                    @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="name" type="text" value="{{ $editData->name }}"id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">User Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="text" value="{{ $editData->email }}"id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Profile image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="profile_image" type="file" id="image">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">

                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                    
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" id="showImage" src="{{ (!empty($editData->profile_image)) ? url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">

                                    </div>
                                </div>
                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile">

                               
                </div>
              
                                </form>
                
            </div> <!-- container-fluid -->
        </div>
   
          
   
           {{-- card-img-topimg-fluid , for square image--}}
   
       <script type="text/javascript">
         $(document).ready(function(){
          $('#image').change(function(e){

            var reader=new FileReader();
            reader.onload=function(e){
                $('#showImage').attr('src',e.target.result)
            }
            reader.readAsDataURL(e.target.files['0'])
          });

         });
    
    
    
    </script>
         
               
   
   
   
   
   
   
       
   
   @endsection --}}