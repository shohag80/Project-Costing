<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Sign_In</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/favicon.png">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset('css/datetimepicker.css') }}">
    <link rel="stylesheet" href="{{asset('css/animation.css') }}">
    <link rel="stylesheet" href="{{asset('css/select.css') }}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{asset('css/feathericon.css') }}">
    <link rel="stylesheet" href="{{asset('css/fancybox.css') }}">
    <link rel="stylesheet" href="{{asset('css/summernote.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap_tagsinput.css') }}">
    <link rel="stylesheet" href="{{asset('css/datetable.css') }}">
    <link rel="stylesheet" href="{{asset('css/mobile.css') }}">
    <link rel="stylesheet" href="{{asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{asset('css/boxicons.css') }}">
    <link rel="stylesheet" href="{{asset('css/main.css') }}">
</head>

<body class="account-page">
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper bg-img">
                <div class="login-content">
                    <form action="{{route('Login_store')}}" method="POST">
                        @csrf
                        <div class="login-userset">
                            <div class="login-logo logo-normal">
                                <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/logo.png" alt="img">
                            </div>
                            <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/index" class="login-logo logo-white">
                                <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/build/img/logo-white.png" alt="">
                            </a>
                            <div class="login-userheading">
                                <h3>Sign In</h3>
                                <h4>Access the Project Costing panal using your email and passcode.</h4>
                            </div>
                            <div class="form-login mb-3">
                                <label class="form-label">Email Address</label>
                                <div class="form-addons">
                                    <input type="text" name="email" id="Email" value="{{old('email')}}" required placeholder="Enter your email address">
                                </div>
                                @error('email')<div class="text-danger pt-2">
                                    {{$massage}}
                                </div>@enderror
                            </div>
                            <div class="form-login mb-3">
                                <label class="form-label">Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input" name="password" id="password" value="{{old('password')}}" required placeholder="Enter your password">
                                </div>
                                @error('password')<div class="text-danger pt-2">
                                    {{$massage}}
                                </div>@enderror
                            </div>
                            <div class="form-login authentication-check">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-between">
                                        <div class="custom-control custom-checkbox">
                                            <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                <input type="checkbox" class="form-control">
                                                <span class="checkmarks"></span>Remember me
                                            </label>
                                        </div>
                                        <div class="text-end">
                                            <a class="forgot-link" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/forgot-password">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-login">
                                <button type="submit" class="btn btn-login">Sign In</button>
                            </div>
                            <div class="signinform">
                                <h4>New on our platform?<a href="{{route('Registration')}}" class="hover-a"> Create an account</a>
                                </h4>
                            </div>

                            <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                <p>Copyright &copy; 2023 DreamsPOS. All rights reserved</p>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- /Main Wrapper -->
    <div class="customizer-links" id="setdata">
        <ul class="sticky-sidebar">
            <li class="sidebar-icons">
                <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Theme">
                    <i data-feather="settings" class="feather-five"></i>
                </a>
            </li>
        </ul>
    </div>
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/feather.min.js')}}"></script>
    <script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/apexcharts.min.js')}}"></script>
    <script src="{{asset('js/chart-data.js')}}"></script>
    <script src="{{asset('js/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('js/sweetalerts.min.js')}}"></script>
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('js/daterangepicker.js')}}"></script>
    <script src="{{asset('js/bootstrap-tagsinput.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('js/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('js/intlTelInput.js')}}"></script>
    <script src="{{asset('js/plyr-js.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/ResizeSensor.js')}}"></script>
    <script src="{{asset('js/theia-sticky-sidebar.js')}}"></script>
    <script src="{{asset('js/theme-script.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>