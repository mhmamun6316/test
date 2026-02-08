<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('frontend/assets/logo.svg') }}" alt="Radiant Design" height="50">
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">Home</a>
                </li>

                <!-- About Dropdown -->
                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('about') ? 'active' : '' }}"
                       href="{{ route('about') }}" id="aboutDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
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

                <!-- Sustainability -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('sustainability') ? 'active' : '' }}"
                       href="{{ route('sustainability') }}">Sustainability</a>
                </li>

                <!-- Ethical Sourcing -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('ethical-sourcing') ? 'active' : '' }}"
                       href="{{ route('ethical-sourcing') }}">Ethical Sourcing</a>
                </li>

                <!-- Manufacturing Excellence -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('manufacturing-excellence') ? 'active' : '' }}"
                       href="{{ route('manufacturing-excellence') }}">Manufacturing Excellence</a>
                </li>

                <!-- Products Dropdown -->
                <li class="nav-item dropdown hover-dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('category') ? 'active' : '' }}"
                       href="#" id="productsDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                        @php
                            $navCategories = \App\Models\ProductCategory::where('status', 1)->get();
                        @endphp

                        @forelse($navCategories as $index => $navCategory)
                            <li>
                                <a class="dropdown-item"
                                   href="{{ route('category', Str::slug($navCategory->name)) }}">
                                    {{ $navCategory->name }}
                                </a>
                            </li>

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

<!-- Hover Dropdown Script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (window.innerWidth > 992) {
            let hoverTimeout;
            
            // Function to close all dropdowns
            function closeAllDropdowns() {
                document.querySelectorAll('.hover-dropdown .dropdown-toggle').forEach(function (toggle) {
                    const instance = bootstrap.Dropdown.getInstance(toggle);
                    if (instance) {
                        try {
                            instance.hide();
                        } catch (e) {
                            // Dropdown might already be hidden
                        }
                    }
                });
            }

            document.querySelectorAll('.hover-dropdown').forEach(function (dropdown) {
                const toggle = dropdown.querySelector('.dropdown-toggle');
                const menu = dropdown.querySelector('.dropdown-menu');
                
                // Mouse enter - open this dropdown and close others
                dropdown.addEventListener('mouseenter', function () {
                    // Clear any pending timeout
                    if (hoverTimeout) {
                        clearTimeout(hoverTimeout);
                        hoverTimeout = null;
                    }
                    
                    // Close all other dropdowns first
                    closeAllDropdowns();
                    
                    // Small delay to ensure others are closed
                    setTimeout(function() {
                        const instance = bootstrap.Dropdown.getOrCreateInstance(toggle);
                        instance.show();
                    }, 10);
                });

                // Mouse leave - close this dropdown
                dropdown.addEventListener('mouseleave', function (e) {
                    const relatedTarget = e.relatedTarget;
                    
                    // Check if mouse is moving to another dropdown or its menu
                    if (relatedTarget && (
                        relatedTarget.closest('.hover-dropdown') ||
                        relatedTarget.closest('.dropdown-menu')
                    )) {
                        // Mouse is moving to another dropdown, close this one immediately
                        const instance = bootstrap.Dropdown.getInstance(toggle);
                        if (instance) {
                            try {
                                instance.hide();
                            } catch (e) {
                                // Ignore errors
                            }
                        }
                        return;
                    }
                    
                    // Small delay before closing to allow for menu interaction
                    hoverTimeout = setTimeout(function() {
                        const instance = bootstrap.Dropdown.getInstance(toggle);
                        if (instance) {
                            try {
                                instance.hide();
                            } catch (e) {
                                // Ignore errors
                            }
                        }
                    }, 100);
                });

                // Keep dropdown open when hovering over menu
                if (menu) {
                    menu.addEventListener('mouseenter', function () {
                        if (hoverTimeout) {
                            clearTimeout(hoverTimeout);
                            hoverTimeout = null;
                        }
                    });
                    
                    menu.addEventListener('mouseleave', function (e) {
                        const relatedTarget = e.relatedTarget;
                        if (relatedTarget && relatedTarget.closest('.hover-dropdown')) {
                            return;
                        }
                        const instance = bootstrap.Dropdown.getInstance(toggle);
                        if (instance) {
                            try {
                                instance.hide();
                            } catch (e) {
                                // Ignore errors
                            }
                        }
                    });
                }
            });
        }
    });
</script>

<!-- Optional CSS for smoother hover -->
<style>
    @media (min-width: 992px) {
        .hover-dropdown .dropdown-menu {
            margin-top: 0;
        }
    }
</style>
