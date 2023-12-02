<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <title>VPNve</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Silicon - Multipurpose Technology Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Theme switcher (color modes) -->
    <script src="assets/js/theme-switcher.js"></script>

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

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}">

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="{{asset('assets/css/theme.min.css')}}">
    @livewireStyles
    <!-- Page loading styles -->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }
        [data-bs-theme="dark"] .page-loading {
            background-color: #0b0f19;
        }
        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }
        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }
        .page-loading.active > .page-loading-inner {
            opacity: 1;
        }
        .page-loading-inner > span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #9397ad;
        }
        [data-bs-theme="dark"] .page-loading-inner > span {
            color: #fff;
            opacity: .6;
        }
        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #b4b7c9;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }
        [data-bs-theme="dark"] .page-spinner {
            border-color: rgba(255,255,255,.4);
            border-right-color: transparent;
        }
        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>

    <!-- Page custom styles -->
    <style>

        /* Spin animation */
        @-webkit-keyframes hero-spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes hero-spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        .hero-animation-spin {
            -webkit-animation: hero-spin 35s linear infinite;
            animation: hero-spin 35s linear infinite;
        }

        /* Fade animation */
        @-webkit-keyframes hero-fade {
            0%, 100% { opacity: 0 }
            50% { opacity: 1 }
        }
        @keyframes hero-fade {
            0%, 100% { opacity: 0 }
            50% { opacity: 1 }
        }
        .hero-animation-fade {
            -webkit-animation: hero-fade 4s ease-in infinite;
            animation: hero-fade 4s ease-in infinite;
        }
        .hero-animation-delay-1,
        .hero-animation-delay-2,
        .hero-animation-delay-3 {
            opacity: 0;
        }
        .hero-animation-delay-1 { animation-delay: .75s; }
        .hero-animation-delay-2 { animation-delay: 1.5s; }
        .hero-animation-delay-3 { animation-delay: 2s; }
    </style>
</head>


<!-- Body -->
<body data-bs-theme="dark">

<main class="page-wrapper">

    @extends('components.Header')

    <section class="container py-5 mt-5 mt-md-4 mb-md-3 mb-lg-4 mb-xl-5">
        <div class="row align-items-center align-items-lg-stretch mb-2 mb-sm-3">

            <!-- Parallax gfx -->
            <div class="col-xl-7 col-md-6 d-flex justify-content-center justify-content-md-end overflow-hidden order-md-2 mt-n5 mt-sm-n4 mt-md-0">
                <div class="position-relative mt-5" style="max-width: 660px;">
                    <div class="parallax zindex-2" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                        <div class="parallax-layer zindex-2 mb-n3" data-depth="0.1" style="transform: translate3d(-1.4px, 0.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                            <img src="https://preview.keenthemes.com/html/metronic/docs/assets/media/illustrations/unitedpalms-1/13.png" alt="Device">
                        </div>

                    </div>
                </div>
            </div>

            <!-- Text -->
            <div class="col-xl-5 col-md-6 d-flex flex-column order-md-1">
                <div class="text-center text-md-start pt-4 pt-sm-5 pt-xl-0 mt-2 mt-sm-0 mt-lg-auto">
                    <h1 class="display-1 mb-4">Download <span class="text-gradient-primary">Outline</span><br> Client app</h1>
                    <p class="fs-lg mb-0 d-md-none d-xl-block">Get the Outline Client App for desktop and mobile. Connect using your unique access key.</p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start pt-2 mt-4 mt-md-5">
                        <button type="button" onclick="location.href='https://play.google.com/store/apps/details?id=org.outline.android.client'" class="btn btn-secondary btn-lg me-sm-3 me-lg-4 text-uppercase">
                            <i class='bx bxl-android fs-3 me-2'></i>

                        </button>
                        <button type="button" onclick="location.href='https://s3.amazonaws.com/outline-releases/client/windows/stable/Outline-Client.exe'" class="btn btn-secondary btn-lg me-sm-3 me-lg-4  text-uppercase">
                            <i class='bx bxl-windows fs-3 me-2'></i>
                            Windows
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@livewireScripts
<script src="{{asset('assets/vendor/jarallax/dist/jarallax.min.js')}}" data-navigate-track></script>
<script src="{{asset('assets/vendor/@lottiefiles/lottie-player/dist/lottie-player.js')}}" data-navigate-track></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}" data-navigate-track></script>
<script src="{{asset('assets/vendor/lightgallery/lightgallery.min.js')}}" data-navigate-track></script>
<script src="{{asset('assets/vendor/lightgallery/plugins/video/lg-video.min.js')}}" data-navigate-track></script>
<script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}" data-navigate-track></script>
<script src="{{asset('assets/vendor/shufflejs/dist/shuffle.min.js')}}" data-navigate-track></script>


<!-- Main Theme Script -->
<script src="{{asset('assets/js/theme.min.js')}}" data-navigate-track></script>
</body>
</html>

{{--<div class="col py-1 my-2 my-sm-3">
    <div href="services-single-v1.html" class="card  h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
        <div class="card-body pt-3">
            <div class="d-inline-block rounded-3 position-absolute top-0 translate-middle-y">
                <img src="https://flagicons.lipis.dev/flags/4x3/de.svg" class="d-block m-1 rounded-1" width="70" alt="Icon">
            </div>
            <h2 class="h4 d-inline-flex align-items-center">
                <span class="me-3">Canada</span><span class="text-muted">#1</span>
            </h2>

        </div>

        <div class="card-footer">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <button type="button" class="btn btn-secondary text-uppercase">Generate key</button>
                </div>
                <div>
                    <span class="badge bg-faded-success text-success">ONLINE</span>
                </div>
            </div>
        </div>

    </div>
</div>--}}
