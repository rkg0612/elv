<header class="p-0 text-bg-dark site-header d-none d-md-block">
    <div class="container-fluid px-5">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <a href="{{ route('landing') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img class="img-fluid" src="{{ asset('images/logo/ELV Official Logo White.png') }}" width="200px" alt="">
            </a>
            <div class="text-end">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('team') }}" class="nav-link px-2 text-white">Team</a></li>
                    <li><a href="{{ route('services') }}" class="nav-link px-2 text-white">Services</a></li>
                    <li><a href="{{ route('publications') }}" class="nav-link px-2 text-white">Publications</a></li>
                    <li><a href="{{ route('faq') }}" class="nav-link px-2 text-white">FAQ's</a></li>
                    <li><a href="{{ route('insights') }}" class="nav-link px-2 text-white">Insights</a></li>
                    <li><a href="{{ route('apply') }}" class="nav-link px-2 text-white">Apply</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>