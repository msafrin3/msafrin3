<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="dark" data-layout-mode="light">

    <head>

        <meta charset="utf-8" />
        <title>{{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('') }}/assets/images/favicon.ico">

        <!-- jsvectormap css -->
        <link href="{{ url('') }}/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!--Swiper slider css-->
        <link href="{{ url('') }}/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

        <!-- Layout config Js -->
        <script src="{{ url('') }}/assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="{{ url('') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url('') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url('') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{ url('') }}/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('') }}/assets/css/custom.css" rel="stylesheet" type="text/css" />

        @routes
        @vite([
            'resources/js/app.js'
        ])
        @inertiaHead

    </head>

    <body>
        @inertia

        <!-- JAVASCRIPT -->
        <script src="{{ asset('plugins/jQuery/jquery-3.6.4.min.js') }}"></script>

        <script src="{{ url('') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url('') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ url('') }}/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{ url('') }}/assets/libs/feather-icons/feather.min.js"></script>
        <script src="{{ url('') }}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="{{ url('') }}/assets/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="{{ url('') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="{{ url('') }}/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="{{ url('') }}/assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!--Swiper slider js-->
        <script src="{{ url('') }}/assets/libs/swiper/swiper-bundle.min.js"></script>

        <!-- Dashboard init -->
        <script src="{{ url('') }}/assets/js/pages/dashboard-ecommerce.init.js"></script>

        <!-- App js -->
        <!-- <script src="{{ url('') }}/assets/js/app.js"></script> -->
    </body>

</html>