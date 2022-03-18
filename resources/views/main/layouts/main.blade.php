<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laman Web Rasmi JUPEM</title>
    <meta name="keywords" content="Laman Web Rasmi JUPEM" />
    <meta name="description" content="Laman Web Rasmi JUPEM">
    <meta name="author" content="JUPEM">

    <!-- CSS & Script -->
    @include('main.layouts.partials.headerlink')
</head>

<body data-plugin-page-transition>
    <div class="body">
        <!-- Header - Logo + Icons 4 + Search - START -->
        @include('main.layouts.partials.header')
        <!-- Header - Logo + Icons 4 + Search - END -->

        <div role="main" class="main">

            {{-- Bring out content to display on the main page --}}
            {{-- @yield('content') --}}

            <!-- Video - START -->
            @include('main.layouts.partials.mainvideo')
            <!-- Video - END -->

            <!-- Sidemenu - START -->
            @include('main.layouts.partials.switcher')
            <!-- Sidemenu - END -->

            <!-- Slider - START -->
            @include('main.layouts.partials.slider')
            <!-- Slider - END -->

            <!-- Pautan Info Semasa - START -->
            @include('main.layouts.partials.infosemasa')
            <!-- Pautan  Info Semasa  - END -->

            <!-- Pautan P & P - START -->
            @include('main.layouts.partials.pp')
            <!-- Pautan P & P - END -->

            <!-- Map Online Trans - START -->
            @include('main.layouts.partials.onlinetrans')
            <!-- Map Online Trans - END -->

            <!-- Map Hubungi Kami - START -->
            <?php //include 'include-portal/contact-front-wide.php';
            ?>
            @include('main.layouts.partials.darkgreen')
            <!-- Map Hubungi Kami - END -->

            <!-- Pautan Laman Web Kerajaan - START -->
            @include('main.layouts.partials.lamanluar')
            <!-- Pautan Laman Web Kerajaan - END -->    


        </div>

        <!-- Footer - START -->
        @include('main.layouts.partials.footer')
        <!-- Footer - END -->

    </div>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/lazysizes/lazysizes.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Circle Flip Slideshow Script -->
    <script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
    <!-- Current Page Views -->
    <script src="js/views/view.home.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <!-- Script Cak Cak Menu -->
    <script src="js/jupem-js-sara.js"></script>

</body>

</html>
