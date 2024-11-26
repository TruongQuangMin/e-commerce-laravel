<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">
        <div class="sidebar-brand-icon">
            <img style="width:125px;" src="{{ asset('frontend/images/main-logo.png') }}" class="logo">
        </div>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-chart-line"></i>
            <span>{{ __('Dashboard') }}</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        {{ __('Items') }}
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('category.index') }}">
            <i class="fas fa-tags"></i>
            <span>{{ __('Category') }}</span>
        </a>
    </li>
    {{-- Products --}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('product.index') }}">
            <i class="fas fa-tablet-alt"></i>
            <span>{{ __('Products') }}</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        {{ __('Shopping Cart') }}
    </div>
    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('order.index') }}">
            <i class="fas fa-truck"></i>
            <span>{{ __('Orders') }}</span>
        </a>
    </li>
    <!--Receipt -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('order.receipt.index') }}">
            <i class="fas fa-receipt"></i>
            <span>{{ __('Receipt') }}</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        {{ __('Posts') }}
    </div>

    <!-- Posts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('post.index') }}">
            <i class="fas fa-receipt"></i>
            <span>{{ __('Posts') }}</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Heading -->
    <div class="sidebar-heading">
        {{ __('Customer') }}
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-users"></i>
            <span>{{ __('Customer') }}</span>
        </a>
    </li>

    {{-- @include(backpack_view('inc.sidebar_content')) --}}

</ul>
@push('after_scripts')
    <script>
        $('.wgt-collapse').click(function() {
            var elementId = $(this).attr('data-target');
            if (elementId && typeof elementId != 'undefined') {
                $(elementId).collapse('toggle');
            }
        });
    </script>
@endpush


