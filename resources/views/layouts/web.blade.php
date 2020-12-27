<!DOCTYPE html>
<html lang="en" class="no-js"> 
    <head>
        <title>Phuong Vu Systeme</title>
        <!-- Meta -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="keywords" content="Webseite, Systeme, IT-Lösung, Lösung, Projektmanager, IT-Support, Wirthschaftsinformatik">
        <meta name="description" content="IT Lösungen für Unternehmen">
        <meta name="author" content="webthemez.com">
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}"> 
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/font-awesome/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/slick-carousel/slick.css') }}"> 
        <link href="{{ asset('assets/vendors/ace-responsive-menu/ace-responsive-menu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/vendors/aos/aos.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">

    </head>  
    <body>
        @include('components.top-menu')
        <!-- Header -->
        @include('components.navigation')
        <!-- End Navbar --> 
        {{ $slot }}
        <!-- Footer --> 
        @include('components.footer')
        <!-- End Footer --> 
    </body>
    <!-- JS Script Files -->
    <!-- Global Vendor -->
    <script src="{{ asset('assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>

    <!-- Components Vendor  --> 
    <script src="{{ asset('assets/vendors/slick-carousel/slick.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/ace-responsive-menu/ace-responsive-menu.js') }}"></script>

    <!--Plugin Initialize-->
    <script src="{{ asset('assets/js/global.js') }}"></script> 
    <script src="{{ asset('assets/vendors/carousel.js') }}"></script>
    <!-- END JAVASCRIPTS -->
    
</html>