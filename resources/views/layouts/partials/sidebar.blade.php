<div class="sidebar" id="sidebar">
    <div class="text-center mb-4">
        <h4 class="text-white mb-0" id="sidebar-title">Admin Panel</h4>
    </div>
    <nav class="nav flex-column">
        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
            <i class="bi bi-speedometer2"></i>
            <span>{{ __('common.dashboard') }}</span>
        </a>
        <a class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}" href="{{ route('users.index') }}">
            <i class="bi bi-people"></i>
            <span>{{ __('common.users') }}</span>
        </a>
        <a class="nav-link {{ request()->routeIs('product-categories.*') ? 'active' : '' }}" href="{{ route('product-categories.index') }}">
            <i class="bi bi-tags"></i>
            <span>{{ __('common.product_categories') }}</span>
        </a>
        <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}" href="{{ route('products.index') }}">
            <i class="bi bi-box-seam"></i>
            <span>{{ __('common.products') }}</span>
        </a>
    </nav>
</div>

