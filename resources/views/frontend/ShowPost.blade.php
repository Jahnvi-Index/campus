<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>show post</title>
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
    {{-- <?php print_R($users);?> --}}
    




    
    
    <body class="auth-body-bg">







        
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                @foreach ($users as $post)
                <div class="card">
                    <div class="card-body">
                        
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>

                        <h4 class="text-muted text-center font-size-18"><b>Your Posts</b></h4>
    
                        
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $post->title }}</h4>
                                <h6 class="card-subtitle font-14 text-muted">{{ $post->short_desc }}</h6>
                            </div>
                            <img src="{{ asset('/upload/user/' . $post->image) }}" alt="Image">

                    {{-- <img class="img-fluid" src={{ $post->image }} alt="Card image cap"> --}}
                            <div class="card-body">
                                <p class="card-text">{{ $post->story }}</p>
                                <div class="photo">
                                  user: <a href="#" class="card-link">{{ $post->user_id }}</a>
                            </div>
                        </div>
    
                        </div>
                        <!-- end -->
                    </div>
                    @endforeach
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
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
