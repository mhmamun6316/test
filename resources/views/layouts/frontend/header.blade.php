<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('frontend/assets/logo.svg') }}" alt="Radiant Design" height="50">
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item" href="{{ route('about') }}#overview">Overview</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('about') }}#services">Services</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('about') }}#values">Values & Sourcing Philosophy</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('sustainability') ? 'active' : '' }}" href="{{ route('sustainability') }}">Sustainability</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('ethical-sourcing') ? 'active' : '' }}" href="{{ route('ethical-sourcing') }}">Ethical Sourcing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('manufacturing-excellence') ? 'active' : '' }}" href="{{ route('manufacturing-excellence') }}">Manufacturing Excellence</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('category') ? 'active' : '' }}" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                        @php
                            $navCategories = \App\Models\ProductCategory::where('status', 1)->get();
                        @endphp
                        @forelse($navCategories as $index => $navCategory)
                            <li><a class="dropdown-item" href="{{ route('category', Str::slug($navCategory->name)) }}">{{ $navCategory->name }}</a></li>
                            @if(!$loop->last)
                                <li><hr class="dropdown-divider"></li>
                            @endif
                        @empty
                            <li><a class="dropdown-item text-muted" href="#">No categories available</a></li>
                        @endforelse
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
