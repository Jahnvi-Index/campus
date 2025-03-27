       
       @include('usersidebar.sidebar'); 
       
      
     @include('userdtl.uhead');


     <!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Posts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <link  rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


    </head>

    
     <body class="">
     <div class="bg-overlay"></div>
      
        

        <div class="bg-overlay"></div>
        @foreach ($users as $post)
        <div class="wrapper-page">
            <div class="container-fluid p-0">
              
                <div class="card">
                    <div class="card-body">
                       
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                    
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b> Posts</b></h4>
                       
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $post->title }}</h4>
                                <h6 class="card-subtitle font-14 text-muted">{{ $post->short_desc }}</h6>
                            </div>
                            <img src="{{ asset('/upload/user/' . $post->image) }}" alt="Image">

                             <div class="card-body">
                                <p class="card-text">{{ $post->story }}</p>
                               user:<a href="#" class="card-link">{{ $post->user_id }}</a>
                            </div>
                        </div>
                      
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
                @endforeach
            </div> 
 

        <!-- end -->
        

       





        <!-- JAVASCRIPT -->
        <script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('backend/assets/js/app.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" >
        </script>
        <script>
        @if (Session::has('message'))
        var type="{{ Session::get('alert-type','success') }}"
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error;("{{ Session::get('message') }}");
                break;
        }
            
        @endif
        </script>

    </body>
</html>
