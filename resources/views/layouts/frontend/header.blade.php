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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#about">About</a>
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
                    <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                        <li><a class="dropdown-item" href="{{ route('category', 'knit') }}">Knit</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('category', 'women') }}">Women</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('category', 'nightwear-loungewear') }}">Nightwear and Loungewear</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('category', 'denim') }}">Denim</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('category', 'shirts') }}">Shirts</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('category', 'pants') }}">Pants</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('category', 't-shirts') }}">T-Shirts</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('category', 'dresses') }}">Dresses</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('category', 'jackets') }}">Jackets</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('category', 'activewear') }}">Activewear</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('category', 'accessories') }}">Accessories</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('category', 'footwear') }}">Footwear</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
