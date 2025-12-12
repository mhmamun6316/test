<div class="sidebar" id="sidebar">
    <div class="text-center mb-4">
        <h4 class="text-white mb-0" id="sidebar-title">Admin Panel</h4>
    </div>
    <nav class="nav flex-column">
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
    </nav>
</div>
