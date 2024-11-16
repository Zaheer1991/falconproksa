<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
        $tabTitle = config('titles.' . Route::currentRouteName(), 'Innovatek - Interior HTML Template') .' | '. env('APP_NAME');
    @endphp
    <title>{{ $tabTitle }}</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
    <!-- All min css -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- Splitting css -->
    <link rel="stylesheet" href="{{asset('assets/css/splitting.css')}}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <x-preloader />
    <x-mouse-cursor />
    <x-header />
    <x-sidebar />
    
    {{ $slot }}

    <x-back-top/>
    {{-- <x-footer/> --}}


    <!-- Jquery 3.7.0 Min Js -->
    <script data-cfasync="false"
        src="{{asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap min Js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Mean menu Js -->
    <script src="{{asset('assets/js/meanmenu.js')}}"></script>
    <!-- Swiper bundle min Js -->
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <!-- Counterup min Js -->
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Wow min Js -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- Magnific popup min Js -->
    <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
    <!-- Nice select min Js -->
    <script src="{{asset('assets/js/nice-select.min.js')}}"></script>
    <!-- Isotope pkgd min Js -->
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- Parallax Js -->
    <script src="{{asset('assets/js/parallax.js')}}"></script>
    <!-- Splitting Js -->
    <script src="{{asset('assets/js/splitting.js')}}"></script>
    <!-- Waypoints Js -->
    <script src="{{asset('assets/js/jquery.waypoints.js')}}"></script>
    <!-- Gsap -->
    <script src="{{asset('assets/js/gsap/gsap.min.js')}}"></script>
    <script src="{{asset('assets/js/gsap/ScrollTrigger.min.js')}}"></script>
    <script src="{{asset('assets/js/gsap/ScrollSmoother.min.js')}}"></script>
    <!-- Script Js -->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <!-- form submit -->
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.form.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
@stack('script')