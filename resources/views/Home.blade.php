
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <title>VPNve</title>

    <meta name="description" content="Free Protect yourself with a VPN">
    <meta name="keywords" content="vpn, free, free vpn, network, protect, free, VPN, впн">
    <meta name="author" content="VVpro">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('assets/js/theme-switcher.js')}}"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/favicon/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="dark">
    <link rel="stylesheet" media="screen" href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('assets/css/theme.min.css')}}">

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
<body>

<main class="page-wrapper">

    @extends('components.Header')

    <section class="position-relative d-flex align-items-center min-vh-100 py-5 bg-dark overflow-hidden">
        <span class="position-absolute top-0 start-0 d-dark-mode-block d-none w-100 h-100 bg-secondary opacity-75"></span>
        <div class="container position-relative mt-5 mb-lg-5 mb-md-4 mb-3 pt-3 pb-xl-3" data-bs-theme="dark">
            <div class="row gy-5">
                <div class="col-xl-5 col-lg-6">
                    <div class="position-relative zindex-5 text-lg-start text-center">
                        <h1 class="display-1 mb-4 pb-lg-3 pb-md-2">Protect yourself with a <span class="text-gradient-primary">VPN</span></h1>
                        <p class="mb-4 pb-lg-3 pb-md-2">
                            <span class="me-2 text-light">Is maximum online anonymity and access to restricted resources important to you?</span>
                        </p>
                        <button onclick="location.href='{{route('auth.login')}}'" class="btn btn-lg btn-primary text-uppercase w-50">Get a free VPN</button>
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1">
                    <div class="position-relative ms-xl-0 ms-lg-4">
                        <div class="position-absolute top-50 start-50 translate-middle ratio ratio-1x1" style="width: 125%; max-width: 49.75rem;">
                            <div class="p-md-0 p-5">
                                <img src="assets/img/landing/software-agency-3/hero-bg.png" alt="Shape" class="hero-animation-spin p-md-0 p-5">
                            </div>
                        </div>
                        <div class="position-relative row row-cols-sm-2 row-cols-1 gx-xl-4 gx-lg-3 gx-md-4 gx-3">
                            <div class="col">
                                <div class="d-sm-grid d-flex gap-xl-4 gap-lg-3 gap-md-4 gap-sm-3 gap-2">
                                    <div class="d-flex align-items-center justify-content-center bg-secondary rounded-3" style="min-height: 176px; backdrop-filter: blur(6px);">
                                        <div class="p-xl-4 p-sm-3 p-2 fs-xl fw-semibold text-center">
                                            <span class="hero-animation-fade text-white">Secure Access to the Internet</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center bg-secondary rounded-3" style="min-height: 176px; backdrop-filter: blur(6px);">
                                        <div class="p-xl-4 p-sm-3 p-2 fs-xl fw-semibold text-center">
                                            <span class="hero-animation-fade hero-animation-delay-2 text-white">Reliable Infrastructure</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-sm-5 mt-2 pt-sm-5">
                                <div class="d-sm-grid d-flex gap-xl-4 gap-lg-3 gap-md-4 gap-sm-3 gap-2">
                                    <div class="d-flex align-items-center justify-content-center bg-secondary rounded-3" style="min-height: 176px; backdrop-filter: blur(6px);">
                                        <div class="p-xl-4 p-sm-3 p-2 fs-xl fw-semibold text-center">
                                            <span class="hero-animation-fade hero-animation-delay-1 text-white">High-speed servers</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center bg-secondary rounded-3" style="min-height: 176px; backdrop-filter: blur(6px);">
                                        <div class="p-xl-4 p-sm-3 p-2 fs-xl fw-semibold text-center">
                                            <span class="hero-animation-fade hero-animation-delay-3 text-white">Based on Outline</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="{{asset('assets/vendor/jarallax/dist/jarallax.min.js')}}"></script>
<script src="{{asset('assets/vendor/@lottiefiles/lottie-player/dist/lottie-player.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/lightgallery/lightgallery.min.js')}}"></script>
<script src="{{asset('assets/vendor/lightgallery/plugins/video/lg-video.min.js')}}"></script>
<script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/shufflejs/dist/shuffle.min.js')}}"></script>
<script src="{{asset('assets/js/theme.min.js')}}"></script>



</body>
</html>
