<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.shodeshishilpo.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jun 2020 01:05:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="csrf-token" content="2xjr41LfNWuzMFsHaw2xXqXO5VkqjVun2kgVLQq3">
    <title>frontend</title>
    <link rel="icon" href="{{asset('frontend')}}/images/gT1TARmUWHuvbzKX7vfIHjseojrmtH2ryG75dUpi.png">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/icofont.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/icofont.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/metisMenu.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/toastr.min.css">
    <script src="{{asset('frontend')}}/js/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="loading">
        <img src="{{asset('frontend')}}/img/lg.curve-bars-loading-indicator.gif" alt="">
    </div>
    <!--strat header top area-->
    @include('layout.frontend.partials.header_top')
    <!--satrt logo container-->
    @include('layout.frontend.partials.banar_top_area')
    <!-- start main menu area -->
    @include('layout.frontend.partials.main_menu')
    <!-- start mobile menu start here -->
    @include('layout.frontend.partials.mobile_menu_top')
    <!-- start mobile menu menu -->
    @include('layout.frontend.partials.mobile_menu_menu')


    @yield('content')


    <!-- start footert top -->
    @include('layout.frontend.partials.footer')
    <!-- satrt footer copyright -->
    @include('layout.frontend.partials.copyright')
    <form id="logout-form" class="d-none" action="http://www.shodeshishilpo.com/customer/logout" method="POST">
        <input type="hidden" name="_token" value="2xjr41LfNWuzMFsHaw2xXqXO5VkqjVun2kgVLQq3">    </form>
    <!-- ========== this is main js link ========== -->
    <script src="{{asset('frontend')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('frontend')}}/js/toastr.min.js"></script>
    <script src="{{asset('frontend')}}/js/popper.min.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend')}}/js/metisMenu.min.js"></script>
    <script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('frontend')}}/js/owl.carousel.active.js"></script>
    <script>
        $(function () {
            $('.banar_slider_active').owlCarousel({
                loop: true,
                margin: 0,
                navText: [
                    "<i class='icofont-long-arrow-left'></i>",
                    "<i class='icofont-long-arrow-right'></i>"
                ],
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                mouseDrag: false,
                nav:  true ,
                autoplay:  true ,
                autoplayTimeout:  6000 ,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });
    </script>

    @stack('scripts');

    <script src="{{asset('frontend')}}/js/custom.js"></script>
    <script src="{{asset('frontend')}}/js/ajax.js"></script>
</body>


<!-- Mirrored from www.shodeshishilpo.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jun 2020 01:07:41 GMT -->
</html>
