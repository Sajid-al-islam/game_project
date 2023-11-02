<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">

<head>
    <title>Panel</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="d" />
    <link rel="icon" type="image/x-icon" href="{{asset('public/author/assets/img/favicon.ico')}}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{asset('public/author/assets/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/author/assets/fonts/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('public/author/assets/fonts/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('public/author/assets/fonts/open-iconic.css')}}">
    <link rel="stylesheet" href="{{asset('public/author/assets/fonts/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('public/author/assets/fonts/feather.css')}}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset('public/author/assets/css/bootstrap-material.css')}}">
    <link rel="stylesheet" href="{{asset('public/author/assets/css/shreerang-material.css')}}">
    <link rel="stylesheet" href="{{asset('public/author/assets/css/uikit.css')}}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{asset('public/author/assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('public/author/assets/css/pages/authentication.css')}}">
</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Content ] Start -->
    <div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('{{asset('public/backend/assets/img/bg/21.jpg')}}');">
        <div class="ui-bg-overlay bg-dark opacity-25"></div>

        <div class="authentication-inner py-5">

            <div class="card">
                <div class="p-4 p-sm-5">
                    <!-- [ Logo ] Start -->
                    <div class="d-flex justify-content-center align-items-center pb-2 mb-4">
                        <div class="ui-w-60">
                            <div class="w-100 position-relative">
                                <img src="https://bplive.site/store/profile/default.png" alt="Brand Logo" class="img-fluid">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Logo ] End -->

                    <h5 class="text-center text-muted font-weight-normal mb-4">Login to Your Account new server</h5>

                    <!-- Form -->
                    <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label d-flex justify-content-between align-items-end">
                                <span>Password</span>
                                <a href="pages_authentication_password-reset.html" class="d-block small">Forgot password?</a>
                            </label>
                            <input type="password" name="password" class="form-control">
                            <div class="clearfix"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center m-0">
                            <label class="custom-control custom-checkbox m-0">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Remember me</span>
                            </label>
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                    </form>
                    <!-- [ Form ] End -->

                </div>
               
            </div>

        </div>
    </div>
    <!-- / Content -->

    <!-- Core scripts -->
    <script src="{{asset('public/author/assets/js/pace.js')}}"></script>
    <script src="{{asset('public/author/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/author/assets/libs/popper/popper.js')}}"></script>
    <script src="{{asset('public/author/assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/author/assets/js/sidenav.js')}}"></script>
    <script src="{{asset('public/author/assets/js/layout-helpers.js')}}"></script>
    <script src="{{asset('public/author/assets/js/material-ripple.js')}}"></script>

    <!-- Libs -->
    <script src="{{asset('public/author/assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>



</body>

</html>
