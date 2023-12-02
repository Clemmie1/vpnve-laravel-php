<header class="header navbar navbar-expand-lg bg-light border-bottom border-light shadow-sm fixed-top">
    <div class="container px-3">
        <a style="cursor: pointer;" onclick="location.href='{{route('home')}}'" class="navbar-brand pe-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="48" viewBox="0 0 46 48" fill="none">
                <path d="M22.7716 13.3942L31.9316 18.3022V28.1181L28.8609 29.7864L19.7009 15.0382L22.7716 13.3942Z" fill="#AD52F3"/>
                <path d="M13.6115 28.1181V18.3022L16.6822 16.6581L25.8683 31.3821L22.7716 33.0503L13.6115 28.1181Z" fill="#825EF5"/>
                <path d="M20.976 10.4688L9.9943 16.368V28.1182L0.235718 33.3646V11.1215L20.976 -4.67422e-06V10.4688Z" fill="#6D63F2"/>
                <path d="M11.7899 31.0194L22.7715 36.9187L33.7532 31.0194L43.5378 36.2659L22.7715 47.4116L2.00525 36.2659L11.7899 31.0194Z" fill="#6D63F2"/>
                <path d="M35.5488 16.368L24.5671 10.4688V-4.67422e-06L45.3334 11.1215V33.3646L35.5488 28.1182V16.368Z" fill="#6D63F2"/>
            </svg>
        </a>
        <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase">
                    <li class="nav-item" style="cursor: pointer;">
                        <a onclick="location.href='{{route('page.server-list')}}'" class="nav-link">Server list</a>
                    </li>
                    <li class="nav-item" style="cursor: pointer;">
                        <a href="docs/getting-started.html" class="nav-link">API docs</a>
                    </li>
                    <li class="nav-item" style="cursor: pointer;">
                        <a onclick="location.href='{{route('page.download')}}'" class="nav-link">Download</a>
                    </li>
                </ul>
            </div>
            <div class="offcanvas-header border-top">
                <button onclick="location.href='{{route('auth.logout')}}'" class="btn btn-primary w-100 text-uppercase">
                    Sign Out
                </button>
            </div>
        </div>

        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button onclick="location.href='{{route('auth.logout')}}'" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex text-uppercase">
            Sign Out
        </button>
    </div>
</header>
