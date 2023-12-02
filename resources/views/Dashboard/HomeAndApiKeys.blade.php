<html lang="en" data-bs-theme="dark"><head>
    <meta charset="utf-8">
    <title>VPNve - API</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Silicon - Multipurpose Technology Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, creative agency, mobile app showcase, saas, fintech, finance, online courses, software, medical, conference landing, services, e-commerce, shopping cart, multipurpose, shop, ui kit, marketing, seo, landing, blog, portfolio, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Theme switcher (color modes) -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-TXTBFKF5EW&amp;l=dataLayer&amp;cx=c"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WKV3GT5"></script><script src="assets/js/theme-switcher.js"></script>

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

    <!-- Page loading scripts -->
    <script>
        (function () {
            window.onload = function () {
                const preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 1000);
            };
        })();
    </script>


    <link rel="stylesheet" type="text/css" href="chrome-extension://onipdjghdegolmdkbcflfilmplibmbdj/css/fonts.css"><link rel="stylesheet" href=""></head>

<body>

<main class="page-wrapper">


    @extends('Dashboard.components.Header')

    <section class="container pt-5">
        <div class="row">


            <!-- Sidebar (User info + Account menu) -->
            <aside class="col-lg-3 col-md-4 pb-5 mt-n5">
                <div class="position-sticky top-0">
                    <div class="text-center pt-5">
                        <div class="d-table position-relative mx-auto mt-2 mt-lg-4 pt-5 mb-3">
                            <img src="https://ui-avatars.com/api/?background=6366f1&color=ffffff&name={{ Auth::user()->username }}" class="d-block rounded-circle" width="110" alt="John Doe">
                        </div>
                        <h2 class="h5 mb-3">{{ \Illuminate\Support\Facades\Auth::user()->username }}</h2>
                        <button type="button" class="btn btn-secondary w-100 d-md-none mt-n2 mb-3 collapsed" data-bs-toggle="collapse" data-bs-target="#account-menu" aria-expanded="false">
                            <i class="bx bxs-user-detail fs-xl me-2"></i>
                            Account menu
                            <i class="bx bx-chevron-down fs-lg ms-1"></i>
                        </button>
                        <div id="account-menu" class="list-group list-group-flush d-md-block collapse" style="">
                            <a style="cursor: pointer;" onclick="location.href='{{route('dashboard.home')}}'" class="list-group-item list-group-item-action d-flex align-items-center ">
                                <i class="bx bx-key fs-xl opacity-60 me-2"></i>
                                My keys
                            </a>
                            <a style="cursor: pointer;" onclick="location.href='{{route('dashboard.api')}}'" class="list-group-item list-group-item-action d-flex align-items-center active">
                                <i class="bx bx-code fs-xl opacity-60 me-2"></i>
                                API
                            </a>
                            <a style="cursor: pointer;" onclick="location.href='{{route('auth.logout')}}'" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="bx bx-log-out fs-xl opacity-60 me-2"></i>
                                Sign Out
                            </a>
                        </div>
                    </div>
                </div>
            </aside>


            <div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
                <div class="ps-md-3 ps-lg-0 mt-md-2 pt-md-4 pb-md-2">


                    @livewire('dashboard.load-api-keys', ['lazy'=>true])

                </div>
            </div>

        </div>
    </section>
</main>

@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<x-livewire-alert::scripts />
<script src="{{asset('assets/vendor/cleave.js/dist/cleave.min.js')}}"></script>

<!-- Main Theme Script -->
<script src="{{asset('assets/js/theme.min.js')}}"></script>


</body>
</html>
