 @extends('admin.admin_master')
@section('admin')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}


        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
               
                <!-- end page title -->
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">user page</h4>
                                <br>
                                <form method="post" action="{{ route('user.info') }}" enctype="multipart/form-data">
                                    @csrf
                                     <input type="hidden" name="id">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="name" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="password" type="text"id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->
                                
                                 <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Stream</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="stream" type="text"id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                            
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="u_image" type="file" id="image">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">

                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                    
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" id="showImage" src="{{ (!empty($userregi->u_image)) ? url($userregi->u_image):url('upload/no_image.jpg') }}"alt="Card image cap">

                                    </div>
                                </div>
                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Register">
                                
                            
                               
                </div>
              
                                </form>
                
            </div> <!-- container-fluid -->
        </div>
   
          
   
        
   
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
         
               
   
   
   
   
   
   
       
   
   @endsection 

   