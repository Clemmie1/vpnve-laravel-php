<html lang="en" data-bs-theme="dark"><head>
    <meta charset="utf-8">
    <title>VPNve - API</title>
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

<body>

<main class="page-wrapper">


    @include('Dashboard.components.Header')

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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<x-livewire-alert::scripts />
<script src="{{asset('assets/vendor/jarallax/dist/jarallax.min.js')}}"></script>
<script src="{{asset('assets/vendor/@lottiefiles/lottie-player/dist/lottie-player.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/lightgallery/lightgallery.min.js')}}"></script>
<script src="{{asset('assets/vendor/lightgallery/plugins/video/lg-video.min.js')}}"></script>
<script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/shufflejs/dist/shuffle.min.js')}}"></script>
<script src="{{asset('assets/js/theme.min.js')}}"></script>
<script>
    function copyCode() {
        var keyElement = document.getElementById('key');
        var tempTextarea = document.createElement('textarea');
        tempTextarea.value = keyElement.textContent;
        document.body.appendChild(tempTextarea);
        tempTextarea.select();
        tempTextarea.setSelectionRange(0, 99999);
        document.execCommand('copy');
        document.body.removeChild(tempTextarea);
        alert('Key copied!');
    }
</script>

</body>
</html>
