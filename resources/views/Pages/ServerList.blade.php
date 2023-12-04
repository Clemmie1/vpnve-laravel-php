
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <title>VPNve Server List</title>
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
<body>

<main class="page-wrapper">

    @extends('components.Header')

    <section class="position-relative overflow-hidden">
        <div class="position-relative bg-dark zindex-4 pt-lg-3 pt-xl-5">

            <!-- Text -->
            <div class="container zindex-5 pt-5">
                <div class="row justify-content-center text-center pt-4 pb-sm-2 py-lg-5">
                    <div class="col-xl-8 col-lg-9 col-md-10 py-5">
                        <h1 class="display-1 text-light pt-sm-2 pb-1 pb-sm-3 mb-3">Server <span class="text-gradient-primary">VPN</span> List</h1>
                    </div>
                </div>
            </div>

            <!-- Bottom shape -->
            <div class="d-flex position-absolute top-100 start-0 w-100 overflow-hidden mt-n4 mt-sm-n1" style="color: var(--si-dark);">
                <div class="position-relative start-50 translate-middle-x flex-shrink-0" style="width: 3788px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="3788" height="144" viewBox="0 0 3788 144"><path fill="currentColor" d="M0,0h3788.7c-525,90.2-1181.7,143.9-1894.3,143.9S525,90.2,0,0z"></path></svg>
                </div>
            </div>
            <div class="d-none d-lg-block" style="height: 300px;"></div>
            <div class="d-none d-md-block d-lg-none" style="height: 150px;"></div>
        </div>
        <div class="position-relative zindex-5 mx-auto" style="max-width: 1250px; transform: translateZ(-100px);">
            <div class="d-none d-lg-block" style="margin-top: -300px;"></div>
            <div class="d-none d-md-block d-lg-none" style="margin-top: -150px;"></div>

            <!-- Parallax (3D Tilt) gfx -->

        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255,.05);"></div>
    </section>

    <section class="position-relative py-5">
        <div class="container position-relative zindex-5 pb-md-4 pt-md-2 pt-lg-3 pb-lg-5">
            @livewire('load-server-vpn-list', [
                'lazy' => true
            ])
        </div>
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255,.05);"></div>
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
