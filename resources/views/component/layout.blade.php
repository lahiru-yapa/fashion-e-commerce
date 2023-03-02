<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ulina - Fashion Ecommerce Responsive HTML Template</title>
        <meta name="description" content="Fashion Ecommerce Responsive HTML Template.">
        <meta name="keywords" content="HTML, CSS, JavaScript, jQuery, Animation, Bootstrap, Font Awesome, Revolution Slider, Fasion, Ecommerce, Shop, WooCommerce">
        <meta name="author" content="uiuxom">

        <!-- BEGIN: CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/fontawesome-all.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/lightcase.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/settings.css">
        <link rel="stylesheet" href="css/ulina-icons.css">
        <link rel="stylesheet" href="css/ignore_for_wp.css">
        <link rel="stylesheet" href="css/preset.css">
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/responsive.css">
        <!-- END: CSS -->

        <!-- BEGIN: Favicon -->
        <link rel="icon"  type="image/png" href="images/favicon.png"> 
        <!-- END: Favicon -->
    </head>
    <body>
        <!-- BEGIN: Section -->
       @include('component.prelod')
        <!-- END: Section -->
        
        <!-- BEGIN: Section -->
       @include('component.header')
         <!-- END: Section -->

         @yield('content')


        <!-- BEGIN: Footer Section -->
    @include('component.footer')
        <!-- END: Footer Section -->

        <!-- BEGIN: Site Info Section -->
        @include('component.info')
        <!-- END: Site Info Section -->

        <!-- BEGIN: Product QuickView  -->
        @yield('quickview')
        @include('component.quickview')
        
        <!-- END: Product QuickView -->
 <!-- BEGIN: Back To Top -->
 <a href="javascript:void(0);" id="backtotop"><i class="fa-solid fa-angles-up"></i></a>
        <!-- END: Back To Top -->
        <!-- BEGIN: JS -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/shuffle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/owl.carousel.filter.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/lightcase.js"></script>
        <script src="js/jquery.nice-select.js"></script>
        <script src="js/slick.js"></script>
        <script src="js/jquery.plugin.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/circle-progress.js"></script>

        <script src="js/gmaps.js"></script>
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyCA_EDGVQleQtHIp2fZ-V56QFRbRL8cXT8"></script>

        <script src="js/jquery.themepunch.tools.min.js"></script>
        <script src="js/jquery.themepunch.revolution.min.js"></script>

        <script src="js/extensions/revolution.extension.actions.min.js"></script>
        <script src="js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="js/extensions/revolution.extension.migration.min.js"></script>
        <script src="js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="js/extensions/revolution.extension.video.min.js"></script>

        <script src="js/theme.js"></script>
        <!-- END: JS -->
    </body>
</html>