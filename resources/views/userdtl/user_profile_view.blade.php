        <!-- Bootstrap Css -->
        <link href=" {{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href=" {{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href=" {{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <link  rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

<div class="page-content">
 <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card"><br><br>
<center>               
                 <img class="rounded-circle avatar-xl" src={{ request()->session()->get('u_image') }} >
</center>
            
                <div class="card-body">
                     <h4 class="card-title">Name:{{ request()->session()->get('name') }}</h4>
                    <hr>
                    <h4 class="card-title">email:{{ request()->session()->get('email') }}</h4>
                    <hr>
                    
                    <a href="" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                    
                    </p>
                </div>
            </div>
        </div>
       
       

    

     </div>
      
            






    
</div>
</div>