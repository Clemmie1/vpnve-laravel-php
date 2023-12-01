<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>VPNve - Create account</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Silicon - Multipurpose Technology Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Theme switcher (color modes) -->
    <script src="{{asset('assets/js/theme-switcher.js')}}"></script>


    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" media="screen" href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('assets/css/theme.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('assets/css/spinkit.css')}}">
    @livewireStyles
</head>
<body data-bs-theme="dark">
<main class="page-wrapper" >

    <section class="position-relative h-100 pt-5 pb-4">

        <!-- Sign in form -->
        <div class="container d-flex flex-wrap justify-content-center justify-content-xl-center h-100 pt-5">
            <div class="w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
                <h1 class="text-center text-xl-start">Create Account</h1>
                <p class="text-center text-xl-start pb-3 mb-3">Already have an account? <a href="{{route('auth.login')}}" wire:navigate  style="text-decoration: none;">Sign in here.</a></p>
                @livewire('auth.register-form')
            </div>
            <div class="w-100 align-self-center justify-content-center">
                <p class="nav d-block fs-xs text-center text-xl-start pb-2 mb-0">

                </p>
            </div>
        </div>

    </section>
</main>

@livewireScripts

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<x-livewire-alert::scripts />

<script src="{{asset('assets/vendor/jarallax/dist/jarallax.min.js')}}"></script>
<script src="{{asset('assets/vendor/@lottiefiles/lottie-player/dist/lottie-player.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/lightgallery/lightgallery.min.js')}}"></script>
<script src="{{asset('assets/vendor/lightgallery/plugins/video/lg-video.min.js')}}"></script>
<script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/shufflejs/dist/shuffle.min.js')}}"></script>

</body>
</html>
