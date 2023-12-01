<header class="header navbar navbar-expand-lg navbar-dark position-absolute navbar-sticky">
    <div class="container px-3">
        <a style="cursor: pointer;" onclick="location.href='{{route('home')}}'" class="navbar-brand pe-3">
            <img src="assets/img/logo.svg" width="47" alt="Silicon">
            Silicon
        </a>
        <div id="navbarNav" class="offcanvas offcanvas-end bg-dark">
            <div class="offcanvas-header border-bottom border-light">
                <h5 class="offcanvas-title text-white">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase">
                    <li class="nav-item" style="cursor: pointer;">
                        <a onclick="location.href='{{route('page.server-list')}}'" class="nav-link">Server list</a>
                    </li>
                    <li class="nav-item">
                        <a href="docs/getting-started.html" class="nav-link">Reseller program</a>
                    </li>
                    <li class="nav-item">
                        <a href="docs/getting-started.html" class="nav-link">API docs</a>
                    </li>
                    <li class="nav-item">
                        <a href="docs/getting-started.html" class="nav-link">Download</a>
                    </li>
                </ul>
            </div>
            <div class="offcanvas-header border-top border-light">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="" class="btn btn-primary w-100">
                        My
                    </a>
                @else
                    <a href="" class="btn btn-primary w-100 text-uppercase">
                        Sign in
                    </a>
                @endif
            </div>
        </div>
        <div class="pe-lg-1 ms-auto me-4" data-bs-theme="dark">
            <div class="form-check form-switch mode-switch" data-bs-toggle="mode">
                <input type="checkbox" class="form-check-input" id="theme-mode">
            </div>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if(\Illuminate\Support\Facades\Auth::check())
            <a href="" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex text-uppercase">
                MY
            </a>
        @else
            <a onclick="location.href='{{route('auth.login')}}'"  class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex text-uppercase">
                Sign in
            </a>
        @endif

    </div>
</header>
