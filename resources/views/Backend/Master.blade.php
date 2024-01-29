<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Project Costing</title>

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

    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
        <div class="header">

            @include('Backend.Partials.header')

        </div>

        <!-- Header -->
        <script>
            function toggleFullscreen(elem) {
                elem = elem || document.documentElement;
                if (!document.fullscreenElement && !document.mozFullScreenElement &&
                    !document.webkitFullscreenElement && !document.msFullscreenElement) {
                    if (elem.requestFullscreen) {
                        elem.requestFullscreen();
                    } else if (elem.msRequestFullscreen) {
                        elem.msRequestFullscreen();
                    } else if (elem.mozRequestFullScreen) {
                        elem.mozRequestFullScreen();
                    } else if (elem.webkitRequestFullscreen) {
                        elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                    }
                } else {
                    if (document.exitFullscreen) {
                        document.exitFullscreen();
                    } else if (document.msExitFullscreen) {
                        document.msExitFullscreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.webkitExitFullscreen) {
                        document.webkitExitFullscreen();
                    }
                }
            }

            document.getElementById('btnFullscreen').addEventListener('click', function() {
                toggleFullscreen();
            });
        </script> <!-- Sidebar -->
        <div class="sidebar" id="sidebar">

            @include('Backend.Partials.sidebar')

        </div>
        <!-- /Sidebar -->

        <div class="page-wrapper">
            <div class="content">

                @yield('content')

            </div>
        </div>

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