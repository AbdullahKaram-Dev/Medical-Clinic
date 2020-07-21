<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front-design/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('front-design/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-design/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-design/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('front-design/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('front-design/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('front-design/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-design/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('front-design/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front-design/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-design/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front-design/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front-design/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('front-design/css/style.css')}}">
</head>
<body>
@yield('content')
@include('front.layout.footer')
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="{{asset('front-design/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('front-design/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('front-design/js/popper.min.js')}}"></script>
<script src="{{asset('front-design/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('front-design/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('front-design/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front-design/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('front-design/js/wow.min.js')}}"></script>
<script src="{{asset('front-design/js/animated.headline.js')}}"></script>
<script src="{{asset('front-design/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('front-design/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('front-design/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('front-design/js/jquery.sticky.js')}}"></script>

<!-- counter , waypoint -->
<script src="{{asset('front-design/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('front-design/js/waypoints.min.js')}}"></script>
<script src="{{asset('front-design/js/jquery.countdown.min.js')}}"></script>
<!-- contact js -->
<script src="{{asset('front-design/js/contact.js')}}"></script>
<script src="{{asset('front-design/js/jquery.form.js')}}"></script>
<script src="{{asset('front-design/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('front-design/js/mail-script.js')}}"></script>
<script src="{{asset('front-design/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('front-design/js/plugins.js')}}"></script>
<script src="{{asset('front-design/js/main.js')}}"></script>

</body>
</html>
