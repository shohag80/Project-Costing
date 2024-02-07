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
    <link rel="shortcut icon" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/fontawesome/css/all.min.css">

    <!-- animation CSS -->
    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/css/animate.css">
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/css/bootstrap-datetimepicker.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/owlcarousel/owl.theme.default.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/select2/css/select2.min.css">

    <!-- Dragula CSS -->
    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/dragula/css/dragula.min.css">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/css/dataTables.bootstrap4.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/css/style.css">
</head>

<body>


    <body class="account-page">

        <div id="global-loader">
            <div class="whirly-loader"> </div>
        </div> <!-- Main Wrapper -->
        <div class="main-wrapper">

            <form action="{{route('Login_store')}}" method="post" class="account-content">
                @csrf
                <div class="login-wrapper">
                    <div class="login-content">
                        <div class="login-userset">
                            <div class="login-logo logo-normal">
                                <h3><b>Projects Cost</b></h3>
                            </div>
                            <a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/index" class="login-logo logo-white">
                                <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/img/logo-white.png" alt="">
                            </a>

                            <div class="login-userheading">
                                <h3>Sign In</h3>
                                <h4>Please login to your account</h4>
                            </div>
                            <div class="form-login">
                                <label>Email</label>
                                <div class="form-addons">
                                    <input type="text" name="email" id="Email" value="{{old('email')}}" required placeholder="Enter your email address">
                                    <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/img/icons/mail.svg" alt="img">
                                </div>
                                @error('email')<div class="text-danger pt-2">
                                    {{$massage}}
                                </div>@enderror
                            </div>
                            <div class="form-login">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input" name="password" id="password" value="{{old('password')}}" required placeholder="Enter your password">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                                @error('password')<div class="text-danger pt-2">
                                    {{$massage}}
                                </div>@enderror
                            </div>
                            <div class="form-login">
                                <div class="alreadyuser">
                                    <h4><a href="https://dreamspos.dreamstechnologies.com/laravel/template/public/forgetpassword" class="hover-a">Forgot Password?</a></h4>
                                </div>
                            </div>
                            <div class="form-login">
                                <button class="btn btn-login" type="submit">Sign In</button>
                            </div>
                            <div class="signinform text-center">
                                <h4>Don’t have an account? <a href="{{route('Registration')}}" class="hover-a">Sign Up</a></h4>
                            </div>

                        </div>
                    </div>
                    <div class="login-img">
                        <img src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/img/login.jpg" alt="img">
                    </div>
                </div>
            </form>
        </div>
        <!-- /Main Wrapper -->
        <!-- jQuery -->
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/js/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap Core JS -->
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/js/bootstrap.bundle.min.js"></script>

        <!-- Feather Icon JS -->
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/js/feather.min.js"></script>

        <!-- Slimscroll JS -->
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/js/jquery.slimscroll.min.js"></script>

        <!-- Datatable JS -->
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/js/jquery.dataTables.min.js"></script>
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/js/dataTables.bootstrap4.min.js"></script>

        <!-- Select2 JS -->
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/select2/js/select2.min.js"></script>
        <!-- Datetimepicker JS -->
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/js/moment.min.js"></script>
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/js/bootstrap-datetimepicker.min.js"></script>

        <!-- Chart JS -->
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/apexchart/apexcharts.min.js"></script>
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/apexchart/chart-data.js"></script>
        <!-- Owl JS -->
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/owlcarousel/owl.carousel.min.js"></script>
        <!-- Fileupload JS -->
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/fileupload/fileupload.min.js"></script>
        <!-- Sweetalert 2 -->
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/plugins/sweetalert/sweetalerts.min.js"></script>

        <!-- Custom JS -->
        <script src="https://dreamspos.dreamstechnologies.com/laravel/template/public/assets/js/script.js"></script>
    </body>

</html>