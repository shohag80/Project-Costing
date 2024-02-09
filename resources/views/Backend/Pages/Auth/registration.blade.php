<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Sign_Up</title>
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
    </div> <!-- Main Wrapper -->
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper register-wrap bg-img">
                <div class="login-content">
                    <form action="{{route('Registration_store')}}" method="POST">
                        @csrf
                        <div class="login-userheading">
                            <h3>Register</h3>
                            <h4>Create New Dreamspos Account</h4>
                        </div>
                        <div class="form-login">
                            <label>Name</label>
                            <div class="form-addons">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Email Address</label>
                            <div class="form-addons">
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input" id="password" name="password">
                            </div>
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Confirm Passworrd</label>
                            <div class="pass-group">
                                <input type="password" class="pass-inputs" id="confirmpassword" name="confirmpassword">
                            </div>
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-login authentication-check">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="custom-control custom-checkbox justify-content-start">
                                        <div class="custom-control custom-checkbox">
                                            <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>I agree to the <a href="#" class="hover-a">Terms & Privacy</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-login">
                            <button type="submit" class="btn btn-login">Sign Up</button>
                        </div>
                        <div class="signinform">
                            <h4>Already have an account ? <a href="{{route('Login')}}" class="hover-a">Sign In Instead</a>
                            </h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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