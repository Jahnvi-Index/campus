
{{-- @include('usersidebar.footer'); --}}
{{-- @include('frontend.home_all.userhead'); --}}
{{-- @include('usersidebar.center'); --}}
@include('userdtl.uhead');
       <!-- Bootstrap Css -->
        <link href=" {{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href=" {{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href=" {{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <link  rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
        <textarea id="elm1" name="long_description" class="form-control" rows="5">
        </textarea>
    </div>
</div> --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


<center>
  
  



        <div class="page-content"  align="center">
            <div class="container-fluid">
                <div class="text-center">
                <!-- start page title -->
               
                <!-- end page title -->
            
                <div class="row">
                    <div class="col-30" height="100" width="100">
                        <div class="card">
                            <div class="card-body" height="100" width="100">

                                <h4 class="card-title">POST</h4>
                                <br>
                                <form method="post" action="{{ route('send.page') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="title" type="text" value=""id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short description</label>
                                    <div class="col-sm-10">
                                        <textarea required="" name="short_desc" class="form-control" rows="5">
                                        </textarea>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Tell your story</label>
                                    <div class="col-sm-10">
                                        <textarea required="" name="story" class="form-control" rows="5">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="image" type="file" id="image">
                                    </div>
                                </div>
                           
                                <!-- end row -->
                                
                                <!-- end row -->

                            
                             
                                <!-- end row -->

                      
                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="post" src="{{ route('send.page') }}">

                            </div>
                </div>
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
    </center>
         
               
   
   
   
   
   
   
       
   
   