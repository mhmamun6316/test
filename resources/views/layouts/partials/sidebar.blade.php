<div class="sidebar" id="sidebar">
    <div class="text-center mb-4">
        <h4 class="text-white mb-0" id="sidebar-title">Radiant Sourcing</h4>
    </div>
    <ul class="nav flex-column sidebar" id="sidebar">
        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
            <i class="bi bi-speedometer2"></i>
            <span>{{ __('common.dashboard') }}</span>
        </a>
        @can('users.view')
        <a class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
            <i class="bi bi-people"></i>
            <span>{{ __('common.users') }}</span>
        </a>
        @endcan
        @can('roles.view')
        <a class="nav-link {{ request()->routeIs('admin.roles.*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}">
            <i class="bi bi-shield-lock"></i>
            <span>{{ __('common.roles') }}</span>
        </a>
        @endcan

        @if(auth()->user()->can('about_sections.view') || auth()->user()->can('services.view'))
            <li class="nav-item">
                <a class="nav-link d-flex justify-content-between align-items-center
           {{ (request()->routeIs('admin.about-sections.*') || request()->routeIs('admin.services.*')) ? '' : 'collapsed' }}"
                   href="#"
                   data-bs-toggle="collapse"
                   data-bs-target="#collapseAbout"
                   aria-expanded="false">

                    <span><i class="bi bi-info-circle me-2"></i>About Us</span>
                    <i class="bi bi-chevron-down"></i>
                </a>

                <div id="collapseAbout"
                     class="collapse {{ (request()->routeIs('admin.about-sections.*') || request()->routeIs('admin.services.*')) ? 'show' : '' }}">

                    <ul class="nav flex-column ms-4">
                        @can('about_sections.view')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.about-sections.*') ? 'active' : '' }}"
                                   href="{{ route('admin.about-sections.index') }}">
                                    Page Sections
                                </a>
                            </li>
                        @endcan

                        @can('services.view')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}"
                                   href="{{ route('admin.services.index') }}">
                                    Services (Flip Cards)
                                </a>
                            </li>
                        @endcan
                    </ul>

                </div>
            </li>
        @endif

        @can('product_categories.view')
        <a class="nav-link {{ request()->routeIs('admin.product-categories.*') ? 'active' : '' }}" href="{{ route('admin.product-categories.index') }}">
            <i class="bi bi-tags"></i>
            <span>{{ __('common.product_categories') }}</span>
        </a>
        @endcan
        @can('products.view')
        <a class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="bi bi-box-seam"></i>
            <span>{{ __('common.products') }}</span>
        </a>
        @endcan
    </ul>
</div>
