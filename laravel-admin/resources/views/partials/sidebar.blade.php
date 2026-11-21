<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
        <div class="sidebar-brand-text mx-3">Laravel Admin</div>
    </a>
    <hr class="sidebar-divider my-0">

    @php
        $menu = [
            ['/', 'Home', 'fa-home'],
            ['product', 'Product', 'fa-box'],
            ['service', 'Service', 'fa-cogs'],
            ['contact', 'Contact', 'fa-envelope'],
            ['about', 'About', 'fa-info-circle'],
            ['admin', 'Admin', 'fa-user-shield'],
        ];
    @endphp

    @foreach ($menu as [$url, $nama, $ikon])
    <li class="nav-item {{ request()->is($url) ? 'active' : '' }}">
        <a class="nav-link" href="{{ url($url) }}">
            <i class="fas fa-fw {{ $ikon }}"></i>
            <span>{{ $nama }}</span>
        </a>
    </li>
    @endforeach

    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>