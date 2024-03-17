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
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>


<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
        @include('Backend.Partials.header')
        <!-- /Header -->
        <!-- Sidebar -->
        @include('Backend.Partials.sidebar')
        <!-- /Sidebar -->
        <div class="page-wrapper">
            <div class="content">
                @yield('content')
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
    <!-- jQuery -->
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

    <script>
        $(document).ready(function() {
            $('#designation').change(function() {
                var designationId = $(this).val();
                $.ajax({
                    url: '/fetch-salary/' + designationId,
                    type: 'GET',
                    success: function(response) {
                        $('#salary').val(response.salary);
                    },
                    error: function() {
                        $('#salary').val('Error fetching salary');
                    }
                });
            });
        });
        
        function validateInput(value) {
            // alert(value);
            var man_months = document.getElementById('man_month').value = value / 20;
        }
        // Number Input
        document.getElementById("numberInput").addEventListener("keypress", function(event) {
            // Allow only numbers
            if (event.keyCode < 48 || event.keyCode > 57) {
                event.preventDefault();
            }
        });
        // Date Input
        document.getElementById("dateInput").addEventListener("input", function(event) {
            let inputValue = event.target.value;
            let dateFormat = /^\d{4}-\d{2}-\d{2}$/; // YYYY-MM-DD format

            if (!dateFormat.test(inputValue)) {
                event.target.value = inputValue.slice(0, -1); // Remove the last character
            }
        });
        
    </script>
</body>

</html>