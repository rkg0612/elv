<header class="navbar navbar-expand-lg navbar-dark bd-navbar sticky-top p-0">
    <nav class="container-fluid bd-gutter bg-dark flex-wrap flex-lg-nowrap" aria-label="Main navigation">
        <div class="d-lg-none" style="width: 1.5rem;"></div>

        <a class="navbar-brand p-0 me-0 me-lg-2" href="/" aria-label="Bootstrap">
            <img class="img-fluid" src="{{ asset('images/logo/ELV Official Logo White.png') }}" width="200px" alt="">
        </a>

        <div class="d-flex">
            <button class="navbar-toggler d-flex d-lg-none order-3 p-2" style="border: 0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
        </div>

        <div class="offcanvas-lg offcanvas-end flex-grow-1 bg-dark" tabindex="-1" id="bdNavbar"
            aria-labelledby="bdNavbarOffcanvasLabel" data-bs-scroll="true">
            <div class="offcanvas-header px-4 pb-0">
                <a href="{{ route('landing') }}"><h5 class="offcanvas-title text-white" id="bdNavbarOffcanvasLabel">ELV Agency</h5></a>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"
                    data-bs-target="#bdNavbar"></button>
            </div>

            <div class="offcanvas-body p-4 pt-0 p-lg-0">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav ms-md-auto">
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2 {{ Request::is('team') ? 'active' : '' }}"
                            href="{{ route('team') }}">Team</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2 {{ Request::is('*services') ? 'active' : '' }}"
                            href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2 {{ Request::is('*publications') ? 'active' : '' }}"
                            href="{{ route('publications') }}">Publications</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2 {{ Request::is('*faq') ? 'active' : '' }}"
                            href="{{ route('faq') }}">FAQs</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2 {{ Request::is('*insights') ? 'active' : '' }}"
                            href="{{ route('insights') }}">Insights</a>
                    </li>
                    <li class="nav-item col-6 col-lg-auto">
                        <a class="nav-link py-2 px-0 px-lg-2 {{ Request::is('*apply') ? 'active' : '' }}"
                            href="{{ route('apply') }}">Apply</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>